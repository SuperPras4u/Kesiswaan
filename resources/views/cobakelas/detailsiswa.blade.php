<x-layout.app>
    {{-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<input type="text" id="searchInput" placeholder="Cari data">


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
      </tr>
    </thead>
    <tbody>
       
        <tr>
            <th scope="row">1</th>
            <td>{{ $datakelas->nama_siswa }}</td>
            <td><a href="{{ url('/siswa/cekabsensi/'.$datakelas->cobasiswa->first()->kelaskesiswa->id) }}">Cek Absensi</a></td>

          </tr>
        
    
    </tbody>
  </table>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
      </tr>
    </thead>
    <tbody id="dataList">
        @foreach ($datakelas->cobasiswa as $item)
        <tr>
            <th scope="row">1</th>
            <td>{{ $item->nama_siswa }}</td>
            <td><a href="{{ url('/siswa/profile'.$item->id) }}">detail</a></td>
          </tr>
        @endforeach
    
    </tbody>
  </table>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var searchText = $(this).val().toLowerCase();

            $('#dataList tr').each(function() {
                var rowText = $(this).text().toLowerCase();
                if (rowText.indexOf(searchText) === -1) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        });
    });
</script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">


    @if ($datasiswa->absensi)
        <?php $totalHadir = 0; ?>
        <?php $totalA = 0; ?>
        <?php $totalS = 0; ?>
        <?php $totalI = 0; ?>
        <?php $totalN = 0; ?>
        <?php $jamS = []; ?>
                @foreach ($datasiswa->absensi as $absensi)
                    <?php $jamColumns = ['jam1', 'jam2', 'jam3', 'jam4', 'jam5', 'jam6', 'jam7', 'jam8', 'jam9', 'jam10', 'jam11', 'jam12', 'jam13', 'jam14'];
                    
                    foreach ($jamColumns as $jamColumn) {
                        if ($absensi->{$jamColumn} === 'H') {
                            $totalHadir++;
                        } elseif ($absensi->{$jamColumn} === 'A') {
                            $totalA++;
                        } elseif ($absensi->{$jamColumn} === 'S') {
                            $totalS++;
                            $jamS[] = [
                                'tanggal_absen' => $absensi->tanggal_absen,
                                'jam' => $jamColumn,
                            ];
                        } elseif ($absensi->{$jamColumn} === 'I') {
                            $totalI++;
                        } elseif ($absensi->{$jamColumn} === 'N') {
                            $totalN++;
                        }
                    } ?> @endforeach
            {{-- </tbody>
        </table>

        <p>Total Kehadiran: {{ $totalHadir }}</p>
        <p>Total Alpha: {{ $totalA }}</p>
        <p>Total Sakit: {{ $totalS }}</p>
        <p>Total Ijin: {{ $totalI }}</p>
        <p>Total Tidak Ada Keterangan: {{ $totalN }}</p> --}}




    @endif

    {{-- @if (!empty($jamS))
        <p>Jam-jam dengan absen 'S':</p>
        <ul>
            @foreach ($jamS as $jam)
<li>Tanggal: {{ $jam['tanggal_absen'] }}, {{ $jam['jam'] }}</li>
@endforeach
        </ul>
@else
<p>Tidak ada absen 'S' pada jam manapun.</p>
    @endif

    @foreach ($datasiswa->pelanggaran as $item)
<li>{{ $item->id_pelanggaran }}</li>
@endforeach --}}



    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>


    <div class="container">
    <div class="main-body">

        <!-- Breadcrumb -->
        {{-- <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
        </nav> --}}
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{ $datasiswa->Nama_Siswa }}</h4>
                                <p class="text-secondary mb-1"> NIS : {{ $datasiswa->NIS }}</p>
                                <p class="text-muted font-size-sm"> NISN : {{ $datasiswa->NISN }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0">Poin Pelanggaran</h6>
                            <span class="text-secondary"><i class="fa fa-question-circle" aria-hidden="true"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal"></i></span>
                        </li>
                        {{-- @foreach ($datasiswa->pelanggaran as $item)
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h8 class="mb-0">{{ $item->pelanggarannama->nama_pelanggaran }}</h8>
                                    <span class="text-secondary">{{ $item->pelanggarannama->poin_pelanggaran }}</span>
                                </li>
                            @endforeach --}}
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h8 class="mb-0"><span id="totalpoin"></span> Poin</h8>
                            {{-- <span class="text-secondary">bootdey</span> --}}
                        </li>
                        {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-twitter mr-2 icon-inline text-info">
                                    <path
                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                    </path>
                                </svg>Twitter</h6>
                            <span class="text-secondary">@bootdey</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-instagram mr-2 icon-inline text-danger">
                                    <rect x="2" y="2" width="20" height="20" rx="5"
                                        ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>Instagram</h6>
                            <span class="text-secondary">bootdey</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-facebook mr-2 icon-inline text-primary">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                    </path>
                                </svg>Facebook</h6>
                            <span class="text-secondary">bootdey</span>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datasiswa->Nama_Siswa }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Class</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datasiswa->siswakelas->Nama_Kelas }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Majors</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                (239) 816-9029
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mother's Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datasiswa->orangTua->Nama_Ibu }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Father's Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $datasiswa->orangTua->Nama_Ayah }}
                            </div>
                        </div>
                        {{-- <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info " target="__blank"
                                    href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                            </div>
                        </div> --}}
                    </div>
                </div>

                <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i
                                        class="material-icons text-info mr-2">Ringkas Absensi</i> <span
                                        class="text-secondary"><i class="fa fa-question-circle" aria-hidden="true"
                                            data-bs-toggle="modal" data-bs-target="#modal-absen"></i></span></h6>

                                <div><small id="absen"></small></div>
                                {{-- <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> --}}
                                <br>
                                {{-- <div><small>Website Markup</small></div> --}}
                                {{-- <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> --}}
                                {{-- <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                        aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                        aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i
                                        class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%"
                                        aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%"
                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%"
                                        aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%"
                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%"
                                        aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>



            </div>
        </div>

    </div>
    </div>


    <!-- Modal pelanggaran -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Riwayat Pelanggaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (count($datasiswa->pelanggaran) > 0)
                        @foreach ($datasiswa->pelanggaran as $item)

                        <div><p><span>{{ $item->pelanggarannama->nama_pelanggaran }}</span> pada tanggal {{ $item->created_at->format('Y-m-d') }} dan mendapatkan <span class="poin">{{ $item->pelanggarannama->poin_pelanggaran }}</span> pelanggaran</p></div>
                            {{-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h8 class="mb-0">{{ $item->pelanggarannama->nama_pelanggaran }}</h8>
                                <span class="text-secondary poin">{{ $item->pelanggarannama->poin_pelanggaran }}
                                    Poin</span>
                                <span class="text-secondary">{{ $item->created_at->format('Y-m-d') }}</span>
                            </li> --}}
                        @endforeach
                    @else
                        <p>anak baik</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- modal absen --}}
    <div class="modal fade" id="modal-absen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Riwayat Pelanggaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <li>Hadir :{{ $totalHadir }}</li>
                    <li>Sakit : {{ $totalS }}</li>
                    <li>Alpha : {{ $totalA }}</li>
                    <li>Ijin : {{ $totalI }}</li>
                    <li>Tidak Ada Keterangan : {{ $totalN }}</li>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal absen --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        var totalPoin = 0;

        // Mengambil elemen-elemen yang menampilkan poin
        var poinElements = document.getElementsByClassName('poin');

        // Mengiterasi elemen-elemen dan menambahkan poin ke totalPoin
        for (var i = 0; i < poinElements.length; i++) {
            var poin = parseInt(poinElements[i].textContent);
            totalPoin += poin;
        }

        // Menampilkan total poin
        var totalPoinElement = document.getElementById('totalpoin');
        totalPoinElement.textContent = totalPoin;

        const totalHadir = {{ $totalHadir }};
        const totalSakit = {{ $totalS }};
        const totalAlpha = {{ $totalA }};
        const totalIjin = {{ $totalI }};
        const totalTidakAdaKeterangan = {{ $totalN }};

        const totalKehadiran = totalHadir + totalSakit + totalAlpha + totalIjin + totalTidakAdaKeterangan;

        const persentaseKehadiran = (totalHadir / totalKehadiran) * 100;
        const formattedPersentase = persentaseKehadiran.toFixed(2);

        const tampilElement = document.getElementById("absen");
        tampilElement.textContent = `Persentase Kehadiran: ${formattedPersentase}%`;
    </script>

</x-layout.app>
