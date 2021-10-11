<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="permintaan_barang.html">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Alat Tulis Kantor PT Senang</title>
    <style>
      table{
        height: 50px;
      }
      *{
      font-family: 'josefin',sans-serif;
      }
      tr td{
        font-weight:500;

      }
      @font-face {
	font-family: 'josefin';
	src: url('font/static/JosefinSans-Bold.ttf');
	src: url('font/static/JosefinSans-Bold.ttf') format('ttf'),
	     url('font/static/JosefinSans-Bold.ttf') format('truetype');
}
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row bg-info">
            <div class="col-3 text-center position-relative" style="background-image: linear-gradient(45deg,rgb(49, 140, 214),rgb(11, 75, 131));">
                 <span><img src="img/logo.jpg" alt="logo" width="120px" height="120px" class="img img-thumbnail rounded-circle mt-4"></span><br><br>
                 <h3 class="fw-bold" style="color: aliceblue;">PT.Tiga Sekawan</h3><br><br>
                 <hr size="5">
                 <input type="button" value="     data barang      " onclick="window.location.href='Data_barang.php'"  class="btn btn-light rounded-pill">
                 <hr size="5">
                 <input type="button" value="    update barang    " onclick="window.location.href='update_barang.php'"  class="btn btn-light rounded-pill">
                 <hr size="5">
                 <input type="button" value="    info developer    " class="btn btn-light rounded-pill">
                 <hr size="5">
                 <br><br><br><br><br><br><br><br><br><br><br><br><br>
                 <button class="btn btn-danger px-5 mb-3" >log out</button>
            </div>
            <div class="col-9" style="background-color: aliceblue;">
                    <div class="row py-2" style="background-color:  rgb(11, 75, 131);">
                        <div class="col-4 offset-4 text-center" style="color: aliceblue;">
                            <h1>INVENTORY AT<span class="">K</span></h1>
                        </div>
                        <div class="col-4 text-center pt-2" style="color: aliceblue;">
                          <h3>ADMIN</h3>
                        </div>
                      </div>
                            <h3  class="fw-bold my-2 text-center mb-3">Permintaan Barang</h3>
                            <div class="container-fluid py-4 mb-3 rounded-3 shadow" style="background-color: rgb(200, 220, 238);">
                              <h5 class="fw-bold">Stock Barang</h3><br>
                                <div class="overflow-auto" style="height: 250px;">
                              <table class="table shadow-lg table-hover table-primary text-center mb-5">
                                <tr>
                                  <th>No</th>
                                  <th>ID Barang</th>
                                  <th>Nama Barang</th>
                                  <th>Stock</th>
                                  <th>Satuan</th>
                                </tr>
                                  <?php
                                    include "php/koneksi.php";

                                    $no=1;
                                    $ambildata = mysqli_query($koneksi,"select * from data_barang");
                                    while ($tampil=mysqli_fetch_array($ambildata)){
                                      echo "<tr>
                                        <td>$no</td>
                                        <td>$tampil[id_barang]</td>
                                        <td>$tampil[nama_barang]</td>
                                        <td>$tampil[stock]</td>
                                        <td>$tampil[satuan]</td>
                                      </tr>";
                                      $no++;
                                    }
                                    
                                  ?>
                              </table>
                            </div>
                            <br><br>
                             <h5 class="fw-bold">Jumlah Permintaan Barang</h3>
                          <table class="table shadow-lg table-hover table-primary text-center overflow-scroll">
                            <tr>
                              <th>No</th>
                              <th>ID Barang</th>
                              <th>Nama Barang</th>
                              <th>Stock</th>
                              <th>Satuan</th>
                              <th>Jumlah Request</th>
                              <th>Devisi</th>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>002</td>
                            <td>Kertas A4</td>
                            <td>5</td>
                            <td>rim</td>
                            <td>3</td>
                            <td>HRD</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>001</td>
                              <td>Bolpoin</td>
                              <td>12</td>
                              <td>pcs</td>
                              <td>2</td>
                              <td>HRD</td>
                              </tr>
                          </table>
                            <form action="" class="row">
                              <table class="col-8 offset-1"> 
                                <tr>
                                  <td><label for="id_barang" class="form-label">ID Barang</label></td>
                                  <td><input type="text" class="form-control" placeholder="masukan id barang"></td>
                                  <td><label for="jumlah_request" class="ms-5 form-label">Jumlah Request</label></td>
                                  <td><input type="number" name="jumlah_request" id="" class="form-control" placeholder="masukan jumlah request"></td>
                                </tr>
                              </table>
                              <div class="col ">
                                <button type="submit" class="btn btn-light mt-1">OKE</button>
                              </div>
                            </form>
                          </div>
                          <div class="row">
                            <div class="col offset-11"> 
                              <button type="submit" class="btn btn-success px-3">KIRIM</button></div>
                          </div>
                        
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>