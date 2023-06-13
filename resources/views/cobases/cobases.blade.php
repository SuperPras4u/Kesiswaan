<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">First</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($cobasis as $item)
        <tr>
            <th scope="row">1</th>
            <td>{{ $item->nama_siswa }}</td>
            <td>{{ $item->kelaskesiswa->nama_kelas }}</td>
            
          </tr>
        @endforeach

    </tbody>
  </table>


  <button type="button" class="btn btn-success" data-bs-target="#modaltambah"
  data-bs-toggle="modal">Tambah +</button>


   <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="tambahcobases" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Siswa</label>
                            <input type="Nama" name="nama_siswa" class="form-control" id="exampleInputNama" placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"> Kelas</label>
                            <select class="form-select" id="category_id" name="id_kelas"
                                aria-label="Default select example">
                                <option selected>Pilih Kelas</option>
                                @foreach ($kelas as $row)
                                    <option value=" {{ $row->id }} ">{{ $row->nama_kelas }}
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

