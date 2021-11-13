
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login
      </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./css/app.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
    <button type="submit" name="commit" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#login">
          Login/Signup
        </button>
        <div class="modal fade" id="login" role="dialog">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                  <span>Login <i class="fa fa-sign-in"></i></span>
                </button>
                <div class="text-center">
                  <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#signup">Signup</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="signup" role="dialog">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Signup</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                      <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="Password confirmation" aria-label="Password confirmation" aria-describedby="basic-addon1">
                </div>
                <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
                  <span>Signup <i class="fa fa-sign-in"></i></span>
                </button>
                <div class="text-center">
                  <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>