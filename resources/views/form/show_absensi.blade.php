@if (count($absensi) > 0)
    <form action="/siswa/ubahabsen" method="POST" enctype="multipart/form-data">
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
                </tr>
            </thead>
            <tbody>
                @foreach ($absensi as $item)
                    <tr>
                        <td scope="row"><input type="hidden" name="id[]"
                                value="{{ $item->id }}">{{ $loop->iteration }}</td>
                        <td><span>{{ $item->siswaa->nama_siswa }}</span><input type="hidden" name="id_siswa[]"
                                value="{{ $item->id_siswa }}" class="no-border"> </td>
                        <td><select class="form-select" aria-label="Default select example" name="jam1[]">
                                <option selected>{{ $item->jam1 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam2[]">
                                <option selected>{{ $item->jam2 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam3[]">
                                <option selected>{{ $item->jam3 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam4[]">
                                <option selected>{{ $item->jam4 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam5[]">
                                <option selected>{{ $item->jam5 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam6[]">
                                <option selected>{{ $item->jam6 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam7[]">
                                <option selected>{{ $item->jam7 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam8[]">
                                <option selected>{{ $item->jam8 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam9[]">
                                <option selected>{{ $item->jam9 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        <td><select class="form-select" aria-label="Default select example" name="jam10[]">
                                <option selected>{{ $item->jam10 }}</option>
                                <option>S</option>
                                <option>I</option>
                                <option>A</option>
                                <option>N</option>
                            </select></td>
                        
                            <input type="hidden" value="{{ $item->tanggal_absen }}" name="tanggal_absen[]">
                            <input type="hidden" value="{{ $item->id_kelas }}" name="id_kelas[]">
                       



                    </tr>
                @endforeach

            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Success</button>
    </form>
@else
    <p>Tidak ada data absensi.</p>
@endif
