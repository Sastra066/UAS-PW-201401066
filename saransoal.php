<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saran Soal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<style>
    
    body{
        background-image: url(bg1.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        height: 100%;
        color:#ffffff;
    }
    table{
        background-color:#ffffff;
        border-radius:20px;
        
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
        <a class="navbar-brand" href="Stoikiometri.php">Home</a>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="col-lg-12 text-center mt-5">
            <h3 class="display-4">Saran Soal</h3><br>
        </div>
        <table class="table table-striped" style="text-align: center;">
        <thead class="table-primary">
            <th>No.</th>
            <th>Soal</th>
            <th>Opsi</th>
        </thead>

        <?php
            include_once 'koneksi.php';
            $no=1;
            $data=mysqli_query($koneksi, "select * from quiz");
            while ($d=mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td style="text-align: start; width:80%;">
                <?php echo $d['soal']; ?><br>
                <div class="row">
                    <div class="col-4">
                        A. <?php echo $d['pilihanA']; ?><br>
                        B. <?php echo $d['pilihanB']; ?>
                    </div>
                    <div class="col">
                        C. <?php echo $d['pilihanC']; ?><br>
                        D. <?php echo $d['pilihanD']; ?>
                    </div>
                </div>
                Jawaban : <?php echo $d['jawabanbenar']; ?>
            </td>
            <td>
                <a href="edit.php ?soal=<?php echo $d['soal'];?>">edit</a>
                <a href="hapus.php ?soal=<?php echo $d['soal'];?>">hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>

        </table>
        <div style="text-align:right;">
        <a href="tambah.php" class="btn btn-primary">Tambah soal</a></div>
        </div>
    </div>
   
</body>
<footer class="text-center fixed-bottom bg-light" style="color:#000000;"><img src="logo.jpg" width="50px" alt="logo"> Sastra Harapan Gulo_201401066</footer>
</html>