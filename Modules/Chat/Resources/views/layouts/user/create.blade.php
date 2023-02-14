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

            <div class="page-inner mt--5 w-50">

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card-header">
                                <div class="card-title">Form Tambah User</div>
                            </div>

                            <form action="/user" method="POST" class="p-2">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="Isikan Name ..." name="name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Isikan Email ..." name="email">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Password"
                                        name="password">
                                </div>

                                <button class="btn btn-primary ml-3 mt-3" type="submit">Submit</button>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    @include('chat::components.js')

</body>

</html>
