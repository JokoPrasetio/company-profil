@extends('dashboard.layouts.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body text-center">
                <div class="circle">
                    <img src="{{ asset('storage/'.$timKami->image) }}" alt="Foto Tim">
                </div>
                <h2 class="card-title mt-3 mb-2">{{ $timKami->nama }}</h2>
                <h3 class="btn btn-outline-primary btn-lg fw-bold">{{ $timKami->jabatan }}</h3>
            </div>
            <div class="card-footer d-flex justify-content-center">
                <a href="/dashboard/timKami/{{ $timKami->uuid }}/edit" class="btn btn-primary me-2">Edit</a>
                <form action="/dashboard/timKami/{{ $timKami->uuid }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
