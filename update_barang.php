<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="permintaan_barang.html">
    <link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
    <link rel="stylesheet" type="text/css" href="font/fontawesome-free-6.0.0-beta2-web/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="font/fontawesome-free-6.0.0-beta2-web/css/brands.css">
    <link rel="stylesheet" type="text/css" href="font/fontawesome-free-6.0.0-beta2-web/css/solid.css">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Alat Tulis Kantor PT Senang</title>
    <style>
      fieldset{
        color: whitesmoke;
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
            <div class="col-3 text-center position-relative" style="background-image:linear-gradient(45deg,rgb(49, 140, 214),rgb(11, 75, 131));">
                 <span><img src="img/logo.jpg" alt="logo" width="120px" height="120px" class="img img-thumbnail rounded-circle mt-4"></span><br><br>
                 <h3 class="fw-bold" style="color: aliceblue;">PT.Tiga Sekawan</h3><br><br>
                 <hr size="5">
                 <input type="button" value="     data barang      " onclick="window.location.href='data_Barang.php'"  class=" btn btn-light rounded-pill">
                 <hr size="5">
                 <input type="button" value="    request barang    " onclick="window.location.href='permintaan_Barang.php'"  class="  btn btn-light rounded-pill">
                 <hr size="5">
                 <input type="button" value="    info developer    " class=" btn btn-light rounded-pill">
                 <hr size="5">
                 <br><br><br><br><br><br><br><br><br><br><br><br><br>
                 <button class="btn btn-danger px-5 mb-3" >
                  log out</button>
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
                            <h3  class="fw-bold my-2 text-center mb-3 p-t-20">Update Stock Barang</h3>
                            <div class="container-fluid">
                              <div class="row"></div>
                              <div class="row">
                                <div class="col-8 offset-2 rounded-3 shadow-lg" style="background-image: linear-gradient(45deg,rgb(49, 140, 214),rgb(14, 65, 109));">
                                    <fieldset>
                                      <br><legend class="fw-bold fs-26 text-center">
                                        Masukan items produk yang akan ditambahkan diform <br><br></legend>
                                        <form action="" method="post">
                                        <table>
                                          <tr>
                                            <td class="fs-20 p-l-130 p-r-100">ID barang <br><br> Nama Barang <br><br> Stock <br><br> Satuan <br><br><br> </td>
                                            <td><input type="text" name="id_barang" id="" class="form-control" placeholder="masukan ID barang">
                                            <br><input type="text" name="nama_barang" id="" class="form-control" placeholder="masukan nama barang">
                                            <br><input type="number" name="stock" id="" class="form-control" placeholder="masukan jumlah stock">
                                            <br><input type="text" name="satuan" id="" class="form-control" placeholder="masukan satuan">
                                            <br><br>
                                            </td>
                                          </tr>
                                        </table>
                                        <?php
                                            include "php/koneksi.php";
                                            
                                            if(isset($_POST['proses'])){
                                              mysqli_query($koneksi,"insert into data_barang set 
                                            
                                              id_barang = '$_POST[id_barang]',
                                              nama_barang = '$_POST[nama_barang]',
                                              stock = '$_POST[stock]',
                                              satuan = '$_POST[satuan]';
                                              ");
                                            }
                                            if (isset($_POST['proses'])) {
                                              echo '<script>alert("data anda berhasil disimpan");</script>'; 
                                            }
                                            
                                        ?>
                                      
                                        <div class="row">
                                          <div class="col-2 offset-9">
                                            <input type="submit" name="proses" value="KIRIM" class="btn btn-success px-4">
                                          </div>
                                        </div>
                                      </form>
                                        <br><br>
                                    </fieldset>
                                </div>

                              </div>
                              <div class="row"></div>
                            </div>
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