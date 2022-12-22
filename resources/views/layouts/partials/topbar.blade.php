<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Topbar Search -->
    {{-- <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form> --}}

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <!-- Nav Item - Alerts -->
        {{-- <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </li> --}}

        {{-- <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                            alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                            problem I've been having.</div>
                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                            alt="...">
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">I have the photos that you ordered last month, how
                            would you like them sent to you?</div>
                        <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                            alt="...">
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy with
                            the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                            alt="...">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                            told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
        </li> --}}

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle"
                    src="data:image/jpeg;base64,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">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                 Sign out
             </a>
             <form id="logout-form" action="{{ url('/logout') }}" method="get" class="d-none">
                 @csrf
                 </form>
            </div>
        </li>

    </ul>

</nav>
