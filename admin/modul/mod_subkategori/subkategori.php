        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"> Sub Kategori </h3>

                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Daftar Sub Kategori
                        </div>
                        <div class="panel-body">


                          
<?php
$aksi="modul/mod_subkategori/aksi_subkategori.php";
switch($_GET[act]){
  // Tampil Sub Kategori
  default:

  // tombol tambah sub kategori
  echo "<div style='text-align:left;padding-left:30px;'>
          <input class='btn btn-primary' type=button value='Tambah' 
          onclick=\"window.location.href='?module=subkategori&act=tambah';\">  ";
  

      $tampil = mysqli_query($connect,"SELECT a.*, b.nama_kategori FROM tbl_subkategori a LEFT JOIN tbl_kategori b
                ON a.kategori_id = b.id");
      echo "</br></br>
    <table class='table table-striped table-bordered table-hover'>
          <tr><th>no</th><th>Nama</th><th>Kategori</th><th>Lihat</th></tr>"; 
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$no</td>
            <td>$r[nama_subkategori]</td>
            <td>$r[nama_kategori]</td>
        
          <td>
          <a href=$aksi?module=subkategori&act=hapus&id=$r[id] class='btn btn-danger' 
              onClick=\"javascript: return confirm('Hapus data ini?');\" >Hapus</a>
          <a href=?module=subkategori&act=edit&id=$r[id] class='btn btn-primary'
              onClick=\"javascript: return confirm('Ubah data ini?');\">Edit</a>
          </td>";
        
        echo"</tr>";
      $no++;
    }
    echo "</table>";
    break;

    case "tambah":
      echo "<form method=POST class='form-horizontal' action='$aksi?module=subkategori&act=input' enctype='multipart/form-data'>
            <div class='form-group'>
              <label for='inputEmail3' class='col-sm-3 control-label'>Nama Sub Kategori Baru</label>
              <div class='col-sm-4'>
                <input type=text name='nama' class='form-control' size=80 required/>
              </div>
            </div>
              ";
        $query = "SELECT * FROM tbl_kategori";
        $result = mysqli_query($connect, $query) or die(mysqli_error()."[".$query."]");
      
      echo   "<div class='form-group'>
              <label for='inputEmail3' class='col-sm-3 control-label'>Kategori</label>
              <div class='col-sm-4'>
              <select name='kategori' class='form-control' onchange=\"this.form.submit()\">";
                while ($row = mysqli_fetch_array($result))
                {
                    echo "<option value='".$row['id']."'>".$row['nama_kategori']."</option>";
                }
        echo             
              "</select></div></div>";
      echo  "<div class='form-group'>
                <label for='inputEmail3' class='col-sm-3 control-label'></label>
                <div class='col-sm-4'>
                <input type='submit' class='btn btn-primary pull-right' value='Simpan'/>
                </div>
            </div>";
          
      echo  "</form>";


    break;

    case "edit":
      $edit=mysqli_query($connect,"SELECT a.*, b.id as kategori_id FROM tbl_subkategori a LEFT JOIN tbl_kategori b
        ON a.kategori_id = b.id WHERE a.id='$_GET[id]'");
      $r=mysqli_fetch_array($edit);

      echo "
      <form method=POST class='form-horizontal' action='$aksi?module=subkategori&act=update' enctype='multipart/form-data'>
      <div class='form-group'>
        <label for='inputEmail3' class='col-sm-3 control-label'>Ubah Nama Sub Kategori</label>
        <div class='col-sm-4'>
          <input type=text name='nama' class='form-control' value='$r[nama_subkategori]' size=80 required/>
           
          <input type='hidden' name='id' class='form-control' size=80 value = '$r[id]' />
        </div>
        
      </div>";

      $query = "SELECT * FROM tbl_kategori";
        $result = mysqli_query($connect, $query) or die(mysqli_error()."[".$query."]");
      
      echo   "<div class='form-group'>
              <label for='inputEmail3' class='col-sm-3 control-label'>Kategori</label>
              <div class='col-sm-4'>
              <select name='kategori' class='form-control' onchange=\"this.form.submit()\">";
                while ($row = mysqli_fetch_array($result))
                {
                  if($row['kategori_id'] ==  $r['kategori_id']){
                    echo "<option value='".$row['id']."' selected>".$row['nama_kategori']."</option>";
                  } else{
                    echo "<option value='".$row['id']."'>".$row['nama_kategori']."</option>";
                  }
                }
        echo             
              "</select></div></div>";
      echo  "<div class='form-group'>
                <label for='inputEmail3' class='col-sm-3 control-label'></label>
                <div class='col-sm-4'>
                <input type='submit' class='btn btn-primary pull-right' 
                  onClick=\"javascript: return confirm('Simpan perubahan data ini?');\"
                  value='Simpan'/>
                </div>
            </div>";
          
      echo  "</form>";
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

