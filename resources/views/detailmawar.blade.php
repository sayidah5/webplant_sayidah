@extends('template.pasang')
@section('content')
    <!-- <div class="container-fluid" style="background-color: #90EE90 ; height:100%;">
        <div class="container">
            <div class="row"> -->
                <div class="container mt-5">
                    <h1 class="text-success fst-italic" style="margin-left: 41%;">{{ $artikel->judul}}</h1>
                        <div class="row" style="margin-left: 17%;">
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-lg border-2" style="width: 900px; margin-left: -14%; margin-top: 10%;" >
                                    <img src={{asset('/storage/foto/'.$artikel->foto)}} class="card-img-top img-fluid rounded" alt="Image 1">
                                </div>
                            </div>
                            {{-- <div class="col-md-4 mb-4">
                                <div class="card shadow-lg border-2" style="width: 100%; margin-left: -31%; margin-top: 30%;" >
                                    <img src="https://asset.kompas.com/crops/wkce-gXreaCLFIu1XQJYhsOLkE0=/3x0:1000x665/750x500/data/photo/2022/10/14/6348eb4a81d2f.jpg" class="card-img-top img-fluid rounded" alt="Image 1">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-lg border-2" style="width: 100%; margin-left: -36%; margin-top: 10%;" >
                                    <img src="https://asset.kompas.com/crops/NMHeLWHfdzb7iigBkclgyJW0wi4=/0x54:1000x720/750x500/data/photo/2023/04/12/643678b3a5193.jpg" class="card-img-top img-fluid rounded" alt="Image 1">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-lg border-2" style="width: 100%; margin-left: -36%; margin-top: 10%;" >
                                    <img src="https://img.lazcdn.com/g/p/808783f26262a6db7af03c26acc02ddc.jpg_720x720q80.jpg" class="card-img-top img-fluid rounded" alt="Image 1">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-lg border-2" style="width: 100%; margin-left: -36%; margin-top: 10%;" >
                                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/84/2023/12/16/mawar-online-3239392032.jpg" class="card-img-top img-fluid rounded" alt="Image 1">
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card shadow-lg border-2" style="width: 100%; margin-left: -36%; margin-top: 10%;" >
                                    <img src="https://asset.kompas.com/crops/aD45JG2IT-eS2rowpIG6UmiehPE=/9x6:1000x667/750x500/data/photo/2022/11/08/6369a65427edc.jpg" class="card-img-top img-fluid rounded" alt="Image 1">
                                </div> --}}
                            </div>


                         </div>
                        <div class="col-md-10" style="margin-top: 5%; margin-left: 8%;">

                            <p style="font-size: 20px;">{{$artikel->isi}}</p>
                            {{-- <h3>{{$artikel->isi}}</h3> --}}
                            {{-- <ul style="font-size: 20px;">
                                <li>{{$artikel->isi}}</li>
                                <li>{{$artikel->isi}}</li>
                                <li>{{$artikel->isi}}</li>
                                <li>{{$artikel->isi}}</li>
                            </ul> --}}
                            {{-- <h3>Varietas Mawar :</h3>
                            <ul style="font-size: 20px;">
                                <li>Mawar Merah</li>
                                <li>Mawar Kuning</li>
                                <li>Mawar Putih</li>
                                <li>Mawar Orange</li>
                                <li>Mawar Pink</li>
                            </ul>
                            <h3>Manfaat</h3>
                            <ul style="font-size: 20px;">
                                <li>Sebagai tanaman hias</li>
                                <li>Bahan pembuatan minyak wangi</li>
                                <li>Bahan pembuatan teh</li>
                            </ul>
                            <h3>Merawat Tanaman Mawar: </h3>
                            <p style="font-size: 20px;">Agar mawar Anda tumbuh subur dan berbunga lebat, pastikan tanaman mendapatkan sinar matahari yang cukup, air yang teratur, dan pemupukan yang tepat. Jangan lupa untuk memangkas bunga yang sudah layu agar tanaman dapat menghasilkan bunga baru.</p>
                            <h3>Media Tanam</h3>
                            <p style="font-size: 20px;">Bunga mawar menyukai tanah yang kaya nutrisi, gembur, dan memiliki drainase yang baik. Ini artinya tanah tidak boleh terlalu padat atau terlalu basah, karena akar mawar membutuhkan udara untuk bernapas.</p>
                            <h3>Tahukan Anda?</h3>
                            <p style="font-size: 20px;">Mawar bukan hanya sekadar bunga. Selama ribuan tahun, mawar telah menjadi simbol penting dalam berbagai budaya. Dari warna merah yang melambangkan cinta hingga warna putih yang melambangkan kesucian, setiap warna mawar memiliki makna tersendiri. Selain itu, mawar juga memiliki manfaat bagi kesehatan, seperti kandungan vitamin C yang tinggi.</p>
                        </div>
                     --}}
                    </div>
                </div>
            </div>
                <footer class="container-fluid text-center text-lg-start mt-5" style="background-color:#50C878;">
                    <div class="container-fluid p-4">
                        <div class="row">
                            <div class="text-center p-3 bg text-white" style="background-color: #50C878;">
                               <h2>
                                © 2024 Teman Tanaman. All rights reserved.
                              </h2>
                        </div>
                    </div>

                    </div>
                </footer>
            <!-- </div>
        </div>
    </div> -->
@endsection
