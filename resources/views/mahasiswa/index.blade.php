@extends('layouts.app')

@section('title', 'MAHASISWA')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Mahasiswa</h1>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Add Mahasiswa</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <!-- Alert Success jika ada pesan sukses -->
    @if(Session::has('delete'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('delete') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>No HP</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($mahasiswas->count() > 0)
                @foreach($mahasiswas as $mahasiswa)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $mahasiswa->nim }}</td>
                        <td class="align-middle">{{ $mahasiswa->nama_lengkap }}</td>
                        <td class="align-middle">{{ $mahasiswa->jurusan }}</td>
                        <td class="align-middle">0{{ $mahasiswa->no_hp }}</td>
                        <td class="align-middle">
                            @if ($mahasiswa->foto)
                                <!-- Gambar Thumbnail dengan Ikon Mata -->
                                <a href="#" data-toggle="modal" data-target="#imageModal{{ $mahasiswa->id }}">
                                    <img src="{{ Storage::url($mahasiswa->foto) }}" alt="Foto Mahasiswa" width="50">
                                    <!-- Ikon Mata -->
                                    <i class="fas fa-search-plus text-primary" style="font-size: 20px; position: absolute; top: 0; right: 0; cursor: pointer;"></i>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="imageModal{{ $mahasiswa->id }}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageModalLabel">Foto Mahasiswa</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <img src="{{ Storage::url($mahasiswa->foto) }}" alt="Foto Mahasiswa" class="img-fluid" style="max-height: 500px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <span class="text-muted">No Image</span>
                            @endif
                        </td>
                        <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" 
                            class="btn btn-secondary mx-1" 
                            data-bs-toggle="tooltip" 
                            data-bs-placement="top" 
                            title="Detail">
                                <i class="bi bi-eye"></i> <!-- Ikon mata -->
                            </a>
                            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" 
                            class="btn btn-warning mx-1" 
                            data-bs-toggle="tooltip" 
                            data-bs-placement="top" 
                            title="Edit">
                                <i class="bi bi-pencil"></i> <!-- Ikon pensil -->
                            </a>
                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" 
                                method="POST" 
                                onsubmit="return confirm('Delete?')" 
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="btn btn-danger mx-1" 
                                        data-bs-toggle="tooltip" 
                                        data-bs-placement="top" 
                                        title="Delete">
                                    <i class="bi bi-trash"></i> <!-- Ikon tong sampah -->
                                </button>
                            </form>
                        </div>
                    </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="7">Mahasiswa tidak ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
