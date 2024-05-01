<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?= base_url('assets/css/bootstrap.css') ?>>
    <title>Tampilan Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #C5B4E3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            padding: 40px;
            background-color: white;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 40px;
            text-align: center;
        }
        .container h2 {
            margin-top: 0;
            color: black;
        }
        .container p {
            margin-bottom: 10px;
            color: blue;
        }
        .container p strong {
            font-weight: bold;
            color: blue;
            margin-right: 5px;
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
<div>
    <div class="container">
        <h2>Biodata</h2>
        <p><strong>Nama :</strong> <?php echo $nama; ?></p>
        <p><strong>Alamat :</strong> <?php echo $alamat; ?></p>
        <p><strong>Telephone :</strong> <?php echo $tlp; ?></p>
        <p><strong>Pekerjaan :</strong> <?php echo $pkr; ?></p>
        <p><strong>Email :</strong> <?php echo $email; ?></p>
        <p><strong>Tanggal Lahir :</strong> <?php echo $tgl_lahir; ?></p>
    </div>
    </div>
</body>
</html>