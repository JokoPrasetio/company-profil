<!doctype html>
<html lang="en">
  <head>
  	<title>Registrasi Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/login.css">
	</head>
    <body>
        <section class="ftco-section">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                  <h2 class="heading-section">Registrasi</h2>
                </div>
              </div>
              @if (session()->has('registerError'))
                <div class="alert alert-danger" role="alert">
                  {{ session('registerError') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button>
                </div>  
              @endif
              <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                  <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">Daftar</h3>
                    <form action="/register" method="post" class="login-form">
                      @csrf
                      <div class="form-group">
                        <input type="text" class="form-control rounded-left @error('name') is-invalid @enderror" name="name" placeholder="Nama" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control rounded-left @error('email') is-invalid @enderror" name="email" placeholder="Email" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control rounded-left @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
                      </div>
                    </form>
                    <div class="text-center">
                      <span class="text-dark">Sudah memiliki akun?</span>
                      <a href="/login" class="text-primary">Login</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
