@extends('dashboard.layouts.main')

@section('container')

@if(session()->has('success'))
<div class="alert alert-success col-lg-8 mt-5" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8 mt-5">
    <a href="/dashboard/produkKami/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NamaProduk</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @if($produkKami->isEmpty())
            <tr>
                <td colspan="3">Tidak Ada Data</td>
            </tr>
        @else
        @foreach ($produkKami as $kami)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$kami->namaProduk }}</td>
                <td>
                    <a href="/dashboard/produkKami/{{ $kami->uuid }}" class="badge bg-info text-decoration-none ms-1">Lihat</</a>
                    <a href="/dashboard/produkKami/{{ $kami->uuid }}/edit" class="badge bg-warning text-decoration-none ms-1">Edit</a>
                    <form action="/dashboard/produkKami/{{ $kami->uuid }}" method="post" class="d-inline">
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
        {{ $produkKami->links() }}
    </div>
</div>
@endsection