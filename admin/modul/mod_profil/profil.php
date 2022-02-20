        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         <h3 class="page-header"> Profil </h3>

                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Profil
                        </div>
                        <div class="panel-body">


                          
<?php
$aksi="modul/mod_profil/aksi.php";
switch($_GET[act]){
  default:
    $sql  = mysqli_query($connect,"SELECT * FROM titles LIMIT 1");
    $r    = mysqli_fetch_array($sql);

    echo "
          <form method=POST  action=$aksi?module=profil&act=update class='form-horizontal'>
          <input type=hidden name=id value=$r[id]>

          <div class='form-group'>
            <label for='inputEmail3' class='col-sm-2 control-label'>Profil Singkat</label>
            <div class='col-sm-10'>
             <textarea name='short' style='width: 550px; height: 50;'>$r[short_description]</textarea>
            </div>
          </div>
          
           <div class='form-group'>
            <label for='inputEmail3' class='col-sm-2 control-label'>Profil Detail</label>
            <div class='col-sm-10'>
             <textarea name='detailed' style='width: 550px; height: 100px;'>$r[detailed_description]</textarea>
            </div>
          </div>


          <div class='form-group'>
            <label for='inputEmail3' class='col-sm-2 control-label'>Alamat</label>
            <div class='col-sm-4'>
             <input type='text' name='address' class='form-control' value='$r[address]'/>
            </div>
          </div>


        <div class='form-group'>
            <label for='inputEmail3' class='col-sm-2 control-label'>Telepon</label>
            <div class='col-sm-4'>
             
             <input type='text' name='phone' class='form-control' value='$r[phone]'/>
            </div>
          </div>

        <div class='form-group'>
            <label for='inputEmail3' class='col-sm-2 control-label'>Email</label>
            <div class='col-sm-4'>
             
             <input type='text' name='email' class='form-control' value='$r[email]'/>
            </div>
          </div>

          <div class='form-group'>
            <label for='inputEmail3' class='col-sm-2 control-label'></label>
            <div class='col-sm-10'>
             <input type=submit value=Update class='btn btn-primary'>
            </div>
          </div>


         </form>";
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
