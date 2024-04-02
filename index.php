<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <!-- CSS -->
  <link rel="stylesheet" href="./css/styleLogin.css" />
  <!-- Icons Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
</head>

<body>
  <div class="container">
    <div class="left-login">
      <div class="top-left-login">
        <img src="./images/logo-valorant.svg" alt="logo valorant" height="60px" />
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247m2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
        </svg>
      </div>
      <div class="middle-left-login">
        <h1>Sign in with your Riot <span>Account</span></h1>
        <div class="card-login">
          <form action="./php/testLogin.php" method="post">
            <div class="input-form">
              <input type="text" name="usuario" id="usuario" placeholder="USERNAME" />
            </div>
            <div class="input-form">
              <input type="password" name="senha" id="senha" placeholder="PASSWORD" />
            </div>
            <div class="input-checkbox">
              <input type="checkbox" name="manterLogin" id="manterLogin" disabled />
              <label for="manterLogin">Stay signed In</label>
            </div>
            <div class="button-form" style="justify-content: center; margin-bottom: 50px;">
              <input type="submit" value="Login" name="submit" id="submit">
            </div>
          </form>
        </div>
      </div>
      <div class="bottom-left-login">
        <div class="create-account">
          <p><a href="./php/cadastro.php" target="_self">Create account</a></p>
          <p><a href="#">Cant't sign in?</a></p>
        </div>
      </div>
    </div>
    <div class="right-login">
      <div class="img-login">
      </div>
    </div>
  </div>
</body>

</html>