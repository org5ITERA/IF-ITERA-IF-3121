<?php
$db = mysqli_connect("localhost", "root","","Tugas-Besar");

function __construct(){
		parent::__construct();
		$this->load->model('Tugas-Besar');
		$this->load->helper('url');

}

function login(){

  if (isset($_POST['login'])){

    global $db;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from User where username='$username' AND password='$password'";
    $run_sql=mysqli_query($db,$sql);
    $cek_user= mysqli_num_rows($run_sql);
    if ($cek_user==0) {
      echo "<script> alert('Username atau password SALAH') </script>";
    } else {
      echo "<script> window.open('my_account.php','_self') </script>";
    }

  }
}
function index(){
  $data['User']= $this->Tugas-Besar->get_user()->result();
  $this->load->view->('register',$data);
}

function account_register() {

}
function add(){
  $this->load->view('register');
}
function add_account(){
  $username = $this->input->post('Email/Telepon');
  $password = $this->input->post('Password');

}
