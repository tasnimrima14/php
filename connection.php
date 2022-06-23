<?php

class Connection{
    public $server, $username, $password, $database;

    public function __construct($server, $username, $password, $database)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    
    public function connectDatabase()
    {
        $connection = new mysqli($this->server,
        $this->username,
        $this->password,
        $this->database
    );

    if($connection->connect_error)
    {
        die('connection failed : '. $connection->connect_error);
    }

    echo 'connection successful';

    return $connection;
    }
    
    public function closeConnection($connection)
    {
        $connection->close();
    }
}

$conn = new Connection(
    'localhost',
    'root',
    '',
    'mist'
);

$conn->connectDatabase();

//create table
$sql = "CREATE TABLE customers(
        id INT(10) AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        address VARCHAR(50) NULL
        )
        ";
if($dbConnection->query($sql) === TRUE)
{
    echo 'data added successfully'. '<br>';
}
else{
    die('failed to insert data!'. $dbConnection->error.)
}        
        

$conn->closeConnection();