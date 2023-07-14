<x-layout.app>

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    
    
    
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Mata Pelajaran</th>
            <th>Mata Pelajaran</th>
            <th>Pengajar</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($mapel as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{ $item->kode_mapel }}</td>
                <td>{{ $item->nama_mapel }}</td>
                <td>{{ $item->id_guru }}</td>
                {{-- <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop-{{ $item->id }}">
                    Profile
                  </button></td> --}}
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
      {{-- @foreach ($mapel as $item1)
      <div class="modal fade" id="staticBackdrop-{{ $item1->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>{{ $item1->nama_mapel }}</div>
                <div>{{ $item1->ketuaJurusan->Nama_Guru }}</div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     --}}
    
      {{-- modaltambah --}}
      <button type="button" class="btn btn-success" data-bs-target="#modaltambah"
      data-bs-toggle="modal">Tambah +</button>
    
    
       <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Mata Pelajaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="createmapel" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Mapel</label>
                                <input type="Nama" name="kode_mapel" class="form-control" id="exampleInputNama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Mata Pelajaran</label>
                                <input type="Nama" name="nama_mapel" class="form-control" id="exampleInputNama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pengajar</label>
                                <input type="Nama" name="id_guru" class="form-control" id="exampleInputNama" placeholder="Nama">
                            </div>
                            {{-- <div class="form-group">
                                <label for="exampleInputPassword1">Ketua Jurusan</label>
                                <select class="form-select" id="category_id" name="id_guru"
                                    aria-label="Default select example">
                                    <option selected>Pilih Guru</option>
                                    @foreach ($teach as $row)
                                        <option value=" {{ $row->id }} ">{{ $row->Nama_Guru }}
                                        </option>
                                    @endforeach
    
                                </select>
                            </div> --}}
                           
                           
                        
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
    
    
    @foreach ($mapel as $ubah)
        
    
     <div class="modal fade" id="modalubah-{{ $ubah->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Jurusan</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('/editmapel/' . $ubah->id) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                          <div class="form-group">
                              <label for="exampleInputPassword1">Nama Jurusan</label>
                              <input type="Nama" name="nama_mapel" class="form-control" id="exampleInputNama" placeholder="Nama" value="{{ $ubah->nama_mapel }}">
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
</div>
    @endforeach

    @foreach ($mapel as $item)
    <div class="modal fade" id="modalhapus-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Mata pelajaran</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data Mata Pelajaran "{{ $item->nama_mapel }}"?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a href="{{ url('/hapusmapel/' . $item->id) }}" class="btn btn-danger">Hapus</a>
            </div>
          </div>
        </div>
      </div>
        
    @endforeach
    
    {{-- modalhapus --}}
    
     {{-- @foreach ($mapel as $hapus)
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
                    Apakah Anda yakin ingin menghapus data kategori "{{ $hapus->nama_mapel }}"?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="{{ url('/hapusmapel/' . $hapus->id) }}" class="btn btn-danger">Hapus</a>
                </div>
            
        </div>
    </div>
    @endforeach 
     --}}
  
    </x-layout.app>
    