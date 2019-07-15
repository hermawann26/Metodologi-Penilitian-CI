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
            <a class="nav-link" href="<?php echo base_url().'mhs/home'?>">Mahasiswa Bimbingan
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="download.html">Nilai UTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Nilai UAS</a>
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
                  <th>Nama</th>
                  <th>Judul Metopen</th>
                  <th>Nilai Uts</th>
                  <th>Nilai Uas</th>
                </tr>
                </thead>
               
                <tbody>
                   <?php foreach ($data->result_array() as $i) :                    
                       $nim=$i['nim'];
                       $nama=$i['nama'];
                       $judul=$i['judul'];
                       $fileuts=$i['fileuts'];
                       $fileuas=$i['fileuas'];
                       $uts=$i['nilai_uts'];
                       $uas=$i['nilai_uas'];
                    ?>
                  <tr>
                  <td><?php echo $nim;?></td>
                  <td><?php echo $nama;?></td>
                  <td><?php echo $judul;?></td>
                  
                    <?php if($fileuts==null): ?>
                    <td ><?php echo $uts; ?><br><a class="btn btn-danger " style="text-decoration: none; color: white;">Edit</a></td>
                    <?php else: ?>
                      <td ><?php echo $uts; ?><br><a class="btn btn-primary" style="text-decoration: none; color: white;" data-toggle="modal" data-target="#uts<?php echo $nim;?>">Edit</a></td>
                    <?php endif; ?>
                    <?php if($fileuas==null): ?>
                    <td ><?php echo $uas; ?><br><a class="btn btn-danger" style="text-decoration: none; color: white;">Edit</a></td>
                    <?php else: ?>
                      <td ><?php echo $uas; ?><br><a class="btn btn-primary" style="text-decoration: none; color: white;" data-toggle="modal" data-target="#uas<?php echo $nim;?>">Edit</a></td>
                    <?php endif; ?>

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
   <?php foreach ($data->result_array() as $i) :                    
                       $nim=$i['nim'];
                       $uts=$i['nilai_uts'];
                    ?>
  <!--Modal Edit Pengumuman-->
        <div class="modal fade" id="uts<?php echo $nim;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Nilai UTS</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengumuman/update_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-2 control-label">Nilai</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $nim;?>">
                                  <input type="text" name="xjudul" class="form-control" value="<?php echo $uts;?>" id="inputUserName" placeholder="Nilai" required>
                                </div>
                            </div>
                            

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>
 <?php foreach ($data->result_array() as $i) :                    
                       $nim=$i['nim'];
                       $uas=$i['nilai_uas'];
                    ?>
  <!--Modal Edit Pengumuman-->
        <div class="modal fade" id="uas<?php echo $nim;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Nilai UAS</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/pengumuman/update_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-2 control-label">Nilai</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $nim;?>">
                                  <input type="text" name="xjudul" class="form-control" value="<?php echo $uas;?>" id="inputUserName" placeholder="Nilai" required>
                                </div>
                            </div>
                            

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

</body>

</html>
