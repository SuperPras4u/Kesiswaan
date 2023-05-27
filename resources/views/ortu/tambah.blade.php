<x-layout.app>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Form Data Orang Tua Siswa</h4>
                        <hr>
                    </div>
                    <form action="{{route('simpan_ortu')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <!-- data ayah -->
                                <div class="mb-3">
                                    <label for="NIK_Ayah" class="form-label"> NIK_Ayah</label>
                                    <input type="number" name="NIK_Ayah" class="form-control"
                                        value="{{old('NIK_Ayah')}}" placeholder="Masukan NIK Ayah...">
                                </div>
                                <div class="mb-3">
                                    <label for="Nama_Ayah" class="form-label"> Nama_Ayah</label>
                                    <input type="text" name="Nama_Ayah" class="form-control"
                                        value="{{old('Nama_Ayah')}}" placeholder="Masukan Nama Ayah...">
                                </div>
                                <div class="mb-3">
                                    <label for="Pekerjaan_Ayah" class="form-label"> Pekerjaan_Ayah</label>
                                    <input type="text" name="Pekerjaan_Ayah" class="form-control"
                                        value="{{old('Pekerjaan_Ayah')}}" placeholder="Masukan Pekerjaan Ayah...">
                                </div>
                                <div class="mb-3">
                                    <label for="Pendidikan_Ayah" class="form-label"> Pendidikan_Ayah</label>
                                    <input type="text" name="Pendidikan_Ayah" class="form-control"
                                        value="{{old('Pendidikan_Ayah')}}"
                                        placeholder="Masukan Pendidikan Terakhir Ayah...">
                                </div>
                                <div class="mb-3">
                                    <label for="No_Telepon_Ayah" class="form-label"> No_Telepon_Ayah</label>
                                    <input type="number" name="No_Telepon_Ayah" class="form-control"
                                        value="{{old('No_Telepon_Ayah')}}" placeholder="Masukan Nomor Telepon Ayah...">
                                </div>
                            </div>
                            <div class="col-6">
                                <!-- data ibu -->
                                <div class="mb-3">
                                    <label for="NIK_Ibu" class="form-label"> NIK_Ibu</label>
                                    <input type="number" name="NIK_Ibu" class="form-control" value="{{old('NIK_Ibu')}}"
                                        placeholder="Masukan NIK Ibu...">
                                </div>
                                <div class="mb-3">
                                    <label for="Nama_Ibu" class="form-label"> Nama_Ibu</label>
                                    <input type="text" name="Nama_Ibu" class="form-control" value="{{old('Nama_Ibu')}}"
                                        placeholder="Masukan Nama Ibu...">
                                </div>
                                <div class="mb-3">
                                    <label for="Pekerjaan_Ibu" class="form-label"> Pekerjaan_Ibu</label>
                                    <input type="text" name="Pekerjaan_Ibu" class="form-control"
                                        value="{{old('Pekerjaan_Ibu')}}" placeholder="Masukan Pekerjaan Ibu...">
                                </div>
                                <div class="mb-3">
                                    <label for="Pendidikan_Ibu" class="form-label"> Pendidikan_Ibu</label>
                                    <input type="text" name="Pendidikan_Ibu" class="form-control"
                                        value="{{old('Pendidikan_Ibu')}}"
                                        placeholder="Masukan Pendidikan Terakhir Ibu...">
                                </div>
                                <div class="mb-3">
                                    <label for="No_Telepon_Ibu" class="form-label"> No_Telepon_Ibu</label>
                                    <input type="number" name="No_Telepon_Ibu" class="form-control"
                                        value="{{old('No_Telepon_Ibu')}}" placeholder="Masukan Nomor Telepon Ibu...">
                                </div>
                                <div align="right">
                                    <br>
                                    <br>
                                    <button class="btn btn-success btn-lg">Simpan</button>
                                    <a class="btn btn-danger btn-lg" href="{{ route('Ortu') }}">Batal</a>
                                </div>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-layout.app>
