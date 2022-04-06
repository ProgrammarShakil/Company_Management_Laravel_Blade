<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background: rgb(82, 78, 78)">

<div class="container mt-5 text-white">
      <div class="row justify-content-center">
        <div class="col-md-6  p-5 mx-2 rounded-2" style=" background: linear-gradient(rgba(150, 39, 135, 0.7), rgba(149, 25, 190, 0.7)), url(../images/img_mountains_wide.jpg);">
          <h2 class="text-center">Admin Login</h2>
          <form action="{{ url('admin-login') }}" method="POST">
            <h4>
              @if ($errors->any())
              <div class="alert alert-danger">
                  <div>
                      @foreach ($errors->all() as $error)
                          <p>{{ $error }}</p>
                      @endforeach
                  </div>
              </div>
              @endif
              @if (Session::has('error'))
                  <p class="text-danger">
                    {{ Session::get('error') }}
                  </p>
              @endif
            </h4>
            @csrf
              <div class="mb-3 mt-3">
                <label for="email" class="mb-2">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
              </div>
              <div class="mb-3">
                <label for="pwd" class="mb-2">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
              </div>
              <div class="form-check mb-3">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
              </div>
              <div class="w-100">
                <button type="submit" class="btn btn-primary btn-block form-control">Sign In</button>
              </div>
          </form>
        </div>
      </div>
</div>

</body>
</html>
