<DOCTYPE html>
<head>
    <title>FORM</title>
</head>
<body>
    <?php
      if(isset($_GET['v1']))
      {
          echo $_GET['v1'];
      }
      echo "<br />";
      if(isset($_GET['v2']))
      {
          echo $_GET['v2'];
      }
    ?>

    
     <h1>Input Data</h1>

        <form method="GET" action="proses01.php">
            <p> Nama : <input type="text" name="nama"></p>
            <p> E-Mail : <input type="text" name="email"></p>
            <p><input type="submit" value="Proses Data" name="submit"></p>
        </form>
    
</body>
</html>