<?php require_once 'app/config.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Dinesh</title>
  <!--Requiere etiquetas meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <!--CSS-->
  <?php require_once 'app/dependencias_css.php';?>
</head>

<body>
<?php
  if (isset($_GET['vista_solicitada'])) {
    switch ($_GET['vista_solicitada']) {
      case 'works': {
        require_once 'view/works.php';
        break;
      }
      case 'about': {
        require_once 'view/about.php';
        break;
      }
      case 'nuggets': {
        require_once 'view/nuggets.php';
        break;
      }
      case 'posts': {
        require_once 'view/posts.php';
        break;
      }default: {
        require_once 'view/error.php';
        break;
      }
    }
  } else {
    require_once 'view/home.php';
  }
  ?>
  <?php require_once 'app/dependencias_js.php';?>
</body>

</html>