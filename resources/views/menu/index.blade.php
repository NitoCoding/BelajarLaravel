@extends('layouts.base')

@section('title')
Menu
@endsection

@section('content')
<div class="ms-auto">
    <a href="{{ route('menu.create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i></a>
</div>
<div class="row">
    @foreach ($data as $menu)
    <div class="col-sm-3 mb-3">
        <div class="card">
            <img src="{{ str_contains($menu->gambar,'https') ? $menu->gambar : asset('storage/' . $menu->gambar) }}" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
                <h5 class="card-title">{{ $menu->nama }}</h5>
                <p class="card-text">Rp. {{ $menu->harga }}</p>
                <a href="{{ route('menu.edit',$menu->id) }}" class="btn btn-primary">edit</a>
                <a href="{{ route('menu.destroy',$menu->id) }}" class="btn btn-primary">bckspc</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
