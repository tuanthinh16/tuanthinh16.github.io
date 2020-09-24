<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý Nhân Viên</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['add'])){
        $id = $_POST['id'];
        $user = $_POST['user'];
        $gt = $_POST['gt'];
        $date = $_POST['date'];
        $place = $_POST['place'];
        $picture = $_POST['picture'];
        $sallary = $_POST['sallary'];
        $vitri = $_POST['vitri'];
        $a = array($id,$user,$date,$place.$picture,$sallary,$vitri);
        // if($vitri = 'other'){
        //    echo("Vui lòng nhập vị trí cụ thể vào đây: ");
        // }
        echo('Thông tin nhân viên vừa thêm là: <br>');
        foreach($a as $info){
            echo("<br>".$info);
        }
    }
}
    ?>
</body>
</html>