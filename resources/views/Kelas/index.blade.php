<x-layout.app>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Data Kelas</h4>
                    </div>
                </div>
                <hr>

                <div class="card col-lg-6">
                    <div class="card-body">
                        <h4>Isi Form Berikut</h4>
                        <hr>
                        <form>
                            <div class="mb-3">
                                <label for="Nama Jurusan">Nama Jurusan</label>
                                <select class="form-select form-select-lg mb-3" id="selectjurusan"
                                    aria-label=".form-select-lg example">
                                    <option selected disabled>--Pilih Jurusan--</option>
                                    @foreach ($juru as $jurusan )
                                    <option value="Jurusan">{{$jurusan->Nama_Jurusan}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="kelas"> Kelas </label>
                                <select class="form-select form-select-lg mb-3" id="selecNoKelas"
                                    aria-label=".form-select-lg example">
                                    <option selected disabled>--Pilih Kelas--</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="Nama Kelas">Kelas</label>
                                <select class="form-select form-select-lg mb-3" id="SelectKelas"
                                    aria-label=".form-select-lg example">
                                    <option selected disabled>--Pilih Kelas--</option>
                                    <option value="Jurusan">kelas</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        $(document).on('change', '#selectjurusan', function() {
            var stokawal = 1;



            $('#datakelas').val(stokawal);

        });


    });
    </script>
</x-layout.app>
