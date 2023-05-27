<x-layout.app>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4>Form Data Siswa</h4>
                        <hr>
                    </div>
                </div>
                <form action="{{route('simpan_siswa')}}" method="POST">
                    @csrf
                    <div class="row">


                        <!-- tampilan kiri -->
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="Nama_Siswa" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="Nama_Siswa" placeholder="Nama Lengkap"
                                    value="{{old('Nama_Siswa')}}">
                            </div>
                            <div class="mb-3">
                                <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                                <input type="text" name="Tempat_Lahir" value="{{old('Tempat_lahir')}}"
                                    class="form-control" placeholder="Tempat Lahir">
                            </div>
                            <div class="mb-3">
                                <label for="Date" class="form-label">Tanggal Lahir</label>
                                <input type="date" name="Tanggal_Lahir" value="{{old('Tanggal_Lahir')}}"
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
                                <label for="NIK" class="form-label">Nomor Induk Keluarga</label>
                                <input type="number" name="NIK_Siswa" value="{{old('NIK')}}" placeholder="NIK"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="tinggi" class="form-label">Tinggi Badan</label>
                                <input type="number" name="Tinggi_Badan" value="" placeholder="Cm" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="berat" class="form-label">Berat Badan</label>
                                <input type="number" name="Berat_badan" value="" placeholder="Kg" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Usia" class="form-label">usia</label>
                                <input type="number" name="Usia" value="" placeholder="Tahun" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="tinggal_dengan" class="form-label">Tinggal dengan</label>
                                <input type="text" name="tinggal_dengan" value="" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="absensi" class="form-label">Absensi</label>
                                <input type="number" name="absensi" value="" placeholder="No." class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Poin_Pelanggaran" class="form-label">Poin Pelanggaran</label>
                                <input type="number" name="Poin_Pelanggaran" value="" placeholder=""
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Foto" class="form-label">Foto Profile</label>
                                <input type="" name="Foto" value="" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Alamat" class="form-label">Alamat Rumah</label>
                                <input type="text" name="Alamat" value="" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="jalan" class="form-label">Jalan Rumah</label>
                                <input type="text" name="jalan" value="" placeholder="" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="Status_dalam_Keluarga" class="form-label">Status dalam Keluarga</label>
                                <input type="text" name="Status_dalam_Keluarga" value="" placeholder=""
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="No_Pendaftaran" class="form-label">No Pendaftaran</label>
                                <input type="number" name="No_Pendaftaran" value="" placeholder="" class="form-control">
                            </div>

                        </div>

                        <!-- tampilan kanan -->
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="NISN" class="form-label">NISN</label>
                                <input type="number" name="NISN" value="{{old('NISN')}}" class="form-control"
                                    placeholder="NISN">
                            </div>
                            <div class="mb-3">
                                <label for="NIS" class="form-label">NIS</label>
                                <input type="number" name="NIS" value="{{old('iNIS')}}" class="form-control"
                                    placeholder="NIS">
                            </div>
                            <div class="mb-3">
                                <label for="sekolah_asal" class="form-label">Sekolah Asal</label>
                                <input type="text" name="Sekolah_Asal" value="{{old('Sekolah_asal')}}"
                                    class="form-control" placeholder="Sekolah Asal">
                            </div>
                            <div class="mb-3">
                                <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="Jenis_kelamin" class="form-select form-select-sm"
                                    aria-label=".form-select-sm example">
                                    <option value=" Pilih" selected disabled>--Pilih--</option>
                                    <option value="Laki-Laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="no_akta" class="form-label">No Akta Kelahiran</label>
                                <input type="text" name="no_akta" value="{{old('no_akta')}}"
                                    placeholder="No.Akta Kelahiran" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="RT" class="form-label">Rukun Tetangga</label>
                                <input type="text" name="RT" value="{{old('RT')}}" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="RW" class="form-label">Rukun Waraga</label>
                                <input type="text" name="RW" value="{{old('RW')}}" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Kelurahan" class="form-label">Kelurahan</label>
                                <input type="text" name="kelurahan" value="" placeholder="" class="form-control"
                                    value="{{old('kelurahan')}}">
                            </div>
                            <div class="mb-3">
                                <label for="Kecamatan" class="form-label">Kecamatan</label>
                                <input type="text" name="Kecamatan" value="{{old('Kecamatan')}}" placeholder=""
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Kabupaten" class="form-label">Kabupaten</label>
                                <input type="text" name="Kabupaten" value="{{old('Kabupaten')}}" placeholder=""
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Provinsi" class="form-label">Provinsi</label>
                                <input type="text" name="Provinsi" value="" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Kode_Pos" class="form-label">Kode Pos</label>
                                <input type="number" name="Kode_Pos" value="" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="anak_ke" class="form-label">anak ke</label>
                                <input type="number" name="anak_ke" value="" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Jumlah_Saudara" class="form-label">Jumlah Saudara</label>
                                <input type="number" name="Jumlah_Saudara" value="" placeholder="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="Diterima_Pada" class="form-label">Diterima Pada</label>
                                <input type="date" name="Diterima_Pada" value="" placeholder="" class="form-control">
                            </div>
                            <br>
                            <br>
                            <div align="right">
                                <button class="btn btn-success btn-sm">Simpan</button>
                                <a class="btn btn-danger btn-sm" href="{{ route('siswa') }}">Batal</a>
                            </div>

                        </div>

                </form>
            </div>
        </div>
    </div>
    </div>
</x-layout.app>
