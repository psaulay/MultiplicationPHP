<html>
<head>
  <title>Multiplications avec PHP</title>
  <meta charset="UTF8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <nav>
    <div class="nav-wrapper">
      <a class="brand-logo right" href="index.php">Multiplications avec PHP</a>
      <ul class="left hide-on-med-and-down">
        <li  class="active"><a href="index.php">Visualiser la table de votre choix</a></li>
        <li><a href="page2.php">Visualiser plusieurs tables de votre choix</a></li>
        <li><a href="randomTest.php">Testez-vous</a></li>
      </ul>
    </div>
  </nav>
<body>
  <div class="container center-align">
  <p>Visualisez la table de votre choix: </p>
    <form method="post" action="index.php">
      <select class="browser-default" name="exo1">
			      <option disabled selected> Choisir </option>
			      <option value="1">Table de 1</option>
			      <option value="2">Table de 2</option>
			      <option value="3">Table de 3</option>
			      <option value="4">Table de 4</option>
			      <option value="5">Table de 5</option>
			      <option value="6">Table de 6</option>
			      <option value="7">Table de 7</option>
			      <option value="8">Table de 8</option>
			      <option value="9">Table de 9</option>
			      <option value="10">Table de 10</option>
			    </select>
      <button class="btn waves-effect waves-light" type="submit">Valider</button>
    </form>
    <?php

        if (!empty($_POST) && isset($_POST['exo1']))
        	{
        	$multiplier = $_POST['exo1'];
        	echo '<h2 class="center-align">Table de ' . $multiplier . '</h2>';
        	for ($i = 1; $i < 11; $i++)
        		{
        		$result = $i * $multiplier;
        		echo '<p class="center-align">' . $i . ' * ' . $multiplier . ' = ' . $result . '</p>';
        		}
        	}

        ?>
    </div>
<div class="container center-align">
    <p>Trouvez le résultat d'une multiplication de la table de votre choix: </p>
    <form method="post" action="index.php">
      <select class="browser-default" name="exo3">
			      <option disabled selected> Choisir </option>
			      <option value="1">Table de 1</option>
			      <option value="2">Table de 2</option>
			      <option value="3">Table de 3</option>
			      <option value="4">Table de 4</option>
			      <option value="5">Table de 5</option>
			      <option value="6">Table de 6</option>
			      <option value="7">Table de 7</option>
			      <option value="8">Table de 8</option>
			      <option value="9">Table de 9</option>
			      <option value="10">Table de 10</option>
			    </select>
      <button class="btn waves-effect waves-light" name="submit" type="submit">Valider</button>
    </form>

  
  <?php

    if (!empty($_POST) && isset($_POST['exo3']))
    	{
    	$randnumb = rand(1, 10);
    	$exo3 = $_POST['exo3'];
    	$result = $randnumb * $exo3;
    	echo ("Combien font " . $exo3 . "x" . $randnumb . "?");
    	}

    if (!empty($_POST['result']) && isset($_POST['answer']))
    	{
    	$answer = $_POST['answer'];
    	$result = $_POST['result'];
    	if ($result == $answer)
    		{
    		$goodmessage = 'Gagné ! Le resultat est bien ' . $result . ' .';
    		}
    	  else
    		{
    		$badmessage = 'Perdu ! Le resultat est ' . $result . ' .';
    		}
    	}

    ?>
    <form method="post" action="index.php">
      <input type="hidden" name="result" value="<?php echo $result ?>">
      <input type="text" name="answer"><button class="btn waves-effect waves-light"name="envoyer" type="submit">Valider</button>
      <p style="color:green;">
        <?php if(isset($goodmessage)) echo $goodmessage; ?>
      </p>
      <p style="color:red;">
        <?php if(isset($badmessage)) echo $badmessage; ?>
      </p>
    </form>
  </div>
</body> 
</html>
