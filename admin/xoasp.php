<html>
<head>
    <title>Xóa</title>
</head>
<body>
<h1>Xóa sinh viên</h1>

        <?php
        // 1. Kết nối
        $conn = mysqli_connect("localhost", "root", "", "dacs");
        //2. Truy vấn
        $sql = "DELETE FROM sanpham WHERE idSP = " . $_GET['ids'];
        echo $sql;
        $kq = mysqli_query($conn, $sql);
        header('Location: tatcasp.php');
        ?>
    </body>
    </html>
