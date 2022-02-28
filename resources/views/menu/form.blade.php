@extends('layouts.base')

@section('title')
@if (Request::routeIs('menu.create'))
            Daftar Menu Baru
            @else
            Edit Menu {{ $data->nama }}
        @endif
@endsection

@section('content')
    <div>
        @if (Request::routeIs('menu.create'))
            <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
            @else
            <form action="{{ route('menu.update',$data->id) }}" method="post" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data->nama ?? '' }}">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{ $data->harga ?? '' }}">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" >
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi"> {{ $data->deskripsi ?? '' }} </textarea>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" class="form-control" name="stok" id="stok" value="{{ $data->stok ?? '' }}">
        </div>
        <button type="submit" class="ms-auto btn btn-primary"><i class="bi bi-arrow-right-circle-fill"></i></button>
        </form>

    </div>
@endsection
