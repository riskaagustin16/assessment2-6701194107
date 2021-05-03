<?php 
session_start();
/**
 * 
 */
class Guru {

	private $conn;

	function __construct(){
		$servername	= "localhost"; 
		$username	= "root"; 
		$password	= ""; 
		$db 		= "ass2pabw";
		$this->conn = mysqli_connect($servername, $username, $password, $db);
	}

	public function create_akun(){
		$nama_lengkap = htmlspecialchars($_POST['nama_lengkap']);
		$jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
		$username = htmlspecialchars($_POST['username']);
		$password = md5($_POST['password']);

		$sql = "INSERT INTO user (nama_lengkap, jenis_kelamin, username, password) 
		VALUES ('$nama_lengkap', '$jenis_kelamin', '$username', '$password')";

		$result = $this->conn->query($sql);
		if($result == true){
			echo "<script> alert('Data berhasil ditambahkan');</script>";
		} else {
			echo "<script> alert('gagal');</script>";

		}
		echo "<script> location='../app/login.php'; </script>";
	}

	public function login(){
		$username = htmlspecialchars($_POST['username']);
		$password = md5($_POST['password']);
		$sql      = "SELECT * FROM user WHERE username=LOWER('$username') AND password='$password';";
        $result   = $this->conn->query($sql);
        $row   = $result->fetch_assoc();
        if ($row > 0) {
            $_SESSION['user'] = $username;
        	header("location: about.php");
        } else{
			echo "<script> alert('Username atau Password salah');</script>";
            echo "<script> location= 'login.php'; </script>";
        }
	}

	public function create_ip(){
		$jumlah_ip = htmlspecialchars($_POST['jumlah_ip']);
		$keterangan = htmlspecialchars($_POST['keterangan']);

		$sql = "INSERT INTO ip (jumlah_ip, keterangan) VALUES ('$jumlah_ip', '$keterangan')";
		$result = $this->conn->query($sql);
		if($result == true){
			echo "<script> alert('Data berhasil ditambahkan');</script>";
		} else {
			echo "<script> alert('gagal');</script>";

		}
		echo "<script> location='../app/ip.php'; </script>";
	}

	public function read_guru(){
		$sql = "SELECT * FROM ip";
		return $this->conn->query($sql);
	}

	public function delete_ip($id_ip){
		$sql = "DELETE FROM ip WHERE id_ip = $id_ip";
		$result = $this->conn->query($sql);
		if ($result == true) {
			echo "<script> alert('Data berhasil dihapus');</script>";
			echo "<script> location='ip.php'; </script>";
		} else {
			echo "<script> alert('Data gagal dihapus');</script>";
		}
		echo "<script> location='ip.php'; </script>";
	}
}

$guru = new Guru();
	
	if (isset($_GET['create_akun'])) {
		$guru->create_akun();
	}
	if (isset($_GET['login'])) {
		$guru->login();
	}
	if (isset($_GET['create_ip'])) {
		$guru->create_ip();
	}
	if (isset($_GET['delete_ip'])) {
		$guru->delete_ip($_GET['delete_ip']);
	}

 ?>