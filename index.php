<?php
//koneksi 
require 'functions.php';

$bukutamu = query("SELECT * FROM tamu");

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
    <section class="vh-100" style="background-color: rgb(246, 254, 153)">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col col-xl-10">
            <div class="card rounded-3">
              <div class="card-body p-4">
                <h4 class="text-center my-3 pb-3">Data Tamu Yang Datang</h4>

                <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center mb-4 pb-2">
                  <div class="col-12">
                    <div class="form-outline">
                      <input type="text" id="form1" class="form-control" />
                      <label class="form-label" for="form1">Enter a task here</label>
                    </div>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>

                  <div class="col-12">
                    <button type="submit" class="btn btn-warning">Get tasks</button>
                  </div>
                </form>

                <table class="table mb-4">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Email</th>
                      <th scope="col">Jurusan</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  $i = 1; ?>
                    <?php  foreach( $bukutamu as $row ) :  ?>
                    <tr>
                      <th scope="row"><?=  $i; ?></th>
                      <td><?= $row['nama'] ?></td>
                      <td><?= $row['email'] ?></td>
                      <td><?= $row['jurusan'] ?></td>
                      <td><?= $row['alamat'] ?></td>
                      <td>
                        <a href=""><button type="submit" class="btn btn-danger">Delete</button></a>
                        <br />
                        <br />
                       <a href=""><button type="submit" class="btn btn-success ">Edit</button>
                       </td></a> 
                    </tr>
                    <?php  $i++; ?>
                    <?php endforeach;?>
                   
                   
                  </tbody>
                </table>
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
