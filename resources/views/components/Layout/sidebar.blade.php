<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>Menu</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('siswa')}}">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Siswa</span>
                <!-- <div class="badge badge-info badge-pill">2</div> -->
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Ortu')}}">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Orang Tua Siswa</span>
                <!-- <div class="badge badge-info badge-pill">2</div> -->
            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Components</p>

        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-palette menu-icon"></i>
                <span class="menu-title">Jurusan</span>
                <i class="menu-arrow"></i>
            </a>

            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">


                    <li class="nav-item">
                        <a class="nav-link" href="pages/ui-features/buttons.html">kelas</a>
                    </li>
                </ul>
            </div>

        </li> -->
        <li class="nav-item">
            <a class="nav-link" href="guru">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">Guru</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('jurusan') }}">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">Jurusan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('kelas')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Kelas</span>
            </a>
        </li>
        <!--   <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
                <i class="mdi mdi-emoticon menu-icon"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item sidebar-category">
            <p>Pages</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{asset('template/pages/samples/login.html')}}">
                            Login </a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{asset('template/pages/samples/login-2.html')}}">
                            Login 2 </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{asset('template/pages/samples/register.html')}}">
                            Register </a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{asset('template/pages/samples/register-2.html')}}"> Register 2
                        </a></li>
                    <li class="nav-item"> <a class="nav-link"
                            href="{{asset('template/pages/samples/lock-screen.html')}}">
                            Lockscreen </a></li>
                </ul>
            </div>
        </li> -->
        <!-- <li class="nav-item sidebar-category">
            <p>Apps</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="docs/documentation.html">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Documentation</span>
            </a>
        </li>-->
        <li class="nav-item">
            <form action="{{route('signout')}}" method="post">
                @csrf
                <button class="btn bg-danger btn-sm menu-title">Log Out</button>
            </form>

        </li>
    </ul>
</nav>