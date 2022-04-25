<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa</title>
        <style>

        body {
        background: #eee;
        }

        h1{
            text-align: center;
        }

        div{
            background: white;
            margin: 50px auto;
            border: 2px solid black;
            border-radius: 50px;
            width: 400px;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px,
		rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        ul{
            margin-bottom: 60px;
        }

        label{
            font-weight: bold;
            font-size: large;
        }
        .head{
            color: white;
            background:  linear-gradient(	#515689, #AEBAF8);
            border-top: 1px solid black;
            width: 350px;
            text-shadow: -5px 5px 7px black; 

        }

        .error{
            width: 200px;
            position: absolute;
            border: none;
            color: red;
            font-weight: bold;
            font-style: italic;
            margin-top: 5px;
            box-shadow: none;
            
        }

         .submit{
            background-color:#2979ff;
            padding: 5px;
        }

         .reset{
            background-color: red;
            padding: 5px;
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
                <div class="error" ><?= form_error('nama') ?></div>
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
                    <div class="error"><?= form_error('alamat') ?></div>
                </li>
            </ul>

        </ul>
        <ul>
            <li>
            <label>Jenis Kelamin : </label>
	        <input type='radio' name='jenis_kelamin' value='Pria' />Pria
            <input type='radio' name='jenis_kelamin' value='Perempuan' />Perempuan
            <div class="error"><?= form_error('jenis_kelamin') ?></div>
            </li>
        </ul>

        <ul>
            <li>
                <label for="agama">Agama</label>
                <select name="agama" id="agama">
                    <option value="">-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
                <div class="error"><?= form_error('agama') ?></div>
            </li>
        </ul>

        <ul>
            <li>
                <button type="submit" class="submit">GO</button>
                <button type="reset" class="reset">Reset</button>
            </li>
        </ul>
        <div class="head"><h1>Form Input Data Siswa</h1></div>
    </form>
    </div>
</body>
</html>