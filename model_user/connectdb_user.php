<?php
/* function connectdb()
{
    $url = getenv('mysql://zd3kgzc76nc2zm9y:l3h85w10jgt63q1i@aqx5w9yc5brambgl.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/o33qjulyf1xg03jd');
    $dbparts = parse_url($url);

    $hostname = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $database = ltrim($dbparts['path'], '/');

    try {
        $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
} */
function connectdb()
{
    $username = 'root';
    $password = '';
    try {
        $conn = new PDO("mysql:host=localhost;dbname=fashion", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $conn;
        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
} 
