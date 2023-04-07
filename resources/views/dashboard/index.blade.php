@extends('dashboard.layouts.main')

@section('container')

<h2 class="mt-3">Data yang diinput untuk landing page</h2>
<div class="row">
    <div class="col-lg-12 mb-4 mt-4">
        <div class="card">
            <div class="card-header">Tentang Kami</div>
            <div class="card-body">
                @if ($tentangKami)
                    <p>{!! Str::limit(strip_tags($tentangKami->body), 200, '...') !!}</p>
                    <a href="/dashboard/tentangKami/{{ $tentangKami->id }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                @else
                    <p>Tidak ada data.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">Visi dan Misi</div>
            <div class="card-body">
                @if ($visiMisi->count())
                    @foreach ($visiMisi as $item)
                        <p>{!! Str::limit(strip_tags($item->visi), 100, '...') !!}</p>
                        <p>{!! Str::limit(strip_tags($item->misi), 100, '...') !!}</p>
                        <a href="/dashboard/visiMisi/{{ $item->id }}" class="btn btn-sm btn-primary">Lihat Detail</a> 
                    @endforeach
                @else
                    <p>Tidak ada data.</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">Produk Kami</div>
            <div class="card-body">
                @if ($produkKami->count())
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produkKami as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->namaProduk }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Tidak ada data.</p>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="row">

    <!-- Card Kontak Kami -->
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">Kontak Kami</div>
            <div class="card-body">
                @if ($kontakKami)
                <p>{{ $kontakKami->nama }}</p>
                <p>{{ $kontakKami->email}}</p>
                <p>{{ $kontakKami->alamat }}</p>
                @else
                <p>Tidak ada data.</p>
                 @endif
            </div>
        </div>
    </div>

    <!-- Card Tim Kami -->
    <div class="col-lg-6 mb-4">
        <div class="card">
            <div class="card-header">Tim Kami</div>
            <div class="card-body">
                @if ($timKami->count())
                    <ul>
                        @foreach ($timKami as $item)
                            <li>{{ $item->nama }} - {{ $item->jabatan }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Tidak ada data.</p>
                @endif
            </div>
        </div>
    </div>

</div>

@endsection
