<html>
    <head>Title Test Docker</head>
    <body>
	


  Amazing grace!!!
    aaaa


    <?php
//    $servername = "db";
//    $username = "root";
//    $password = "mypassword";
//
//    // Create connection
//    $conn = new mysqli($servername, $username, $password);
//
//    // Check connection
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }
//    echo "Connected successfully";
    ?>





    <?php
    $servername = "127.0.0.1:8080";
    $username = "root";
    $password = "root";
    $database = "mydatabase";




//    echo phpinfo();
    try {
        $conn = new PDO("mysqli:host=$servername;dbname=$database", $username, $password);
//        $conn = mysqli_connect($database, $username, $password, $database);


        // set the PDO error mode to exception
//        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "22Connected successfully";
    } catch(PDOException $e) {
        echo "111Connection failed: " . $e->getMessage();
    }
    ?>

        <h1>Hi There! This is a docker connected and it's awesome!</h1>
    </body>
</html>
