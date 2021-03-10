<?php
    $conn = mysqli_connect('localhost','root','','qlsp');
    if(! $conn){
        die("kêt nối thất bại");
    }
    else{
        $sql= "update LoaiSanPham set
        tenloaisp = 'Máy fax'". "where tenloaisp = 'Máy in'";
        
        $result= mysqli_query($conn, $sql);
        if($result){
            echo "Cập nhật loại sản phẩm thành công!";
        }else{
            echo "Cập nhật loại sản phẩm thất bại!";
        }
    }
    

    mysqli_close($conn);
   
?>