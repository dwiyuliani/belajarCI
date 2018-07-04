<!DOCTYPE html>
<html lang="en">
<head>
  <title> belajar ci</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
</head>
  <body>
     <div class="container">
       <div class="row">
          <div class="col-md-6 col-md-offset-3">
           <a href="<?php echo site_url('tambah'); ?>"> Tambah Data </a>
         </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3">
            <table class="table table-hover"  style="margin-top:5%;">
            <!-- baris -->
            <tr>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Pekerjaan</th>
              <th>Action</th>
            </tr>

            <?php foreach ($user as $row) { ?>
          
            <tr> <!--baris-->
              <td ><?php echo $row->nama; ?></td>
              <td><?php echo $row->alamat; ?></td>
              <td><?php echo $row->pekerjaan; ?></td>
              <td>
                    <a href="<?php echo site_url('hapus/'.$row->id); ?>" value="<?php echo $row->id; ?>"><p>Hapus</p></a>
                    <a href="<?php echo site_url('edit/'.$row->id); ?>"><p>edit</p></a>          
              </td>
            </tr>
            <?php } ?>
            </table>
          </div>
       </div>
     </div>
  </body>
</html>