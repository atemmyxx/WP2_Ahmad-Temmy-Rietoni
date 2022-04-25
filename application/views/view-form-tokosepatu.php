<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Toko Sepatu</title>
    <style>
        h1{
            text-align: center;
        }
        div{
            margin: 50px auto;
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
    <div class="nav"><h1>Form Input</h1></div>
    <form method="post" action="<?php echo base_url(); ?>tokosepatu/cetak">
    <ul>
        <li>
            <label for="nama">Nama Pembeli :</label>
            <input type="text" name="nama" id="nama" placeholder="masukkan nama pembeli!" autocomplete="off">
        </li>
    </ul>
    
    
    <ul>
        <li>
            <label for="no">Nomor HandPhone :</label>
            <input type="text" name="no" id="no" placeholder="masukkan no hp!" autocomplete="off">
        </li>
    </ul>
    <ul>
        <li>
        <label for="merk">Merk Sepatu :</label>
            <select name="merk" id="merk">
                <option value="">-pilih merk-</option>
                <option value="Nike">Nike</option>
                <option value="Adidas">Adidas</option>
                <option value="Kickers">Kickers</option>
                <option value="Eiger">Eiger</option>
                <option value="Bucherri">Bucherri</option>
            </select>
        </li>
    </ul>
    
    <ul>
        <li>
            <label for="ukuran">Ukuran Sepatu :</label>
                <select name="ukuran" id="ukuran">
                    <option value="">-pilih ukuran-</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                </select>
        </li>
    </ul>
    
    <ul>
        <li>
        <button type="submit" name="go">Beli</button>
        </li>
    </ul>
    <div class="nav"><h1>Toko Sepatu</h1></div>
    </div>
        
</body>
</html>