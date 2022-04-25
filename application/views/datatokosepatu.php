<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Output Toko Sepatu</title>
    <style>
        h3{
            text-align: center;
        }

        div{
            margin: 50px auto;
            width: 300px;
            border: 1px solid black;
        }
        
        a{
            text-decoration: none;
        }

        .nav{
            width: 250px;
        }
    </style>
   

</head>
<body>
</head>
<body>

<div>
<div class="nav"><h3>Form Output Toko Sepatu</h3></div>
<ul>
    <li>
        <label for="nama">Nama Pembeli:</label>
        <?php echo $nama ?>
    </li>
</ul>
<ul>
    <li>
        <label for="no">No Hp :</label>
        <?php echo $no ?>
    </li>
</ul>
<ul>
    <li>
        <label for="merk">Merk Sepatu :</label>
        <?php echo $merk ?>
    </li>
</ul>
<ul>
    <li>
        <label for="ukuran">Ukuran :</label>
        <?php echo $ukuran ?>
    </li>
</ul>
<ul>
    <li>
        <label for="harga">Harga :</label>
        Rp. <?php echo $harga ?>
    </li>
</ul>
<ul>
            <li>
                <button type="submit"><a href="<?= base_url('tokosepatu') ?>">Back</a></button>
            </li>
        </ul>
<div class="nav"><h3>Terimakasih</h3></div>
</form>
</div>
</body>
</html>
</body>
</html>