        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"> User </h3>

                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar User
                        </div>
                        <div class="panel-body">


                          
<?php
$aksi="modul/mod_users/aksi_users.php";
switch($_GET[act]){
  // Tampil User
  default:
      $tampil = mysqli_query($connect,"SELECT * FROM tbl_user");
      echo "<h2> Daftar User</h2>
    <table class='table table-striped table-bordered table-hover'>
          <tr><th>no</th><th>Username</th><th>Nama</th><th>Aktif</th><th>Lihat</th><th>aksi</th></tr>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$no</td>
             <td>$r[username]</td>
            <td>$r[nama]</td>
          <td align=center>$r[statusaktif]</td>
             <td><a href=$aksi?module=users&act=hapus&id=$r[id_user]>Hapus</a></td>";
        if ($r[statusaktif]=="Y") {
          echo"<td><input type=button class='btn btn-default' value='Non Aktifkan' onclick=\"window.location.href='$aksi?module=users&act=nonaktif&id=$r[id_user]';\"></td>";

        }else {
          echo"<td align='center'><input class='btn btn-primary' type=button value='Aktifkan' onclick=\"window.location.href='$aksi?module=users&act=aktif&id=$r[id_user]';\"></td>";
        }
        echo"</tr>";
      $no++;
    }
    echo "</table><br/>";
    break;

}
?>

                        </div>
                        <div class="panel-footer">
                           
                        </div>
                    </div>
                    </div>    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

