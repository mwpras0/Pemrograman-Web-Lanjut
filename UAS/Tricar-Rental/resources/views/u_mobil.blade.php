@extends('Dashboard')
@section('title','Mobil')
@section('judul','Tambah Data Mobil')
@section('konten')

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
        @foreach ($mobil['data'] as $car)
        <form action="/Mobil/u_process/{{ $car['id_mobil'] }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="type">Type Mobil</label>
                        <select name="id_type" class="form-control">
                            <option value="{{ $car['id_type'] }}" required> {{ $car['type'] }}</option>
                            {{-- tampil data type --}}
                            
                            {{-- <option value="{{ $car['type']}}">{{ $car['type'] }}</option> --}}
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" class="form-control" value="{{ $car['merk'] }}" required>                        
                    </div>

                    <div class="form-group">
                        <label for="no_plat">No. Plat</label>
                        <input type="text" name="no_plat" class="form-control" value="{{ $car['no_plat'] }}" required>
                    </div>

                    <div class="form-group">
                        <label for="warna">Warna</label>
                        <input type="text" name="warna" class="form-control" value="{{ $car['warna'] }}" required>
                    </div>

                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <input type="text" name="tahun" class="form-control" value="{{ $car['tahun'] }}" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" value="{{ $car['harga'] }}" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" required>
                            <option value="{{ $car['status'] }}">{{ $car['status'] }}   </option>
                            <option value="1">Tersedia</option>
                            <option value="0">Kosong</option>
                        </select>

                    </div>
                    
                    <div>                        
                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                        <button type="reset" class="btn btn-danger mt-3">Reset</button>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection
