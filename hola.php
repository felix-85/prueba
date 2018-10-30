<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Primer php</title>
  </head>
  <body>
    Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Tiene usted <?php echo (int)$_POST['edad']; ?> años.
  </body>
</html>
