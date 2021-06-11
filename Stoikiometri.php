<?php
  session_start();
  include "koneksi.php";
  if (!isset($_SESSION['username'])){
    header ("location:login.php");
  }
  if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stoikiometri</title>
    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>


<body class="mt-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a class="navbar-brand" href="#">Stoikiometri</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pengertian">Pengertian</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#quiz">Quiz</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kalkulator">Kalkulator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aksi_logout.php">Logout</a>
            </li>
          </ul>
        </div>
        </div>
    </nav>

    
    <div class="jumbotron" id="home">
      <div class="container"><img src="img2.jpg" width="100%">
      <p id="p">Pernahkah Anda memupuk tanaman? Saat memupuk tanaman, konsentrasi pengenceran pupuk harus didasarkan pada perbandingan tertentu. Konsentrasi pupuk tidak boleh terlalu pekat, maupun terlalu encer. Mengapa demikian? Bukankah semakin pekat pupuk, tanaman akan mendapatkan unsur hara yang semakin banyak? <br><br>
      Jika konsentrasi pupuk semakin banyak, proses metabolisme di dalam tubuh tanaman akan terganggu karena komposisi unsur kimia di dalam pupuk sudah ditentukan melalui stoikiometri. Apa itu stoikiometri? Temukan jawabannya di pembahasan kali ini.</p>
      </div>
    </div>

    <div id="pengertian" class="container">
      <div class="row">
        <div class="col"><br><br><h1 class="font-weight-bold ">Pengertian Stoikiometri</h1></div>
      </div>
      <div class="row">
        <div class="col kiri">
          <p>Stoikiometri adalah ilmu kimia yang mempelajari tentang kuantitas suatu zat, meliputi massa, jumlah mol, volume, dan jumlah partikel. Saat mempelajari stoikiometri, Anda akan selalu bertemu dengan koefisien. Apa itu koefisien? Koefisien merupakan bentuk perbandingan mol, volume, atau jumlah partikel. Adapun rumus-rumus yang biasa digunakan dalam menyelesaikan stoikiometri adalah sebagai berikut.</p>
          <div class="text-center"><img src="img1.png" class="text-center"></div>
        </div>
        <div class="col-5 align-self-center kanan"><img src="img4.png" width="450px" height="350px"><br><br></div> 
      </div>  
    </div>


    
    <div id="quiz">
      <div class="container">  
        <div class="row mt-5">
            <div class="col-lg mt-3" >
              <form name="quiz">
                <div class="table">
                  <h1>Quiz</h1>
                  <p>1.  (nilai 30) Jumlah mol air yang mengandung 2,408 x 10^(23) atom molekul air adalah…</p>
                  <div class="row">
                    <div class="col-4">
                      <p><input type="radio" name="question1" value="a"> A. 0,02 mol <br>
                        <input type="radio" name="question1" value="b"> B. 0,04 mol</p>
                    </div>
                    <div class="col">
                      <p><input type="radio" name="question1" value="c"> C. 0,2 mol <br>
                        <input type="radio" name="question1" value="d"> D. 0,4 mol</p>
                    </div>
                  </div>
                  <p>2. (nilai 40) Volume 11 gram gas CO2 pada keadaan standar adalah… (Ar C=12 dan O=16)</p>
                  <div class="row">
                    <div class="col-4">
                      <p><input type="radio" name="question2" value="a"> A. 5,6 liter <br>     
                        <input type="radio" name="question2" value="b"> B. 2,8 liter </p>
                    </div>
                    <div class="col">
                      <p><input type="radio" name="question2" value="c"> C. 22,4 liter <br>
                        <input type="radio" name="question2" value="d"> D. 11,2 liter</p>
                    </div>
                  </div>
                  <p>3. (nilai 30) Diketahui massa atom relatif (Ar) Ca= 40, C=12, O=16 maka massa 2 atom CaCO3 adalah… gram</p>
                  <div class="row">
                    <div class="col-4">
                      <p><input type="radio" name="question3" value="a"> A. 200 <br>
                        <input type="radio" name="question3" value="b"> B. 250 </p>
                    </div>
                    <div class="col">
                      <p><input type="radio" name="question3" value="c"> C. 300 <br>
                        <input type="radio" name="question3" value="d"> D. 350</p>
                    </div>
                  </div>
                  <button type="button" onclick="check()">Done</button>&nbsp;<a href="saransoal.php">Ingin menyarankan soal?</a>
                  <div class="score"><p id="result">  Score :</p></div>
                </div>  
              </form>
            </div>
            
          
          
            <div class="col-3 col align-self-center mb-3 mt-3">
              <div id="kalkulator">
                <form name="form">
                    <input class="hasil" name="hasil" placeholder="Hasil...">
                </form>
                <table>
                  <tr>
                    <td><input type="button" class="button" id="btn2" value="c" onclick="clean()"> </td>
                    <td><input type="button" class="button" id="btn2" value="<" onclick="back()"> </td>
                    <td><input type="button" class="button" id="btn" value="/" onclick="insert('/')"> </td>
                    <td><input type="button" class="button" id="btn" value="x" onclick="insert('*')"> </td>
                  </tr>
                  <tr>
                    <td><input type="button" class="button" value="7" onclick="insert(7)"> </td>
                    <td><input type="button" class="button" value="8" onclick="insert(8)"> </td>
                    <td><input type="button" class="button" value="9" onclick="insert(9)"> </td>
                    <td><input type="button" class="button" id="btn" value="-" onclick="insert('-')"> </td>
                  </tr>
                  <tr>
                    <td><input type="button" class="button" value="4" onclick="insert(4)"> </td>
                    <td><input type="button" class="button" value="5" onclick="insert(5)"> </td>
                    <td><input type="button" class="button" value="6" onclick="insert(6)"> </td>
                    <td><input type="button" class="button" id="btn" value="+" onclick="insert('+')"> </td>
                  </tr>
                  <tr>
                    <td><input type="button" class="button" value="1" onclick="insert(1)"> </td>
                    <td><input type="button" class="button" value="2" onclick="insert(2)"> </td>
                    <td><input type="button" class="button" value="3" onclick="insert(3)"> </td>
                    <td rowspan="5"><input style="height: 102px;" type="button" class="button" id="btn" value="=" onclick="equal()"> </td>
                  </tr>
                  <tr>
                    <td colspan="2"><input style="width: 102px;" type="button" class="button" value="0" onclick="insert(0)"> </td>
                    <td><input type="button" class="button" value="." onclick="insert('.')"> </td>
                  </tr>
                </table>
              </div>
            </div>
        </div>
      </div>
    </div>

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
<footer class="text-center"><img src="logo.jpg" width="50px" alt="logo"> Sastra Harapan Gulo_201401066</footer>

</html>