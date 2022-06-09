<?php
     include_once('connectdb_admin.php');

	$id=$_GET['id'];
	$sql2 = "SELECT * FROM student WHERE suser = '$id'";
	$result2 = mysqli_query($conn,$sql2);
    
    $suser;
    $sname;
    $stitle;

    while($row = mysqli_fetch_assoc($result2)) {
        $suser= $row["suser"];
        $sname= $row["sname"];
        $stitle= $row["stitle"];
       
    } 

    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>บันทึกชั่วโมงจิตอาสา กยศ. กรอ.
        คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม
    </title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"
        href="https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.0-9/119980752_337785307574954_1757152202764221432_o.jpg?_nc_cat=105&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEdQ3uuMUpSNsKpHfjvpUDro1XX0a4IIyujVdfRrggjKx0oaTlnEEJRQqIYyg0KJMUxDMwjlPd-dN2hT7EGYqeo&_nc_ohc=0bT4uczorNcAX96yl_4&_nc_ht=scontent.fkkc3-1.fna&oh=6b8d05997d7e1dd2078a3062bc4a3886&oe=5FBB4911" />
    <!-- การลิ้ง css bootstrap เเบบ cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- การลิ้ง javascript ของ bootstrap เเบบ cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    </script>

    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="">

    <!-- การนำเข้า Navbar -->


    <br>



    <div class="container my-5 px-0 1">

        <!--Section: Content-->
        <section class="p-5 my-md-5 text-center">

            <h5> <a href="std.php" style="color:red">กลับไปยังหน้าหลัก</a></h5>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Material form login -->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="" method="POST">


                                <h3 class="font-weight-bold my-4 pb-2 text-center text-primary">
                                    บันทึกชั่วโมงจิตอาสา
                                    กยศ. กรอ. </h3>

                                <div class="form-group">รหัสนิสิต
                                    <input type="text" class="form-control" required autofocus placeholder=""
                                        name="p_name" value="<?=$suser;?>" required readonly>
                                </div>
                                <div class="form-group">ชื่อ - นามสกุล
                                    <input type="text" class="form-control" required autofocus placeholder=""
                                        name="p_id" value="<?=$stitle;?><?=$sname;?>" required readonly>
                                </div>
                                สาขา<br> <select name="stu_major" value="0" required> </option>
                                    <?php
  include('connectdb_major.php');
  $sql2 = "SELECT * FROM `major`    ";
  $result2 = mysqli_query($conn,$sql2);
  while($data2 = mysqli_fetch_array($result2)){
?>
                                    <option value="<?=$data2['m_name'];?>"><?=$data2['m_name'];?></option>


                                    <?php } ?>
                                </select>
                                <br> ชั้นปี<br> <select name="stu_year" value="0" required> </option>
                                    <?php
  include('connectdb_major.php');
  $sql2 = "SELECT * FROM `year`";
  $result2 = mysqli_query($conn,$sql2);
  while($data2 = mysqli_fetch_array($result2)){
?>
                                    <option value="<?=$data2['y_name'];?>"><?=$data2['y_name'];?></option>


                                    <?php } ?>
                                </select>


                                <div class="form-group">คณะ
                                    <input type="text" class="form-control" required autofocus placeholder=""
                                        name="s_mbs" value="คณะการบัญชีและการจัดการ" required readonly>

                                </div>
                                <div class="form-group">ชื่อกิจกรรมจิตอาสา
                                    <input type="text" class="form-control" required autofocus placeholder="" name="p_a"
                                        required>
                                </div>
                                <div class="form-group">สถานที่ทำกิจกรรม
                                    <input type="text" class="form-control" required autofocus placeholder="" name="p_b"
                                        required>
                                </div>
                                <div class="form-group">ลักษณะของกิจกรรม
                                    <input type="text" class="form-control" required autofocus placeholder="" name="p_c"
                                        required>
                                </div>
                                <div class="form-group">วัน/เดือน/ปี

                                    <input type="date" class="form-control" required autofocus placeholder=""
                                        name="p_date" required>
                                </div>

                                <div class="form-group">เวลาที่ทำกิจกรรม

                                    <input type="time" class="form-control" required autofocus placeholder=""
                                        name="p_time" required>
                                </div>

                                <div class="form-group">ถึง

                                    <input type="time" class="form-control" required autofocus placeholder="" name="p_t"
                                        required>
                                </div>

                                <div class="form-group">ภาคเรียนที่
                                    <input type="number" class="form-control" required placeholder="" name="p_price"
                                        required min="1" max="3">
                                </div>
                                <div class="form-group">ปีการศึกษา
                                    <input type="number" class="form-control" required placeholder="" name="p_count"
                                        required>
                                </div>
                                <div class="form-group">จำนวนชั่วโมงรวม
                                    <input type="number" class="form-control" required placeholder="" name="p_hours"
                                        required min="1" max="20">
                                </div>

                                <div class="text-center">
                                    <input type="submit" name="SubmitInsert" value="บันทึก" class="btn btn-primary">
                                </div>

                            </form>
                            <!-- Form -->

                        </div>
                    </div>
                </div>
                <!-- Material form login -->
            </div>
    </div>


    </section>
    <!--Section: Content-->
    </div>
    <!-- จบ คลาส container -->

    <?php

        if (isset($_POST["SubmitInsert"])) {
         include_once('connectdb_admin2.php');
		
    $sql = "insert into studentloan values('','".$_POST['p_name']."','".$_POST['p_id']."','".$_POST['stu_major']."',
    '".$_POST['stu_year']."','".$_POST['s_mbs']."','".$_POST['p_a']."'
    ,'".$_POST['p_b']."','".$_POST['p_c']."','".$_POST['p_date']."','".$_POST['p_time']."','".$_POST['p_t']."'
    ,'".$_POST['p_price']."','".$_POST['p_count']."','".$_POST['p_hours']."')";
		
            if (mysqli_query($conn, $sql)) {
                echo
                    "<script> 
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'บันทึกข้อมูลสำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(()=> location = 'stu.php')
                </script>";
            } else {
                echo
                    "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: 'บันทึกข้อมูลไม่สำเร็จ', 
                        text: 'โปรดตรวจสอบความถูกต้องของข้อมูล!',
                    }) 
                </script>";
            }
            mysqli_close($conn);
        }

        ?>
    </bodyclass=>
</body>

</html>