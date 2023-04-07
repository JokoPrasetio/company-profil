
@extends('dashboard.layouts.main')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success col-lg-8 mt-5" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8 mt-5">
    <a href="/dashboard/timKami/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @if($timKami->isEmpty())
            <tr>
                <td colspan="4">Tidak Ada Data</td>
            </tr>
        @else
        @foreach ($timKami as $kami)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$kami->nama }}</td>
                <td>{{ $kami->jabatan }}</td>
                <td>
                    <a href="/dashboard/timKami/{{ $kami->uuid }}" class="badge bg-info text-decoration-none ms-1">Lihat</</a>
                    <a href="/dashboard/timKami/{{ $kami->uuid }}/edit" class="badge bg-warning text-decoration-none ms-1">Edit</a>
                    <form action="/dashboard/timKami/{{ $kami->uuid }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('kamu yakin')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-3">
        {{ $timKami->links() }}
    </div>
</div>
@endsection
