<style>
.sidebar[data-background-color=dark2] .nav .nav-item.active>a, .sidebar[data-background-color=dark] .nav .nav-item.active>a {
    background: #D4AF37;
}
.sidebar .nav.nav-secondary>.nav-item.active a i, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item.active a i {
    color: #ffffff !important;
}
.sidebar .nav>.nav-item a i, .sidebar[data-background-color=white] .nav>.nav-item a i {
    color: #fff;
    margin-right: 15px;
    width: 25px;
    text-align: center;
    vertical-align: middle;
    float: left;
    font-size: 16px;
    line-height: 30px;
}
.sidebar[data-background-color=dark] .nav>.nav-item a {
    color: #ffffff !important;
}
.sidebar .nav>.nav-item a .caret, .sidebar[data-background-color=white] .nav>.nav-item a .caret {
    margin-left: auto;
    margin-right: 6px;
    transition: all .5s;
    color: #ffffff;
}
.sidebar .nav.nav-secondary>.nav-item a:focus i, .sidebar .nav.nav-secondary>.nav-item a:hover i, .sidebar .nav.nav-secondary>.nav-item a[data-toggle=collapse][aria-expanded=true] i, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item a:focus i, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item a:hover i, .sidebar[data-background-color=white] .nav.nav-secondary>.nav-item a[data-toggle=collapse][aria-expanded=true] i {
    color: #ffffff !important;
}
</style>
<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.php" class="logo">
                <img src="assets/img/logo.png" 
                alt="navbar brand"  
                class="navbar-brand" 
                style="width: 145px; height: 50px; border-radius: 15px; margin-left: 20px;"
                />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-users"></i>
                        <p>Client Management</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="addclient.php">
                                    <span class="sub-item">Add Client</span>
                                </a>
                            </li>
                            <li>
                                <a href="viewclient.php">
                                    <span class="sub-item">View Client</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-user"></i>
                        <p>Candidate Management</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="addcandidate.php">
                                    <span class="sub-item">Add Candidate</span>
                                </a>
                            </li>
                            <li>
                                <a href="viewcandidate.php">
                                    <span class="sub-item">View Candidate</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="role.php">
                        <i class="fas fa-user-shield"></i>
                        <p>Role Management</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="report.php">
                        <i class="fas fa-receipt"></i>
                        <p>Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="screening.php">
                        <i class="fas fa-tasks"></i>
                        <p>Screenings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tandc.php">
                        <i class="fas fa-file-alt"></i>
                        <p>Terms & Conditions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pandp.php">
                        <i class="fas fa-shield-alt"></i>
                        <p>Privacy Policy</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->

<div class="main-panel">
    <div class="main-header">
        <div class="main-header-logo">
            
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="index.php" class="logo">
                    <img
                    src="assets/img/logo.png"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="20"
                    />
                </a>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="gg-menu-right"></i>
                    </button>
                    <button class="btn btn-toggle sidenav-toggler">
                        <i class="gg-menu-left"></i>
                    </button>
                </div>
                <button class="topbar-toggler more">
                    <i class="gg-more-vertical-alt"></i>
                </button>
            </div>
            <!-- End Logo Header -->
         
        </div>
        
        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
                <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                    <li class="nav-item topbar-icon dropdown hidden-caret">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="notifDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >
                            <i class="fa fa-bell"></i>
                            <span class="notification">4</span>
                        </a>
                        <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                            <li>
                                <div class="dropdown-title">
                                    You have 4 new notification
                                </div>
                            </li>
                            <li>
                                <div class="notif-scroll scrollbar-outer">
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary">
                                                <i class="fa fa-user-plus"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block"> New user registered </span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success">
                                                <i class="fa fa-comment"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Rahmad commented on Admin
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img
                                                    src="assets/img/profile2.jpg"
                                                    alt="Img Profile"
                                                />
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger">
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block"> Farrah liked Admin </span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class="see-all" href="javascript:void(0);">
                                    See all notifications<i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item topbar-user dropdown hidden-caret">
                        <a
                            class="dropdown-toggle profile-pic"
                            data-bs-toggle="dropdown"
                            href="#"
                            aria-expanded="false"
                        >
                            <div class="avatar-sm">
                                <img
                                    src="assets/img/profile.jpg"
                                    alt="..."
                                    class="avatar-img rounded-circle"
                                />
                            </div>
                            <span class="profile-username">
                            <span class="op-7">Subadmin</span>
                            <!-- <span class="fw-bold">Hizrian</span> -->
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-user animated fadeIn">
                            <div class="dropdown-user-scroll scrollbar-outer">
                                <li>
                                    <a class="dropdown-item" href="profile.php">My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="login.php">Logout</a>
                                </li>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>
        