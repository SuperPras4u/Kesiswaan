<x-layout.app>
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Guru</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($guru as $item)
        <tr>
            <th scope="row">1</th>
            <td>{{ $item->Nama_Guru }}</td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $item->id }}">
                Profile
              </button></td>
              <td><button data-bs-target="#modalubah-{{ $item->id }}"
                data-bs-toggle="modal">ubah</button></td>
          </tr>        
        @endforeach
    
    </tbody>
  </table>


  <!-- Button trigger modal -->

  
  <!-- Modal -->
  @foreach ($guru as $item1)
  <div class="modal fade" id="staticBackdrop-{{ $item1->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>{{ $item1->Nama_Guru }}</div>
            <div>{{ $item1->Alamat }}</div>
            <div>{{ $item1->Tempat_Lahir }}, {{ $item1->Tanggal_Lahir }}</div>
            <div>{{ $item1->id_mapel }}</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach







  {{-- modaltambah --}}

  <button type="button" class="btn btn-success" data-bs-target="#modaltambah"
  data-bs-toggle="modal">Tambah +</button>


   <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="tambahguru" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Guru</label>
                            <input type="Nama" name="Nama_Guru" class="form-control" id="exampleInputNama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <input type="Alamat" name="Alamat" class="form-control" id="exampleInputNama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tempat Lahir</label>
                            <input type="Nama" name="Tempat_Lahir" class="form-control" id="exampleInputNama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="example-date-input" class="col-form-label">Date</label>
                            <input class="form-control" type="date" name="Tanggal_Lahir" id="example-date-input">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kelas</label>
                            <input type="mapel" name="id_mapel" class="form-control" id="exampleInputNama" placeholder="Nama">
                        </div>
                    
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- modalubah --}}

@foreach ($guru as $ubah)
    

 <div class="modal fade" id="modalubah-{{ $ubah->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jurusan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ url('/editguru/' . $ubah->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Guru</label>
                    <input type="Nama" name="Nama_Guru" class="form-control" id="exampleInputNama" placeholder="Nama" value="{{ $ubah->Nama_Guru }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="Alamat" name="Alamat" class="form-control" id="exampleInputNama" placeholder="Nama" value="{{ $ubah->Alamat }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Lahir</label>
                    <input type="Nama" name="Tempat_Lahir" class="form-control" id="exampleInputNama" placeholder="Nama" value="{{ $ubah->Tempat_Lahir }}">
                </div>
                <div class="form-group">
                    <label for="example-date-input" class="col-form-label">Date</label>
                    <input class="form-control" type="date" name="Tanggal_Lahir" id="example-date-input" value="{{ $ubah->Tanggal_Lahir }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <input type="mapel" name="id_mapel" class="form-control" id="exampleInputNama" placeholder="Nama" value="{{ $ubah->id_mapel }}">
                </div>
                     
                     
                  
                  <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                  </form>
              </div>
          </div>

      </div>
  </div>

@endforeach
</x-layout.app>