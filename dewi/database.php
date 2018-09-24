
<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "test";
	
	function __construct(){
		
		$mysqli = new mysqli($this->host, $this->uname, $this->pass, $this->db);
	
		
	}

	function tampil_data(){
		$mysqli = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		$data = $mysqli->query("select * from user");
		while($d = $data->fetch_assoc()){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$email){
		$mysqli = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		$mysqli->query("insert into user values('','$nama','$alamat','$usia','$email')");
	}

	function hapus($id){
		$mysqli = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		$mysqli->query("delete from user where id='$id'");
	}

	function edit($id){
		$mysqli = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		$data = $mysqli->query("select * from user where id='$id'");
		while($d = $data->fetch_assoc()){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia,$email){
		$mysqli = new mysqli($this->host, $this->uname, $this->pass, $this->db);
		$mysqli->query("update user set nama='$nama', alamat='$alamat', usia='$usia', email='$email'  where id='$id'");
	}

} 

?>