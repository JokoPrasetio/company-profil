@extends('dashboard.layouts.main')

@section('container')

<div class="col-lg-8 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Buat Tentang Kami</h5>
            <form action="/dashboard/tentangKami" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="body" class="form-label">Tentang Kami</label>
                    @error('body')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input type="hidden" id="body" name="body" value="{{ old('body') }}">
                    <trix-editor input="body"></trix-editor>
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
                <button type="submit" class="btn btn-primary mt-2 mb-4">Create</button>
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
