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
            <u>SURAT KETERANGAN DOMISILI</u>
            <br>
            <span style="font-size: 14px">No. 12/ Sekrt-RT/III/{{ date('Y') }}</span>
        </h3>
    </div>

    <br><br>
    <dd style="text-indent: 40px; margin-bottom: 20px">Yang bertanda tangan dibawah ini Kepala Lurah Kelurahan Gurun Laweh Nan XX Kecamatan Lubuk Begalung kota Padang dengan ini menerangkan bahwa: </dd>
    <table style="width: 80%; margin-left:20%">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td>{{ $warga->nama }}</td>
        </tr>
        <tr>
            <td>Tempat / Tanggal lahir</td>
            <td>:</td>
            <td>{{ $warga->tempat_lahir }} / {{ date('d-m-Y', strtotime( $warga->tgl_lahir)) }}</td>
        </tr>
        <tr>
            <td>Jenis kelamin</td>
            <td>:</td>
            <td>{{ $warga->jenis_kelamin }}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>{{ $warga->pekerjaan }}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td>{{ $warga->agama }}</td>
        </tr>
        <tr>
            <td>Status perkawinan</td>
            <td>:</td>
            <td>{{ $warga->status_kawin }}</td>
        </tr>

        <tr>
            <td>Warga negara</td>
            <td>:</td>
            <td>{{ $warga->kewarganegaraan }}</td>
        </tr>
    </table>

    <br><br>
    <dd style="text-indent: 40px">Orang tersebut di atas, adalah benar-benar warga kami dan berdomisi di Kelurahan Gurun Laweh Nan XX Kecamatan Lubuk Begalung kota Padang.</dd>
    <br>
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
