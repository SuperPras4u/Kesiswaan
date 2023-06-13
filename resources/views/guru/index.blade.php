<x-layout.app>
    <section class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!--  navbar start -->
                    <nav class="#" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle Navigasi</span>
                                Menu
                                <span class="wrap-icon pull-left">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse">
                            <span class="nook">&nbsp;</span>
                            <ul class="nav navbar-nav">
                                <li><a href="index.html">Beranda</a></li>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Profil
                                        Sekolah</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="identitas.html">Identitas</a></li>
                                        <li><a href="visi-misi.html">Visi &amp; Misi</a></li>
                                        <li><a href="sarana-prasarana.html">Sarana &amp; Prasarana</a></li>
                                        <li><a href="program-kegiatan.html">Program &amp; Kegiatan </a></li>
                                        <li><a href="prestasi.html">Prestasi</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Kurikulum</a></li>
                                <li class="active dropdown"><a class="dropdown-toggle"
                                        data-toggle="dropdown">Kesiswaan</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="daftar-siswa.html">Daftar Siswa</a></li>
                                        <li><a href="daftar-guru.html">Daftar Guru &amp; Staff</a></li>
                                        <li><a href="daftar-kelas.html">Daftar Kelas</a></li>
                                    </ul>
                                </li>
                                <li><a href="galeri.html">Galeri</a></li>
                                <li><a href="buku-tamu.html">Buku Tamu</a></li>
                                <li class="last">&nbsp;</li>
                            </ul>
                            <!--  frame pull-right start -->
                            <div class="frame">
                                <div class="form-search pull-right">
                                    <form action="404.html">
                                        {{--  <fieldset>
                                            <div class="field-search">
                                                <input type="text" class="form-control input-sm"
                                                    placeholder="Cari" />
                                                <button class="btn-search" type="submit"><span
                                                        class="fa-icon-search"></span></button>
                                            </div>
                                        </fieldset>  --}}
                                    </form>
                                </div>
                                {{--  <div class="profiles-box pull-left active">
                                    <ul class="tools tools-middle pull-right">
                                        <li><a href="#"><span class="fa-icon-facebook-sign"></span></a></li>
                                    </ul>
                                </div>  --}}
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Bagian Tengah -->
    <div class="tengah" id="main">

        <div class="judul-halaman">
            <div class="container">
                <h1>Daftar Guru dan Staff</h1>
            </div>
        </div>

        <div class="hold-breadcrumbs">
            <div class="container">
                <ol class="breadcrumb breadcrumb-site">
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="404.html">Kesiswaan</a></li>
                    <li class="active">Daftar Guru & Staff</li>
                    {{--  <li class="nav-item">
                        <a href="#" class="nav-link icon-link">
                            <i class="mdi mdi-plus-circle-outline"></i>
                        </a>
                    </li>  --}}
                </ol>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <!-- content  start -->
                    <div id="content">
                        <section class="daftar-guru"
                            style="background:white;border-bottom: .2em solid grey;
	border-radius: .33em;padding:10px">
                            <div class="table-responsive">
                                <form action="404.html">
                                    <fieldset>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Photo</th>
                                                    <th>Biodata</th>
                                                    <th>Jabatan</th>
                                                    <th>Status</th>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><span class="hold-img pull-left"><img width="77"
                                                                height="79" alt="image"
                                                                src="public/images/lsn.jpg"></span></td>
                                                    <td>
                                                        <a href="#">
                                                            <strong class="title">Lancelot san Novaria</strong>
                                                        </a>
                                                        {{--  <span class="text-size">Color: Black</span>
                                                        <span class="text-size">Size: M</span>  --}}
                                                    </td>
                                                    <td>Kepala Sekolah</td>
                                                    <td><i class="fa-icon-check"></i> Aktif</td>

                                                </tr>
                                            </tbody>
                                        </table>
                                        {{--  <div>
                                            <label for="data_ini" class="form-label">dataku</label>
                                            <input type="text" name="data_ini" value="" placeholder="okee..." class="form-control">
                                        </div>  --}}
                                    </fieldset>
                                </form>
                            </div>

                        </section>
                    </div>
                    <!-- content  end -->
                </div>
                <div class="col-sm-3">
                    <!-- sidebar  start -->
                    <aside id="sidebar">
                        <!--  categories start -->
                        <section class="categories">
                            <div class="hold-form">
                                <form action="404.html">
                                    <fieldset>
                                        <div class="field-search">
                                            <input type="text" class="form-control input-lg" placeholder="Cari...">
                                            <button class="btn-search" type="submit"><span
                                                    class="mdi mdi-account-search-outline"></span></button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </section>
                        <!--  categories end -->
                    </aside>
                    <!-- sidebar  end -->
                </div>
            </div>
        </div>
    </div>


    

</x-layout.app>
