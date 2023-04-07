@extends('dashboard.layouts.main')

@section('container')

<div class="col-lg-8 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Buat Produk</h5>
            <form action="/dashboard/produkKami" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="namaProduk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control @error('namaProduk') is-invalid @enderror" id="namaProduk" placeholder="Masukan produk" name="namaProduk" value="{{ old('namaProduk') }}" required>
                    @error('namaProduk')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Masukan gambar</label>
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2 mb-4">Simpan</button>
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
