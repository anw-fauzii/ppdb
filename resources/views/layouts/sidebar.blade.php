<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    
    <div class="scrollbar-sidebar" style="overflow-y:scroll;">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Menu Utama</li>
                <li>
                    <a href="{{route('dashboard')}}" class="{{(request()->is('dashboard')) ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-home"></i>
                            Beranda
                    </a>
                </li>
                @role('admin')
                <li>
                    <a href="{{route('tahun-ajaran.index')}}" class="{{(request()->is('tahun-ajaran') || request()->is('tahun-ajaran/create')) ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-date"></i>
                            Tahun Ajaran
                    </a>
                </li>
                <li>
                    <a href="{{route('kategori.index')}}" class="{{(request()->is('kategori') || request()->is('kategori/create')) ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-study"></i>
                            Tingkat Sekolah
                    </a>
                </li>
                <li>
                    <a href="{{route('data-pendaftaran.index')}}" class="{{(request()->is('data-pendaftaran') || request()->is('data-pendaftaran/*')) ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-mail-open-file"></i>
                            Formulir Pendaftaran
                    </a>
                </li>
                @endrole
                @role('user')
                <li>
                    <a href="{{route('daftar.index')}}" class="{{(request()->is('daftar') || request()->is('daftar/create')) ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-cloud-upload"></i>
                            Pendaftaran
                    </a>
                </li>
                <li>
                    <a href="{{route('formulir.index')}}" class="{{(request()->is('formulir') || request()->is('formulir/create') || request()->is('data-ortu')) ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-note2"></i>
                            Formulir Pendaftaran
                    </a>
                </li>
                <li>
                    <a href="{{route('dokumen.index')}}" class="{{(request()->is('dokumen') || request()->is('dokumen/create')) ? 'mm-active' : ''}}">
                        <i class="metismenu-icon pe-7s-id"></i>
                            Dokumen Pendukung
                    </a>
                </li>
                @endrole
                <li>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="metismenu-icon pe-7s-power"></i>Keluar</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>                 
            </ul>
        </div>
    </div>
</div> 