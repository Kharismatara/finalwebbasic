<?php 
//menyabungkan koneksi ke datbase 
require 'functions.php';
//cek apakah tombol submit sudah ditekan 

if (isset($_POST['submit'])) {

  if( inset($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/bootstrap-to-do-list.min.css" />
  </head>

  <body>
    <!-- Start your project here-->
    <style>
      .gradient-custom {
        background: radial-gradient(50% 123.47% at 50% 50%, #00ff94 0%, #720059 100%), linear-gradient(121.28deg, #669600 0%, #ff0000 100%), linear-gradient(360deg, #0029ff 0%, #8fff00 100%),
          radial-gradient(100% 164.72% at 100% 100%, #6100ff 0%, #00ff57 100%), radial-gradient(100% 148.07% at 0% 0%, #fff500 0%, #51d500 100%);
        background-blend-mode: screen, color-dodge, overlay, difference, normal;
      }
    </style>
    <section class="vh-100 gradient-custom">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="text-center">
              <h2 class="my-4">BUKU TAMU</h2>
              <h4 class="my-4">Silakan mengisi buku tamu</h4>
            </div>
            <div class="card">
              <div class="card-body p-5">
                <form action="" method="POST">
                  <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text"  name ="nama" class="form-control" id="nama" aria-describedby="nama"  required/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required />
                  </div>
                  <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan"  class="form-control" id="jurusan" aria-describedby="jurusan"  required/>
                  </div>
                  <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" name="alamat"  class="form-control" id="alamat" aria-describedby="alamat" required />
                  </div>
                  <button type="submit"   name = "submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
