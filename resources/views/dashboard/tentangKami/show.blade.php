@extends('dashboard.layouts.main')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-8">
            <div class="card mb-3">
                <div class="card-body text-center">
                    <img src="{{ asset('storage/'.$tentangKami->image) }}" alt="Gambar Tentang Kami" class="img-fluid" style="max-width: 400px; height: auto;">
                    <p class="card-text mt-3">{!! $tentangKami->body !!}</p>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="/dashboard/tentangKami/{{ $tentangKami->uuid }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/dashboard/tentangKami/{{ $tentangKami->uuid }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
