<?php
    $conn = mysqli_connect('localhost','root','','qlsp');
    if(! $conn){
        die("kêt nối thất bại");
    }
    else{
        $sql= "delete from LoaiSanPham where maloaisp = 'LSP006'";
        
        $result= mysqli_query($conn, $sql);
        if($result){
            echo "Xóa loại sản phẩm thành công!";
        }else{
            echo "Xóa loại sản phẩm thất bại!";
        }
    }
    

    mysqli_close($conn);
   
?>