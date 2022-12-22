<?php

namespace App\Http\Livewire\Admin\Permissions;

use App\Events\UserLog;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $search='';

    protected $paginationTheme = 'bootstrap';

    public function addPermissions() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255', 'unique:permissions'],
        ]);
        $permissions = Permission::create([
            'name'                      =>          $this->name,
        ]);

        $log_entry = $permissions->name . ' has been added';
        event(new UserLog($log_entry));
        return redirect('admin/permissions')->with('message', ' New permissions added');
    }


    public function editPermissions(int $permissionId) {
        $permission = Permission::find($permissionId);
        if($permission){
            $this->permissionId = $permission->id;
            $this->name = $permission->name;
        }else{
            return redirect()->to('admin/permissions');
        }
    }
    public function updatePermissions() {
        $this->validate([
            'name'                      =>          ['required', 'string', 'max:255', 'unique:permissions'],
        ]);

        Permission::where('id', $this->permissionId)->update([
            'name'             =>      $this->name,
        ]);

        $log_entry =  ' Permissions updated ';
        event(new UserLog($log_entry));

        return redirect('admin/permissions')->with('message', ' Permissions updated successfully');
    }

    public function delete($permissionId) {
        $this->permissionDelete = $permissionId;
    }

    public function deletePermissions() {

        Permission::find($this->permissionDelete)->delete();

        $log_entry = ' Permissions deleted ';
        event(new UserLog($log_entry));

        return redirect('admin/permissions')->with('message', 'Permissions has been deleted successfully');
    }
    public function render()
    {
        $permissions = Permission::where('name', 'like', '%' . $this->search . '%')->orderBy('id')->paginate(5);
        return view('livewire.admin.permissions.index', compact('permissions'));
    }
}
