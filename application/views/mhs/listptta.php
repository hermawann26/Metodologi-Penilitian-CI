<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Selamat Datang | METOPEN</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet'?>">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">
 

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Metodologi Penelitian</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url().'mhs/home'?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="download.html">Download</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url().'login'?>">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container mt-5">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-12">
        <div class="card my-4">
        <h4 class="card-header">Pengajuan Judul Metopen</h4><small></small>

       <div class="card-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama Peserta</th>
                  <th>Judul Metopen</th>
                </tr>
                </thead>
               
                <tbody>
                   <?php foreach ($data->result_array() as $i) :                    
                       $nim=$i['nim'];
                       $nama=$i['nama'];
                       $judul=$i['judul'];
                    ?>
                  <tr>
                  <td><?php echo $nim;?></td>
                  <td><?php echo $nama;?></td>
                  <td><?php echo $judul;?></td>
                </tr> 
        <?php endforeach;?>
                   </tbody>
              </table>
            </div>
            </div>

      </div>

      <!-- Sidebar Widgets Column -->
      

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!--
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    
  </footer>-->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

</body>

</html>
