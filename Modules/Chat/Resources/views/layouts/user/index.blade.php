<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ $title }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <link rel="icon" href="" type="image/x-icon" />

    @include('chat::components.css')
</head>

<body>

    @include('chat::components.header')

    @include('chat::components.sidebar')

    <div class="main-panel">
        <div class="content">

            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">

                        <div>
                            <h2 class="text-white pb-2 fw-bold">User Manager</h2>
                        </div>

                        <div class="ml-md-auto py-2 py-md-0">
                            <a href="/user/create" class="btn btn-secondary btn-round">Tambah User</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="page-inner mt--5">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">
                                <div class="card-title">All Data User</div>
                            </div>

                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table mt-2">

                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($allUser as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>
                                                <a href="" class="badge bg-primary">
                                                    <i class="fas fa-edit text-white"></i>
                                                </a>

                                                <button type="button" class="badge bg-danger" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="fas fa-trash text-white"></i>
                                                </button>

                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Hapus
                                                                    User?</h1>
                                                            </div>

                                                            <div class="modal-body">
                                                                Apakah anda yakin untuk menghapus user ini? data akan
                                                                terhapus permanen!
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <button type="button" class="btn btn-primary">Ya
                                                                    hapus!</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>

                    <div class="ml-3">
                        {!! $allUser->links() !!}
                    </div>

                </div>

            </div>
        </div>
    </div>


    @include('chat::components.js')

</body>

</html>
