<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
    <style>
        h1{
            text-align: center;
        }
        div{
            margin: 50px auto;
            border: 2px solid black;
            width: 400px;
        }

        .head{
            border-top: 1px solid black;
            width: 350px;

        }

        
    </style>
</head>
<body>
    <?php echo validation_errors(); ?>
<div>
    <form method="post" action="<?php echo base_url(); ?>siswa/cetak">
    <div class="head"><h1>Selamat Datang</h1></div>
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" placeholder="masukkan nama!">
            </li>
        </ul>
        <ul>
            <li>
                <label for="nis">NIS :</label>
                <input type="text" name="nis" id="nis" placeholder="masukkan nis!">
            </li>
        </ul>
        <ul>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" placeholder="centumkan kelas!">
            </li>
        </ul>
        <ul>
            <li>
                <label for="tgllahir">Tanggal Lahir :</label>
                <input type="text" name="tgllahir" id="tgllahir" placeholder="cantumkan tanggal lahir!">
            </li>
        </ul>
        <ul>
            <li>
                <label for="tmplahir">Tempat Lahir :</label>
                <input type="text" name="tmplahir" id="tmplahir" placeholder="cantumkan tempat lahir!">
            </li>
        </ul>

            <ul>
                <li>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
                </li>
            </ul>

        </ul>
        <ul>
            <li>
            <label>Jenis Kelamin : </label>
	        <input type='radio' name='jenis_kelamin' value='pria' />Pria
            <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan<br/>
            </li>
        </ul>

        <ul>
            <li>
                <label for="agama">Agama</label>
                <select name="agama" id="agama">
                    <option value="">-</option>
                    <option value="islam">Islam</option>
                    <option value="kristen">Kristen</option>
                    <option value="katolik">Katolik</option>
                    <option value="budha">Budha</option>
                    <option value="hindu">Hindu</option>
                    <option value="protestan">Protestan</option>
                    <option value="khonghucu">Khonghucu</option>
                </select>
            </li>
        </ul>

        <ul>
            <li>
                <button type="submit">GO</button>
                <button type="reset">Reset</button>
            </li>
        </ul>
        <div class="head"><h1>Form Input Data Siswa</h1></div>
    </form>
    </div>
</body>
</html>