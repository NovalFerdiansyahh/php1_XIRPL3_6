<DOCTYPE html>
<head>
    <title>Belajar PHP</title>
</head>
<body>
    <h2>Perulangan</h2>
    <?php
      echo "". date ("Y/m/d") . "<br>";
      echo "". date ("h:i:sa") . "<br>";
      for ($i=0; $i <6; $i++)
      {
          for ($j=$i; $j <6; $j++)
          {
              echo "*";
          }
          echo "<br />";
      }
    ?>
</body>
</html>