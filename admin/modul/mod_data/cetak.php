<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data</title>
  <style>
    table, td, th {
        border: 1px solid black;
      }
      
      table {
        border-collapse: collapse;
        width: 100%;
      }
      
      td {
        padding: 15px;
        text-align: left;
        
      }

      th{
        padding: 15px;
        text-align: center;
      }

  </style>
</head>
<body>

	

	<p style="font-size: 10px;">
  <?php 

include('../../../config/koneksi.php');
include('../../../config/fungsi_indotgl.php');

if(isset($_GET['param'])){
  if ($_GET['param']=='kategori'){ 
      $kategori = $_GET['kategori'];
    
                    ?>
                    <center>
                      <h2>Laporan Data </h2>
                      <?php 
                        if($kategori == '0'){
                            echo "<h4>Berdasarkan Semua Kategori</h4>";
                        }else if($kategori == '1'){
                            echo "<h4>Berdasarkan Kategori Flora</h4>";
                        }else if($kategori == '2'){
                          echo "<h4>Berdasarkan Kategori Fauna</h4>";
                      }
                      ?>
                      
                    </center>

                    <br/>
                      <table>
                          <tr>
                            <th style='width:30px'>No</th>
                            <th>Nama </th>
                           
                            <th>Deskripsi</th>
                          </tr>
                      <?php 
                        
                             $result = "";
                             if($kategori =="0"){
                               $result = mysqli_query($connect, "SELECT a.*, a.id as myId, b.nama_kategori FROM tbl_data  a
                                                                  LEFT JOIN tbl_kategori b ON a.kategori_id = b.id");
                             }else{
                               $result = mysqli_query($connect, "SELECT a.*, a.id as myId, b.nama_kategori FROM tbl_data  a
                                                                   LEFT JOIN tbl_kategori b ON a.kategori_id = b.id
                                                                   WHERE kategori_id ='$kategori'");
                             }
 
                             $no=1; 
                             // tampilkan query
                             while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                             { ?>
                             <tr>
                               <td><?php echo $no;?></td>
                               <td><?php echo $row['judul'];?></td>
                               <td><?php echo "<img src='../../../foto/$row[gambar]' alt='Gambar' width='100' height='auto'>"; ?></br>
                               <?php echo $row['deskripsi']; $no++;?>
                               <?php echo "<br><b>Kategori : </b>".$row['nama_kategori'];?></td>
                               
                             </tr>
                       <?php } ?>

                      </table>
                    
    <?php 
    }?>

      <br/>
        <?php
}else{
  echo "tidak ada parameter";
}

?>
	</p>

	<p>
		Dokumen ini dicetak pada <?php echo tgl_indo(date('Y-m-d')); ?>
  </p>

	<script>
		window.print();
	</script>
	
</body>
</html>