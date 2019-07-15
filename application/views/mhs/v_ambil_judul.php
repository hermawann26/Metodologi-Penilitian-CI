<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url().'assets/css/blog-home.css'?>" rel="stylesheet">
 
 

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
  <div></div>

  <!-- Page Content -->
  <div class="container">

 <div>
        <div class="card my-4">
        <h4 class="card-header">Daftar Penawaran Judul Metopen</h4><small></small>

       <div class="card-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                  <th>Judul Metopen</th>
                  <th>Konsentrasi</th>
                  <th>Dosen Pembimbing</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data->result_array() as $i) :
                      $id = $i['id_rek'];                    
                       $judul=$i['Judul_rek'];
                       $kons=$i['kons'];
                       $dosen=$i['dosen_rek'];
                      $status = $i['status'];  
                    ?>
                  <tr>
                    <td><?php echo $judul;?></td>
                    <td><?php echo $kons;?></td>
                    <td> <?php echo $dosen;?></td>
                    <td><button  class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?php echo $id;?>">Ambil</button></td>
                  </tr><?php endforeach ?>
                   </tbody>
                
              </table>
            </div> 
            </div>
 </div>
</div>
  <!-- /.container -->

  <!--
  <footer class="py-2 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    
  </footer>-->
  <?php foreach ($data->result_array() as $i) :    
                      $id = $i['id_rek'];                 
                       $judul=$i['Judul_rek'];
                       $kons=$i['kons'];
                       $dosen=$i['dosen_rek'];
                       $status = $i['status'];  
                    ?>
    <div class="modal fade" id="myModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Ambil Judul</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'mhs/Rjudul/ambil' ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                    <input type="hidden" name="xid" value="<?php echo $id;?>"/>
                                    <input type="hidden" name="xstatus" value="<?php echo $status;?>"/>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-12 control-label">Nomor Induk Mahasiswa</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="xnim" class="form-control" id="inputnim" placeholder="NIM" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-12 control-label">Nama</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="xnama" class="form-control" id="inputnama" placeholder="Nama" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Judul Metopen</label>
                                        <div class="col-sm-12">
                                            <input type="textarea" name="xjudul" class="form-control" id="inputjudul" value="<?php echo $judul; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-12 control-label">Dosen Pembimbing</label>
                                        <div class="col-sm-12">
                                            <input type="text" name="xdosen" class="form-control" id="inputdosen" value="<?php echo $dosen; ?>" readonly="">
                                        </div>
                                    </div>

                                    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>

                                    
                    </form>
                </div>
            </div>
        </div><?php endforeach;?>
   <script src="<?php echo base_url().'assets/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>


</body>

</html>
