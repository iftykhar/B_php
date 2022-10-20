<?php 

class database
{
    public $host = 'localhost';
    public $dbname = 'basic';
    public $password = '';
    public $username = 'root';

    public function __construct()
    {
        try {
            $conn = new PDO("mysql:host = $this->host; dbname=$this->dbname;",$this->username,$this->password);
            echo "Successfull connection";
        } catch (Exception $e) {
            echo "connection failed".$e->getmessage();
        }
    }
}
$dt = new database();
echo $dt->__construct();