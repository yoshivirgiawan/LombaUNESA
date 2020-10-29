

    <div id="wrapper" class="d-flex">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a href="#" class="logo navbar-brand"><img src="img/logo-white.png" alt="" class="logo_white"><span>CareMe</span></a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between align-items-center" href="#">
                    <div class="d-flex">
                        <i class="fas fa-comment"></i>
                        <span>Pesan</span>
                    </div>
                    <span class="badge badge-danger badge-pill text-center badge-shadow font-weight-bold small py-1 px-2">14</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user-injured"></i>
                    <span>Pasien</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="far fa-calendar-alt"></i>
                    <span>Janji</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="py-2 collapse-inner">
                        <a class="collapse-item" href="login.html">Belum Diverifikasi</a>
                        <a class="collapse-item" href="register.html">Sudah Diverifikasi</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!--Navbar-->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <nav class="header-wrapper navbar navbar-expand-lg d-flex mb-4">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle ml-2">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="left-icon-bar py-2 px-2 ml-2 mr-auto">
                        <div class="search_container">
                            <div class="searchbox">
                                <input type="text" class="searchbox__input" placeholder="Search..." />
                                <svg class="searchbox__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
                                    <path class="search_box_icon_path" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17s-17-7.626-17-17S14.61,6,23.984,6z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="navbar-collapse collapse topbar">
                        <ul class="navbar-nav ml-auto" id="navi">

                            <li class="nav-item nav-color nav-link nav-dropdown dropdown p-2">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon_notif" enable-background="new 0 0 512 512" height="24px" viewBox="0 0 512 512" width="24px" xmlns="http://www.w3.org/2000/svg">
                                        <path class="icon_path" d="m450.201 407.453c-1.505-.977-12.832-8.912-24.174-32.917-20.829-44.082-25.201-106.18-25.201-150.511 0-.193-.004-.384-.011-.576-.227-58.589-35.31-109.095-85.514-131.756v-34.657c0-31.45-25.544-57.036-56.942-57.036h-4.719c-31.398 0-56.942 25.586-56.942 57.036v34.655c-50.372 22.734-85.525 73.498-85.525 132.334 0 44.331-4.372 106.428-25.201 150.511-11.341 24.004-22.668 31.939-24.174 32.917-6.342 2.935-9.469 9.715-8.01 16.586 1.473 6.939 7.959 11.723 15.042 11.723h109.947c.614 42.141 35.008 76.238 77.223 76.238s76.609-34.097 77.223-76.238h109.947c7.082 0 13.569-4.784 15.042-11.723 1.457-6.871-1.669-13.652-8.011-16.586zm-223.502-350.417c0-14.881 12.086-26.987 26.942-26.987h4.719c14.856 0 26.942 12.106 26.942 26.987v24.917c-9.468-1.957-19.269-2.987-29.306-2.987-10.034 0-19.832 1.029-29.296 2.984v-24.914zm29.301 424.915c-25.673 0-46.614-20.617-47.223-46.188h94.445c-.608 25.57-21.549 46.188-47.222 46.188zm60.4-76.239c-.003 0-213.385 0-213.385 0 2.595-4.044 5.236-8.623 7.861-13.798 20.104-39.643 30.298-96.129 30.298-167.889 0-63.417 51.509-115.01 114.821-115.01s114.821 51.593 114.821 115.06c0 .185.003.369.01.553.057 71.472 10.25 127.755 30.298 167.286 2.625 5.176 5.267 9.754 7.861 13.798z"/>
                                    </svg>

                                    <span class="badge-notif">2</span>
                                </a>

                                <div class="dropdown-list dropdown-menu dropdown-menu-right top-115 shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header py-4">
                                        Notifications
                                    </h6>
                                    <div class="notify-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="fas fa-bell btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="fas fa-bell btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="fas fa-bell btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="fas fa-bell btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="fas fa-bell btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="fas fa-bell btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="fas fa-bell btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item nav-color nav-link nav-dropdown dropdown p-2">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon_notif" enable-background="new 0 0 479.058 479.058" height="24px" viewBox="0 0 479.058 479.058" width="24px" xmlns="http://www.w3.org/2000/svg">
                                        <path class="icon_path" d="m434.146 59.882h-389.234c-24.766 0-44.912 20.146-44.912 44.912v269.47c0 24.766 20.146 44.912 44.912 44.912h389.234c24.766 0 44.912-20.146 44.912-44.912v-269.47c0-24.766-20.146-44.912-44.912-44.912zm0 29.941c2.034 0 3.969.422 5.738 1.159l-200.355 173.649-200.356-173.649c1.769-.736 3.704-1.159 5.738-1.159zm0 299.411h-389.234c-8.26 0-14.971-6.71-14.971-14.971v-251.648l199.778 173.141c2.822 2.441 6.316 3.655 9.81 3.655s6.988-1.213 9.81-3.655l199.778-173.141v251.649c-.001 8.26-6.711 14.97-14.971 14.97z"/>
                                    </svg>
                                    <span class="badge-notif">2</span>
                                </a>

                                <div class="dropdown-list dropdown-menu dropdown-menu-right top-115 shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header py-4">
                                        Messages
                                    </h6>
                                    <div class="notify-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="img/3.png" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Saifudin</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="img/3.png" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="img/3.png" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="img/3.png" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="img/3.png" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="img/3.png" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="img/3.png" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <div class="navbar-divider d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item nav-link dropdown no-arrow mr-70">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle" src="img/3.png">
                                    <span class="ml-2 text-profile">Alif Rahman</span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right top-115 border-0 p-0 m-0 shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-profile-item py-2 px-4" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-profile-item py-2 px-4" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>

                                    <div class="dropdown-divider m-0"></div>

                                    <a class="dropdown-profile-item py-2 px-4" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>

                </nav>

                <div class="container-fluid px-4">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h3 class="font-weight-500">Selamat Siang Dokter</h3>
                        <ul class="breadcrumb px-4 border-radius-30">
                            <li class="breadcrumb-color">
                                <a href="">Home</a>
                            </li>
                            <li class="breadcrumb-color">
                                <a href="" class="now">Dashboard</a>
                            </li>
                        </ul>
                    </div>

                    <div class="container-card-content-notify mb-4">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-4">
                                    <div class="card card-shadow border-0 border-radius-10">
                                        <div class="card-body p-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="card-body-icon mb-3">
                                                    <i class="fas fa-envelope fa-3x message-color"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <h3 class="font-weight-bold card-body-total text-lg mb-1">2</h3>
                                                    <div class="card-body-subtext">Pesan Belum Dibaca</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="card card-shadow border-0 border-radius-10">
                                        <div class="card-body p-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="card-body-icon mb-3">
                                                    <i class="fas fa-calendar-alt fa-3x calendar-color"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <h3 class="font-weight-bold card-body-total mb-1">2</h3>
                                                    <div class="card-body-subtext">Janji Dengan Pasien</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="card card-shadow border-0 border-radius-10">
                                        <div class="card-body p-4">
                                            <div class="row no-gutters align-items-center">
                                                <div class="card-body-icon mb-3">
                                                    <i class="fas fa-user-injured fa-3x patient-user"></i>
                                                </div>
                                                <div class="col-auto">
                                                    <h3 class="font-weight-bold card-body-total mb-1">2</h3>
                                                    <div class="card-body-subtext">Pasien Anda</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="container-card-content mb-4">
                        <div class="card-title card-title-container p-4">
                            RIWAYAT KONSULTASI
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Waktu</th>
                                        <th>No Handphone</th>
                                        <th>Ulasan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Saifudin</td>
                                        <td>Senin, 27-02-2020, 10.00</td>
                                        <td>081234567891</td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">LIHAT ULASAN</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Udeen</td>
                                        <td>Senin, 27-02-2020, 10.00</td>
                                        <td>081234567891</td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">LIHAT ULASAN</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sifudeen</td>
                                        <td>Senin, 27-02-2020, 10.00</td>
                                        <td>081234567891</td>
                                        <td>
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">LIHAT ULASAN</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
    
                    <div class="container-card-content mb-4">
                        <div class="card-title card-title-container p-4">
                            JADWAL PERJANJIAN KONSULTASI
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Waktu</th>
                                        <th>No Handphone</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Saifudin</td>
                                        <td>Senin, 27-02-2020, 10.00</td>
                                        <td>081234567891</td>
                                        <td>
                                            <button class="btn btn-primary">CHAT</button>
                                            <button class="btn btn-danger">BATAL</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Udeen</td>
                                        <td>Senin, 27-02-2020, 10.00</td>
                                        <td>081234567891</td>
                                        <td>
                                            <button class="btn btn-primary">CHAT</button>
                                            <button class="btn btn-danger">BATAL</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Sifudeen</td>
                                        <td>Senin, 27-02-2020, 10.00</td>
                                        <td>081234567891</td>
                                        <td>
                                            <button class="btn btn-primary">CHAT</button>
                                            <button class="btn btn-danger">BATAL</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
                
                <footer class="bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Brutal Force Team 2020</span>
                        </div>
                    </div>
                </footer>

            </div>
        </div>
    </div>

    <!-- Review Modal -->
    <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ulasan dari Udeen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Mantap babang Alip
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>