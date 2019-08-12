<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ahihi Class Admin <sup>1</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Home Page -->
    <li class="nav-item active">
        <a class="nav-link" href="../">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home Page</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="templates/login.php">Login</a>
                <a class="collapse-item" href="templates/register.php">Register</a>
                <a class="collapse-item" href="templates/forgot-password.php">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="index.php?page=404">404 Page</a>
                <a class="collapse-item" href="index.php?page=blank">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=tables">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=users">
            <i class="fas fa-fw fa-table"></i>
            <span>Users</span></a>
    </li>

    <!-- Nav Item - Add User -->
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=add_user">
            <i class="fas fa-fw fa-table"></i>
            <span>Add User</span></a>
    </li>

    <!-- Nav Item - Edit User -->
    <li class="nav-item">
        <a class="nav-link" href="index.php?page=edit_user">
            <i class="fas fa-fw fa-table"></i>
            <span>Edit User</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>