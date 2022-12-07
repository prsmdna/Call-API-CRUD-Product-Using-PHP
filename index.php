<?php
$link = "http://localhost:5000/produk";
$konten = file_get_contents($link);
$data = json_decode($konten, true);

// var_dump($data);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API-iPhone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mt-3">PENERAPAN API PRODUK IPHONE</h1>

    <div class="container">
      <div class="row">
        <?php foreach ($data as $row) {

        ?>
        <div class="col-3 mt-3">
          <div class="card" style="width: 18rem;">
          <img src="<?php echo $row['gambar'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['namaProduk'] ?></h5>
              <p class="card-title">Harga Beli : Rp.<?php echo $row['hargaBeli'] ?></p>
              <p class="card-title">Harga Jual : Rp.<?php echo $row['hargaJual'] ?></p>
              <p class="card-title">Laba       : Rp.<?php echo $row['laba'] ?></p>
              <p class="card-title">Stok       : <?php echo $row['stok'] ?></p>
            </div>
          </div>
      </div>
      <?php }?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>