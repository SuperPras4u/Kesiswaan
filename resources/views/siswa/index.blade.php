<x-layout.app>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Daftar Siswa</h4>
                    </div>
                    <div class="col-6" align="right" ;">
                        <button type="" class="btn-success btn-sm">
                            <a href="{{route('tambah_siswa')}}" class="nav-link icon-link">
                                <i class="mdi mdi-plus-circle-outline"></i>
                            </a>
                        </button>
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
                                    NIS
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
                            @foreach( $siswas as $siswa )
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $siswa-> NISN }}
                                </td>
                                <td>
                                    {{ $siswa->Nama_Siswa }}
                                </td>

                                <td align="center">{{$siswa->Jenis_kelamin}}</td>
                                <td>
                                    {{ $siswa->Jurusan }}
                                </td>
                                <td>
                                    {{ $siswa->Kelas }}
                                </td>
                                <td>kelurahan {{$siswa->kelurahan}},
                                    RT.{{ $siswa->RT}}/RW.{{ $siswa->RW }},Kecamatan
                                    {{ $siswa->Kecamatan }}, Kabupaten
                                    {{ $siswa->Kabupaten }}, Provinsi {{ $siswa->Provinsi }} </td>

                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="mdi mdi-account"></i>
                                    </button>

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
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <div class="text-center">
                            <img src="path/to/profile-photo.jpg" class="img-fluid rounded-circle" alt="Profile Photo"
                                style="width: 150px;">
                        </div>
                        <h2>Name: John Doe</h2>
                        <p>Email: johndoe@example.com</p>
                        <p>Phone: 123-456-7890</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
    </div>



    <!-- @push('jssj')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#search-button').click(function() {
            var searchTerm = $('#search-input').val();
            // Lakukan tindakan pencarian sesuai dengan nilai searchTerm
            // Misalnya, lakukan permintaan AJAX untuk mengambil data yang sesuai dengan searchTerm
        });
    });
    </script>

    <script>
    var modalHp = document.getElementById('modal-hapus');

    modalHp.
    addEvent
    Listener
        ('show.bs.modal ', function(event) {

            // Button that triggered the modal
            let button = event.relatedTarget;
            // Extract info from data-bs-* attributes
            let recipient = button.getAttribute('data-bs-whatever');

            // Use above variables to manipulate the DOM
        });
    </script>
    @endpush -->
</x-layout.app>
