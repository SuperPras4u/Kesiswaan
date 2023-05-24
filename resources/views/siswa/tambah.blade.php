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
                <div class="row">
                    <br>
                    <!-- tampilan kiri -->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="Nama" class="form-label">Nama Lengkap</label>
                            <input type="Text" class="form-control" id="Nama" name="Nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="tempat-lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" name="tempat-lahir" value="" class="form-control"
                                placeholder="Tempat Lahir">
                        </div>
                        <div class="mb-3">
                            <label for="Date" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="Date" value="" class="form-control">
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
                            <input type="number" name="NIK" value="" placeholder="NIK" class="form-control">
                        </div>


                    </div>

                    <!-- tampilan kanan -->
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="NISN" class="form-label">NISN</label>
                            <input type="number" name="NISN" value="" class="form-control" placeholder="NISN">
                        </div>
                        <div class="mb-3">
                            <label for="NIS" class="form-label">NIS</label>
                            <input type="number" name="NIS" value="" class="form-control" placeholder="NIS">
                        </div>
                        <div class="mb-3">
                            <label for="sekolah-asal" class="form-label">Sekolah Asal</label>
                            <input type="number" name="sekolah-asal" value="" class="form-control"
                                placeholder="Sekolah Asal">
                        </div>
                        <div class="mb-3">
                            <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis-kelamin" class="form-select form-select-sm"
                                aria-label=".form-select-sm example">
                                <option value=" Pilih" selected disabled>--Pilih--</option>
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan"> Permpuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="akta" class="form-label">No Akta Kelahiran</label>
                            <input type="text" name="akta" value="" placeholder="No.Akta Kelahiran"
                                class="form-control">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
