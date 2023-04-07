@extends('dashboard.layouts.main')

@section('container')

<div class="col-lg-8 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Produk Kami</h5>
            <form action="/dashboard/produkKami/{{ $produkKami->uuid }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="namaProduk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control @error('namaProduk') is-invalid @enderror" id="namaProduk" placeholder="Masukkan produk" name="namaProduk" value="{{ old('namaProduk', $produkKami->namaProduk) }}" required>
                    @error('namaProduk')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar Produk</label>
                    <input type="hidden" name="oldImage" value="{{ $produkKami->image }}">
                    @if ($produkKami->image)
                    <img src="{{ asset('storage/'.$produkKami->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                    @else 
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    @endif
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2 mb-4">Update Produk</button>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display ='block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function (oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection
