@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="/dashboard/visiMisi/{{ $visiMisi->uuid }}" method="post">
                @method('put')
                @csrf
              
                <div class="card">
                    <div class="card-header">
                        Edit Visi Misi
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="visi" class="form-label">Visi</label>
                            <textarea type="text" class="form-control @error('visi') is-invalid @enderror" id="visi" name="visi" required>{{ old('visi', $visiMisi->visi) }}</textarea>
                            @error('visi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="misi" class="form-label">Misi</label>
                            <textarea class="form-control @error('misi') is-invalid @enderror" id="misi" name="misi" required>{{ old('misi', $visiMisi->misi) }}</textarea>
                            @error('misi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
