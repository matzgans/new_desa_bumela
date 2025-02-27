<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Kondisi Sosial Ekonomi Orang Tua</title>
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
            <h3>SURAT KETERANGAN
                KONDISI SOSIAL EKONOMI ORANG TUA/WALI MAHASISWA
            </h3>
            <p>Nomor : {{ $no_surat }}</p>

            <div class="text-pendahuluan" style="margin: 0px;">Yang bertanda tangan dibawah ini :</div>
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
            <div class="text-pendahuluan-lanjutan">Menerangkan Bahwa :</div>
            <div class="table" style="margin: 0px;">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama Lengkap</td>
                        <td>:</td>
                        <td>{{ ucfirst($name) }}</td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir</td>
                        <td>:</td>
                        <td>{{ ucfirst($birth) }}</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>{{ ucfirst($gender) }}</td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td>{{ ucfirst($job) }}
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{ ucfirst($address) }}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="text-pendahuluan-lanjutan">Orangtua/wali dari calon mahasiswa baru :</div>
            <div class="table" style="margin: 0px;">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Nama Lengkap</td>
                        <td>:</td>
                        <td>{{ ucfirst($kids_name) }}</td>
                    </tr>
                    <tr>
                        <td>Prodi</td>
                        <td>:</td>
                        <td>{{ ucfirst($prodi) }}</td>
                    </tr>
                    <tr>
                        <td>Nomor HP / Email</td>
                        <td>:</td>
                        <td>{{ ucfirst($contact) }}</td>
                    </tr>
                </table>
            </div>
            <div class="text-pendahuluan-lanjutan">Mengalami penurunan kondisi sosial ekonomi karena
                {{ ucfirst($reason) }}
                sebagai berikut :</div>
            <div class="text-pendahuluan-lanjutan">1. Penurunan penghasilan usaha/bangkrut dengan rerata pendapatan :
            </div>
            <div class="table" style="margin: 0px;">
                <table>
                    <tr>
                        <td style="padding-right: 50px">Pendapatan sebelum {{ ucfirst($reason) }}</td>
                        <td>:</td>
                        <td>{{ ucfirst($pendapatan_sebelum) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Pendapatan Setelah {{ ucfirst($reason) }}</td>
                        <td>:</td>
                        <td>{{ ucfirst($pendapatan_setelah) }}</td>
                    </tr>
                    <tr>
                        <td style="padding-right: 50px">Rerata penurunan pendapatan</td>
                        <td>:</td>
                        <td>{{ ucfirst($penurunan_pendapatan) }}</td>
                    </tr>
                </table>
            </div>
            <div class="text-pendahuluan-lanjutan">Dengan {{ ucfirst($tanggungan) }}</div>
            <div class="text-pendahuluan-lanjutan">Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk dapat
                digunakan sebagaimana mestinya.
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
