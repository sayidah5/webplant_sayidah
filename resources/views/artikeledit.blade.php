@extends('template.pasang')
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Tambah Artikel</h1>
    <form action="/artikel/edit/{{ $artikel->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group pt-2">
            <label for="image">Foto</label>
            <input type="file" class="form-control-file" name="foto" id="foto" placeholder="foto">
        </div>
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Artikel</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul artikel" value="{{$artikel->judul}}">
        </div>

        <div class="mb-3">
            <label for="konten" class="form-label">Deskripsi Artikel</label>
            <textarea class="form-control" name="deskripsi" id="konten" rows="5" placeholder="Masukkan Deskripsi artikel" value={{$artikel->deskripsi}}></textarea>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" name="kategori">
                <option selected>Pilih kategori</option>
                <option value="1">Tanaman Hias</option>
                <option value="2">Tanaman Buah</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea name="isi" id="isi" class="form-control" rows="5" placeholder="Masukkan konten artikel"  value={{$artikel->isi}}></textarea>
        </div>

        <button type="submit" class="btn" style="background-color: #90EE90;">Update Artikel</button>
    </form>
</div>

@endsection
