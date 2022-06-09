<?php
	 include_once('connectdb_admin2.php');
		
	$sql2 = "SELECT * FROM studentloan WHERE std_id_auto = '".$_GET['id']."' ";
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
        <tr>
            <th rowspan="2">ชื่อ- สกุล</th>
            <th rowspan="2">รหัสนิสิต</th>
            <th rowspan="2">สาขา</th>
            <th rowspan="2">ชั้นปี</th>
            <th rowspan="2">คณะ</th>
            <th colspan="1">จำนวนชั่วโมง</th>
            <th rowspan="2">รวม<br>(<?=$data2['p_do'];?> ชม./ปีการศึกษา <?=$data2['p_lo'];?>)</th>
        </tr>
        <tr>

            <th>ภาคเรียนที่ <?=$data2['p_io'];?></th>



        </tr>

        <tr>


            <td><?=$data2['stu_n'];?></td>
            <td><?=$data2['stu_id'];?></td>
            <td><?=$data2['branch'];?></td>
            <td><?=$data2['stu_year'];?></td>
            <td><?=$data2['stu_board'];?></td>
            <td><?=$data2['p_do'];?> ชั่วโมง</td>
            <td><?=$data2['p_do'];?> ชั่วโมง</td>


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
    window.print();
}
</script>

</html>