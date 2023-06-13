<!-- resources/views/your-view.blade.php -->
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
<div>
    <input type="text" id="searchInput" placeholder="Cari data">
</div>






<form id="filterForm">
    <input type="date" name="tanggal" id="tanggal" required>
    <button type="submit">Filter</button>
</form>
{{-- 
<table id="absenTable">
    @foreach ($absen as $item)
    <li>{{ $item->id }}</li>
    @endforeach
    
</table> --}}


<table id="absenTable"  class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">nama</th>
          <th scope="col">1</th>
          <th scope="col">2</th>
          <th scope="col">3</th>
          <th scope="col">4</th>
          <th scope="col">5</th>
          <th scope="col">6</th>
          <th scope="col">7</th>
          <th scope="col">8</th>
          <th scope="col">9</th>
          <th scope="col">10</th>
          <th scope="col">tanggal absen</th>

        </tr>
      </thead>
      <tbody id="dataList">
        @foreach ($absen as $item)
        <tr>
            <th scope="row">{{ $item->id }}</th>
            <td>{{ $item->siswaa->nama_siswa }}</td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam1 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam2 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam3 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam4 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam5 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam6 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam7 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam8 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam9 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                <option selected  >{{ $item->jam10 }}</option>
                <option>S</option>
                <option>I</option>
                <option>A</option>
                <option>N</option>
            </select></td>
            <td>{{ $item->tanggal_absen }}</td>
          </tr>
        @endforeach
       

      </tbody>
</table>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $('#filterForm').on('submit', function (e) {
            e.preventDefault();
            
            $.ajax({
                type: 'GET',
                url: '{{ route("filterbydate") }}',
                data: $('#filterForm').serialize(),
                success: function (data) {
                    $('#absenTable').html(data);
                }
            });
        });

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
{{-- <script>
    $(document).ready(function() {
        
    });
</script> --}}


