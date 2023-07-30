<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan</title>
</head>
<body onload="window.print()">
    <div style="text-align: center">
        <h3>PEMERINTAH KOTA PADANG  <br>
             KECAMATAN LUBUK BEGALUNG <br>
             <span style="font-size: 14px; font-weight: 400">Jl Gurun Laweh</span>
            </h3>
    </div>
    <hr style="border: 1px solid black">

    <div style="text-align: center">
        <h3>
            <u>SURAT KETERANGAN PINDAH DOMISILI</u>
            <br>
            <span style="font-size: 14px">No. 12/ Sekrt-RT/III/{{ date('Y') }}</span>
        </h3>
    </div>

    <br><br>
    <dd style="text-indent: 40px; margin-bottom: 20px">Yang bertanda tangan dibawah ini Lurah Kelurahan Gurun Laweh Nan XX, menerangkan dengan sebenarnya bahwa :</dd>
    <table style="width: 80%; margin-left:15%">
        <tr>
            <td style="height: 25px">1. </td>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $warga->nama }}</td>
        </tr>
        <tr>
            <td style="height: 25px">2. </td>
            <td>Tempat / Tanggal lahir</td>
            <td>:</td>
            <td>{{ $warga->tempat_lahir }} / {{ date('d-m-Y', strtotime( $warga->tgl_lahir)) }}</td>
        </tr>
        <tr>
            <td style="height: 25px">3. </td>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td>{{ $warga->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td style="height: 25px">4. </td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{ $warga->pekerjaan }}</td>
        </tr>
        <tr>
            <td style="height: 25px">6. </td>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $warga->agama }}</td>
        </tr>
        <tr>
            <td style="height: 25px">7. </td>
            <td>Status perkawinan</td>
            <td>:</td>
            <td>{{ $warga->status_kawin }}</td>
        </tr>

        <tr>
            <td style="height: 25px">8. </td>
            <td>Warga negara</td>
            <td>:</td>
            <td>{{ $warga->kewarganegaraan }}</td>
        </tr>

        <tr>
            <td style="height: 25px">9. </td>
            <td>Alamat asal</td>
            <td>:</td>
            <td>{{ $warga->alamat }}</td>
        </tr>

        <tr>
            <td style="height: 25px">10. </td>
            <td>Pindah ke</td>
            <td>:</td>
            <td>{{ $warga->alamat_pindah }}</td>
        </tr>
        <tr>
            <td style="height: 25px">11. </td>
            <td>Alasan pindah</td>
            <td>:</td>
            <td>{{ $warga->alasan_pindah }}</td>
        </tr>
    </table>
    <br><br>
    <dd style="text-indent: 40px; margin-bottom: 20px">Demikian surat keterangan ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.</dd>

<br><br>
    <div style="float: right; margin-right:3%">
        <dir style="text-align: center">
            <p>Padang, {{ date('d-m-Y') }}</p>
            <p>mengetahui</p>
            <br><br><br>
            <p>Aditya Perdana Rizal</p>
        </dir>
    </div>
</body>
</html>
