<x-landing-layout>
    {{-- data --}}

    <div class="mt-28 text-center" data-aos="zoom-in">
        <h1 class="text-darken text-2xl font-semibold">Data Desa <span class="text-gray-600">{{ config('app.name') }}
            </span></h1>
        <p class="my-5 text-gray-500 lg:px-96">
            {{ $content->deskripsi_data_desa }}
        </p>
    </div>

    <div class="flex flex-wrap justify-center gap-4 text-center">
        {{-- <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="data-penduduk">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jumlah penduduk Desa {{ config('app.name') }}
 memberikan
                    gambaran tentang potensi sumber daya manusia yang dapat dioptimalkan untuk pembangunan desa. Kami
                    menyediakan informasi terbaru dan akurat mengenai demografi penduduk.
                </p>
            </div>
        </div> --}}

        <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
            <div id="data-transportasi">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Infrastruktur transportasi di Desa
                    {{ config('app.name') }}

                    memainkan peran penting dalam mendukung mobilitas masyarakat dan perekonomian desa. Informasi ini
                    mencakup ketersediaan sarana transportasi serta aksesibilitas desa.
                </p>
            </div>
        </div>

        <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
            <div id="data-peternakan">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Peternakan di Desa {{ config('app.name') }}
                    mencerminkan
                    potensi ekonomi yang kuat, dengan data mengenai jenis hewan ternak yang dikelola oleh warga desa.
                    Informasi ini penting untuk mendukung pengembangan sektor pertanian dan peternakan.
                </p>
            </div>
        </div>


        <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
            <div id="gender-chart">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Peternakan di Desa {{ config('app.name') }}
                    mencerminkan
                    potensi ekonomi yang kuat, dengan data mengenai jenis hewan ternak yang dikelola oleh warga desa.
                    Informasi ini penting untuk mendukung pengembangan sektor pertanian dan peternakan.
                </p>
            </div>
        </div>


        <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
            <div id="status-chart">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Peternakan di Desa {{ config('app.name') }}
                    mencerminkan
                    potensi ekonomi yang kuat, dengan data mengenai jenis hewan ternak yang dikelola oleh warga desa.
                    Informasi ini penting untuk mendukung pengembangan sektor pertanian dan peternakan.
                </p>
            </div>
        </div>



    </div>

    <div class="mt-10 flex flex-wrap justify-center gap-4 text-center">
        {{-- <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="data-sarana">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Sarana dan prasarana desa menjadi pondasi
                    penting dalam meningkatkan kualitas hidup masyarakat. Data ini mencakup fasilitas umum seperti
                    kesehatan, pendidikan, dan fasilitas sosial lainnya.</p>
            </div>
        </div> --}}

        <div class="max-w-sm rounded-lg border border-gray-200 bg-white shadow dark:border-gray-700 dark:bg-gray-800">
            <div id="kondisi-rumah">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Data mengenai kondisi rumah tangga di Desa
                    {{ config('app.name') }}
                    memberikan gambaran mengenai taraf hidup masyarakat dan kualitas infrastruktur perumahan
                    yang tersedia</p>
            </div>
        </div>

        {{-- <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div id="alat-komunikasi">
            </div>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Ketersediaan alat komunikasi menjadi
                    penunjang penting dalam perkembangan desa, dengan data mengenai tingkat aksesibilitas terhadap
                    jaringan komunikasi.
                </p>
            </div>
        </div> --}}


    </div>

    {{-- <div class=" mb-8 border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 md:mb-12 md:grid-cols-2 bg-white dark:bg-gray-800 mx-10 lg:mx-52 mt-10"
        id="data-pencaharian">
    </div> --}}

    <div class="mx-10 mb-8 mt-10 rounded-lg border border-gray-200 bg-white shadow-sm md:mb-12 md:grid-cols-2 lg:mx-52 dark:border-gray-700 dark:bg-gray-800"
        id="data-pendidikan">

    </div>

    <div class="mx-10 mb-8 mt-10 rounded-lg border border-gray-200 bg-white shadow-sm md:mb-12 md:grid-cols-2 lg:mx-52 dark:border-gray-700 dark:bg-gray-800"
        id="data-usaha">
    </div>




    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script>
        // Grafik Jenis Kelamin
        Highcharts.chart('gender-chart', {
            chart: {
                type: 'pie'
            },
            title: {
                text: 'Data Jenis Kelamin'
            },
            series: [{
                name: 'Jumlah',
                colorByPoint: true,
                data: [{
                        name: 'Laki - Laki',
                        y: {{ $maleCount }}
                    },
                    {
                        name: 'Perempuan',
                        y: {{ $femaleCount }}
                    }
                ]
            }]
        });



        // Grafik Status Resident
        Highcharts.chart('status-chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Status Penduduk'
            },
            xAxis: {
                categories: @json($statusResidents->pluck('status_resident'))
            },
            series: [{
                name: 'Jumlah',
                data: @json($statusResidents->pluck('count'))
            }]
        });


        // Highcharts.chart('data-penduduk', {
        //     chart: {
        //         type: 'column'
        //     },
        //     title: {
        //         text: 'Data Jumlah Penduduk per Dusun',
        //         align: 'left'
        //     },
        //     subtitle: {
        //         text: 'Sumber: Data Survei Desa',
        //         align: 'left'
        //     },
        //     xAxis: {
        //         categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
        //         crosshair: true
        //     },
        //     yAxis: [{
        //         min: 0,
        //         title: {
        //             text: 'Jumlah Penduduk'
        //         }
        //     }, {
        //         title: {
        //             text: 'Jumlah KK'
        //         },
        //         opposite: true
        //     }],
        //     tooltip: {
        //         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        //             '<td style="padding:0"><b>{point.y}</b></td></tr>',
        //         footerFormat: '</table>',
        //         shared: true,
        //         useHTML: true
        //     },
        //     plotOptions: {
        //         column: {
        //             pointPadding: 0.2,
        //             borderWidth: 0
        //         }
        //     },
        //     series: [{
        //         name: 'Laki-laki',
        //         data: [104, 171, 89, 142]
        //     }, {
        //         name: 'Perempuan',
        //         data: [87, 164, 88, 131]
        //     }, {
        //         name: 'Jumlah KK',
        //         yAxis: 1,
        //         type: 'spline',
        //         data: [56, 99, 52, 74],
        //         tooltip: {
        //             valueSuffix: ' KK'
        //         }
        //     }]
        // });

        Highcharts.chart('data-transportasi', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Alat Transportasi per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: @json($villages),
                crosshair: true
            },
            yAxis: [{
                min: 0,
                title: {
                    text: 'Jumlah Kendaraan'
                }
            }, {
                title: {
                    text: 'Jumlah Pemilik'
                },
                opposite: true
            }],
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Mobil',
                data: @json($transportationStats['carCounts'])
            }, {
                name: 'Motor',
                data: @json($transportationStats['motorcycleCounts'])
            }, {
                name: 'Bentor',
                data: @json($transportationStats['bentorCounts'])
            }, {
                name: 'Pemilik Mobil',
                type: 'spline',
                yAxis: 1,
                data: @json($transportationStats['carOwners']),
                tooltip: {
                    valueSuffix: ' orang'
                }
            }, {
                name: 'Pemilik Motor',
                type: 'spline',
                yAxis: 1,
                data: @json($transportationStats['motorcycleOwners']),
                tooltip: {
                    valueSuffix: ' orang'
                }
            }, {
                name: 'Pemilik Bentor',
                type: 'spline',
                yAxis: 1,
                data: @json($transportationStats['bentorOwners']),
                tooltip: {
                    valueSuffix: ' orang'
                }
            }]
        });

        Highcharts.chart('data-peternakan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Peternakan per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: @json($farmStats['villages']), // Dynamic village names
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Hewan'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Sapi',
                data: @json($farmStats['cowCounts']) // Dynamic cow count
            }, {
                name: 'Kambing',
                data: @json($farmStats['goatCounts']) // Dynamic goat count
            }, {
                name: 'Anjing',
                data: @json($farmStats['dogCounts']) // Dynamic dog count
            }, {
                name: 'Kucing',
                data: @json($farmStats['catCounts']) // Dynamic cat count
            }, {
                name: 'Ayam',
                data: @json($farmStats['chickenCounts']) // Dynamic chicken count
            }, {
                name: 'Itik',
                data: @json($farmStats['duckCounts']) // Dynamic duck count
            }]
        });
        // Highcharts.chart('data-peternakan', {
        //     chart: {
        //         type: 'column'
        //     },
        //     title: {
        //         text: 'Data Peternakan per Dusun',
        //         align: 'left'
        //     },
        //     subtitle: {
        //         text: 'Sumber: Data Survei Desa',
        //         align: 'left'
        //     },
        //     xAxis: {
        //         categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
        //         crosshair: true
        //     },
        //     yAxis: {
        //         min: 0,
        //         title: {
        //             text: 'Jumlah Hewan'
        //         }
        //     },
        //     tooltip: {
        //         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        //             '<td style="padding:0"><b>{point.y}</b></td></tr>',
        //         footerFormat: '</table>',
        //         shared: true,
        //         useHTML: true
        //     },
        //     plotOptions: {
        //         column: {
        //             pointPadding: 0.2,
        //             borderWidth: 0
        //         }
        //     },
        //     series: [{
        //         name: 'Sapi',
        //         data: [0, 0, 3, 1]
        //     }, {
        //         name: 'Kambing',
        //         data: [48, 1, 4, 19]
        //     }, {
        //         name: 'Anjing',
        //         data: [0, 0, 0, 1]
        //     }, {
        //         name: 'Kucing',
        //         data: [0, 0, 0, 9]
        //     }, {
        //         name: 'Ayam',
        //         data: [72, 47, 48, 57]
        //     }, {
        //         name: 'Itik',
        //         data: [0, 0, 0, 0]
        //     }]
        // });

        // Highcharts.chart('data-pencaharian', {
        //     chart: {
        //         type: 'column'
        //     },
        //     title: {
        //         text: 'Data Mata Pencaharian per Dusun',
        //         align: 'left'
        //     },
        //     subtitle: {
        //         text: 'Sumber: Data Survei Desa',
        //         align: 'left'
        //     },
        //     xAxis: {
        //         categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
        //         crosshair: true,
        //         accessibility: {
        //             description: 'Dusun'
        //         }
        //     },
        //     yAxis: {
        //         min: 0,
        //         title: {
        //             text: 'Jumlah Penduduk'
        //         }
        //     },
        //     tooltip: {
        //         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        //             '<td style="padding:0"><b>{point.y} orang</b></td></tr>',
        //         footerFormat: '</table>',
        //         shared: true,
        //         useHTML: true
        //     },
        //     plotOptions: {
        //         column: {
        //             pointPadding: 0.2,
        //             borderWidth: 0
        //         }
        //     },
        //     series: [{
        //         name: 'NELAYAN',
        //         data: [29, 50, 6, 5]
        //     }, {
        //         name: 'PETANI',
        //         data: [15, 20, 21, 42]
        //     }, {
        //         name: 'SWASTA',
        //         data: [5, 11, 6, 9]
        //     }, {
        //         name: 'HONORER',
        //         data: [6, 6, 3, 3]
        //     }, {
        //         name: 'PNS',
        //         data: [1, 2, 1, 2]
        //     }, {
        //         name: 'BURUH HARIAN',
        //         data: [1, 7, 5, 10]
        //     }, {
        //         name: 'TUKANG BANGUNAN',
        //         data: [4, 8, 0, 0]
        //     }, {
        //         name: 'ASISTEN RT',
        //         data: [1, 0, 0, 0]
        //     }, {
        //         name: 'LAINNYA',
        //         data: [11, 0, 14, 26]
        //     }]
        // });

        Highcharts.chart('data-pendidikan', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Tingkat Pendidikan per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: @json($villages),
                crosshair: true,
                accessibility: {
                    description: 'Dusun'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Penduduk'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} orang</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    grouping: false,
                    shadow: false,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'TIDAK/BELUM SEKOLAH (L)',
                color: 'rgba(158, 159, 163, 0.9)',
                data: @json($educationStats['belumSekolahL']),
                pointPadding: 0.3,
                pointPlacement: -0.2
            }, {
                name: 'TIDAK/BELUM SEKOLAH (P)',
                color: 'rgba(158, 159, 163, 0.5)',
                data: @json($educationStats['belumSekolahP']),
                pointPadding: 0.4,
                pointPlacement: -0.2
            }, {
                name: 'TAMAT SD/SEDERAJAT (L)',
                color: 'rgba(54, 162, 235, 0.9)',
                data: @json($educationStats['tamatSDL']),
                pointPadding: 0.3,
                pointPlacement: -0.1
            }, {
                name: 'TAMAT SD/SEDERAJAT (P)',
                color: 'rgba(54, 162, 235, 0.5)',
                data: @json($educationStats['tamatSDP']),
                pointPadding: 0.4,
                pointPlacement: -0.1
            }, {
                name: 'TAMAT SMP/SEDERAJAT (L)',
                color: 'rgba(255, 206, 86, 0.9)',
                data: @json($educationStats['tamatSMPL']),
                pointPadding: 0.3,
                pointPlacement: 0
            }, {
                name: 'TAMAT SMP/SEDERAJAT (P)',
                color: 'rgba(255, 206, 86, 0.5)',
                data: @json($educationStats['tamatSMPP']),
                pointPadding: 0.4,
                pointPlacement: 0
            }, {
                name: 'TAMAT SMA/SEDERAJAT (L)',
                color: 'rgba(75, 192, 192, 0.9)',
                data: @json($educationStats['tamatSMAL']),
                pointPadding: 0.3,
                pointPlacement: 0.1
            }, {
                name: 'TAMAT SMA/SEDERAJAT (P)',
                color: 'rgba(75, 192, 192, 0.5)',
                data: @json($educationStats['tamatSMAP']),
                pointPadding: 0.4,
                pointPlacement: 0.1
            }, {
                name: 'TAMAT PT (L)',
                color: 'rgba(153, 102, 255, 0.9)',
                data: @json($educationStats['tamatPTL']),
                pointPadding: 0.3,
                pointPlacement: 0.2
            }, {
                name: 'TAMAT PT (P)',
                color: 'rgba(153, 102, 255, 0.5)',
                data: @json($educationStats['tamatPTP']),
                pointPadding: 0.4,
                pointPlacement: 0.2
            }]
        });

        Highcharts.chart('data-usaha', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Usaha Ekonomi Masyarakat per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: @json($economyStats['villages']), // Nama dusun dari village_name
                crosshair: true,
                accessibility: {
                    description: 'Dusun'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Usaha'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y} usaha</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'PERTOKOAN',
                data: @json($economyStats['pertokoan'])
            }, {
                name: 'PERKIOSAN',
                data: @json($economyStats['perkiosan'])
            }, {
                name: 'RM OWNER',
                data: @json($economyStats['rm_owner'])
            }, {
                name: 'PERBENGKELAN',
                data: @json($economyStats['perbengkelan'])
            }, {
                name: 'MEBEL KAYU',
                data: @json($economyStats['mebel'])
            }, {
                name: 'PANGKALAN LPG',
                data: @json($economyStats['pangkalanLPG'])
            }, {
                name: 'TAYLOR',
                data: @json($economyStats['taylor'])
            }, {
                name: 'LAINNYA',
                data: @json($economyStats['lainnya'])
            }]
        });


        // Highcharts.chart('data-sarana', {
        //     chart: {
        //         type: 'column'
        //     },
        //     title: {
        //         text: 'Data Sarana & Prasarana Perikanan per Dusun',
        //         align: 'left'
        //     },
        //     subtitle: {
        //         text: 'Sumber: Data Survei Desa',
        //         align: 'left'
        //     },
        //     xAxis: {
        //         categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
        //         crosshair: true
        //     },
        //     yAxis: {
        //         min: 0,
        //         title: {
        //             text: 'Jumlah'
        //         }
        //     },
        //     tooltip: {
        //         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        //             '<td style="padding:0"><b>{point.y}</b></td></tr>',
        //         footerFormat: '</table>',
        //         shared: true,
        //         useHTML: true
        //     },
        //     plotOptions: {
        //         column: {
        //             pointPadding: 0.2,
        //             borderWidth: 0
        //         }
        //     },
        //     series: [{
        //         name: 'Tambatan Perahu',
        //         data: [13, 7, 0, 3]
        //     }, {
        //         name: 'Pasar Ikan',
        //         data: [0, 1, 0, 0]
        //     }, {
        //         name: 'Pajeko',
        //         data: [0, 0, 0, 0]
        //     }, {
        //         name: 'Kapal Ikan',
        //         data: [0, 0, 0, 0]
        //     }, {
        //         name: 'Perahu Bodi',
        //         data: [0, 0, 0, 0]
        //     }, {
        //         name: 'Mesin Tempel',
        //         data: [7, 8, 0, 3]
        //     }, {
        //         name: 'Katintin',
        //         data: [12, 0, 0, 1]
        //     }]
        // });

        // Highcharts.chart('alat-komunikasi', {
        //     chart: {
        //         type: 'column'
        //     },
        //     title: {
        //         text: 'Data Kepemilikan Alat Komunikasi per Dusun',
        //         align: 'left'
        //     },
        //     subtitle: {
        //         text: 'Sumber: Data Survei Desa',
        //         align: 'left'
        //     },
        //     xAxis: {
        //         categories: ['ILOHELUMA', 'PKT', 'UAB. KIKI', 'ILOPONU'],
        //         crosshair: true
        //     },
        //     yAxis: {
        //         min: 0,
        //         title: {
        //             text: 'Jumlah Pemilik'
        //         }
        //     },
        //     tooltip: {
        //         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
        //             '<td style="padding:0"><b>{point.y}</b></td></tr>',
        //         footerFormat: '</table>',
        //         shared: true,
        //         useHTML: true
        //     },
        //     plotOptions: {
        //         column: {
        //             pointPadding: 0.2,
        //             borderWidth: 0
        //         }
        //     },
        //     series: [{
        //         name: 'Televisi',
        //         data: [15, 17, 13, 28]
        //     }, {
        //         name: 'Parabola',
        //         data: [13, 14, 6, 15]
        //     }, {
        //         name: 'Handphone',
        //         data: [79, 68, 69, 72]
        //     }, {
        //         name: 'Radio',
        //         data: [1, 0, 0, 0]
        //     }]
        // });

        Highcharts.chart('kondisi-rumah', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Data Kondisi Tempat Tinggal per Dusun',
                align: 'left'
            },
            subtitle: {
                text: 'Sumber: Data Survei Desa',
                align: 'left'
            },
            xAxis: {
                categories: {!! json_encode($villages) !!}, // Gunakan data dinamis untuk desa
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Rumah'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Atap - Genteng',
                data: {!! json_encode($livingConditionsStats['atapGenteng']) !!}
            }, {
                name: 'Atap - Seng',
                data: {!! json_encode($livingConditionsStats['atapSeng']) !!}
            }, {
                name: 'Atap - Rumbia',
                data: {!! json_encode($livingConditionsStats['atapRumbia']) !!}
            }, {
                name: 'Dinding - Semen',
                data: {!! json_encode($livingConditionsStats['dindingSemen']) !!}
            }, {
                name: 'Dinding - Kayu',
                data: {!! json_encode($livingConditionsStats['dindingKayu']) !!}
            }, {
                name: 'Lantai - Semen',
                data: {!! json_encode($livingConditionsStats['lantaiSemen']) !!}
            }, {
                name: 'Lantai - Keramik',
                data: {!! json_encode($livingConditionsStats['lantaiKeramik']) !!}
            }]
        });
    </script>
</x-landing-layout>
