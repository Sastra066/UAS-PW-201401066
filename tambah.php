<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Soal</title>
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
    <br><br>
    <div class="col-lg-12 text-center">
        <h3 class="display-4">Tambah Soal</h3><br>
    </div>
    <div class="container">
        <form action="tambah_proses.php" method="post">
        <table>
            <tr>
                <td>Soal</td>
                <td>:</td>
                <td>
                    <textarea class="input" name="soal" cols="70" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>Pilihan A</td>
                <td>:</td>
                <td>
                    <input class="input" type="text" size="30" name="pilihanA" require>
                </td>
            </tr>
            <tr>
                <td>Pilihan B</td>
                <td>:</td>
                <td>
                    <input class="input" type="text" size="30" name="pilihanB" require>
                </td>
            </tr>
            <tr>
                <td>Pilihan C</td>
                <td>:</td>
                <td>
                    <input class="input" type="text" size="30" name="pilihanC" require>
                </td>
            </tr>
            <tr>
                <td>Pilihan D</td>
                <td>:</td>
                <td>
                    <input class="input" type="text" size="30" name="pilihanD" require>
                </td>
            </tr>
            <tr>
                <td>Jawaban benar</td>
                <td>:</td>
                <td>
                    <select name="jawabanbenar" require>
                        <option value="">Pilih</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </td>
            </tr>
        </table>
        <div style="text-align:right;"><br>
            <input type="submit" name="tambah" value="tambah" class="btn btn-primary">
            <a href="saransoal.php" class="btn btn-primary">Kembali</a></div>
        </div>
        </form>
    </div>
 
</body>
<footer class="text-center fixed-bottom bg-light" style="color:#000000;"><img src="logo.jpg" width="50px" alt="logo"> Sastra Harapan Gulo_201401066</footer>
</html>