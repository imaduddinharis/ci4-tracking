<html>
  <head>
    <title>Leaflet JS | Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <body>

<div class="login-page">
  <div class="form">
    <h2>Tracking app | Leaflet JS</h2>
    <!-- <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form> -->
    <form class="login-form" action="/auth/login" method="post">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button type="submit" name="login">login</button>
      <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
      <p class="message">leafletJS Login Page</p>
    </form>
  </div>
</div>
  <script src="/js/login.js"></script>
  </body>
</html>