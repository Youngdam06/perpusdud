<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container"></div>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                        <form action="{{ route('posregtamu') }}" method="POST">
                            <h3 class="mb-5">Register Akun</h3>
                            @csrf
                            <div class="form-outline mb-4">
                                <label class="form-label" for="">Nama</label>
                                <input type="text" name="name" id="name" class="form-control form-control-lg" />
                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="">Email</label>
                                <input type="email" name="email" id="email" class="form-control form-control-lg" />
                            </div>
                
                            <div class="form-outline mb-4">
                                <label class="form-label" for="">Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-lg" />
                            </div>
                
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>


