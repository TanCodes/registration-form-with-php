<!DOCTYPE html>
<html>
  <head>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome-all.css"
    />
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="log.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script
      src="https://kit.fontawesome.com/f6b5a1856e.js"
      crossorigin="anonymous"
    ></script>
    <script src="log.js"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="text-center register">REGISTRATION FORM</h1>
      <br />
      <div class="col-lg-8 m-auto d-block form">
        <form
          action="log.php"
          onsubmit="return validation()"
          class="fo"
          method="POST"
        >
          <div class="form-group">
            <i class="fas fa-user"></i>
            <input
              type="text"
              name="user"
              class="form-control"
              id="user"
              autocomplete="off"
              placeholder="Username"
            />
            <span id="username" class="text-danger font-weight-bold"></span>
          </div>

          <div class="form-group">
            <i class="fas fa-envelope-square"></i>

            <input
              type="text"
              name="email"
              class="form-control"
              id="email"
              autocomplete="off"
              placeholder="email"
            />
            <span id="email1" class="text-danger font-weight-bold"></span>
          </div>

          <div class="form-group">
            <i class="fas fa-key"></i>
            <input
              type="password"
              name="password"
              class="form-control"
              id="pass"
              autocomplete="off"
              placeholder="Password"
            />
            <span id="password1" class="text-danger font-weight-bold"></span>
          </div>

          <div class="form-group">
            <i class="fas fa-key"></i>

            <input
              type="password"
              name="password"
              class="form-control"
              id="conpass"
              autocomplete="off"
              placeholder="Confirm password"
            />
            <span id="conpass1" class="text-danger font-weight-bold"></span>
          </div>

          <div class="form-group">
            <i class="fas fa-mobile-alt"></i>

            <input
              type="text"
              name="mobile"
              class="form-control"
              id="mobile"
              autocomplete="off"
              placeholder="Mobile number"
            />
            <span id="mobile1" class="text-danger font-weight-bold"></span>
          </div>

         
          <input
            type="submit"
            name="submit"
            value="SUBMIT"
            class="btn-success submit"
          />
        </form>
      </div>
    </div>

  </body>
</html>