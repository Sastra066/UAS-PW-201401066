<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal</title>
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
    .container{
        background-color: #ffffff;
        color:#000000;
        width: fit-content;
        border-radius:20px;
        padding:30px;
        max-width: 700px;
    }
    .td1{
        width:150px;
    }
    .input{
        width: 100%;
    }
</style>
<body>
    <?php
        include('koneksi.php');
        $soal = $_GET['soal'];
        $show = mysqli_query($koneksi, "select * from quiz where soal = '$soal'");
        if(mysqli_num_rows($show)==0)
        {
            echo "<script>window.history.back()</script>";
        }
        else
        {
            $d = mysqli_fetch_assoc($show);
        }
    ?>

    
    <div class="col-lg-12 text-center mt-5">
        <h3 class="display-4">Edit Soal</h3><br>
    </div>
    <div class="container">    
        <form action="edit_proses.php" method="post">
        <table>
            <tr>
                <td class="td1">Soal</td>
                <td>:</td>
                <td>
                    <input type="hidden" name="soal" value="<?php echo $d['soal']; ?>"><?php echo $d['soal']; ?>
                </td>
            </tr>
            <tr>
                <td class="td1">Pilihan A</td>
                <td>:</td>
                <td>
                    <input class="input" type="text" size="30" name="pilihanA" value="<?php echo $d['pilihanA']; ?>" require>
                </td>
            </tr>
            <tr>
                <td class="td1">Pilihan B</td>
                <td>:</td>
                <td>
                    <input class="input" type="text" size="30" name="pilihanB" value="<?php echo $d['pilihanB']; ?>" require>
                </td>
            </tr>
            <tr>
                <td class="td1">Pilihan C</td>
                <td>:</td>
                <td>
                    <input class="input" type="text" size="30" name="pilihanC" value="<?php echo $d['pilihanC']; ?>" require>
                </td>
            </tr>
            <tr>
                <td class="td1">Pilihan D</td>
                <td>:</td>
                <td>
                    <input class="input" type="text" size="30" name="pilihanD" value="<?php echo $d['pilihanD']; ?>" require>
                </td>
            </tr>
            <tr>
                <td class="td1">Jawaban benar</td>
                <td>:</td>
                <td>
                    <select name="jawabanbenar" require>
                        <option value="">Pilih</option>
                        <option value="A" <?php if ($d['jawabanbenar']=='A'){echo 'selected';} ?>>A</option>
                        <option value="B" <?php if ($d['jawabanbenar']=='B'){echo 'selected';} ?>>B</option>
                        <option value="C" <?php if ($d['jawabanbenar']=='C'){echo 'selected';} ?>>C</option>
                        <option value="D" <?php if ($d['jawabanbenar']=='D'){echo 'selected';} ?>>D</option>
                    </select>
                </td>
            </tr>
        </table>
        <div style="text-align:right;"><br>
            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
        </div>
        </form>
    </div>

</body>
<footer class="text-center fixed-bottom bg-light" style="color:#000000;"><img src="logo.jpg" width="50px" alt="logo"> Sastra Harapan Gulo_201401066</footer>
</html>