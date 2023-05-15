<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Kelas</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($class as $item)
        <tr>
            <th scope="row">1</th>
            <td>{{ $item->Nama_Kelas }}</td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $item->id }}">
                Profile
              </button></td>
              <td><button data-bs-target="#modalubah-{{ $item->id }}"
                data-bs-toggle="modal">ubah</button></td>
                 <td><button data-bs-target="#modalhapus-{{ $item->id }}"
                  data-bs-toggle="modal">Hapus</button></td> 
          </tr>        
        @endforeach
    
    </tbody>
  </table>


  <!-- Button trigger modal -->

  
  <!-- Modal -->
  @foreach ($class as $item1)
  <div class="modal fade" id="staticBackdrop-{{ $item1->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div>{{ $item1->Nama_Kelas }}</div>
            <div>{{ $item1->guru->Nama_Guru }}</div>
            <div>{{ $item1->Jurusan->Nama_Jurusan }}</div>

          
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
                <form action="tambahkelas" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Kelas</label>
                            <input type="Nama" name="Nama_Kelas" class="form-control" id="exampleInputNama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jurusan</label>
                            <select class="form-select" id="category_id" name="id_Jurusan"
                                aria-label="Default select example">
                                <option selected>Pilih Jurusan</option>
                                @foreach ($Jurusan as $row)
                                    <option value=" {{ $row->id }} ">{{ $row->Nama_Jurusan }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Wali Kelas</label>
                            <select class="form-select" id="category_id" name="id_guru"
                                aria-label="Default select example">
                                <option selected>Pilih Guru</option>
                                @foreach ($teach as $row)
                                    <option value=" {{ $row->id }} ">{{ $row->Nama_Guru }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <br></br>
                       
                       
                    
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
@foreach ($class as $ubah)
    

 <div class="modal fade" id="modalubah-{{ $ubah->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jurusan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ url('/editkelas/' . $ubah->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                      <div class="form-group">
                          <label for="exampleInputPassword1">Nama Kelas</label>
                          <input type="Nama" name="Nama_Kelas" class="form-control" id="exampleInputNama" placeholder="Nama" value="{{ $ubah->Nama_Kelas }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Jurusan</label>
                        <select class="form-select" id="id_Jurusan" name="id_Jurusan"
                            aria-label="Default select example">
                            <option  value="{{ $ubah->id_jurusan }}" selected>{{ $ubah->Jurusan->Nama_Jurusan }}</option>
                            @foreach ($Jurusan as $row)
                                <option value=" {{ $row->id }} ">{{ $row->Nama_Jurusan }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Wali Kelas</label>
                        <select class="form-select" id="id_guru" name="id_guru"
                            aria-label="Default select example">
                            <option value="{{ $ubah->id_guru }}" selected>{{ $ubah->guru->Nama_Guru }}</option>
                            @foreach ($teach as $row)
                                <option value=" {{ $row->id }} ">{{ $row->Nama_Guru }}
                                </option>
                            @endforeach

                        </select>
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
@endforeach

{{-- modalhpus --}}

@foreach ($class as $hapus)
<div class="modal fade" id="modalhapus-{{ $hapus->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data kategori "{{ $hapus->Nama_Kelas }}"?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <a href="{{ url('/hapuskelas/' . $hapus->id) }}" class="btn btn-danger">Hapus</a>
            </div>
        </div>
    </div>
</div>
@endforeach 