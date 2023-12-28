<?php
$conn= pg_connect("host='localhost' port='5432' user='postgres' password='postgres' dbname='tubesgis'");
if($conn)
{
    echo "Koneksi Sukses";
}else{
    echo "Koneksi Gagal";
}
?>