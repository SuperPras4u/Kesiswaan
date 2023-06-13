<p>{{ $kelas->nama_kelas }}</p>
<div class="col-4">
    <div class="input-group">
        <input type="search" id="searchInput" class="form-control" aria-labelledby="passwordHelpBlock" placeholder="search......" >
    </div>
</div>

<br>

<style>
    /* #card{
        margin-left: 5%; 
        margin-right: 5%; 
        /* align-items: center; 
    } */

    .kol{
        text-align: center;
    }

    .col-4{
        margin-left: 5%;
    }
</style>

<div id="card" class="card" align="center">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-1">No</th>
                            <th class="col-5">Nama</th>
                            <th class="kol">Pelanggaran</th>
                        </tr>
                    </thead>
                    <tbody id="dataList">
                        @foreach ($siswa as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_siswa }}</td>
                                <td class="kol"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-{{ $item->id }}">+</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>


{{-- modal --}}
@foreach ($siswa as $item)
    <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="detailpelanggaran" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama Siswa</label>
                            <input type="hidden" name="id_siswa" class="form-control" id="exampleInputNama"
                                placeholder="Nama" value="{{ $item->id }}">
                            <span type="text" class="form-control" id="exampleInputNama"
                                placeholder="Nama">{{ $item->nama_siswa }}</span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1"> Kelas</label>
                            <select class="form-select" id="category_id" name="id_pelanggaran"
                                aria-label="Default select example">
                                <option selected>Pilih Pelanggaran</option>
                                @foreach ($pelanggaran as $row)
                                    <option value=" {{ $row->id }} ">{{ $row->nama_pelanggaran }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                        <br></br>
                        <div class="modal-footer">
                            <button type="submit" id="submit-form" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach



{{-- endmodal --}}




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- <script>
    $('#submit-form').submit(function(e) {
        e.preventDefault();

        var formData = $(this).serialize();

        $.ajax({
            url: "detailpelanggaran",
            type: 'POST',
            data: formData,
            success: function(response) {
                // Respon sukses, lakukan tindakan yang sesuai, seperti menampilkan pesan sukses atau memperbarui tampilan data
                console.log(response.message);
            },
            error: function(xhr) {
                // Tangani kesalahan, seperti menampilkan pesan kesalahan validasi
                var errors = xhr.responseJSON.errors;
                console.log(errors);
            }
        });
    });
</script> --}}
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
</script>
