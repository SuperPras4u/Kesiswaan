<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


<style>
    .no-border {
        border: none;
    }
</style>


<form action="tambahabsen" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="table table-bordered">
        <thead>
          
            <tr>
                <th>No. Siswa</th>
                <th>Nama Siswa</th>
                {{-- <th>tanggal</th> --}}
                <th>Jam ke 1</th>
                <th>Jam ke 2</th>
                <th>Jam ke 3</th>
                <th>Jam ke 4</th>
                <th>Jam ke 5</th>
                <th>Jam ke 6</th>
                <th>Jam ke 7</th>
                <th>Jam ke 8</th>
                <th>Jam ke 9</th>
                <th>Jam ke 10</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataabsen->cobasiswa as $item)
                <tr>
                    <th scope="row">1</th>
                    <td><span>{{ $item->nama_siswa }}</span><input type="hidden" name="id_siswa[]" value="{{ $item->id }}" class="no-border"> </td>
                    <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam2[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam3[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam4[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam5[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam6[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam7[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam8[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam9[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam10[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                        <td> 
                            <input type="hidden" value="{{ $tanggal_absen }}" name="tanggal_absen[]">
                        </td>



                </tr>
            @endforeach

        </tbody>
    </table>
    <button type="submit" class="btn btn-success">Success</button>
</form>




{{-- <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th>skm</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($cobasis as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{ $item->nama_siswa }}</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal-{{ $item->id }}" id="tombol">
                        Launch demo modal
                    </button></td>

            </tr>
        @endforeach

    </tbody>
</table> --}}


{{-- modal --}}
<!-- Button trigger modal -->


<!-- Modal -->
{{-- @foreach ($cobasis as $item)
    <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="tambahjurusan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tanggal</label>
                            <input  name="tanggal" class="form-control tanggal"
                                id="tanggal-{{ $item->id }}" placeholder="" value="{{ $tgl_tran }}" readonly>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nama</label>
                            <input type="Nama" name="Nama" class="form-control" id="exampleInputNama"
                                placeholder="Nama" value="{{ $item->nama_siswa }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hadir</label>
                            <input type="Nama" name="hadir" class="form-control hadir"
                                id="hadir-{{ $item->id }}" placeholder="" value="" readonly>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ijin</label>
                            <input type="Nama" name="ijin" class="form-control" id="ijin-{{ $item->id }}"
                                placeholder="Nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">sakit</label>
                            <input type="Nama" name="sakit" class="form-control"
                                id="sakit-{{ $item->id }}" placeholder="Nama" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">alpha</label>
                            <input type="Nama" name="alpha" class="form-control"
                                id="alpha-{{ $item->id }}" placeholder="Nama" value="">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endforeach --}}

{{-- endmodal --}}


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- <script>
   $(document).ready(function() {
    // Loop through each cobasis item
    @foreach ($cobasis as $item)
        // Get the unique ID for this item
        var itemId = '{{ $item->id }}';

        // Build the unique IDs for the elements using the item ID
        var tanggalInputId = 'tanggal-' + itemId;
        var hadirInputId = 'hadir-' + itemId;
        var ijinInputId = 'ijin-' + itemId;
        var sakitInputId = 'sakit-' + itemId;
        var alphaInputId = 'alpha-' + itemId;

        // Get the values from the corresponding elements using the unique IDs
        var tanggalInput = $('#' + tanggalInputId).val();
        var tanggalObj = new Date(tanggalInput);
        var hari = tanggalObj.getDay();
        var hadirvalue = 0;

        if (hari === 1 || hari === 3 || hari === 4) {
            hadirvalue = 12;
        } else if (hari === 2 || hari === 5 || hari === 6) {
            hadirvalue = 10;
        }
        $('#' + hadirInputId).val(hadirvalue);

        $("#" + ijinInputId + ", #" + sakitInputId + ", #" + alphaInputId).on("input", function() {
            var ijin = parseInt($("#" + ijinInputId).val()) || 0;
            var sakit = parseInt($("#" + sakitInputId).val()) || 0;
            var alpha = parseInt($("#" + alphaInputId).val()) || 0;

            var totalHadir = hadirvalue - ijin - sakit - alpha;

            // Update the corresponding hadir input element with the calculated value
            $('#' + hadirInputId).val(totalHadir);
        });
    @endforeach
});

</script> --}}


{{-- @foreach ($cobasis as $tampil)
<div class="modal fade" id="modaltampil-{{ $tampil->id }}" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="tambahjurusan" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="Nama" name="Nama_Jurusan" class="form-control" id="exampleInputNama" placeholder="Nama" value="{{ $tampil->nama_siswa }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Hadir</label>
                      <input type="Nama" name="Nama_Jurusan" class="form-control" id="exampleInputNama" placeholder="Nama">
                        
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Ijin</label>
                      <input type="Nama" name="Nama_Jurusan" class="form-control" id="exampleInputNama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">sakit</label>
                      <input type="Nama" name="Nama_Jurusan" class="form-control" id="exampleInputNama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">alpha</label>
                      <input type="Nama" name="Nama_Jurusan" class="form-control" id="exampleInputNama" placeholder="Nama">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
               
            </div>
        
    </div>
</div>
@endforeach --}}
