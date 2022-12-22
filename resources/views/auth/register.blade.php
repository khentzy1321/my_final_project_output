@extends('base')
@section('content')
    <div class="container">
        <div class="login-box">
            <h2>Register?</h2>
            <form action="{{ '/register' }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="name" name="name" id="name" placeholder="Name" class="form-control" required="">
                    </div>
                        @error('name')
                        <p class="text-danger" id="messagee">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" required="">
                    </div>
                        @error('email')
                        <p class="text-danger" id="messagee">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required="">
                        <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                    </div>
                    @error('password')
                        <p class="text-danger" id="messagee">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control" required="">
                        <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunctionConfirm()"><i class="fa fa-eye"></i></span>
                    </div>
                    @error('password_confirmation')
                        <p class="text-danger" id="messagee">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                    <select class="form-control" name="gender" id="" style="background-color: #f7fbed">
                        <option hidden="true">Gender</option>
                        <option selected disabled>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    @error('gender')
                        <p class="text-danger" id="messagee">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex mt-4">
                    <div class="flex-grow-1">
                        <a href="{{ '/' }}" class="text-white">Already have an account?</a>
                    </div>
                    <div class="form-group text-center mt-4 mr-4">
                        <button class="btn btn-primary" id="actionBtn" type="submit">Submit</button>
                    </div>
                </div>
                </form>
        </div>
    </div>
@endsection
<style>
    html {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background-size: cover;
        background-image: url('{{ asset('/images/bg1.jpg') }}');
    }

    .login-box {
        position: absolute;
        top: 53%;
        left: 50%;
        width: 500px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background-image: url('{{ asset('/images/bg.jpg') }}');
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
    }

    .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }
    #basic-addon1 {
    width: 40px;
    text-align: center;

}
</style>
{{-- @extends('base')

@section('content')

@section('title', 'Register')
<body>
    <div class="container col-sm-4 offset-sm-4">

        <div class="card shadow mb-5 rounded border border-dark mt-5">
            <div class="card-body" style="background-color: #aff2ff;" id="card-bodyy">
                <h2 class='text-center mt-2 mb-4 ' style="color: b8c8cb; font-size: 25px;">Register</h2>
                <form action="{{ '/register' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            <input type="name" name="name" id="name" placeholder="Name" class="form-control" required="">
                        </div>
                            @error('name')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control" required="">
                        </div>
                            @error('email')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required="">
                            <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control" required="">
                            <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunctionConfirm()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password_confirmation')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 d-flex justify-content-end">
                        <select name="gender" id="" style="background-color: #f7fbed">
                            <option hidden="true">Gender</option>
                            <option selected disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        @error('gender')
                            <p class="text-danger" id="messagee">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex mt-4">
                        <div class="flex-grow-1">
                            <a href="{{ '/' }}" class="text-blue">Already have an account?</a>
                        </div>
                        <div class="form-group text-center mt-4 mr-4">
                            <button class="btn btn-outline-primary" id="actionBtn" type="submit"><img src="https://cdn-icons-png.flaticon.com/512/3580/3580148.png" width="20" height="20" class="rounded">Submit</button>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>

@endsection --}}
<script>
    function myFunction() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function myFunctionConfirm() {
        var x = document.getElementById("password_confirmation");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    setTimeout(function() {
        var msg = document.getElementById("messagee");
        msg.parentNode.removeChild(msg);
    }, 1500);
</script>
