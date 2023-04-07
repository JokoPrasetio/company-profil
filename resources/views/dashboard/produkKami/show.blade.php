@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-body text-center">
                <h2 class="card-title mt-3 mb-2">{{ $produkKami->namaProduk }}</h2>
                <img src="{{ asset('storage/'.$produkKami->image) }}" alt="Gambar" class="img-fluid mb-3" style="max-width: 400px; height: auto;">
            </div>
            <div class="card-footer">
                <a href="/dashboard/produkKami/{{ $produkKami->uuid }}/edit" class="btn btn-primary">Edit</a>
                <form action="/dashboard/produkKami/{{ $produkKami->uuid }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
