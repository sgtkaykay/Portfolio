<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<!DOCTYPE html>
<html>
  <head>
    <title> School Work </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div class="header">
      <h1 class="head">School Work</h1>
      <nav>
        <ul>
          <li><a href="index.php?page=home">Home</a></li>
          <li><a href="index.php?page=css">CSS</a></li>
          <li><a href="index.php?page=svg">SVG</a></li>
          <li><a href="index.php?page=canvas">Canvas</a></li>
          <li><a href="index.php?page=about">Faus</a></li>
        </ul>
      </nav>
    </div>
    <div class="content">
			<?php
			switch ($load) {
				case 'home':
				    require_once('home.php');
				        break;
				case 'css':
			      require_once('css.php');
			          break;
        case 'svg':
            require_once('svg.php');
                break;
        case 'canvas':
            require_once('canvas.php');
                break;
        case 'about':
            require_once('about.php');
                break;
				default:
					  require_once('home.php');
					      break;
				}
			?>
    </div>
  </body>
</html>
