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

                    </div>
                </div>
            </div>

            <div class="page-inner mt--5">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">
                                <div class="card-title">Detail Data User</div>
                            </div>

                            @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <table class="table mt-2">

                                <thead>
                                    <tr>
                                        <th scope="col" class=" text-center">Nama</th>
                                        <th scope="col" class=" text-center">Email</th>
                                        <th scope="col" class=" text-center">Password</th>
                                        <th scope="col" class=" text-center">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class=" text-center">{{ $detail->name }}</td>
                                        <td class=" text-center">{{ $detail->email }}</td>
                                        <td class=" text-center">{{ $detail->password }}</td>
                                        <td class=" text-center">
                                            <a href="/user/{{ $detail->id }}/edit" class="badge bg-primary">
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

                                                            <form action="{{ route('user.destroy', $detail->id) }}" method="POST"
                                                                class="d-inline">
                                                                @method('delete')
                                                                @csrf

                                                                <button type="submit" class="btn btn-primary">
                                                                    Ya Hapus!
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>


    @include('chat::components.js')

</body>

</html>
