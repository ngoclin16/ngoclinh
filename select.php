<?php
    $conn = mysqli_connect('localhost','root','','qlsp');
    if(! $conn){
        die("kêt nối thành công");
    }
    else{
        $sql= "select * from LoaiSanPham";
        $result= mysqli_query($conn, $sql);
    }
    while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $data[] = $row;
    }
    echo "<table border= 1>";
    foreach($data as $key=>$value){
        echo "<tr>";

            foreach($value as $key1=>$value1){
            echo "<td> $value1 </td>";
        }
        echo "</tr>";
    }
    
    echo "</br>";

    mysqli_close($conn);
   
?>