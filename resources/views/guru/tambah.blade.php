<x-layout.app>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4>Tambah Data Guru</h4>
                    </div>
                    <div class="col-6" align="right">
                        <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="mdi mdi-mdi-file-excel"></i>
                        </button>
                    </div>

                </div>
                <hr class="mt-3">
                <h5>Input Data Guru</h5>
                <hr>
                <div class="form-group">
                    <form action="{{route('simpan_guru')}} " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- tampil kiri -->
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="NIK" class="form-label">NIK</label>
                                    <input type="number" name="NIK" value="" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="NUPTK" class="form-label">NUPTK</label>
                                    <input type="number" name="NUPTK" value="{{old('NUPTK')}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="Tempat_Lahir" class="form-label">Tempat_Lahir</label>
                                    <input type="text" name="Tempat_Lahir" value="{{old('Tempat_Lahir')}}"
                                        class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="Agama" class="form-label">Agama</label>
                                    <select name="Agama" class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                        <option selected disabled>--Pilih--</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Kong Hu Chu">Kong Hu Chu</option>
                                        <option value="Lainnya">Lainnya...</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Usia" class="form-label">usia</label>
                                    <input type="number" name="Usia" value="" placeholder="Tahun" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="jalan" class="form-label">Jalan Rumah</label>
                                    <input type="text" name="jalan" value="{{old('jalan')}}" placeholder=""
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="RT" class="form-label">Rukun Tetangga</label>
                                    <input type="text" name="RT" value="{{old('RT')}}" placeholder=""
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" name="Kecamatan" value="{{old('Kecamatan')}}" placeholder=""
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Provinsi" class="form-label">Provinsi</label>
                                    <input type="text" name="Provinsi" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Status_Pernikahan" class="form-label">Status Pernikahan</label>
                                    <select name="Status_Pernikahan" class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                        <option selected disabled>--Pilih Status--</option>
                                        <option value="Menikah">Menikah</option>
                                        <option value="Lajang">Lajang</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Pendidikan_Terakhir" class="form-label">Pendidikan Terakhir</label>
                                    <input type="text" name="Pendidikan_Terakhir" value="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Jabatan" class="form-label">Jabatan</label>
                                    <select name="Jabatan" class="form-select" aria-label=".form-select-sm example">
                                        <option selected disabled>--Pilih Jabatan--</option>
                                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                                        <option value="Humas">HUMAS</option>
                                        <option value="KUR">KUR</option>
                                        <option value="SARPRAS">SARPRAS</option>
                                        <option value="KESISWAAN">KESISWAAN</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (TKJ)</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (ANM)</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (TSM)</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (DPIB)</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (RPL)</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (SIJA)</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (TKR)</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (MM)</option>
                                        <option value="KETUA JURUSAN">KETUA JURUSAN (KPR)</option>
                                        <option value="Kepala Bengkel">Kepala Bengkel</option>
                                        <option value="Guru">Guru</option>
                                        <option value="TU">TU</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Status_kep" class="form-label">Status Kepegawaian</label>
                                    <input type="text" name="Status_kep" value="{{old('Status_kep')}}"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="No_Telepon" class="form-label">No.Telepon</label>
                                    <input type="number" name="No_Telepon" value="" class="form-control">
                                </div>
                            </div>
                            <!-- tmapil kanan -->
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="Nama_Lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="Nama_Lengkap" value="{{old('Nama_Lengkap')}}"
                                        class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="NIP" class="form-label">NIP</label>
                                    <input type="number" name="NIP" value="{{old('NIP')}}" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="Tanggal_Lahir" class="form-label">Tanggal_Lahir</label>
                                    <input type="date" name="Tanggal_Lahir" value="{{old('Tanggal_Lahir')}}"
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                                    <select name="Jenis_Kelamin" class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                        <option value=" Pilih" selected disabled>--Pilih--</option>
                                        <option value="Laki-Laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Alamat" class="form-label">Alamat</label>
                                    <input type="text" name="Alamat" class="form-control" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="Desa_Kel" class="form-label">Kelurahan</label>
                                    <input type="text" name="Desa_Kel" value="{{old('Desa_Kel')}}" placeholder=""
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="RW" class="form-label">Rukun Waraga</label>
                                    <input type="text" name="RW" value="{{old('RW')}}" placeholder=""
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Kabupaten" class="form-label">Kabupaten</label>
                                    <input type="text" name="Kabupaten" value="{{old('Kabupaten')}}" placeholder=""
                                        class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Kode_Pos" class="form-label">Kode Pos</label>
                                    <input type="number" name="Kode_Pos" value="" placeholder="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                    <select name="Kewarganegaraan" class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                        <option selected disabled>--Pilih Kewarganegaraan--</option>
                                        <option value="WNI">WNI</option>
                                        <option value="WNA">WNA</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="Gelar" class="form-label">Gelar</label>
                                    <input type="text" name="Gelar" value="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Pangkat" class="form-label">Pangkat</label>
                                    <input type="text" name="Pangkat" value="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Tanggal_Masuk" class="form--label">Tanggal Masuk</label>
                                    <input type="date" name="Tanggal_Masuk" value="" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{old('email')}}" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="Foto" class="form-label">Foto</label>
                                    <input type="file" name="Foto" value="" placeholder="upload file"
                                        class="form-control">
                                </div>
                                <br>
                                <br>
                                <div align="right">
                                    <button class="btn btn-success btn-sm">Simpan</button>
                                    <a class="btn btn-danger btn-sm" href="{{ route('guru') }}">Batal</a>
                                </div>


                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>



</x-layout.app>
