@extends('layouts.landing')

@section('title', 'Home')
@section('addStyleBody', 'padding-top: 3rem;')

@section('content')
    <nav
        style="height: 3rem;"
{{--        class="navbar navbar-light bg-white shadow fixed-top navbar-expand" --}}
        class="navbar bg-blue-300 fixed-top navbar-inverse navbar-light navbar-toggleable-sm navbar-expand-lg nav-bg-mode">
        <div class="container">
            <div class="collapse navbar-collapse wp-navbar-custom" id="navbarText">
                <div class="ml-auto py-1">
                    <a href="{{route('home.new-pengecekan')}}" class="btn btn-blue-600 btn-sm">Cek Sekarang</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="">
        {{--    Hero--}}
        <section class="pt-5P">
            <div class="container h-100P" style="height: 94vh;">
                <div class="row h-100 flex-row-reverse align-items-center">
                    <div class="col-md-6 h-100 align-items-end d-flex">
                        <img src="{{asset('/scaffolding/landing/docter-dbd.png')}}"
{{--                             style="height: 680px;"--}}
                             style="height: 42.5rem;"
                             class="mt-auto"
                             alt="">
                    </div>

                    <div class="col-md-6 h-100 align-items-center d-flex">
                        <div class="w-100">
                            <h1 class="text-blue-300">
                                Website Sistem Pakar Diagnosa DBD
                            </h1>
                            <p class="text-blue-100 mb-5">
                                Silahkan cek diri Anda dengan sistem kami
                            </p>

                            <a href="{{route('home.new-pengecekan')}}" class="btn btn-blue-300">Cek Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-5">
            <div class="container">
                <div class="container">
                    <div class="row d-flex justify-content-between mb-5 py-5">
                        <div class="col-auto">
                            <img src="{{asset('/scaffolding/landing/logo-klikdokter.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-auto">
                            <img src="{{asset('/scaffolding/landing/logo-alodokter.png')}}" alt="" class="w-100">
                        </div>
                        <div class="col-auto">
                            <img src="{{asset('/scaffolding/landing/logo-halodoc.png')}}" alt="" class="w-100">
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-md-8">
                        <h2 class="text-blue-300">
                            Apa itu Sistem Pakar Diagnosa DBD?
                        </h2>

                        <p class="text-blue-100">
                            Sistem pakar adalah program komputer yang menyimulasi penilaian dan perilaku manusia<br/>
                            atau organisasi yang memiliki pengetahuan dan pengalaman ahli dalam bidang tertentu.<br/>
                            Pada sistem pakar yang dikembangkan disini lebih mengarah kepada sistem pakar<br/>
                            diagnosis penyakir demam berdarah
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-white">
            <div class="container py-5">
                <h3 class="h2 mb-5 text-blue-300">Tips Cara Mengatasinya</h3>

                <div class="accordion" id="acTM">
                    <div class="card border-left-0 border-right-0 border-top-0 border-bottom border-blue-600 mb-4 pb-4">
                        <div class="card-header px-0" id="head-tm-01">
                            <div class="cursor-pointer h5 text-blue-100 f-w-500 mb-0"
                                 data-toggle="collapse"
                                 data-target="#collapse-01"
                                 aria-expanded="false"
                                 aria-controls="collapse-01">
                                Pencegahan Demam Berdarah
                            </div>
                        </div>
                        <div id="collapse-01" class="collapse show"
                             aria-labelledby="head-tm-01"
                             data-parent="#acTM">
                            <div class="card-body px-0">
                                <p class="text-blue-100 mb-0">Terdapat berbagai upaya yang dapat dilakukan untuk mencegah demam berdarah, yaitu:</p>

                                <ul class="list-group list-group-flush">
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Anak usia 9-16 tahun seharusnya divaksinasi dengue, sebanyak 3 kali dengan jarak 6 bulan
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Memberantas sarang nyamuk yang dilakukan dalam dua kali pengasapan insektisida atau fogging dengan jarak 1 minggu
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Menguras tempat penampungan air, seperti bak mandi, minimal setiap minggu
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Menutup rapat tempat penampungan air
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Melakukan daur ulang barang yang berpotensi menjaditempat perkembangbiakan nyamuk Aedes aegypti
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Mengatur cahaya yang cukup di dalam rumah
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Memasang kawat anti nyamuk di ventilasi rumah
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Menaburkan bubuk larvasida (abate) pada penampunganair yang sulit dikuras
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Menggunakan kelambu saat tidur
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Menanam tumbuhan pengusir nyamuk
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Menghentikan kebiasaan menggantung pakaian
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Menghindari wilayah daerah yang rentan terjadi infeksi
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Mengenakan pakaian yang longgar
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Menggunakan krim anti-nyamuk yang mengandung N-diethylmetatoluamide (DEET), tetapi jangan gunakan DEET pada anak di bawah 2 tahun.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card border-left-0 border-right-0 border-top-0 border-bottom border-blue-600 mb-4 pb-4">
                        <div class="card-header px-0" id="head-tm-02">
                            <div class="cursor-pointer h5 text-blue-100 f-w-500 mb-0"
                                 data-toggle="collapse"
                                 data-target="#collapse-02"
                                 aria-expanded="false"
                                 aria-controls="collapse-02">
                                Pengobatan Demam Berdarah
                            </div>
                        </div>
                        <div id="collapse-02" class="collapse"
                             aria-labelledby="head-tm-02"
                             data-parent="#acTM">
                            <div class="card-body px-0">
                                <p class="text-blue-100 mb-0">
                                    Pengobatan yang spesifik untuk mengobati demam berdarah saat ini belum ada. Pengobatan bertujuan untuk mengatasi gejala dan mencegah infeksi virus semakin memberat. Beberapa upaya yang dianjurkan dokter, yaitu:
                                </p>

                                <ul class="list-group list-group-flush">
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">Banyak minum cairan agar terhindar dari dehidrasi</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">Cukup istirahat</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">Konsumsi obat penurun panas yang relatif aman dan dianjurkan dokter</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">Menghindari konsumsi obat-obatan pereda nyeri. Hal ini dikarenakan obat-obatan tersebut dapat menimbulkan komplikasi perdarahan.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">Pantau frekuensi buang air kecil dan jumlah urine yang keluar</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card border-left-0 border-right-0 border-top-0 border-bottom border-blue-600 mb-4 pb-4">
                        <div class="card-header px-0" id="head-tm-03">
                            <div class="cursor-pointer h5 text-blue-100 f-w-500 mb-0"
                                 data-toggle="collapse"
                                 data-target="#collapse-03"
                                 aria-expanded="false"
                                 aria-controls="collapse-03">
                                Komplikasi Demam Berdarah
                            </div>
                        </div>
                        <div id="collapse-03" class="collapse"
                             aria-labelledby="head-tm-03"
                             data-parent="#acTM">
                            <div class="card-body px-0">
                                <p class="text-blue-100 mb-0">
                                    Saat demam berdarah terlambat untuk ditangani, maka komplikasi akan terjadi. Komplikasi demam berdara atau dengue shock syndrome (DSS) memiliki beberapa gejala dan tanda, yaitu:
                                </p>

                                <ul class="list-group list-group-flush">
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Tanda perdarahan, seperti mimisan, gusi berdarah, perdarahan di bawah kulit, muntah hitam, batuk darah, maupun buang air besar dengan feses kehitaman
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Tekanan darah menurun
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Kulit basah dan terasa dingin
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Denyut nadi melemah
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Frekuensi buang air kecil menurun dan jumlah urine yang keluar sedikit
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Mulut kering
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="pt-3 px-0">
                                        <div class="box-avatar align-items-center ">
                                            <div class="bg-blue-600 tex-blue-300 p-2 circular d-flex align-items-center justify-content-center"
                                                 style="height: 30px; width: 30px;">
                                                <span class="menu-icon text-blue-300 wh-18-svg"><i data-feather="check-circle"></i></span>
                                            </div>

                                            <div class="inline">
                                                <p class="text-blue-100 f-w-400">
                                                    Sesak nafas atau pola napas tidak beraturan
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <p class="text-blue-100 mb-0 mt-3">
                                    Penanganan yang tepat dan cepat harus dilakukan ketika pengidap sudah mengalami DSS. Jika tidak segera dilakukan penanganan, maka bisa mengakibatkan gangguan fungsi organ tubuh yang berujung pada kematian.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>
    </main>
@endsection
