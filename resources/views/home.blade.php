@extends('template.pasang')

@section ('content')
<div class="container mt-5">
    <div class="row justify-content-center text-center" style="color: green;">
        <div class="col-md-5" style="width: 620px;">
            <img src="img/plant2.webp" class="img-fluid" alt="Tanaman" >
        </div>
        <div class="col-md-6 ms-4" style="margin-top: 5%;">
            <h2>Identifikasi, Jelajahi, dan Terapkan Pengamatan Anda terhadap Tanaman</h2>
            <p style="font-size: 20px;" >Teman Tanaman adalah website yang membantu Anda untuk mengenali tanaman. Sebagai pemelihara tanaman, kita harus mengetahui jenis tanaman yang kita tanam melalui website ini.</p>
        </div>

    </div>

    <div class="col-md-12 mt-5">
        <h2>Tanaman Hias dan Buah yang Sering Dicari</h2>
        <div class="row justify-content-center">
            @foreach ($artikel as $key => $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src={{asset('/storage/foto/'.$item->foto)}} class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text">{{$item->deskripsi}}</p>
                        <a href="/detailmawar/{{$item->id}}" class="btn text-dark" style="background-color: green;">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/plant5.jpg" class="card-img-top" alt="Anggrek">
                    <div class="card-body">
                        <h5 class="card-title">Anggrek</h5>
                        <p class="card-text">Inggris: orchid, Spanyol: orquidea, Belanda: orchidee, Latin: orchidaceae</p>
                        <a href="/detailanggrek" class="btn text-dark" style="background-color: green;">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/plant6.jpg" class="card-img-top" alt="Janda Bolong">
                    <div class="card-body">
                        <h5 class="card-title">Janda Bolong</h5>
                        <p class="card-text">Inggris: adanson's monstera, Latin: monstera obliqua</p>
                        <a href="/detailjandabolong" class="btn text-dark" style="background-color: green;">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/plant7.jpg" class="card-img-top" alt="Dahlia">
                    <div class="card-body">
                        <h5 class="card-title">Dahlia</h5>
                        <p class="card-text">Inggris: dahlia, Spanyol: dalia, Belanda: dahlia, Latin: dahlia</p>
                        <a href="/detaildahlia" class="btn text-dark" style="background-color: green;">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-5">
        {{-- <h2>Tanaman Buah yang Sering Dicari</h2> --}}
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/plant8.jpg" class="card-img-top" alt="Stroberi">
                    <div class="card-body">
                        <h5 class="card-title">Stroberi</h5>
                        <p class="card-text">Inggris: strawberry, Spanyol: fresa, Belanda: aardbei, Latin: fragaria</p>
                        <a href="/detailstroberi" class="btn text-dark" style="background-color: green;">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/plant10.jpg" class="card-img-top" alt="Anggur">
                    <div class="card-body">
                        <h5 class="card-title">Anggur</h5>
                        <p class="card-text">Inggris: grapes, Spanyol: uvas, Belanda: druiven, Latin: vitis vinifera L</p>
                        <a href="/detailanggur" class="btn text-dark" style="background-color: green;">Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="img/plant11.jpg" class="card-img-top" alt="Jeruk">
                    <div class="card-body">
                        <h5 class="card-title">Jeruk</h5>
                        <p class="card-text">Inggris: orange, Spanyol: naranja, Belanda: oranje, Latin: citrus sinensis</p>
                        <a href="/detailjeruk" class="btn text-dark" style="background-color: green;">Selengkapnya</a>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-4 mb-4" style="margin-left: -33%;">
                <div class="card">
                    <img src="img/plant12.jpg" class="card-img-top" alt="Durian">
                    <div class="card-body">
                        <h5 class="card-title">Durian</h5>
                        <p class="card-text">Inggris: durian, Spanyol: durián, Belanda: durian, Latin: durio zibethinus</p>
                        <a href="/detaildurian" class="btn text-dark" style="background-color: green;">Selengkapnya</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<footer class="bg text-center text-lg-start mt-5" style="background-color:#50C878;">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-white">© 2024 Teman Tanaman. All rights reserved.</h2>
            </div>
        </div>
    </div>
</footer>
@endsection
