

<html lang="en ">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Security Rental Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Login</title>
  </head>

  <body>
  <style>
    body{
      
      height: 120vh;
    }

  </style>

  <nav class="navbar has-background-primary-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="C:/Users/Saadid/Desktop/test.html">
      <h1 class = "title is-size-5 has-text-white">Online Security Rental Services </h1>
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  </nav>

  <div class = "column is-offset-4">

        <h1 class="title is-size-5">Login</h1>
        
      </div>


  <form action="process.php" method="POST">
    <div class="columns">
      <div class="column is-offset-4">

        <label for = "" class="is is-size-6">Username</label><br>

        <input type="text" class="form-control input is-outlined column is-5" name="username" placeholder="Your Username" required><br>

        <label for = "" class="is is-size-6">Password</label><br>

        <input type="text" class="form-control input is-outlined column is-5" name="password" placeholder="Your Password" required><br>



        <div class="mt=5">
          <button class ="button is-primary" type="submit" name="login">login</button>
        </div>

      </div>

  </form>



  </body>
  </html>