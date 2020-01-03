<?php include 'includes/config.inc.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title; ?></title>

<!-- stylesheet -->
<link rel="stylesheet" href="css/login.css" type="text/css" />

</head>
<body>

<form action="main.php" method="post">
  <fieldset>
    <legend>Login</legend>

    <label for="username">
      Usuário:
      <input type="text" class="user" name="username" id="username" value="userdemo" autofocus />
    </label>

    <label for="password">
      Senha:
      <input type="password" class="pass" name="password" id="password" value="userdemo" />
    </label>
    <p class="download"><a href="https://github.com/edysegura/php-contacts">Download deste projeto</a></p>
    <input type="submit" class="button" value="Entrar" />
  </fieldset>
</form>

</body>
</html>
