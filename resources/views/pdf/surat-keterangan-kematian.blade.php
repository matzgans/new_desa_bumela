<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Kematian</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            text-align: justify;
            font-size: 16px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            position: relative;
            text-align: center;
            line-height: 1.5;
        }

        .header .logo {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 20;
        }

        .header .logo img {
            display: inline;
            width: 60px;
            height: 60px;
            padding: 20px 0px;
        }

        .header h2 {
            font-size: 18px;
            text-transform: uppercase;
            margin: 0;
        }

        .header p {
            font-size: 13px;
            margin: 0;
        }

        /* Mengatur jarak antara gambar dan teks agar tidak bertumpuk */
        .header .header-text {
            padding-left: 0px;
            /* Beri padding kiri agar teks tidak menutupi gambar */
        }

        .content h3 {
            margin: 0px;
            margin-top: 5px;
            text-decoration: underline;
            text-align: center;
            font-size: 16px;
        }

        .content p {
            margin: 0px;
            text-align: center;
            font-size: 16px;
            margin-top: 4px;
            margin-bottom: 30px;
        }

        .content .table {
            margin-left: 30px;
            margin-top: 20px;
            margin-bottom: 20px;
        }



        .footer .table {
            margin-top: 30px;
            width: 55%;
            margin-left: 60%;
        }

        .footer .table .text-table {
            text-align: center;
            margin-right: 80px;
            font-size: 16px;
        }

        .footer .table .text-table .kepala-desa {
            font-weight: bold;
            margin: 0px;
        }

        .footer .table .text-table .nama-kepala-desa {
            font-weight: bold;
            margin: 0px;
            margin-top: 50;
            text-decoration: underline;
        }

        .footer .table .text-table .nip {
            margin: 0px;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Header Section -->
        <x-pdf-header />
        <hr>
        <div class="content">
            <h3>SURAT KETERANGAN KEMATIAN</h3>
            <p style="margin: 0px;">NOMOR : {{ $no_surat }}</p>

            <div class="text-pendahuluan">Yang bertanda tangan dibawah ini :</div>
            <div class="table" style="margin: 0px;">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama Lengkap</td>
                        <td>:</td>
                        <td style="font-weight: bold;">{{ ucfirst($kepala_desa) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Jabatan</td>
                        <td>:</td>
                        <td>Kepala Desa</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Alamat</td>
                        <td>:</td>
                        <td>Desa Bumela Kecamatan Bilato
                            Kab. Gorontalo </td>
                    </tr>

                </table>
            </div>
            <div class="text-pendahuluan-lanjutan" style="margin: 0px;">Dengan ini menerangkan dengan sebenarnya,
                ‘berdasarkan keterangan
                pelapor,Nama: {{ ucfirst($name_saksi1) }}; NiK: 7501095708470001 Bahwa telah meninggal dunia pada hari:
                Kamis
                tanggal
                15-08-2024 jam 20.00 Pagi di Desa/Kelurahan {{ config('app.name') }} Kecamatan Bilato Kabupaten
                Gorontalo
                Provinsi
                Gorontalo.</div>
            <div class="table" style="margin: 0px;">
                <table>
                    <tr style="margin: 0px;">
                        <td style="padding-right: 50px">Nama Kepala Keluarga</td>
                        <td>:</td>
                        <td>{{ ucfirst($name) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Nomor Kartu Keluarga</td>
                        <td>:</td>
                        <td>{{ ucfirst($name) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Nama / NIK Meninggal</td>
                        <td>:</td>
                        <td>{{ ucfirst($name) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ ucfirst($birth) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Pekerjaan</td>
                        <td>:</td>
                        <td>{{ ucfirst($job) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Alamat</td>
                        <td>:</td>
                        <td>{{ ucfirst($address) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Meninggal Karena</td>
                        <td>:</td>
                        <td>{{ ucfirst($cause_death) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Meninggal Di</td>
                        <td>:</td>
                        <td>{{ ucfirst($place_death) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Anak Ke</td>
                        <td>:</td>
                        <td>{{ ucfirst('Anak Ke 100') }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Nama Ayah / NIK</td>
                        <td>:</td>
                        <td>{{ ucfirst($name_ayah) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Pekerjaan</td>
                        <td>:</td>
                        <td>{{ ucfirst($job_ayah) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Alamat</td>
                        <td>:</td>
                        <td>{{ ucfirst($address_ayah) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Nama Ibu / NIK</td>
                        <td>:</td>
                        <td>{{ ucfirst($name_ibu) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Pekerjaan</td>
                        <td>:</td>
                        <td>{{ ucfirst($job_ibu) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Alamat</td>
                        <td>:</td>
                        <td>{{ ucfirst($address_ibu) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Nama Sakis 1 / NIK</td>
                        <td>:</td>
                        <td>{{ ucfirst($name_saksi1) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Tempat, Tanggal Lahir Saksi</td>
                        <td>:</td>
                        <td>{{ ucfirst($birth_saksi1) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Pekerjaan</td>
                        <td>:</td>
                        <td>{{ ucfirst($job_saksi1) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Alamat</td>
                        <td>:</td>
                        <td>{{ ucfirst($address_saksi1) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Nama Sakis 2 / NIK</td>
                        <td>:</td>
                        <td>{{ ucfirst($name_saksi2) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Tempat, Tanggal Lahir Saksi</td>
                        <td>:</td>
                        <td>{{ ucfirst($birth_saksi2) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Pekerjaan</td>
                        <td>:</td>
                        <td>{{ ucfirst($job_saksi2) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Alamat</td>
                        <td>:</td>
                        <td>{{ ucfirst($address_saksi2) }}</td>
                    </tr>
                </table>
            </div>
            <div class="text-akhir">Demikian Keterangan Kematian ini dibuat untuk perlunya.</div>

        </div>
        <div class="footer">
            <div class="table">
                <table>
                    <tr>
                        <td>Dikeluarkan di</td>
                        <td>:</td>
                        <td>{{ config('app.name') }}</td>
                    </tr>
                    <tr>
                        <td>Pada Tanggal</td>
                        <td>:</td>
                        <td>{{ date('d-m-Y') }}</td>
                    </tr>
                </table>

                @if ($tandatangan === 'kades')
                    <div class="text-table">
                        <p class="kepala-desa">Kepala Desa {{ config('app.name') }}</p>
                        <p class="nama-kepala-desa">{{ ucfirst($kepala_desa) }}</p>
                        {{-- <p class="nip">NIP: {{ $nip }}</p> --}}
                    </div>
                @else
                    <div class="text-table">
                        <p class="kepala-desa">A.n Kepala Desa {{ config('app.name') }}</p>
                        <p class="nama-kepala-desa">{{ ucfirst($sekretaris_desa) }}</p>
                        {{-- <p class="nip">NIP: {{ $nip }}</p> --}}
                    </div>
                @endif
            </div>
        </div>


    </div>

</body>

</html>
