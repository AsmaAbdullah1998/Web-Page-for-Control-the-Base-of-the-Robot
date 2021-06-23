<?php
//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'combine_db';
$db_port = 8889;

//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
endif;

//ON 
if(isset($_POST['on'])) {
    echo "<br>";

    $my_query = "";

    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine_table (on_value) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}else if(isset($_POST['off'])) { //OFF
    echo "<br>";

    $my_query = "";

    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine_table (Off_value) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}


$v1 = $_POST['v1'];
$v2 = $_POST['v2'];
$v3 = $_POST['v3'];
$v4 = $_POST['v4'];
$v5 = $_POST['v5'];
$v6 = $_POST['v6'];

if(isset($_POST['go'])){

    $my_query = "";

    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine_table (m1, m2, m3, m4, m5, m6) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}


if(isset($_POST['left'])){
    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine_table (left_dir) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
    

}

if(isset($_POST['right'])){
    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine_table (right_dir) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

    
}


if(isset($_POST['forward'])){

    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine_table (forward_dir) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

    
}

if(isset($_POST['backward'])){
    $my_query = "select * from combine_table WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO combine_table (backward_dir) VALUES (1)";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

    
}




















    
    

    



?>