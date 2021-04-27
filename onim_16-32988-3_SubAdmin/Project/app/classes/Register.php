<?php
namespace App\classes;

class Register
{
    protected $link;
    public function dbConnector()
    {
        $hostName='localhost';
        $userName='root';
        $password='';
        $dbName='game';
       $link= mysqli_connect($hostName,$userName,$password,$dbName);
       return $link;
    }

    public function register($data)
{


$sql="INSERT INTO user(name,country,phone,email,password) VALUES('$data[name]','$data[country]','$data[phone]','$data[email]','$data[password]' )";
if(mysqli_query(Register::dbConnector(),$sql)){
    echo 'successfully saved';
}else{
   echo 'data note saved'.mysqli_connect_error(Register::dbConnector());
}

}
public function getregister(){

    $sql= "SELECT * FROM user WHERE Country='Bangladesh'";
    if(mysqli_query(Register::dbConnector(),$sql)){
       $result=mysqli_query(Register::dbConnector(),$sql);
      return $result;
    }else{
        echo 'Data Save Unsuccessful';
    }

}
public function registerupdate($id){
$sql="SELECT * FROM user WHERE id ='$id' ";
    if(mysqli_query(Register::dbConnector(),$sql)){
        $result=mysqli_query(Register::dbConnector(),$sql);
        return $result;
    }else{
        echo 'Data Save Unsuccessful';
    }

}
public function registerupdates($data){
        $sql="UPDATE user SET name='$data[name]',country='$data[country]',phone='$data[phone]',email='$data[email]',password='$data[password]' WHERE id='$data[id]'";
    if(mysqli_query(Register::dbConnector(),$sql)){
       header('Location:view.php');
    }else{
        echo 'Data Save Unsuccessful';
    }
    }
    public function delete($id){

$sql="DELETE FROM user WHERE id='$id' ";
if(mysqli_query(Register::dbConnector(),$sql)){
    echo 'deleted';
}else{
    echo "not deleted";
}
    }
}