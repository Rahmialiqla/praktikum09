<html>
<head>
    <title>Biodata Mahasiswa STT-NF</title>
</head>
<body>
    @php
        $nama = 'Rahmi Al iqla';
        $nim = '0110123277';
        $prodi = 'Sistem Inforasi';
        $angkatan = '2023';
    @endphp

    <h1>Biodata</h1>
    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Prodi: {{ $prodi }}</p>
    <p>Angkatan: {{ $angkatan }}</p>
</body>
</html>