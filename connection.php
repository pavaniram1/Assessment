<?PHP
$hostname="localhost";
$username="root";
$password="";
$Database="cafe";

$conn=mysqli_connect($hostname,$username,$password,$Database);

if(!$conn)
{
    die("connection failed :".mysqli_connect_error());
}

?>