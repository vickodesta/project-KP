

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
    <link rel="stylesheet" type="text/css" href="font/fontawesome-free-6.0.0-beta2-web/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="font/fontawesome-free-6.0.0-beta2-web/css/brands.css">
    <link rel="stylesheet" type="text/css" href="font/fontawesome-free-6.0.0-beta2-web/css/solid.css">
    <title>Login</title>
    <style>
    body{
    background-image: linear-gradient(45deg,rgb(14, 87, 151),rgb(26, 77, 122));
    }
    .container1{
    width: 65%;
    height: 610px;
    background-color: rgb(255, 255, 255);
    margin: 50px auto;
    }
    img{
        margin: 50px 50px 0px 0px;
    }
    .ff{
        font-family: 'josefin',sans-serif;
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

<!-- copas -->
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
<!-- copas -->

        <div class="container1 rounded-3">
            <table>
                <tr>
                    <td><img src="img/home-inventory-tips-unexpected-places.gif" alt="gif" width="600px" height="500px"></td>
                    <td class="text-center">
                        <form action="cek_login.php" method="post" class=" validate-input">
                        <span class="login100-form-title">
                            <h3 class="fw-bold ff fs-37">Login</h3>
                        </span>
                        <div class="wrap-input100 validate-input">
                            <input class="input100 ff" type="text" name="divisi" placeholder="Divisi">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fas fa-briefcase"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <input class="input100 ff" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn ff">
                                Login
                            </button>
                        </div>
                        <div class="text-center p-t-12" >
                            <span class="txt1 ff">
                                Forgot
                            </span>
                            <a class="txt2 ff f-s-10" href="#">
                                Username / Password?
                            </a>
                        </div>
                    </form></td>
                </tr>
            </table>
        </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>