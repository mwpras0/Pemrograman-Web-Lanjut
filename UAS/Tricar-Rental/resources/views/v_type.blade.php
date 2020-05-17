@extends('Dashboard')
@section('title','Type')
@section('judul','Tambah Data Type')
@section('konten')
<a class="btn btn-danger" href="/type">Kembali</a>
<br><br>
<div class="card mb-4">
    <div class="card-body">
        {{-- cek error --}}
        @if (count($errors) > 0)
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif

        {{-- Form --}}
        <form action="/type/add" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">                    
                    <div class="form-group">
                        <label for="kode_type">Kode Type</label>
                        <input type="text" name="kode_type" class="form-control" value="{{ old('kode_type') }}">                        
                    </div>
                    <div class="form-group">
                        <label for="nama_type">Nama Type</label>
                        <input type="text" name="nama_type" class="form-control" value="{{ old('nama_type') }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-3">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection