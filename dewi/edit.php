<?php 
include 'database.php';
$db = new database();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="dewi maliana" />
	<title>Edit Data</title>
  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<style>
button{
  position: absolute;
  text-align: center;
  transform: translate(-50%,-50%);
  width: 200px;
  height: 60px;
  line-height: 60px;
  color: #fff;
  font-size:24px;
  text-transform: uppercase;
  text-decoration: none;
  font-family: sans-serif;
  box-sizing: border-box;
  background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
  background-size: 400%;
  border-radius: 30px;
  left:55%;
}
button:hover
{
  animation: animate 8s linear infinite;
}
@keyframes animate
{
  0%
  {
    background-position: 0%;
  }
  100%
  {
    background-position: 400%;
  }
}
button:before
{
  content:'';
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  z-index: -1;
  background: linear-gradient(90deg, #03a9f4, #f441a5, #ffeb3b, #03a9f4);
  background-size: 400%;
  border-radius: 40px;
  opacity:0;
  transition: 0.5s;
}
button:hover:before
{
  filter: blur(20px);
  opacity:1;
  animation: animate 8s linear infinite;
}

</style>

<script>
function testInput(event) {
   var value = String.fromCharCode(event.which);
   var pattern = new RegExp("[a-zA-Z \b]");
   return pattern.test(value);
}
function nospecial(event) {
   var value = String.fromCharCode(event.which);
   var pattern = new RegExp("[a-zA-Z0-9\b]");
   return pattern.test(value);
}
</script>
</head>
<body>

<section>
 <!-- <div class ="set"> 
<div><img src="image/1.png" width="150" height="150" ></div>
<div><img src="image/2.png" width="150" height="150"></div>
<div><img src="image/3.png" width="150" height="150"></div>
<div><img src="image/4.png" width="150" height="150"></div>
<div><img src="image/1.png" width="150" height="150"></div>
<div><img src="image/2.png" width="150" height="150"></div>
<div><img src="image/3.png" width="150" height="150"></div>
<div><img src="image/4.png" width="150" height="150"></div>
 </div> -->
<h5 style="vertical-align=midle; position:relative; text-align:center; font-size:50px; color:#000;"><i class ="material-icons" style="
vertical-align=midle; position:relative; text-align:center; font-size:70px; color:#000; ">bubble_chart</i>Edit Data</h5>
      <form style="color:purple; font-size:25px;  text-align:center; padding:3px; " action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $data){
?>
        <div class="input-field">
        <span><i style="font-size:30px;" class="material-icons">person</i> Nama</span>
         
          <input style="position:relative;left:10px; width:30%; height:40px; padding:5px;" id="icon_prefix" type="hidden" name="id" value="<?php echo $data['id']; ?>" id="id" class="validate">
          <input style="position:relative;left:10px; width:30%; height:40px; padding:5px;" id="icon_prefix" type="text" name="nama" onkeydown="return testInput(event);" required="required" id="nama" value="<?php echo $data['nama']; ?>" class="validate">
          
        </div>
        <div class="input-field">
        <span><i style="font-size:30px;" class="material-icons">laptop</i> ID</span>
          <input style="position:relative;left:32px; width:30%; height:40px; padding:5px;" id="icon_telephone" type="text" name="alamat" onkeydown="return nospecial(event);" required="required" id="alamat" value="<?php echo $data['alamat']; ?>"  class="validate">
          
        </div>
        <div class="input-field">
        <span ><i style="font-size:30px;" class="material-icons">email</i> Email</span>
          <input style="position:relative; left:18px; width:30%; height:40px; padding:5px;" id="icon_telephone" type="email" name="usia" id="usia" required="required" value="<?php echo $data['usia']; ?>"   class="validate">
         
        </div>
        <div class="input-field">
        <span ><i style="font-size:30px;" class="material-icons">vpn_key</i> Password</span>
          <input style="position:relative; width:30%; height:40px; padding:5px;" id="icon_telephone" type="password" name="email" id="email" required="required" value="<?php echo $data['email']; ?>"  class="validate">
          
        </div>
        <div class="input-field">
          <br>
          <br>
        <button type="submit">Edit</button>
        </div>
        <?php } ?>
    </form> 
</section>
</body>
</html>