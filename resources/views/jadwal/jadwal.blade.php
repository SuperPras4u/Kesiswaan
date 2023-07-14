<x-layout.app>

    <form action="createjadwal" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">kelas</label>
            <select class="form-select col-3" aria-label="Default select example" name="id_kelas">
                <option value="1">Kelas 1</option>
                <option value="2">Kelas 2</option>
                <!-- Tambahkan pilihan kelas lainnya -->
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
            <select class="form-select col-3" aria-label="Default select example" name="id_mapel">
                <option value="1">Kelas 1</option>
                <option value="2">Kelas 2</option>
                <!-- Tambahkan pilihan kelas lainnya -->
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Hari</label>
            <select class="form-select col-3" aria-label="Default select example" name="hari">
                <option >Senin</option>
                <option >Selasa</option>
                <option >Rabu</option>
                <option >Kamis</option>
                <option >Jumat</option>
                <option >Sabtu</option>
                <!-- Tambahkan pilihan kelas lainnya -->
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
            <select class="form-select col-3" aria-label="Default select example" name="jam">
                <option >Jam Ke 1 - 7.30 - 8.30</option>
                <option >Jam Ke 2 - 8.30 - 9.30</option>
               
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-layout.app>
