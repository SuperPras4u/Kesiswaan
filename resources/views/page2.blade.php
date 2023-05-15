@extends('template')
@section('content')
    <div class="content">

        <div id="dash_box_titlebar">LIHAT ABSENSI</div>
        <div id="dash_box">
            <table border="0" class="nice-table">
                <tr bgcolor="EAEAEA" align="center">
                    <td colspan="5">NAMA : MIA AMALIA AZAHRA</td>
                    <td colspan="4">Nomor pegawai : * sensor :3 *</td>
                </tr>
                <tr align="center" bgcolor="EAEAEA">
                    <td>No.</td>
                    <td>Hari</td>
                    <td>Tanggal</td>
                    <td>Jadwal Masuk</td>
                    <td>Masuk</td>
                    <td>Jadwal Pulang</td>
                    <td>Pulang</td>
                    <td>Keterangan</td>
                    <td>Lama TL/PSW</td>
                </tr>

                <tr bgcolor=#0084b2 class=simplebuttondua>
                    <td align=center>1.</td>
                    <td>Minggu</td>
                    <td align=center>1-04-2018</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>Libur</td>
                    <td align=center>-</td>
                </tr>

                <tr bgcolor=#EAEAEA class=simplebuttondua>
                    <td align=center>2.</td>
                    <td>Senin</td>
                    <td align=center>2-04-2018</td>
                    <td align=center>07:30</td>
                    <td align=center>06:52</td>
                    <td align=center>17:00</td>
                    <td align=center>17:16</td>
                    <td align=center>-</td>
                    <td align=center>-</td>
                </tr>

                <tr bgcolor=#FFFFFF class=simplebuttondua>
                    <td align=center>3.</td>
                    <td>Selasa</td>
                    <td align=center>3-04-2018</td>
                    <td align=center>07:30</td>
                    <td align=center>07:29</td>
                    <td align=center>17:00</td>
                    <td align=center>17:02</td>
                    <td align=center>-</td>
                    <td align=center>-</td>
                </tr>

                <!-- .... dan seterusnya hingga akhir bulan ... -->

                <tr bgcolor=#FFFFFF class=simplebuttondua>
                    <td align=center>27.</td>
                    <td>Jumat</td>
                    <td align=center>27-04-2018</td>
                    <td align=center>07:30</td>
                    <td align=center>00:00</td>
                    <td align=center>17:00</td>
                    <td align=center>00:00</td>
                    <td align=center>Belum Waktu Absensi</td>
                    <td align=center>-</td>
                </tr>

                <tr bgcolor=#0084b2 class=simplebuttondua>
                    <td align=center>28.</td>
                    <td>Sabtu</td>
                    <td align=center>28-04-2018</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>Libur</td>
                    <td align=center>-</td>
                </tr>

                <tr bgcolor=#0084b2 class=simplebuttondua>
                    <td align=center>29.</td>
                    <td>Minggu</td>
                    <td align=center>29-04-2018</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>00:00</td>
                    <td align=center>Libur</td>
                    <td align=center>-</td>
                </tr>

                <tr bgcolor=#EAEAEA class=simplebuttondua>
                    <td align=center>30.</td>
                    <td>Senin</td>
                    <td align=center>30-04-2018</td>
                    <td align=center>07:30</td>
                    <td align=center>00:00</td>
                    <td align=center>17:00</td>
                    <td align=center>00:00</td>
                    <td align=center>Belum Waktu Absensi</td>
                    <td align=center>-</td>
                </tr>
            </table>

            {{--  <h1>embohhhhh MIAW</h1>  --}}

        </div>

        {{--  <div class="content">
            <main>

                <h2 class="text-center">
                    Daftar Hadir ...<br>
                    Bulan... Tahun ...
                </h2>

                <div class="table-wrapper">

                    <table class="table-siswa">
                        <thead>
                            <tr>
                                <td rowspan="2">No</td>
                                <td rowspan="2">Nama</td>
                                <td rowspan="2">L/P</td>
                                <td rowspan="2">ID</td>
                                <td colspan="31" class="text-center">Tanggal</td>
                                <td colspan="2">Jumlah</td>
                            </tr>
                            <tr class="table-row-head">
                                <td>Hadir</td>
                                <td>Tidak Hadir</td>
                            </tr>
                        </thead>
                        <tbody class="table-body-content">
                            <tr data-id="001">
                                <td>1</td>
                                <td>Adi</td>
                                <td>L</td>
                                <td>001</td>
                            </tr>
                            <tr data-id="002">
                                <td>2</td>
                                <td>Budi</td>
                                <td>L</td>
                                <td>002</td>
                            </tr>
                            <tr data-id="003">
                                <td>3</td>
                                <td>Wati</td>
                                <td>P</td>
                                <td>003</td>
                            </tr>
                        </tbody>
                    </table>


                </div>

                <h2>Keterangan</h2>

                <ul>
                    <li><span class="box-color true"></span> Hadir</li>
                    <li><span class="box-color false"></span> Tidak Hadir</li>
                </ul>

                <p>
                    Ini hanya contoh. Gunakan file <code>JSON</code> untuk mengisi daftar hadir, daftar nama dll. sesuaikan
                    dengan keperluan
                </p>

                <p>
                    Silahkan tambahkan data tambahan jika diperlukan, misal keterangan kenapa tidak masuk apakah sakit atau
                    ijin, Persentase kehadiran, dll. Perhatikan juga hari libur.
                </p>


            </main>
        </div>  --}}
    </div>
@endsection
