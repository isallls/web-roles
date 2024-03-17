<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <body class="bg-gray-200 flex items-center justify-center h-screen ">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
          
                      <div class="mb-md-5 mt-md-4 pb-5">
                        <form action="{{ route('login') }}" method="POST" >
                        @csrf
                        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                        <p class="text-white-50 mb-5">Please enter your login and password!</p>
          
                        <div class="form-outline form-white mb-4">
                          <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg"/>
                          <label class="form-label" for="typeEmailX">Email</label>
                        </div>
          
                        <div class="form-outline form-white mb-4">
                            <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                          {{-- <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" /> --}}
                          <label class="form-label" for="typePasswordX">Password</label>
                        </div>
          
                        <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
          
                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                        </form>
                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                          <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                          <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                          <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                        </div>
                        
                      </div>

                      <div>
                        <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                        </p>
                      </div>
          
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>


        {{-- @if (session('failed'))
            <div class="alert alert-primary" role="alert">
                This is a primary alert—check it out!
            </div>
        @endif
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h2 class="text-2xl font-semibold mb-4">Login</h2>
            <form action="{{ route('login') }}" method="POST" >
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                    <input type="text" id="username" name="email"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
                </div>
                <input type="checkbox" name="" id="" class="mb-3">
                <label for="" class="mb-2 font-medium text-gray-600">remember me</label>
                <button type="submit"
                    class="w-full bg-blue-500 text-white rounded px-4 py-2 hover:bg-blue-600 focus:outline-none focus:ring focus:border-blue-300">
                    Login
                </button>
            </form> --}}
        </div>
    </body>
    
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>