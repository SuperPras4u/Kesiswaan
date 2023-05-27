<x-layout.app>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Data orang Tua Siswa</h4>
                    </div>
                    <div class="col-6" align="right" ;>
                        <!-- <button type="" class="btn-success btn-sm">tambah data -->
                        <a href="{{route('tambah_ortu')}}" class="btn btn-success" role="button">
                            tambah data
                        </a>
                        <!-- </button> -->
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
                                    Ayah
                                </th>
                                <th>
                                    Ibu
                                </th>
                                <th>Nama Anak</th>

                                <th class="col-2">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $ortus as $ortu )
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $ortu-> Nama_Ayah }}
                                </td>
                                <td>
                                    {{ $ortu->Nama_Ibu }}
                                </td>

                                <td align="center">{{$ortu->Jenis_kelamin}}</td>
                                <td>
                                    {{ $ortu->Jurusan }}
                                </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="mdi mdi-account"></i>
                                    </button>

                                    <button type="button" class="btn btn-outline-info"><i
                                            class="mdi mdi-pencil"></i></button>

                                    <form action="{{route('hapus', $ortu->id)}}" method="POST" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-warning"
                                            onclick="return confirm('Data {{ $ortu->id}} akan di hapus tidak bisa di kembalikan. apakah anda yakin?')"><i
                                                class="mdi mdi-trash-can-outline"></i> </button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
