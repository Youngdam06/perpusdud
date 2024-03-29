@extends('layout')

@section('konten')
    <div class="content">
        <main class="main-content  mt-0">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">EDIT DATA</h4>
                                    <div class="row mt-3">
                                        <div class="col-2 text-center ms-auto">
                                        </div>
                                        <div class="col-2 text-center px-1">
                                        </div>
                                        <div class="col-2 text-center me-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="card-body">
                                <h3 class="text-center">Edit data</h3>
                                <form role="form" action="{{ route('kelolaBuku.update', $buku->id) }}" 
                                    class="text-start" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <label class="form-label">JUDUL</label>
                                    <div class="input-group input-group-outline my-3">
                                        <input type="text" name="judul"
                                            value="{{ $buku->judul }}"class="form-control">
                                        @error('judul')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <label class="form-label">PENULIS</label>
                                    <div class="input-group input-group-outline my-3">
                                        <input type="text" name="penulis" value="{{ $buku->penulis }}"
                                            class="form-control">
                                        @error('penulis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <label class="form-label">PENERBIT</label>
                                    <div class="input-group input-group-outline my-3">
                                        <input type="text" name="penerbit" value="{{ $buku->penulis }}"
                                            class="form-control">
                                        @error('penerbit')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <label class="form-label">TAHUN TERBIT</label>
                                    <div class="input-group input-group-outline my-3">
                                        <input type="number" name="tahunterbit" value="{{ $buku->tahunterbit }}"
                                            class="form-control">
                                        @error('tahunterbit')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <label class="form-label">IMAGE</label>
                                    <div class="input-group input-group-outline my-3">
                                        <input type="file" name="image" value="{{ asset('images/'.$buku->image) }}"
                                            class="form-control">
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Ubah
                                            Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>
</div>
@endsection
