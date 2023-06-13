<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


<style>
    .no-border {
        border: none;
    }
</style>

{{-- 
<h2>Filter Tanggal Absensi</h2>
<form action="{{ route('filterbydate') }}" method="GET">
    <input type="date" name="tanggal_absen" value="{{ $tanggal_absen }}">
    <input type="hidden" name="id" value="{{ $datakelas->id }}">
    <button type="submit">Filter</button>
</form> --}}

<div id="resultContainer">
    


<form action="/siswa/ubahabsen" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No. Siswa</th>
                <th>Nama Siswa</th>
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
            @if ($item->cobasis->isEmpty())
            <tr>
                <td colspan="13" align="center">Data tidak ditemukan</td>
            </tr>
        @else
                <tr>
                    <td scope="row"><input type="hidden" name="id[]" value="{{ $item->cobasis->id }}">{{ $loop->iteration }}</td>
                    <td><span>{{ $item->nama_siswa }}</span><input type="hidden" name="id_siswa[]" value="{{ $item->cobasis->first()->id_siswa }}" class="no-border"> </td>
                    <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                            <option selected  >{{ $item->cobasis->first()->jam1 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam2[]">
                            <option selected>{{ $item->cobasis->first()->jam2 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam3[]">
                            <option selected>{{ $item->cobasis->first()->jam3 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam4[]">
                            <option selected>{{ $item->cobasis->first()->jam4 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam5[]">
                            <option selected>{{ $item->cobasis->first()->jam5 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam6[]">
                            <option selected>{{ $item->cobasis->first()->jam6 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam7[]">
                            <option selected>{{ $item->cobasis->first()->jam7 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam8[]">
                            <option selected>{{ $item->cobasis->first()->jam8 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam9[]">
                            <option selected>{{ $item->cobasis->first()->jam9 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example" name="jam10[]">
                            <option selected >{{ $item->cobasis->first()->jam10 }}</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                        <td> 
                            <input type="hidden" value="{{ $tanggal_absen }}" name="tanggal_absen[]">
                        </td>



                </tr>
                @endif
            @endforeach

        </tbody>
    </table>
    <button type="submit" class="btn btn-success">Success</button>
</form>

</div>

<div>
    <td><a href="{{ url('/siswa/absensi/'.$datakelas->cobasiswa->first()->kelaskesiswa->id) }}">Absensi</a></td>
</div>

<script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#filterForm').on('submit', function(e) {
            e.preventDefault(); // Mencegah form dikirim secara normal
    
            var formData = $(this).serialize(); // Mengambil data form
    
            $.ajax({
                url: '{{ route("siswafilterabsensi", $dataabsen->id) }}', // Ubah dengan rute yang sesuai di Laravel
                type: 'GET',
                data: formData,
                success: function(response) {
                    // Tangani respons dari server di sini
                    $('#resultContainer').html(response);
                },
                error: function(xhr) {
                    // Tangani kesalahan jika ada
                    console.log(xhr.responseText);
                }
            });
        });
    });
    </script>
    




