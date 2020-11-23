<!DOCTYPE html>
<html>
  <head>
    <title>Koneksi Database MySQL</title>
  </head>
  <body>
    <h1>Demo Koneksi Database</h1>
    <?php
    $koneksi = mysqli_connect("localhost","root","","mahasiswa")

    if(mysqli_connect_arrow()){
     echo "Koneksi database gagal : " . mysqli_connect_arrow();
   } else {
     echo "sukses";
   }
     ?>
  </body>
</html>
