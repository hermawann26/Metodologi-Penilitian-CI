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
      <div class="col-md-8">
      	<div class="card my-4">
        <h4 class="card-header">Pengumuman Penerimaan Judul Metopen</h4><small></small>

       <div class="card-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                  <th>NIM</th>
                   <th>Nama</th>
                  <th>Judul Metopen</th>
                  <th>Dosen</th>
                  <th>Status</th>
                </tr>
                </thead>
                
                <tbody>
                  <?php foreach ($data->result_array() as $i) :                    
                       $nim=$i['Nim'];
                        $nama=$i['nama'];
                       $judul=$i['Judul_metopen'];
                       $dosen=$i['Dosen'];
                       $status=$i['status'];  
                    ?>
                  <tr>
                  <td><?php echo $nim;?></td>
                  <td><?php echo $nama;?></td>
                  <td><?php echo $judul;?></td>
                  <td><?php echo $dosen;?></td>
                  <?php if($status=='1'):?>
                        <td>Diterima</td>
                  <?php elseif($status=='2'):?>
                        <td>Ditolak</td>
                  <?php elseif($status=='3'):?>
                        <td>Menunggu</td>
                  <?php endif;?>
                </tr>
        <?php endforeach;?>
                   </tbody>
              </table>
            </div>
            </div>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Daftar</h5>
          <div class="card-body">
            <div>
                <div class="btn btn-primary btn-block"  ><a href="<?php echo base_url().'mhs/ajudul'?>" style="text-decoration: none; color: white; ">Pendaftaran Judul Metopen</a></div>
                <div class="btn btn-primary btn-block"><a style="text-decoration: none; color: white; " href="<?php echo base_url().'mhs/rjudul'?>">Rekomendasi Judul Dosen</a></div>
            </div>
          </div>
        </div>
        <div class="card my-4">
          <h5 class="card-header">Upload</h5>
          <div class="card-body">
            <div>
                <div class="btn btn-primary btn-block"  ><a href="<?php echo base_url().'mhs/uploaduts'?>" style="text-decoration: none; color: white; ">Upload File UTS</a></div>
                
            </div>
          </div>
        </div>
        <div class="card my-4">
          <h5 class="card-header">Pendaftaran</h5>
          <div class="card-body">
            <div>
                <div class="btn btn-primary btn-block"  ><a href="<?php echo base_url().'mhs/pps'?>" style="text-decoration: none; color: white; ">Daftar PPS</a></div>
                <div class="btn btn-primary btn-block"><a style="text-decoration: none; color: white; " href="<?php echo base_url().'mhs/semprop'?>">Daftar Seminar Proposal</a></div>
                <div class="btn btn-primary btn-block"><a style="text-decoration: none; color: white; " href="<?php echo base_url().'mhs/ptta'?>">Daftar PTTA</a></div>
            </div>
          </div>
        </div>

       
      </div>
      <div class="card text-white bg-secondary my-5 py-4 text-center col-md-12">
      <div class="card-body">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Pengumuman Peserta PPS</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="<?php echo base_url().'mhs/daftarpps'?>" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>

      <!-- /.col-md-4 -->

      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Jadwal Seminar Proposal</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
       <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Pengumuman Peserta PTTA</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="<?php echo base_url().'mhs/daftarptta'?>" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
     
       <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Jadwal PTTA</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>

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
