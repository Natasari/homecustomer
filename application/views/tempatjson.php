<?php
mysql_connect('localhost','root','');
mysql_select_db('nem');

$sql="SELECT * FROM testing";
$query=mysql_query($sql);

$jumlah=0;
while($rec=mysql_fetch_assoc($query)){
	$record[]=$rec;
	$jumlah++;
}

$ke=0;
$data="[";
foreach($record as $tampil){
	$nama=$tampil['nama'];
	$data.="{\"label\" : \"$nama\"}";
	if($ke<$jumlah-1){
		$data.=", ";
	}
	$ke++;
}
$data.="]";
echo $data;
?>