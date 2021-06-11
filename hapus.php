<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    if(isset($_GET['soal'])){
        include('koneksi.php');
        $soal       = $_GET['soal'];
        $cek    =mysqli_query($koneksi, "select soal from quiz where soal = '$soal'") or die(mysqli_error());

        if(mysqli_num_rows($cek)==0)
        {
            echo "<script>window.history.back()</script>";
        }
        else
        {
            $del = mysqli_query($koneksi, "delete from quiz where soal = '$soal'");
            if($del)
            {
                echo "<h2>Soal berhasil dihapus</h2>";
                echo "<script>window.location = 'saransoal.php'</script>";
            }
            else
            {
                echo "<h2>gagal mengahapus data</h2>";
                echo "<a href = 'saransoal.php'>kembali</a>";
            }
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>

<body>
    
</body>
</html>