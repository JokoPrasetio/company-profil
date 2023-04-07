@extends('dashboard.layouts.main')

@section('container')

<div class="col-lg-8 mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Buat Visi Misi</h5>
            <form action="/dashboard/visiMisi" method="post">
                @csrf
                <div class="mb-3">
                    <label for="visi" class="form-label">Visi</label>
                    @error('visi')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <textarea class="form-control" id="visi" name="visi" rows="3" placeholder="1. Visi pertama\n2. Visi kedua">{{ old('visi') }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="misi" class="form-label">Misi</label>
                    @error('misi')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <textarea class="form-control" id="misi" name="misi" rows="3" placeholder="1. Misi pertama\n2. Misi kedua">{{ old('misi') }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2 mb-4">Buat Visi Misi</button>
            </form>
        </div>
    </div>
</div>
@endsection




