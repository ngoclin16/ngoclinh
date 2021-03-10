<?php
 $conn = mysqli_connect('localhost','root','','qlsp');
?>
<?php
    if(isset($_GET["them"])){
        $malsp = $_GET["maloaisp"];
        $tenlsp = $_GET["tenloaisp"];
        $diengiai = $_GET["diengiai"];
        $sql = "insert into LoaiSanPham (maloaisp, tenloaisp, diengiai) values ".
        "('$malsp ','$tenlsp ',' $diengiai')";
        $result= mysqli_query($conn, $sql);
        if($result){
            echo "Tạo loại sản phẩm thành công!";
        }else{
            echo "Tạo loại sản phẩm thất bại!";
        }
    }
        if(isset($_GET["capnhat"])){
            $malsp = $_GET["maloaisp"];
            $tenlsp = $_GET["tenloaisp"];
            $diengiai = $_GET["diengiai"];
        
        $sql1 = "update LoaiSanPham set
        tenloaisp = '$tenlsp' where maloaisp = '$malsp'";
        $result1= mysqli_query($conn, $sql1);
        if($result1){
            echo "Cập nhật loại sản phẩm thành công!";
        }else{
            echo "Cập nhật loại sản phẩm thất bại!";
        }
}
    
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <div class="container">
        <form action="" method="get">
        <input type="text" name="maloaisp" placeholder="mã loại sp">
        <input type="text" name="tenloaisp" placeholder="tên loại sp">
        <input type="text" name="diengiai" placeholder="diễn giải">
        <input type="submit" name="them" value="Thêm">
        <input type="submit" name="capnhat" value="Cập nhật">
       
        </form>
        <?php
        mysqli_close($conn);
        ?>
        </div>
    </body>
</html>
