<?php
$query = mysqli_query($conn,"SELECT jumlah_donasi from donasi");
$jumlah_donasi = 0; 
while($donasi = mysqli_fetch_assoc($query)){
  $jumlah_donasi += $donasi['jumlah_donasi'];
}

?>