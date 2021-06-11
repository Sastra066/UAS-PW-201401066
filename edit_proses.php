<?php

if(isset($_POST['simpan']))
{
    include('koneksi.php');
    $soal       = $_POST['soal'];
    $pilihanA   = $_POST['pilihanA'];
    $pilihanB   = $_POST['pilihanB'];
    $pilihanC   = $_POST['pilihanC'];
    $pilihanD   = $_POST['pilihanD'];
    $jawabanbenar=$_POST['jawabanbenar'];
    $update     = mysqli_query($koneksi, "update quiz set

    pilihanA    = '$pilihanA',
    pilihanB    = '$pilihanB',
    pilihanC    = '$pilihanC',
    pilihanD    = '$pilihanD',
    jawabanbenar= '$jawabanbenar'
    where soal ='$soal'")
    
    or die(mysqli_error());



    if($update)
    {
        echo "<h2>data berhasil diupdate</h2>";
        echo "<script>window.location = 'saransoal.php'</script>";
    }

    else
    {
        echo "<h2>gagal menyimpan data</h2>";
        echo "<a href = 'edit.php ?soal=".$soal."'>kembali</a>";
    }
}

else
{
    echo "<script>window.history.back()</script>";
}

?>