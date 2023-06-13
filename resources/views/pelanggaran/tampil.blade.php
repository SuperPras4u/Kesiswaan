<x-layout.app>

<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">

<style>
    #cards{
        margin-left: 5%; 
        margin-right: 5%;
        margin-top: 5%; 
        /* align-items: center; */
    }

    #outputContainer{
        margin-left: 5%; 
        margin-right: 5%;
    }

    /* .kol{
        text-align: center;
    }

    .col-4{
        margin-left: 5%;
    } */
</style>
<div>
<div id="cards" class="card col-4">
    <div class="card-body">
        <div class="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <select id="kelasSelect" class="form-select" aria-label="Default select example">
                    <option value="">Pilih Kelas</option>
                    <!-- Loop melalui data kelas yang diterima dari controller -->
                    @foreach ($kelass as $item)
                        <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <select id="tindakanSelect" class="form-select" aria-label="Default select example">
                    <option value="">Pilih Tindakan</option>

                    <option value="cek_absensi">cek absensi</option>
                    <option value="absensi">absensi</option>
                    <option value="pelanggaran">pelanggaran</option>
                    <option value="showdata">showdata</option>
            </div>
            </select>
            <div class="mb-3">
                <br>
                <input type="date" id="tanggal" name="tanggal_absen" placeholder="Tanggal" style="display: none;" class="form-control">
            </div>
            <button type="" id="submitBtn" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</div>
<br>
<div id="outputContainer"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tindakanSelect').change(function() {
            var selectedTindakan = $(this).val();
            if (selectedTindakan === 'cek_absensi') {
                // Tampilkan input tanggal jika tindakan adalah 'cek_absensi'
                $('#tanggal').show();
            } else {
                // Sembunyikan input tanggal jika tindakan bukan 'cek_absensi'
                $('#tanggal').hide();
            }
        });

        $('#submitBtn').click(function() {
            var kelasId = $('#kelasSelect').val();
            var tindakan = $('#tindakanSelect').val();
            var tanggal = $('#tanggal').val();

            // ...

            // Periksa nilai yang dipilih dan lakukan tindakan yang sesuai
            if (kelasId && tindakan) {
                // Kirim permintaan AJAX ke server dengan kelasId, tindakan, dan tanggal sebagai parameter
                $.ajax({
                    url: 'process',
                    type: 'GET',
                    data: {
                        kelasId: kelasId,
                        tindakan: tindakan,
                        tanggal: tanggal
                    },
                    success: function(response) {
                        // Tampilkan data atau formulir yang relevan dalam outputContainer
                        $('#outputContainer').html(response);
                    },
                    error: function() {
                        // Tampilkan pesan error jika terjadi kesalahan
                        $('#outputContainer').text('Error occurred');
                    }
                });
            } else {
                // Jika nilai yang dipilih tidak valid, tampilkan pesan yang sesuai
                $('#outputContainer').text('Silakan pilih kelas dan tindakan');
            }
        });

    });
</script>

</x-layout.app>
