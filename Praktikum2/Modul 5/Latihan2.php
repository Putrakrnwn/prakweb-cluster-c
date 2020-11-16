</head>
<h1><center>Mengurutkan Data<center></h1>
<body>
<div class="box">
        <center><h3>MASUKKAN NAMA YANG AKAN DI URUTKAN<br/></h3></center>

        <!--form input nama-->
        <form action="" method="post">
            <input type="text" name="enrinal">
            <input type="text" name="huda">
            <input type="text" name="taufiq">
            <input type="text" name="adot">
            <input type="text" name="ivena">
            <input type="text" name="dimas">
            <input type="text" name="taufik">
            <input type="submit" name="submit" value="SORTING">
        </form>

        <?php
        //cek submit
        if(isset($_POST['submit'])){

            //menangkap data nama yang di input
            $lanirne=$_POST['enrinal'];
            $aduh=$_POST['huda'];
            $qifuat=$_POST['taufik'];
            $toda=$_POST['adot'];
            $anevi=$_POST['ivena'];
            $samid=$_POST['dimas'];
            $kifuat=$_POST['taufik'];

            //masukkan data nama ke array
            $nama=array($aduh,$anevi,$kifuat,$lanirne,$samid,$toda,$qifuat);

            //mengurutkan nama dengan fungsi sort()
            sort($nama);
            echo "</br>";
            echo "<div class='hasil'> HASIL : ";

            //menampilkan isi array angka dengan looping for
            $jumlah=count($nama);
            for($x=0;$x<$jumlah;$x++)
            {
                echo $nama[$x];
                echo " ";
            }
            echo "</div>";

        }
        ?>
    </div>
</body>
</html>
