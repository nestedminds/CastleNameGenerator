<?php include 'nameGeneratorEdited.php';?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>';
 $name = new Cli_Model_CastleGenerator();
 for ($x = 0; $x <= 0; $x++) {
    echo $name -> generateCastleName();
    echo " ";
}

 ?>
 </body>
</html>
