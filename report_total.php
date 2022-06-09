<?php
	 include_once('connectdb_admin2.php');
		
	$sql2 = "SELECT * FROM studentloan  WHERE stu_id = '".$_GET['id']."'  ";
	$result2 = mysqli_query($conn,$sql2);
	$data2 = mysqli_fetch_array($result2);
?>
<!DOCTYPE html>
<html>

<head>
    <style>
    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 15px;
    }
    </style>
</head>

<body>

    <h5 align="right">คณะการบัญชีและการจัดการ</h5>
    <center> <img src="mbs.png" width="150" height="150">
        <caption>
            <h4>ใบรายงานชั่วโมงจิตอาสา</h4>
        </caption>
    </center>
    <table>

        <?php 
    
    $sum_p_io_1= 0;
    $sum_p_io_2= 0;

$sql = "SELECT * FROM studentloan  WHERE stu_id = '".$_GET['id']."' AND  p_lo='{$_GET["p_lo"]}'"; 
$sql_sum_p_io_1 = "SELECT SUM(p_do) sum_p_io_1 FROM `studentloan` WHERE `stu_id`= '{$_GET['id']}' AND `p_lo` = {$_GET["p_lo"]} AND `p_io` = 1"; 
$sql_sum_p_io_2 = "SELECT SUM(p_do) sum_p_io_2 FROM `studentloan` WHERE `stu_id`= '{$_GET['id']}' AND `p_lo` = {$_GET["p_lo"]} AND `p_io` = 2"; 
$result = mysqli_query($conn, $sql);

$result_sum_p_io_1 = mysqli_query($conn, $sql_sum_p_io_1);
$result_sum_p_io_2 = mysqli_query($conn, $sql_sum_p_io_2);
 
  while($row_sum_p_io_1 = mysqli_fetch_assoc($result_sum_p_io_1)) {
    $sum_p_io_1=$row_sum_p_io_1["sum_p_io_1"];
  }

  while($row_sum_p_io_2 = mysqli_fetch_assoc($result_sum_p_io_2)) {
    $sum_p_io_2=$row_sum_p_io_2["sum_p_io_2"];
  }

  
 

mysqli_close($conn);
    ?>

        <tr>
            <th rowspan="2">ชื่อ- สกุล</th>
            <th rowspan="2">รหัสนิสิต</th>
            <th rowspan="2">สาขา</th>
            <th rowspan="2">ชั้นปี</th>
            <th rowspan="2">คณะ</th>
            <th colspan="2">จำนวนชั่วโมง</th>
            <th rowspan="2">รวม<br>(<?=$sum_p_io_1+$sum_p_io_2;?> ชม./ปีการศึกษา <?=$_GET["p_lo"]?>)</th>
        </tr>
        <tr>

            <th>ภาคเรียนที่ 1</th>
            <th>ภาคเรียนที่ 2</th>



        </tr>

        <tr>


            <td><?=$data2['stu_n'];?></td>
            <td><?=$data2['stu_id'];?></td>
            <td><?=$data2['branch'];?></td>
            <td><?=$data2['stu_year'];?></td>
            <td><?=$data2['stu_board'];?></td>
            <td><?=$sum_p_io_1;?> ชั่วโมง</td>
            <td><?=$sum_p_io_2;?> ชั่วโมง</td>
            <td><?=$sum_p_io_1+$sum_p_io_2;?> ชั่วโมง</td>



        </tr>


    </table><br><br>
    <!-- <center><input type="button" name="button" id="button" value="Print" onclick="print();">
        <style type="text/css" media="print">
        input {
            display: none;
        }
        </style>
    </center> -->
</body>

<script>
window.onload = () => {
    printPage();
}

const printPage = () => {
    window.print()
}
</script>

</html>