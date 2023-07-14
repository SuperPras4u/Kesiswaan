<p>{{ $kelas->Nama_Kelas }}</p>
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
                            <th class="kol">Profile</th>
                        </tr>
                    </thead>
                    <tbody id="dataList">
                        @foreach ($siswa as $item)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $item->Nama_Siswa }}</td>
                                <td class="kol"><a href="{{ url('/siswa-'.$item->Nama_Siswa) }}">?</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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