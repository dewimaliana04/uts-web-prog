<?php 
include 'database.php';
$db = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>Crud</title>

      <style>

table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    margin: 0px auto;
    padding: 10px;
    

    
    
}
th{
    padding: 10px;
    text-align: center;
    background-color: #f1f1c1;
}

</style>
</head>
<body>
  
<h5 style="vertical-align=midle; position:relative; text-align:center; font-size:50px; color:white;"><i class ="material-icons" style="
vertical-align=midle; position:relative; text-align:center; font-size:70px; color:white; ">bubble_chart</i>CRUD APP</h5>
       <a href="input.php" title="Tambah Data" class="btn-floating btn-large waves-effect waves-light red" >
        <i class="material-icons" style="position:relative; left:28%; font-size:60px; color:#33ccff;">add_circle</i></a>
       
        <table style="position:relative;" class="highlight">
        <thead>
          <tr>
          <th data-field="id">No</th>
              <th data-field="id">Nama</th>
              <th data-field="name">ID</th>
              <th data-field="price">Email</th>
              <th data-field="price">Password</th>
              <th data-field="price">Tool</th>
          </tr>
        </thead>
<?php
	$no = 1;
	foreach($db->tampil_data() as $data){
	?>
        <tbody>
          <tr>
        <td style="color:#000;"><?php echo $no++; ?></td>
		<td style="color:#000;"><?php echo $data['nama']; ?></td>
		<td style="color:#000;"><?php echo $data['alamat']; ?></td>
		<td style="color:#000;"><?php echo $data['usia']; ?></td>
        <td style="color:#000;"><?php echo $data['email']; ?></td>
            <td> 
              
     
   <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit" class="btn-floating yellow darken-2" title="edit data"><i class="material-icons"
   style="font-size:25px; color:#000;">edit</i></a>
      <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=hapus" class="btn-floating green" title="hapus data"><i class="material-icons"
    style="font-size:25px; color:red;">delete</i></a>
            </td>
          </tr>
        </tbody>
        <?php 
	}
	?>
      </table>
</body>
</html>