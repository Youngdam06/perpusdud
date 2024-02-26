@extends('layout')

@section('konten')
<div class="content">
    <h3>Daftar Petugas</h3>
    <div class="row">
        <div class="col-12">
        <div class="card my-4">
            <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0 mt-1">
                <tbody>
                
                @if ($message = Session::get('success'))
                    <div class="alert alert-info alert-dismissable text-white">
                        <p>{{ $message }}</p><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        
                    </div>
                @endif
                
                <table class="table table-bordered">
                    <tr>
                        <th class="align-middle text-center text-sm">No</th>
                        <th class="align-middle text-center text-sm">Email</th>
                        <th class="align-middle text-center text-sm">Nama</th>
                        <th class="align-middle text-center text-sm" width="300px">Action</th>
                    </tr>
                    @foreach ($petugas as $petugas)
                    <tr>
                        <td class="align-middle text-center text-sm">{{ $loop->iteration }}</td>
                        <td class="align-middle text-center text-sm" style="white-space: pre-wrap;">{{ $petugas->email }}</td>
                        <td class="align-middle text-center text-sm" style="white-space: pre-wrap;">{{ $petugas->name }}</td>
                        <td>
                            <form action="{{ route('kelolaPetugas.destroy',$petugas->id) }}" method="POST">
                            <div class="align-middle text-center text-sm">
                                <a class="btn btn-info" href="{{ route('kelolaPetugas.edit',$petugas->id) }}">Edit</a>
                            
                                @csrf
                                @method('DELETE')
    
                                <button type="submit" onclick="return confirm('Apakah Anda yakin?')" class="btn btn-danger">Delete</button>
                            </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </tbody>
                </table>
                <div class="container">
                    <a class="btn bg-primary btn-dark" href="{{ route('kelolaPetugas.create') }}">Tambah data</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mengambil semua tombol delete dengan ID "btnDelete"
        var deleteButtons = document.querySelectorAll("#btnDelete");

        deleteButtons.forEach(function(button) {
            button.addEventListener("click", function(event) {
                event.preventDefault();

                Swal.fire({
                    title: 'Konfirmasi Hapus Data',
                    text: "Apakah Anda yakin ingin menghapus data ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Hapus',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika pengguna mengonfirmasi, lanjutkan dengan mengirimkan formulir
                        // Dalam hal ini, formulir di dalam loop di atas
                        button.closest("form").submit();
                        Swal.fire(
                            'Berhasil',
                            'Data berhasil dihapus',
                            'info'
                        );
                    } else {
                        // Jika pengguna membatalkan, tidak ada tindakan yang diambil
                        Swal.fire(
                            'Dibatalkan',
                            'Data tidak dihapus',
                            'info'
                        );
                    }
                });
            });
        });
    });
</script>
@endsection