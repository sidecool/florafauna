        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <h3 class="page-header"> Data </h3> 

                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Kelola Data
                        </div>
                        <div class="panel-body">


                         
<script language="JavaScript">
function bukajendela(url) {
 window.open(url, "window_baru", "width=800,height=500,left=120,top=10,resizable=1,scrollbars=1");
}
</script>

<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_data/aksi_data.php";
switch($_GET[act]){
  // Tampil Soal
  default:
  // Tombol Tambah Soal
  
  echo "<div style='text-align:left;padding-left:30px;'>
          <input class='btn btn-primary' type=button value='Tambah' 
          onclick=\"window.location.href='?module=data&act=tambah';\">  ";
  echo "<a href='modul/mod_data/cetak.php?param=kategori&kategori=0' target='_blank' class='btn  btn btn-primary' >   Cetak Semua</a>";
  echo " ";
  echo "<a href='modul/mod_data/cetak.php?param=kategori&kategori=1' target='_blank' class='btn  btn btn-primary' >   Cetak Flora</a>";
  echo " ";
  echo "<a href='modul/mod_data/cetak.php?param=kategori&kategori=2' target='_blank' class='btn  btn btn-primary' >   Cetak Fauna</a>";
  echo " ";        
  echo "<a href='../' target='_blank' class='btn  btn btn-info' >Lihat Home</a>";
  //Form Pencarian Data
  echo "<div style='text-align:right;padding-right:30px;'>
         <form method='POST' action=?module=data&act=cari>
     <input type=text name='cari'  placeholder='Masukkan Nama' list='auto' size=40 required/> <input type=submit class='btn btn-danger' value='Cari'>";
    echo"<datalist id='auto'>";
     $qry=mysqli_query($connect,"SELECT * FROM tbl_data");
     while ($t=mysqli_fetch_array($qry)) {
      echo "<option value='$t[judul]'>";
     }
  echo"</datalist></form>
  
      </div>";
  //Tampil Data Soal 
     
     echo" <table class='table table-striped table-bordered table-hover'>
          <tr><th>No</th><th>Gambar</th><th>Nama</th><th>Jenis</th><th>Aksi</th><th>Status</th></tr>"; 
    $tampil=mysqli_query($connect,"SELECT *, a.id as myId, b.nama_kategori FROM tbl_data  a
              LEFT JOIN tbl_kategori b ON a.kategori_id = b.id");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
    $judul=substr($r[judul],0,78);
       echo "<tr><td>$no</td>
             <td><img src='../../florafauna/foto/$r[gambar]' alt='Gambar' width='50' height='50'></td>
              <td>$judul</td>
       <td align='center'>$r[nama_kategori]</td>
       
             <td>
        <a href=?module=data&act=edit&id=$r[myId] class='btn  btn btn-primary'><i class='fa fa-pencil-square-o'></i></a> 
        <a href=$aksi?module=data&act=hapus&id=$r[myId] class='btn  btn btn-danger'><i class='fa fa-trash'></i></a>
        <a href='modul/mod_data/cetak_single.php?param=id&id=$r[myId]' target='_blank' class='btn  btn btn-primary' >   <i class='fa fa-print'></i></a>
        <a href=../home/single.php?id=$r[myId] target='_blank' class='btn  btn btn-primary'><i class='fa fa-eye'></i></a></td>";
        if ($r[aktif]=="Y") {
          echo"<td><input type=button class='btn btn-default' value='Non Aktifkan' onclick=\"window.location.href='$aksi?module=data&act=nonaktif&id=$r[myId]';\"></td>";

        }else {
          echo"<td align='center'><input class='btn btn-success' type=button value='Aktifkan' onclick=\"window.location.href='$aksi?module=data&act=aktif&id=$r[myId]';\"></td>";
        }
        
        echo"   </td>
    </tr>";
      $no++;
    }
    echo "</table>";
    break;
  
  // Form Tambah Soal
  case "tambah":
    echo "<h2>Tambah Data</h2>
          <form method=POST class='form-horizontal' action='$aksi?module=data&act=input' enctype='multipart/form-data'>
          <div class='form-group'>
          <label for='inputEmail3' class='col-sm-2 control-label'>Nama Flora atau Fauna</label>
          <div class='col-sm-4'>
            <input type=text name='nama' class='form-control' size=80 required/>
          </div>
        </div>
        <div class='form-group'>
        <label for='inputEmail3' class='col-sm-2 control-label'>Penjelasan</label>
        <div class='col-sm-10'>
          <textarea name='penjelasan' style='width: 500px; height: 100px;'></textarea>
        </div>
      </div>


                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Gambar</label>
                          <div class='col-sm-10'>
                            <input type='file' name='fupload' size=40> 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px
                          </div>
                        </div>
                        
    
                        
                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Audio</label>
                          <div class='col-sm-10'>
                            <input type='file' name='audio' size=40> 
                                <br>Tipe audio harus MP3 dan ukuran lebar maks: 1 MB
                          </div>
                        </div>";
                        
                        // echo "                    <div class='form-group'>
                        //   <label for='inputEmail3' class='col-sm-2 control-label'>Video </label>
                        //   <div class='col-sm-10'>
                        //     <input type='file' name='video' size=40> 
                        //                   <br>Tipe video harus MP4/AVI dan ukuran lebar maks: 2 MB.
                        //   </div>
                        // </div>";

                        $query = "SELECT * FROM tbl_kategori";
                        $result = mysqli_query($connect, $query) or die(mysqli_error()."[".$query."]");
                        ?>
                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Kategori</label>
                            <div class='col-sm-4'>
                            <select name="kategori" class='form-control' onchange="this.form.submit()">
                            <?php 
                            while ($row = mysqli_fetch_array($result))
                            {
                                echo "<option value='".$row['id']."'>".$row['nama_kategori']."</option>";
                            }
                            ?>        
                            </select>
                        
<?php 
                      

                        echo "
                            
                          </div>
                        </div>";

                        $query = "SELECT * FROM tbl_subkategori";
                        $result = mysqli_query($connect, $query) or die(mysqli_error()."[".$query."]");
                        ?>
                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Sub Kategori</label>
                            <div class='col-sm-4'>
                            <select name="subkategori" class='form-control' onchange="this.form.submit()">
                            <?php 
                            while ($row = mysqli_fetch_array($result))
                            {
                                echo "<option value='".$row['id']."'>".$row['nama_subkategori']."</option>";
                            }
                            ?>        
                            </select>
                        
<?php 
                      

                        echo "
                            
                          </div>
                        </div>

                      

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'></label>
                          <div class='col-sm-4'>
                        <input type=submit name=submit value=Simpan class='btn btn-primary'>
                        <input type=button value=Batal onclick=self.history.back() class='btn btn-danger'>
                        </div>
                        </div>
                  </form>";

                  


     break;
  
  // Form Edit Soal  
  case "edit":
    $edit=mysqli_query($connect,"SELECT * FROM tbl_data WHERE id='$_GET[id]'");
    $r=mysqli_fetch_array($edit);

    echo "<h2>Update Data</h2>
          <form method=POST class='form-horizontal' action='$aksi?module=data&act=update' enctype='multipart/form-data'>
          <div class='form-group'>
          <label for='inputEmail3' class='col-sm-2 control-label'>Nama Flora atau Fauna</label>
          <div class='col-sm-4'>
            <input type=text name='nama' class='form-control' size=80 value = '$r[judul]' required/>
            <input type='hidden' name='id' class='form-control' size=80 value = '$r[id]' />
          </div>
        </div>
        <div class='form-group'>
        <label for='inputEmail3' class='col-sm-2 control-label'>Penjelasan</label>
        <div class='col-sm-10'>
          <textarea name='penjelasan' style='width: 500px; height: 100px;'>$r[deskripsi]</textarea>
        </div>
      </div>";


                   echo "<div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'>Gambar</label>
                          <input type='hidden' name='gambartext' value='$r[gambar]'/>
                          <div class='col-sm-10'>
                          <td>";
                          if(strlen($r['gambar'])>3) {
                          echo "<img src='../foto/$r[gambar]'  width='200' height='auto'>";
                          }
                          echo "</td>
                            <input type=file name='fupload' size=40> 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px
                          </div>
                        </div>";
                    // echo "<div class='form-group'>
                    //     <label for='inputEmail3' class='col-sm-2 control-label'>Video </label>
                    //     <input type='hidden' name='videotext' value='$r[video]'/>
                    //     <div class='col-sm-10'>
                    //     <td>";
                    //     if(strlen($r['video'])>3) {
                    //     echo "<video width='200' height='auto' controls>
                    // <source src='../video/$r[video]' type='video/mp4'>
                    // Your browser does not support the video tag.
                    // </video>";
                    //     }
                    
                    // echo "</td>
                    //       <input type=file name='video' size=40> 
                    //                     <br>Tipe video harus MP4/AVI dan ukuran lebar maks: 2 MB.
                    //     </div>
                    //   </div>";
                    
                    
                      echo       "<div class='form-group'>
                              <label for='inputEmail3' class='col-sm-2 control-label'>Audio</label>
                              <input type='hidden' name='audiotext' value='$r[audio]'/>
                              <div class='col-sm-10'>
                              <td>";
                          if(strlen($r['audio'])>3) {   
                            echo "<audio controls>
                                <source src='../audio/$r[audio]' type='audio/mpeg'>
                                Your browser does not support the audio element.
                                </audio>";
                            }
                      echo "</td>
                            <input type=file name='audio' size=40> 
                                          <br>Tipe audio harus MP3  maks: 1 MB
                          </div>
                        </div>";
                    
                        $query = "SELECT * FROM tbl_kategori";
                        $result = mysqli_query($connect, $query) or die(mysqli_error()."[".$query."]");
                        ?>
                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Kategori</label>
                            <div class='col-sm-4'>
                            <select name="kategori" class='form-control' onchange="this.form.submit()">
                            <?php 
                            while ($row = mysqli_fetch_array($result))
                            {
                              if($row['id'] ==  $r['kategori_id']){
                                echo "<option value='".$row['id']."' selected>".$row['nama_kategori']."</option>";
                              } else{
                                echo "<option value='".$row['id']."'>".$row['nama_kategori']."</option>";
                              }
                              
                            }
                            ?>        
                            </select>
                        
<?php 
                      

                        echo "
                            
                          </div>
                        </div>";

                        $query = "SELECT * FROM tbl_subkategori";
                        $result = mysqli_query($connect, $query) or die(mysqli_error()."[".$query."]");
                        ?>
                          <div class='form-group'>
                            <label for='inputEmail3' class='col-sm-2 control-label'>Sub Kategori</label>
                            <div class='col-sm-4'>
                            <select name="subkategori" class='form-control' onchange="this.form.submit()">
                            <?php 
                            while ($row = mysqli_fetch_array($result))
                            {
                              if($row['id'] ==  $r['subkategori_id']){
                                echo "<option value='".$row['id']."' selected>".$row['nama_subkategori']."</option>";
                              } else{
                                echo "<option value='".$row['id']."'>".$row['nama_subkategori']."</option>";
                              } 
                                  }
                            ?>        
                            </select>
                        
<?php 
                      

                        echo "
                            
                          </div>
                        </div>

                      

                        <div class='form-group'>
                          <label for='inputEmail3' class='col-sm-2 control-label'></label>
                          <div class='col-sm-4'>
                        <input type=submit name=submit value=Simpan class='btn btn-primary'>
                        <input type=button value=Batal onclick=self.history.back() class='btn btn-danger'>
                        </div>
                        </div>
                  </form>";

                  


    break;  
  
  case "view":
    $view=mysqli_query($connect,"SELECT * FROM tbl_data WHERE id='$_GET[id]'");
    $t=mysqli_fetch_array($view);
    echo "<table>
                  <tr>
                      <td>$t[judul]</td>
                  </tr>
                  <tr><td><td><img src='../../florafauna/foto/$t[gambar]'  width='100' height='100'></td></tr>
                  <tr><td><audio controls>
                      <source src='../../florafauna/audio/$t[audio]' type='audio/mpeg'>
                      Your browser does not support the audio element.
                      </audio></td>
                  </tr>
                  <tr>
                      <td><video width='320' height='240' controls>
                      <source src='../../florafauna/video/$t[video]' type='video/mp4'>
                      Your browser does not support the video tag.
                      </video></td>
                    </tr>
              </table>";
  break;
  
  case "cari":
    echo "<div class='form-group'><a href='?module=data'  class='btn btn-info' >Kembali</a></div>";
       echo"
     <table class='table table-striped table-bordered table-hover'>
          <tr><th>No</th><th>Gambar</th><th>Nama</th><th>aksi</th><th>Status</th><th>View</th></tr>"; 
    $tampil=mysqli_query($connect,"SELECT * FROM tbl_data WHERE judul LIKE '%$_POST[cari]%'");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$no</td>
              <td> <img src='../../florafauna/foto/$r[gambar]'  width='50' height='auto'></td>
             <td>$r[judul]</td>
       
             <td>
        <a href=?module=data&act=edit&id=$r[id]><i class='fa fa-pencil-square-o'></i></a>|
        <a href=$aksi?module=data&act=hapus&id=$r[id]><i class='fa fa-trash'></i></a></td>";
        if ($r[aktif]=="Y") {
          echo"<td><input class='btn btn-default' type=button value='Non Aktifkan' onclick=\"window.location.href='$aksi?module=soal&act=nonaktif&id=$r[id_soal]';\"></td>";

        }else {
          echo"<td align='center'><input class='btn btn-success' type=button value='Aktifkan' onclick=\"window.location.href='$aksi?module=soal&act=aktif&id=$r[id_soal]';\"></td>";
        }
        
        echo"   </td>
    <td><a href=../single.php?id=$r[id] target='_blank'><i class='fa fa-eye'></i></a></a></td>

    </tr>";
      $no++;
    }
    echo "</table>";
    break;

  
  }
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


<script type="text/javascript">
  var $ = jQuery;
  $('#knc_jawaban').val('<?php echo $r['knc_jawaban'];?>');
</script> 