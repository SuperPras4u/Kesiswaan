<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<label for="">Naik Kelas</label>
<select id="kelas" class="form-select col-2" aria-label="Default select example">
    @if ($datakelas)
    <option value="">pilih tujuan kelas</option>
        @foreach ($datakelas as $kelas)
            <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
        @endforeach
    @else
        <option value="Lulus">Lulus</option>
    @endif
</select>

<br>

<form action="kenaikan" method="post">
    @csrf
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama-Siswa</th>
                <th class="col-3">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $item)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>
                    <input type="hidden" name="id[]" class="id_siswa" value="{{ $item->id }}">{{ $item->nama_siswa }}
                </td>
                <td>
                    <select class="form-select select-kenaikan" aria-label="Default select example">
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak-Lulus">Tidak Lulus</option>
                    </select>
                </td>
            
                    <input type="" class="id_kelas_terpilih" readonly name="id_kelas[]" value="{{ $item->id_kelas }}" data-kelas="{{ $item->id_kelas }}">
               
            </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <button id="submitBtn">+</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        var kelas = $('#kelas').val();
        if ( kelas == 'Lulus'){
            $('.id_kelas_terpilih').val('');
        }

        $('#kelas').on('change', function() {
            var idKelas = $(this).val();
            $('.id_kelas_terpilih').val(idKelas);
        });
        
        $('.select-kenaikan').on('change', function() {
            var index = $(this).closest('tr').index();
            var selectedValue = $(this).val();

            if (selectedValue === 'Tidak-Lulus') {
                var idKelas = $('.id_kelas_terpilih').eq(index).data('kelas');
                $('.id_kelas_terpilih').eq(index).val(idKelas);
            }
        });
    });
</script>
