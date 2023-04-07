@extends('dashboard.layouts.main')

@section('container')

<div class="col-lg-8 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Kontak</h5>
            <form action="/dashboard/kontakKami/{{ $kontakKami->uuid }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama', $kontakKami->nama) }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $kontakKami->email) }}">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Masukan Alamat</label>
                    @error('alamat')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="hidden" id="alamat" name="alamat" value="{{ old('alamat', $kontakKami->alamat) }}">
                    <trix-editor input="alamat"></trix-editor>
                </div>     
                <button type="submit" class="btn btn-primary mt-2 mb-4">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection
