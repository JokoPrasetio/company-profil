@extends('dashboard.layouts.main')

@section('container')

<div class="col-lg-8 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Buat Produk</h5>
            <form action="/dashboard/timKami/{{ $timKami->uuid }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama" value="{{ old('nama', $timKami->nama) }}" required>
                    @error('nama')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Masukan produk" name="jabatan" value="{{ old('jabatan', $timKami->jabatan) }}" required>
                    @error('jabatan')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Masukan gambar</label>
                    <input type="hidden" name="oldImage" value="{{ $timKami->image }}">
                    @if ($timKami->image)
                    <img src="{{ asset('storage/'.$timKami->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
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
                <button type="submit" class="btn btn-primary mt-2 mb-4">Edit</button>
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
