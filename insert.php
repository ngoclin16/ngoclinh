<?php
    $conn = mysqli_connect('localhost','root','','qlsp');
    if(! $conn){
        die("kêt nối thành công");
    }
    else{
        $sql= "insert into LoaiSanPham
        (maloaisp,tenloaisp,diengiai) values ".
        "('LSP006','Bộ nguồn máy','Các loại nguồn máy')";
        
        $result= mysqli_query($conn, $sql);
        if($result){
            echo "Tạo loại sản phẩm thành công!";
        }else{
            echo "Tạo loại sản phẩm thất bại!";
        }
    }
    

    mysqli_close($conn);
   
?>