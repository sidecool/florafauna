        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"> Kategori </h3>

                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Kategori
                        </div>
                        <div class="panel-body">


                          
<?php
$aksi="modul/mod_kategori/aksi_kategori.php";
switch($_GET[act]){
  // Tampil Kategori
  default:

  // tombol tambah kategori
  echo "<div style='text-align:left;padding-left:30px;'>
          <input class='btn btn-primary' type=button value='Tambah' 
          onclick=\"window.location.href='?module=kategori&act=tambah';\">  ";
  

      $tampil = mysqli_query($connect,"SELECT * FROM tbl_kategori");
      echo "<h2> Daftar Kategori</h2>
    <table class='table table-striped table-bordered table-hover'>
          <tr><th>no</th><th>Nama</th><th>Lihat</th></tr>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$no</td>
            <td>$r[nama_kategori]</td>
        
          <td>
            <a href=$aksi?module=kategori&act=hapus&id=$r[id] class='btn btn-danger' 
                onClick=\"javascript: return confirm('Hapus data ini?');\" >Hapus</a>
            <a href=?module=kategori&act=edit&id=$r[id] class='btn btn-primary'
                onClick=\"javascript: return confirm('Ubah data ini?');\">Edit</a>
          </td>";
        
        echo"</tr>";
      $no++;
    }
    echo "</table><br/>";
    break;
  
    case "tambah":
      echo "
      <form method=POST class='form-horizontal' action='$aksi?module=kategori&act=input' enctype='multipart/form-data'>
      <div class='form-group'>
        <label for='inputEmail3' class='col-sm-3 control-label'>Nama Kategori Baru</label>
        <div class='col-sm-4'>
          <input type=text name='nama' class='form-control' size=80 required/>
        </div>
        <div class='col-sm-5 pull-right'>
        <input type='submit' class='btn btn-primary' value='Simpan'/>
        </div>
      </div>
      </form>";


    break;

    case "edit":
      $edit=mysqli_query($connect,"SELECT * FROM tbl_kategori WHERE id='$_GET[id]'");
      $r=mysqli_fetch_array($edit);

      echo "
      <form method=POST class='form-horizontal' action='$aksi?module=kategori&act=update' enctype='multipart/form-data'>
      <div class='form-group'>
        <label for='inputEmail3' class='col-sm-3 control-label'>Ubah Nama Kategori</label>
        <div class='col-sm-4'>
          <input type=text name='nama' class='form-control' value='$r[nama_kategori]' size=80 required/>
          <input type='hidden' name='id' class='form-control' size=80 value = '$r[id]' />
        </div>
        <div class='col-sm-5 pull-right'>
        <input type='submit' class='btn btn-primary' onClick=\"javascript: return confirm('Simpan perubahan data ini?');\" value='Simpan'/>
        </div>
      </div>
      </form>";

    break;

}
?>

                        </div>
                      
                    </div>
                    </div>    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

