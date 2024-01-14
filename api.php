<?php
// tao header full control
header('Access-Control-Allow-Origin: *');
//thong tin sever
$s="localhost";
$u="root";
$p="";
$db="flu2";
//ket noi
$conn=new mysqli($s,$u,$p,$db);
//sql
$sql="select * from mytable";
//thuc thi
$kq=$conn->query($sql);
//doc ket qua
while($row[]=$kq->fetch_assoc())
{
    $json=json_encode($row);
}
echo '{"product":'.$json.'}';
$conn->close();
?>
