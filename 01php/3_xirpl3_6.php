<DOCTYPE html>
<head>
    <title>Belajar PHP</title>
</head>
<body>
    <?php
      $MultiArray = [
          [
              'Nama' => 'Satria',
              'Kelas' => 'Rpl 1'
          ],
          [
            'Nama' => 'Arsyi',
            'Kelas' => 'Rpl 2'
        ],
        [
            'Nama' => 'Dhika',
            'Kelas' => 'Rpl 3'
        ],
        [
            'Nama' => 'Evan',
            'Kelas' => 'Rpl 4'
        ],
        [
            'Nama' => 'Febian',
            'Kelas' => 'Rpl 5'
        ],
        [
            'Nama' => 'Irfan',
            'Kelas' => 'Rpl 6'
        ]
          
        ];

    $hasil = array_slice($MultiArray,0,2);
    echo "<pre>";
    print_r($hasil);
    echo "</pre>";
    ?>
</body>
</html>