<?php


namespace App\classes;


class AdminRegister
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
        $sql="INSERT INTO admin(name,country,phone,email,password) VALUES('$data[name]','$data[country]','$data[phone]','$data[email]','$data[password]' )";
        if(mysqli_query(AdminRegister::dbConnector(),$sql)){
            echo 'successfully saved';
        }else{
            echo 'data note saved'.mysqli_connect_error(Register::dbConnector());
        }

    }
}