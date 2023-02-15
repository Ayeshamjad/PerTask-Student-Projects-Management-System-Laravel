<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PerTask - Student Login</title>
    <!-- <link rel="stylesheet" href="styles.css" /> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('/cutie.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
  </head>

  <style>
    * {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
    }

    body {
        background:black;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
    }

    input:focus {
        border: 1px solid #f9efaa !important;
        box-shadow: none !important;
    }

    input[type="checkbox"]:focus {
        border: 1px solid #294b61 !important;
    }
    </style>

  <body class="container-fluid">
    <div class="navbar">
      <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-white" href="/">
          <strong class="text-primary">PER-</strong>TASK
        </a>
        <a href="tlogin" class="text-decoration-none text-primary">Teacher Login</a>
      </div>
    </div>
    <div class="row mt-5">
      <div class="row">
        <h1 class="display-5 fw-normal text-center text-white">
          STUDENT SIGNIN
        </h1>
      </div>
      <div class="row justify-content-center text-white">
        <div
          class="col col-4 pt-5 pb-5 rounded-4"
          style="
            backdrop-filter: blur(15px) saturate(100%);
            background: #1b1b1b;
            padding-left: 6%;
            padding-right: 6%;
          "
        >
          <form action="stuSignin" method="GET">
            <div class="mb-3">
              <h4 class="fw-normal">Sign in</h4>
              <div
                id="emailHelp"
                class="form-text fs-7 mt-3"
                style="color: F8F8F8"
              >
                Login to manage your account
              </div>
              
              <input
                name="email"
                type="email"
                class="form-control bg-transparent mt-4 p-2 rounded-2"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Email Address"
                style="color: #f9efaa;"
              />
            </div>
            <div class="mb-3">
              <input
                name="password"
                type="password"
                class="form-control bg-transparent p-2  rounded-2"
                id="exampleInputPassword1"
                placeholder="Password"
                style="color: #f9efaa;"
              />
            </div>
            
            <button
              type="submit"
              class="btn btn-primary w-100 border-0 p-2"
              style="color: #f9efaa;"
            >
              Sign in
            </button>
            @if(session()->has('message'))
              <div class="alert alert-danger error-message text-center" style="background: transparent; font-size:0.8rem; padding:0; margin:0; margin-top:1rem; border:none; color:rgb(237, 73, 86)">
                  {{ session()->get('message') }}
              </div>
            @endif
            <div class="d-flex justify-content-center mt-3">
                <label class="mx-1" for="" style="font-size: small;">Create new Account</label>
                <a href="stuSignup" class="text-decoration-none" style="font-size: small;"> Signup here</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
