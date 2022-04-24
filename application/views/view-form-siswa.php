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

        ul{
            margin-bottom: 60px;
        }
        .head{
            border-top: 1px solid black;
            width: 350px;

        }

        .error{
            position: absolute;
            border: none;
            color: red;
            font-weight: bold;
            font-style: italic;
            margin-top: 5px;
            
        }
        
    </style>
</head>
<body>
 
<div>
    <form method="post" action="<?php echo base_url(); ?>siswa/cetak">
    <div class="head"><h1>Selamat Datang</h1></div>
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" placeholder="masukkan nama!" autocomplete="off">
                <div class="error"><?= form_error('nama') ?></div>
            </li>
        </ul>
        <ul>
            <li>
                <label for="nis">NIS :</label>
                <input type="text" name="nis" id="nis" placeholder="masukkan nis!" autocomplete="off">
                <div class="error"><?= form_error('nis') ?></div>
            </li>
        </ul>
        <ul>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" placeholder="centumkan kelas!">
                <div class="error"><?= form_error('kelas') ?></div>
            </li>
        </ul>
        <ul>
            <li>
                <label for="tgllahir">Tanggal Lahir :</label>
                <input type="text" name="tgllahir" id="tgllahir" placeholder="tahun/bulan/tanggal" autocomplete="off">
                <div class="error"><?= form_error('tgllahir') ?></div>
            </li>
        </ul>
        <ul>
            <li>
                <label for="tmplahir">Tempat Lahir :</label>
                <input type="text" name="tmplahir" id="tmplahir" placeholder="cantumkan tempat lahir!" autocomplete="off">
                <div class="error"><?= form_error('tmplahir') ?></div>
            </li>
        </ul>

            <ul>
                <li>
                    <label for="alamat">Alamat :</label>
                    <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
                    <div class="error"><?= form_error('tmplahir') ?></div>
                </li>
            </ul>

        </ul>
        <ul>
            <li>
            <label>Jenis Kelamin : </label>
	        <input type='radio' name='jenis_kelamin' value='pria' />Pria
            <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan
            <div class="error"><?= form_error('jenis_kelamin') ?></div>
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
                <div class="error"><?= form_error('agama') ?></div>
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