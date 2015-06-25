<header class="main-header">
    <!-- Logo -->
    <a href="{{ url('') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>СС</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Список серверів</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('img/avatar5.png') }}" class="user-image" alt="User Image"/>
                        <span class="hidden-xs">admin</span>
                    </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{ asset('img/avatar5.png') }}" class="img-circle" alt="User Image" />
                        <p>
                            <strong>admin</strong> - Адміністратор
                            <small>Зареєстрован 25.06.2015</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-flat">Вихід</a>
                        </div>
                    </li>
                </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>