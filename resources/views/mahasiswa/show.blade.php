@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('contents')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Detail Mahasiswa</h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">NIM</div>
                <div class="col-md-9">{{ $mahasiswa->nim }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Nama Lengkap</div>
                <div class="col-md-9">{{ $mahasiswa->nama_lengkap }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Jurusan</div>
                <div class="col-md-9">{{ $mahasiswa->jurusan }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Tempat & Tanggal Lahir</div>
                <div class="col-md-9">{{ $mahasiswa->tempat_lahir }}, {{ $mahasiswa->tanggal_lahir }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">No HP</div>
                <div class="col-md-9">{{ $mahasiswa->no_hp }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Email</div>
                <div class="col-md-9">{{ $mahasiswa->email }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3 font-weight-bold">Alamat Tinggal</div>
                <div class="col-md-9">{{ $mahasiswa->alamat_tinggal }}</div>
            </div>
            <div class="row">
                <div class="col-md-3 font-weight-bold">Foto</div>
                <div class="col-md-9">
                    @if ($mahasiswa->foto)
                        <img src="{{ Storage::url($mahasiswa->foto) }}" alt="Foto Mahasiswa" width="150">
                    @else
                        <span class="text-muted">No Image</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $mahasiswa->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $mahasiswa->updated_at }}" readonly>
        </div>
    </div>
        <div class="card-footer">
            <a href="{{ route('mahasiswa') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
