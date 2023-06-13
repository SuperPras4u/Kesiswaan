<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Poin</th>
       
      </tr>
    </thead>
    <tbody>
        @foreach ($pelanggaran as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $item->nama_pelanggaran }}</td>
            <td>{{ $item->poin_pelanggaran}}</td>
            
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
                <form action="tambahpelanggaran" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1"> Nama Pelanggaran</label>
                            <input type="Nama" name="nama_pelanggaran" class="form-control" id="exampleInputNama" placeholder="Nama">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"> Poin </label>
                            <input type="Nama" name="poin_pelanggaran" class="form-control" id="exampleInputNama" placeholder="Poin">
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









{{-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">


<label for="inputPassword5" class="form-label">Password</label>
<input type="text" id="search" name="search" class="form-control" aria-labelledby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>


<div class="tampil" id="tampil"></div>









<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#search').on('keyup', function(e) {
            var query= $(this).val();

            $.ajax({
                url: "search",
                type: 'GET',
                data: {'search' :query},
                success:function(data){
                    $('#tampil').html(data);
                }
            });
        });
    });
</script> --}}
