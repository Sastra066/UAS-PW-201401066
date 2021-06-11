<?php

if(isset($_POST['tambah']))
{
    include_once 'koneksi.php';
    $soal       = $_POST['soal'];
    $pilihanA   = $_POST['pilihanA'];
    $pilihanB   = $_POST['pilihanB'];
    $pilihanC   = $_POST['pilihanC'];
    $pilihanD   = $_POST['pilihanD'];
    $jawabanbenar=$_POST['jawabanbenar'];

    $input= mysqli_query($koneksi, "insert into quiz values ('$soal', '$pilihanA', '$pilihanB', '$pilihanC', '$pilihanD', '$jawabanbenar')")
    
    or die(mysqli_error());

    if($input)
    {
        echo "<h2>data berhasil ditambahkan</h2>";
        echo "<script>window.location = 'saransoal.php'</script>";
    }
    else
    {
        echo "<h2>gagal menambahkan data</h2>";
        echo "<a href = 'tambah.php'>kembali</a>";
    }
}

?>