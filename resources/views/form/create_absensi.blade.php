<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


<style>
    .no-border {
        border: none;
    }
</style>

<p>{{ $kelas->nama_kelas }}</p>
<div id="tanggal">{{ $tanggal }}</div>


{{-- <select aria-label="Default select example" id="jam10">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>


<select aria-label="Default select example" id="jam11">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>


<select aria-label="Default select example" id="jam12">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>


<select aria-label="Default select example" id="jam13">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>


<select aria-label="Default select example" id="jam14">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select> --}}


<form action="tambahabsen" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No. Siswa</th>
                <th>Nama Siswa</th>
                @foreach ($jadwal as $item)
                    <th>
                        <span>{{ $item->id_mapel }}</span>
                        <input type="hidden" name="id_mapel[]" value="{{ $item->id_mapel }}">
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <span>{{ $item->Nama_Siswa }}</span>
                        <input type="hidden" name="id_siswa[]" value="{{ $item->id }}" class="no-border">
                    </td>
                    @foreach ($jadwal as $jadwalItem)
                        <td>
                            <select aria-label="Default select example" name="kehadiran[]">
                                <option selected>H</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select>
                        </td>
                    @endforeach
                    <input type="hidden" value="{{ $tanggal_absen }}" name="tanggal_absen[]" readonly>
                    <input type="hidden" value="{{ $kelasId }}" name="id_kelas[]" readonly>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-success">Success</button>
</form>


{{-- <form action="tambahabsen" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="table table-bordered">
        <thead>

            <tr>
                <th>No. Siswa</th>
                <th>Nama Siswa</th>
                @foreach ($jadwal as $item)
                <th name> <span>{{ $item->id_mapel }} </span>
                    <input type="text" name="id_mapel[]" value="{{ $item->id_mapel }}">
                </th>
            @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $item)
                <tr>
                    <th scope="row">1</th>
                    <td><span>{{ $item->Nama_Siswa }}</span><input type="hidden" name="id_siswa[]"
                            value="{{ $item->id }}" class="no-border"> </td>
                 @foreach ($jadwal as $jadwalItem)
                    <td>
                        <select aria-label="Default select example" name="kehadiran[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select>
                    </td>
                @endforeach

                    <input type="hidden" value="{{ $tanggal_absen }}" name="tanggal_absen[]" readonly>

                    <input type="hidden" value="{{ $kelasId }}" name="id_kelas[]" readonly>
                </tr>
            @endforeach
          
        </tbody>
    </table>
    <button type="submit" class="btn btn-success">Success</button>
</form> --}}


<!-- resources/views/items/index.blade.php -->
{{-- 
<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
    <style>
        .container {
            display: flex;
        }
        .item {
            margin-right: 10px;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach($items as $item)
            <div class="item">{{ $item->name }}</div>
        @endforeach
    </div>
</body>
</html> --}}

{{-- 
<style>
    .no-border {
        border: none;
    }
</style>

<p>{{ $kelas->nama_kelas }}</p>
<div id="tanggal">{{ $tanggal }}</div>


<select aria-label="Default select example" id="jam10">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>


<select aria-label="Default select example" id="jam11">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>


<select aria-label="Default select example" id="jam12">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>


<select aria-label="Default select example" id="jam13">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>


<select aria-label="Default select example" id="jam14">
    <option value="">Pilih</option>
    <option value="Tampilkan">Tampilkan</option>
</select>

<form action="tambahabsen" method="POST" enctype="multipart/form-data">
    @csrf
    <table class="table table-bordered">
        <thead>

            <tr>
                <th>No. Siswa</th>
                <th>Nama Siswa</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $item)
                <tr>
                    <th scope="row">1</th>
                    <td><span>{{ $item->Nama_Siswa }}</span><input type="hidden" name="id_siswa[]"
                            value="{{ $item->id }}" class="no-border"> </td>
                    <td><select aria-label="Default select example" name="jam1[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam2[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam3[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam4[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam5[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam6[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam7[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam8[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam9[]">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam10[]" class="jam10">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam11[]" class="jam11">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam12[]" class="jam12">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>
                    <td><select aria-label="Default select example" name="jam13[]" class="jam13">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>

                        <td><select aria-label="Default select example" name="jam14[]" class="jam14">
                            <option selected>H</option>
                            <option>S</option>
                            <option>I</option>
                            <option>A</option>
                            <option>N</option>
                        </select></td>

                    <input type="hidden" value="{{ $tanggal_absen }}" name="tanggal_absen[]" readonly>

                    <input type="hidden" value="{{ $kelasId }}" name="id_kelas[]" readonly>




                </tr>
            @endforeach

        </tbody>
    </table>
    <button type="submit" class="btn btn-success">Success</button>
</form>






<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.jam10').prop('disabled', true);
        $('.jam11').prop('disabled', true);
        $('.jam12').prop('disabled', true);
        $('.jam13').prop('disabled', true);
        $('.jam14').prop('disabled', true);

        $('#jam10').change(function() {
            if ($(this).val() === 'Tampilkan') {
                $('.jam10').prop('disabled', false);
            } else {
                $('.jam10').prop('disabled', true);
            }
        });



        $('#jam11').change(function() {
            if ($(this).val() === 'Tampilkan') {
                $('.jam11').prop('disabled', false);
            } else {
                $('.jam11').prop('disabled', true);
            }
        });

        $('#jam12').change(function() {
            if ($(this).val() === 'Tampilkan') {
                $('.jam12').prop('disabled', false);
            } else {
                $('.jam12').prop('disabled', true);
            }
        });

        $('#jam13').change(function() {
            if ($(this).val() === 'Tampilkan') {
                $('.jam13').prop('disabled', false);
            } else {
                $('.jam13').prop('disabled', true);
            }
        });

        $('#jam14').change(function() {
            if ($(this).val() === 'Tampilkan') {
                $('.jam14').prop('disabled', false);
            } else {
                $('.jam14').prop('disabled', true);
            }
        });
    });
</script> --}}



