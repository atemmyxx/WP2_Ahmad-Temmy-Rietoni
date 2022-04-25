<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Output Siswa</title>
    <style>

        body {
        background: #eee;
        }

        h1{
            text-align: center;
        }
        div{
            background: white;
            border-radius: 50px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid black;
            width: 400px;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
		    rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }
        

        .nav{
            color: white;
            border-top: 1px solid black;
            width: 350px;
            background:  linear-gradient(	#515689, #AEBAF8);
            text-shadow: -5px 5px 7px black;

        }

        a {
            text-decoration: none;
        }

        label{
            font-weight: bold;
            font-size: large;
        }


    </style>
</head>
<body>
<div>
    <div class="nav"><h1>Form Output Siswa</h1></div>
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
            <li>
                <button type="submit"><a href="<?= base_url('siswa') ?>">Back</a></button>
            </li>
        </ul>
      <div class="nav"><h1>Terimakasih</h1></div>
    </form>
    </div>
</body>
</html>





