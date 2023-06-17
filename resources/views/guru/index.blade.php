<x-layout.app>

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Data Guru</h4>
                    </div>
                    <div class="col-6" align="right" ;">
                        <a href="{{route('tambah_guru')}}" class="btn btn-success" role="button">
                            Tambah Data
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Here..." aria-label="search"
                                aria-describedby="search">
                            <button type="button" id="search-button" class="btn-secondary"><i
                                    class="mdi mdi-search-web"></i></button>
                        </div>
                    </div>
                </div>

                <div class=" table-responsive pt-3">
                    <table class="table table-bordered border-primary">
                        <thead class="table-dark">
                            <tr>
                                <th>
                                    No.
                                </th>
                                <th>
                                    NIP
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>jenis kelamin</th>
                                <th>
                                    Jurusan
                                </th>
                                <th>
                                    Kelas
                                </th>
                                <th>Alamat</th>
                                <th class="col-2">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $gurus as $guru )
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $guru-> NISN }}
                                </td>
                                <td>
                                    {{ $guru->Nama_Siswa }}
                                </td>

                                <td align="center">{{$siswa->Jenis_kelamin}}</td>
                                <td>
                                    {{ $guru->Jurusan }}
                                </td>
                                <td>
                                    {{ $guru->Kelas }}
                                </td>
                                <td>kelurahan {{$guru->kelurahan}},
                                    RT.{{ $guru->RT}}/RW.{{ $guru->RW }},Kecamatan
                                    {{ $guru->Kecamatan }}, Kabupaten
                                    {{ $guru->Kabupaten }}, Provinsi {{ $guru->Provinsi }} </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="mdi mdi-account"></i>
                                    </button> -->

                                    <a href="{{route('profile', $siswa->NISN)}}" type="button"
                                        class="btn btn-primary"><i class="mdi mdi-account"></i>
                                    </a>
                                    <button type="button" class="btn btn-outline-info"><i
                                            class="mdi mdi-pencil"></i></button>

                                    <form action="{{route('hapus', $siswa->id)}}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-warning"
                                            onclick="return confirm('Data {{ $siswa->NISN}} akan di hapus tidak bisa di kembalikan. apakah anda yakin?')"><i
                                                class="mdi mdi-trash-can-outline"></i> </button>
                                    </form>
                                </td>
                                <td><img src="uploads/{{$siswa->Foto}}" alt="images"></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-layout.app>
