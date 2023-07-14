<x-layout.app>
    @foreach ($profile as $murid)
    <div class="container">
        <div class="header">
            <h1>Profil Siswa</h1>
        </div>

        <div class="profile-info">
            <label>Nama:</label>
            <p>{{ $murid->Nama_Siswa }}</p>
        </div>

        <div class="profile-info">
            <label>NIS:</label>
            <p>{{ $murid->NIS }}</p>
        </div>

        <div class="profile-info">
            <label>Jenis Kelamin:</label>
            <p>{{ ($murid->jenis_kelamin == 1) ? 'Laki-laki' : 'Perempuan' }}</p>
        </div>

        @endforeach
</x-layout.app>
