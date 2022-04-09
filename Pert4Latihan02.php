<?php
    function hitungluas($al, $tg){
        $hsl = 0.5 * $al * $tg;
        return $hsl;
    }

    if(isset($_POST["txAlas"])){
        $alas = $_POST["txAlas"];
        $tinggi = $_POST["txTinggi"];
        $hsl = hitungluas($alas, $tinggi);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Segitiga</title>
</head>
<body>
    
    <h3>Hitung Luas Segitiga</h3>

    <form method="post">
        Inputkan Nilai: <br><br>
        Alas <br>
        <input type="number" name="txAlas"  value="<?=$alas;?>"><br>
        Tinggi <br>
        <input type="number" name="txTinggi" value="<?=$tinggi;?>"><br>
        <br>
        Luasnya :<br>
        <input type="number" name="txHasil" value="<?=$hsl;?>" disabled>
        <br>
        <button type="submit">Hitung Luas</button>
    </form>

</body>
</html>