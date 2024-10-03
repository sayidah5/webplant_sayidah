@extends('dashboard2')
@section('template')
<div class="container">
    <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div class="container pt-5">
                @if (Session::has('pesan'))
                    <div class="alert">{{Session::get('pesan')}}</div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <a href="/artikelcreate/create" class="btn" style="background-color:#90EE90; color:black ">Tambah Artikel</a>
                    </div>
                    <div class="col-md-6">
                        <form action="/search" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="cari" class="form-control" placeholder="cari">
                                <button class="btn" type="submit" style="background-color: #90EE90; color:black;">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                Total Data Artikel : {{$total}}
                <table class="table">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Deskripsi</th>
                            <th>Isi</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artikel as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->kategori}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>{{$item->isi}}</td>
                            <td><img src="{{asset('/storage/foto/'.$item->foto)}}" alt="" style="width: 50px; height:50px;"></td>
                            <td>
                                <a href="/artikel/delete/{{$item->id}}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn " style="background-color: #90EE90;">Hapus</a>
                                <a href="/artikeledit/edit/{{$item->id}}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
