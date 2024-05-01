<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url('assets/css/bootstrap.css') ?>>
    <title>Form Biodata</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #add8e6;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: blue;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<nav class="navbar bg-white navbar-expand-lg" data-bs-theme="white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Upi</a>
    <div> 
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url("biodata/index")?>">Input Biodata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url("biodata/tampil")?>">Biodata</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

    <div class="container">
        <h2>Bio</h2>
        <form action="<?php echo base_url('biodata/tampil'); ?>" method="POST">
            <label for="nama">Nama :</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat Lengkap :</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="tlp">Telephone :</label>
            <input type="number" id="tlp" name="tlp" required>

            <label for="pkr">Pekerjaan :</label>
            <input type="text" id="pkr" name="pkr" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="tgl_lahir">Tanggal Lahir :</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required>

            <input type="submit" value="Kirim"> <input type="reset" value="Batal">
        </form>
    </div>
</body>
</html>
