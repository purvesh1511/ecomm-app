<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-view-dashboard mr-2"></i>Dashboard
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-dashboard">
                            <a href="index.html" class="dropdown-item">Dashboard 1</a>
                            <a href="index-2.html" class="dropdown-item">Dashboard 2</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown arrow-none">
                        <a class="nav-link" href="{{ route('users.index') }}" id="topnav-email" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-account mr-2"></i>User
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-email" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-email mr-2"></i>Email
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="topnav-email">
                            <a href="email-inbox.html" class="dropdown-item">Inbox</a>
                            <a href="email-read.html" class="dropdown-item">Read Email</a>
                            <a href="email-compose.html" class="dropdown-item">Compose Email</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>