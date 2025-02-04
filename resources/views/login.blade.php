<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"></head>
    
    <style>
        /* .card-login {
            width: 500px;
            margin-top: 100px
        } */

    </style>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="mt-5"></div>
                @if (session('message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Email atau Password Salah! 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
    
                <div class="mt-2"></div>
                
                <div class="card card-login rounded-0 shadow-sm">
                    <div class="card-body">
                        <form action="{{ url('login') }}" method="POST">
                            @csrf
                            <p class="fs-2 fw-bold my-2 text-center">Login</p>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control rounded-0" id="email" placeholder="Masukkan Email" name='email'>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-0" id="password" placeholder="Masukkan Password" name='password'>
                            </div>
            
                            <button class="btn btn-primary w-100 fw-bold my-2" type="submit">Login</button>
                            <p class="text-center my-2">Belum Memiliki Akun? <span><a href="{{ url('register') }}" style="text-decoration: none">Daftar</a></span></p>
                        </form>
                    </div>
                </div>
            </div>
            
            
        </div>

        <div class="row">
            
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>