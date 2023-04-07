@extends('dashboard.layouts.main')

@section('container')




@if(session()->has('success'))
<div class="alert alert-success col-lg-8 mt-5" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8 mt-5">
    <a href="/dashboard/kontakKami/create" class="btn btn-primary mb-3">Create</a>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">nama</th>
                <th scope="col">email</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        @if($kontakKami->isEmpty())
            <tr>
                <td colspan="5">Tidak Ada Data</td>
            </tr>
        @else
        @foreach ($kontakKami as $kami)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $kami->nama }}</td>
                <td>{{ $kami->email }}</td>
                <td>{!! implode(' ', array_slice(explode(' ', $kami->alamat), 0, 4)) !!}...</td>
                <td>
                    <a href="/dashboard/kontakKami/{{ $kami->uuid }}/edit" class="badge bg-warning text-decoration-none ms-1">Edit</a>
                    <form action="/dashboard/kontakKami/{{ $kami->uuid }}" method="post" class="d-inline">
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
        {{ $kontakKami->links() }}
    </div>
</div>
@endsection
