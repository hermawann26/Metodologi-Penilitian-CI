
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>METOPEN | Dosen</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

</head>
<body class="sidebar-mini skin-blue-light">
  <!--Counter Inbox-->

<header class="main-header ">

    <!-- Logo -->
    <a href="<?php echo base_url().''?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">MP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Metodologi Penelitian</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->


          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>

<div class="wrapper">

 
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar bg-light">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>

        <li>
          <a href="<?php echo base_url().'dosen/acc'?>">
            <i class="fa fa-newspaper-o"></i> <span>Penerimaan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>

        <li class="active" >
          <a href="<?php echo base_url().'dosen/kelola'?>">
            <i class="fa fa-thumb-tack"></i> <span> Kelola data Bimbingan</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>



         <li>
          <a href="<?php echo base_url().'login/logout'?>">
            <i class="fa fa-sign-out"></i> <span> Log Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


    <!-- Content Header (Page header) -->
   
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mahasiswa Bimbingan
        <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
          
            <!-- /.box-header -->
            <div class="box-body">
     <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Judul Metopen</th>
                  <th>Nilai Uts</th>
                  <th>Nilai Uas</th>
                  <th>Nilai Akhir</th>
                </tr>
                </thead>
               
                <tbody>
                   <?php foreach ($data->result_array() as $i) :                    
                       $nim=$i['nim'];
                       $nama=$i['nama'];
                       $judul=$i['judul'];
                       $fileuts=$i['fileuts'];
                       $uts=$i['nilai_uts'];
                       $uas=$i['nilai_uas'];
                       $status=$i['status'];

                       $akhir=($uts+$uas)/2;
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

                    
                      <td ><?php echo $uas; ?><br><a class="btn btn-primary" style="text-decoration: none; color: white;" data-toggle="modal" data-target="#uas<?php echo $nim;?>">Edit</a></td>

                    <?php if($akhir>=80): ?>
                      <td>A</td>
                   <?php elseif ($akhir<80&&$akhir>=65): ?>
                    <td>B</td>
                    <?php elseif ($akhir<65&&$akhir>=35): ?>
                      <td>C</td>
                      <?php else: ?>
                        <td>E</td>
                      <?php endif; ?>

                </tr> 
        <?php endforeach;?>
                   </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

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
                    <form class="form-horizontal" action="<?php echo base_url().'dosen/kelola/updatenilaiuts'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-2 control-label">Nilai</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $nim;?>">
                                  <input type="text" name="xnilai" class="form-control" value="<?php echo $uts;?>" id="inputUserName" placeholder="Nilai" required>
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
                    <form class="form-horizontal" action="<?php echo base_url().'dosen/kelola/updatenilaiuas'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-2 control-label">Nilai</label>
                                <div class="col-sm-7">
                                  <input type="hidden" name="kode" value="<?php echo $nim;?>">
                                  <input type="text" name="xnilai" class="form-control" value="<?php echo $uas;?>" id="inputUserName" placeholder="Nilai" required>
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


</div>
<!-- ./wrapper -->


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>

</body>
</html>
