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
            <span style="font-size: 14px; font-weight: 400">Jl Gurun Laweh Nan XX, Lubuk Begalung, Padang City, West Sumatra 25144, Indonesia </span>
           </h3>
    </div>
    <hr style="border: 1px solid black">
    <table style="width: 80%;margin-bottom: 20px">
        <tr style="text-align: left">
            <th>KELURAHAN</th>
            <th>:</th>
            <th>GURUN LAWEH NAN XX</th>
        </tr>
        <tr style="text-align: left">
            <th>LAPORAN BULAN</th>
            <th>:</th>
            <th>{{ $bulan }} {{ $tahun }}</th>
        </tr>
    </table>

    <table border="1" style="width: 100%; border-collapse: collapse">
        <thead>
            <tr>
                <th rowspan="2">NO</th>
                <th rowspan="2">PERINCIAN</th>
                <th colspan="2">WNI</th>
                <th colspan="2">WNA</th>
            </tr>
            <tr>
                <th>L</th>
                <th>P</th>
                <th>L</th>
                <th>P</th>
            </tr>
        </thead>
        <tbody>
            <tr style="text-align: center">
                <td style="height: 30px">1</td>
                <td style="text-align: left">Penduduk</td>
                <td>{{ $penduduk_wni_L - $kelahiran_wni_L  -$datang_wni_L + $kematian_wni_L + $pindah_wni_L }}</td>
                <td>{{ $penduduk_wni_P - $kelahiran_wni_P  -$datang_wni_P + $kematian_wni_P + $pindah_wni_P }}</td>
                <td>{{ $penduduk_wna_L - $kelahiran_wna_L  -$datang_wna_L + $kematian_wna_L + $pindah_wna_L}}</td>
                <td>{{ $penduduk_wna_P - $kelahiran_wna_P  -$datang_wna_P + $kematian_wna_P + $pindah_wna_P }}</td>
            </tr>
            <tr style="text-align: center">
                <td style="height: 30px">2</td>
                <td style="text-align: left">Kelahiran Bulan ini</td>
                <td>{{ $kelahiran_wni_L }}</td>
                <td>{{ $kelahiran_wni_P }}</td>
                <td>{{ $kelahiran_wna_L }}</td>
                <td>{{ $kelahiran_wna_P }}</td>
            </tr>
            <tr style="text-align: center">
                <td style="height: 30px">3</td>
                <td style="text-align: left">Kematian Bulan ini</td>
                <td>{{ $kematian_wni_L }}</td>
                <td>{{ $kematian_wni_P }}</td>
                <td>{{ $kematian_wna_L }}</td>
                <td>{{ $kematian_wna_P }}</td>
            </tr>
            <tr style="text-align: center">
                <td style="height: 30px">4</td>
                <td style="text-align: left">Pendatang Bulan ini</td>
                <td>{{ $datang_wni_L }}</td>
                <td>{{ $datang_wni_P }}</td>
                <td>{{ $datang_wna_L }}</td>
                <td>{{ $datang_wna_P }}</td>
            </tr>
            <tr style="text-align: center">
                <td style="height: 30px">5</td>
                <td style="text-align: left">Pindah Bulan ini</td>
                <td>{{ $pindah_wni_L }}</td>
                <td>{{ $pindah_wni_P }}</td>
                <td>{{ $pindah_wna_L }}</td>
                <td>{{ $pindah_wna_P }}</td>
            </tr>
            <tr style="text-align: center">
                <th style="height: 30px">6</th>
                <th style="text-align: left">Total Penduduk Akhir bulan ini</th>
                <th>{{ ($penduduk_wni_L - $kelahiran_wni_L -$datang_wni_L + $kematian_wni_L + $pindah_wni_L) + $kelahiran_wni_L - $kematian_wni_L + $datang_wni_L - $pindah_wni_L }}</th>
                <th>{{ ($penduduk_wni_P - $kelahiran_wni_P -$datang_wni_P + $kematian_wni_P + $pindah_wni_P) + $kelahiran_wni_P - $kematian_wni_P + $datang_wni_P - $pindah_wni_P }}</th>
                <th>{{ ($penduduk_wna_L - $kelahiran_wna_L -$datang_wna_L + $kematian_wna_L + $pindah_wna_L) + $kelahiran_wna_L - $kematian_wna_L + $datang_wna_L - $pindah_wna_L }}</th>
                <th>{{ ($penduduk_wna_P - $kelahiran_wna_P -$datang_wna_P + $kematian_wna_P + $pindah_wna_P) + $kelahiran_wna_P - $kematian_wna_P + $datang_wna_P - $pindah_wna_P }}</th>
            </tr>
        </tbody>
    </table>
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
