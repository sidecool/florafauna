        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <h3 class="page-header"> Hasil Kuis </h3> 

                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Hasil Kuis
                        </div>
                        <div class="panel-body">
                          <?php
$aksi="modul/mod_hasilujian/aksi_hasilujian.php";
switch($_GET[act]){
  // Tampil Hasil Ujian Users
  default:
      $tampil = mysqli_query($connect,"SELECT * FROM tbl_nilai");
      echo "
        <table class='table table-striped table-bordered table-hover'>
          <tr><th>no</th><th>Usersname</th><th>Benar</th><th>Salah</th><th>Kosong</th><th>Nilai</th><th>Tanggal</th><th>Keterangan</th><th>aksi</th></tr>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
    $tgl = tgl_indo($r[tanggal]);

       echo "<tr><td>$no</td>
             <td>$r[username]</td>
            <td>$r[benar]</td>
        <td>$r[salah]</td>
        <td>$r[kosong]</td>
        <td>$r[score]</td>
        <td>$tgl</td>
        <td>$r[keterangan]</td>
   <td><input type=button value='Hapus' class='btn btn-danger' onclick=\"window.location.href='$aksi?module=hasilujian&act=hapus&id=$r[id_nilai]';\">
   </td>
      </tr>";
      $no++;
    }
    echo "</table><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
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

