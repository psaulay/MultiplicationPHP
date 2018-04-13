<html>
<head>
  <title>Multiplications avec PHP</title>
  <meta charset="UTF8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <nav>
    <div class="nav-wrapper">
      <a class="brand-logo right" href="index.php">Multiplications avec PHP</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php">Visualiser la table de votre choix</a></li>
        <li  class="active"><a href="page2.php">Visualiser plusieurs tables de votre choix</a></li>
        <li><a href="randomTest.php">Testez-vous</a></li>
      </ul>
    </div>
  </nav>
<body>
  <div class="container center-align">
  
    <p> Visualiser plusieurs tables de votre choix: </p>
    <BR>
<div class="input-field row">
  <form method="post" action="page2.php">
      <label>
        <input type="checkbox" name="option[]" value="1"/><span>Table de 1</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="2"/><span>Table de 2</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="3"/><span>Table de 3 </span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="4"/><span>Table de 4 </span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="5"/><span>Table de 5 </span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="6"/><span>Table de 6 </span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="7"/><span>Table de 7 </span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="8"/><span>Table de 8 </span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="9"/><span>Table de 9 </span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="10"/><span>Table de 10 </span>
      </label>
    <br><button class="btn waves-effect waves-light" type="submit">Valider</button>
</form>

<div class="row">
    <?php

      if (!empty($_POST) && isset($_POST['option'])) {
        
      	$multipliers = $_POST['option'];

      	// var_dump($_POST['option']);
        
        echo '<div class="tables">';

      	foreach($multipliers as $multiplier) {
          
      		echo '<div>
                    <h6>Table de ' . $multiplier . '</h6>
                 ';
          
      		for ($i = 1; $i < 11; $i++) {
              
      			$result = $i * $multiplier;
      			echo '<p>' . $i . '  X  ' . $multiplier . '  =  ' . $result . '</p>';
      			
      		}
        
            echo '<hr></div>';
        
      	}
  
        echo '</div>';
        
      }

      ?>
      </div>
</div>
      </div>