<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Output Siswa</title>
    <style>

        h3{
            text-align: center;
        }
        div{
            margin: 50px auto;
            padding: 20px;
            border: 2px solid black;
            width: 400px;
        }

        .nav{
            border-top: 1px solid black;
            width: 350px;

        }

    </style>
</head>
<body>
<div>
    <div class="nav"><h3>Form Output Siswa</h3></div>
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <?php echo $nama ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="nis">NIS :</label>
                <?php echo $nis ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="kelas">Kelas :</label>
                <?php echo $kelas ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="tgllahir">Tanggal Lahir :</label>
                <?php echo $tgllahir ?>
            </li>
        </ul>
        <ul>
            <li>
                <label for="tmplahir">Tempat Lahir :</label>
                <?php echo $tmplahir ?>
            </li>
        </ul>

            <ul>
                <li>
                    <label for="alamat">Alamat :</label>
                    <?php echo $alamat ?>
                </li>
            </ul>
        <ul>
            <li>
            <label>Jenis Kelamin : </label>
	        <?php echo $jenis_kelamin ?>
            </li>
        </ul>

        <ul>
            <li>
                <label for="agama">Agama :</label>
                <?php echo $agama ?>
            </li>
        </ul>
        <ul>
            <li><button type="submit"><a href="<?= base_url('siswa');?>"></a>Back</button></li>
        </ul>
      <div class="nav"><h3>Terimakasih</h3></div>
    </form>
    </div>
</body>
</html>





