<?php

class Connection{
	public $server,$username,$password, 
		$database;

	public function __construct($server, 
		$username, $password, $database)
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

		if($connection->connect_error){
			die('connection failed ! ' . $connection->connect_error);
		}

		echo 'connection successful' . '<br>';

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

$dbConnection = $conn->connectDatabase();

// create table
$sql = "CREATE TABLE customers(
		id INT(10) AUTO_INCREMENT PRIMARY KEY,
		name VARCHAR(30) NOT NULL,
		address VARCHAR(255) NULL
	)
";

if($dbConnection->query($sql) === TRUE){
	echo 'table created successfully' . '<br>';
}else{
	die('failed to create table! ' . $dbConnection->error . '<br>');
}

// insert data 
$insertSql = "INSERT INTO customers
	values(2,'rima', 'dhaka')
";

if($dbConnection->query($insertSql) === TRUE){
	echo 'data added successfully' . '<br>';
}else{
	die('failed to insert data! ' . $dbConnection->error . '<br>');
}

// select data

$selectSQL = "SELECT * FROM customers
	WHERE id > 1";

$result = $dbConnection->query($selectSQL);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->closeConnection($conn);
