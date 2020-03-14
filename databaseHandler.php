<?php

//class Dbh {
//    private $servername;
//    private $username;
//    private $password;
//    private $dbname;
//    private $charset;
//    
//    public function connect() {
//        $this->servername = "database-1.c3hjc8rkc9gj.us-east-2.rds.amazonaws.com";
//        $this->username = "root";
//        $this->password = "toortoor";
//        $this->dbname = "peep-emails";
//        $this->charset = "utf8mb4";
//
//        try {
//            $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset".$this->charset;
//            $pdo = new PDO($dsn, $this->username, $this->password);
//            $pdo->setAttribute(PDO::ATTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            return $pdo;
//        }
//        catch(PDOException $e) {
//            echo "Connection failed: ".$e->getMessage();
//        }
//    }
//}

//$dbhost = $_SERVER['peep-emails.c3hjc8rkc9gj.us-east-2.rds.amazonaws.com'];
//$dbport = $_SERVER['3306'];
//$dbname = $_SERVER['peep-emails'];
//$charset = 'utf8' ;
//
//$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
//$username = $_SERVER['root'];
//$password = $_SERVER['toortoor'];
//
//$pdo = new PDO($dsn, $username, $password);

//$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$dbServername = "peep-preregs.c3hjc8rkc9gj.us-east-2.rds.amazonaws.com";
$dbUsername = "root";
$dbPassword = "toortoor";
$dbName = "peep-preregs";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>