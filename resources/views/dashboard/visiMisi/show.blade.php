@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <article class="card">
                <div class="card-body">
                    <h3>Visi</h3>
                    <p style="font-size: 16px" class="card-title">{{ $visiMisi->visi }}</p> <br>
                    <h3>Misi</h3>
                    <p class="card-text" style="font-size: 16px">{{ $visiMisi->misi }}</p>
                </div>
                <div class="card-footer text-muted">
                    Dibuat pada {{ $visiMisi->created_at->format('d M Y') }}
                </div>
            </article>
            <div class="mt-3">
                <a href="/dashboard/visiMisi/{{ $visiMisi->uuid }}/edit" class="btn btn-primary me-2">Edit</a>
                <form action="/dashboard/visiMisi/{{ $visiMisi->uuid }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
