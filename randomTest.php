<html>
    <head>
      <title>Multiplications avec PHP</title>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
      <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <nav>
    <div class="nav-wrapper">
      <a class="brand-logo right" href="index.php">Multiplications avec PHP</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php">Visualiser la table de votre choix</a></li>
        <li><a href="page2.php">Visualiser plusieurs tables de votre choix</a></li>
        <li class="active"><a href="randomTest.php">Testez-vous</a></li>
      </ul>
    </div>
  </nav>
    <body>
      <div class="container center-align">
        <h6>Choisissez une ou plusieurs table et résolvez les opérations proposés</h6>
        <div>
<div class="input-field row">
  <form method="post" action="randomTest.php">
      <label>
        <input type="checkbox" name="option[]" value="1"/><span>Table de 1</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="2"/><span>Table de 2</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="3"/><span>Table de 3</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="4"/><span>Table de 4</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="5"/><span>Table de 5</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="6"/><span>Table de 6</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="7"/><span>Table de 7</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="8"/><span>Table de 8</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="9"/><span>Table de 9</span>
      </label>
      <label>
        <input type="checkbox" name="option[]" value="10"/><span>Table de 10</span>
      </label>
    <br><button class="btn waves-effect waves-light" type="submit">Valider</button>
</form>
</div>
        <form action="randomTestResult.php" method="post">
            <?php
                  if (!empty($_POST) && isset($_POST['option']))
                            foreach ($_POST['option'] as $selectedTable) :
                        ?>
                        <h1>Table de
                            <?php echo $selectedTable ?>
                        </h1>

                        <?php
                                for ($i = 0; $i < 5; $i++) :
                                $randnumb = rand(0,10);
                                $result = $selectedTable * $randnumb;
                                ?>

                                <p>
                                    <?php echo $selectedTable?> x
                                    <?php echo $randnumb?> =</p>
                                <input type="text" name="answer[]">
                                <input type="hidden" name="result[]" value="<?= $result ?>">
                                <input type="hidden" name="question[]" value="<?= $selectedTable ?> x <?= $randnumb ?> =">

                            <?php endfor ?>

                    <?php endforeach ?>
                    <br><button class="btn waves-effect waves-light" type="submit" id="validmultiple">Valider mes réponses</button>
        </form>
        </div>  
      </div>
    </body>
</html>