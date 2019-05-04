<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:webserversyafrin.database.windows.net,1433; Database = dbwebapp", "syafrin", "Android_123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "syafrin@webserversyafrin", "pwd" => "Android_123", "Database" => "dbwebapp", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webserversyafrin.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
$sql = "SELECT * FROM peserta";
$query = $this->db->query($sql);
while($data = $query->fetch(PDO::FETCH_OBJ)){
    echo $data->name;
    
}
?>
