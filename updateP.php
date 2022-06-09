<?php
	    include_once('connectdb_admin2.php');
		
	$sql2 = "SELECT * FROM studentloan WHERE std_id_auto = '".$_GET['std_id_auto']."' ";
	$result2 = mysqli_query($conn,$sql2);
	$data2 = mysqli_fetch_array($result2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>ระบบบันทึกชั่วโมงจิตอาสา กยศ. กรอ.
        คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png"
        href="https://scontent.fkkc3-1.fna.fbcdn.net/v/t1.0-9/119980752_337785307574954_1757152202764221432_o.jpg?_nc_cat=105&ccb=2&_nc_sid=09cbfe&_nc_eui2=AeEdQ3uuMUpSNsKpHfjvpUDro1XX0a4IIyujVdfRrggjKx0oaTlnEEJRQqIYyg0KJMUxDMwjlPd-dN2hT7EGYqeo&_nc_ohc=0bT4uczorNcAX96yl_4&_nc_ht=scontent.fkkc3-1.fna&oh=6b8d05997d7e1dd2078a3062bc4a3886&oe=5FBB4911" />
    <!-- การลิ้ง css bootstrap เเบบ cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- การลิ้ง javascript ของ bootstrap เเบบ cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- การลิ้ง sweetalert2 เเบบ cdn  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="">

    <!-- การนำเข้า Navbar -->


    <br>



    <div class="container my-5 px-0 1">

        <!--Section: Content-->
        <section class="p-5 my-md-5 text-center">
            <h5> <a href="stu.php" style="color:red">กลับไปยังหน้าหลัก</a></h5>

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- Material form login -->
                    <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;" action="" method="POST">

                                <h3 class="font-weight-bold my-4 pb-2 text-center text-danger">แก้ไขชั่วโมงจิตอาสา
                                    กยศ. กรอ. </h3>

                                <div class="form-group">รหัสนิสิต
                                    <input type="text" class="form-control" required autofocus placeholder=""
                                        name="p_name" value="<?=$data2['stu_id'];?>" required readonly>
                                </div>
                                <div class="form-group">ชื่อ - นามสกุล
                                    <input type="text" class="form-control" required autofocus placeholder=""
                                        name="p_id" value="<?=$data2['stu_n'];?>" required readonly>
                                </div>

                                สาขา<br> <select name="stu_major" value="0"> </option>

                                    <option readonly value="<?=$data2['branch'];?>"><?=$data2['branch'];?></option>



                                </select>
                                <br> ชั้นปี<br> <select name="stu_year" value="0"> </option>

                                    <option readonly value="<?=$data2['stu_year'];?>"><?=$data2['stu_year'];?></option>


                                </select>




                                <div class="form-group">คณะ
                                    <input type="text" class="form-control" required autofocus placeholder=""
                                        name="s_mbs" value="<?=$data2['stu_board'];?>" readonly>

                                </div>

                                <div class="form-group">ชื่อกิจกรรมจิตอาสา
                                    <input type="text" class="form-control" required autofocus placeholder="" name="p_a"
                                        value="<?=$data2['std_name'];?>" required>
                                </div>
                                <div class="form-group">สถานที่ทำกิจกรรม
                                    <input type="text" class="form-control" required autofocus placeholder="" name="p_b"
                                        value="<?=$data2['std_po'];?>" required>
                                </div>
                                <div class="form-group">ลักษณะของกิจกรรม
                                    <input type="text" class="form-control" required autofocus placeholder="" name="p_c"
                                        value="<?=$data2['std_lo'];?>" required>
                                </div>
                                <div class="form-group">วัน/เดือน/ปี

                                    <input type="date" class="form-control" required autofocus placeholder=""
                                        name="p_date" value="<?=$data2['s_date'];?>" required>
                                </div>

                                <div class="form-group">เวลาที่ทำกิจกรรม

                                    <input type="time" class="form-control" required autofocus placeholder=""
                                        name="p_time" value="<?=$data2['t_ime'];?>" required>
                                </div>

                                <div class="form-group">ถึง

                                    <input type="time" class="form-control" required autofocus placeholder="" name="p_t"
                                        value="<?=$data2['p_ao'];?>" required>
                                </div>

                                <div class="form-group">ภาคเรียนที่
                                    <input type="number" class="form-control" required placeholder="" name="p_price"
                                        value="<?=$data2['p_io'];?>" required min="1" max="3">
                                </div>
                                <div class="form-group">ปีการศึกษา
                                    <input type="number" class="form-control" required placeholder="" name="p_count"
                                        value="<?=$data2['p_lo'];?>" required>
                                </div>
                                <div class="form-group">จำนวนชั่วโมงรวม
                                    <input type="number" class="form-control" required placeholder="" name="p_hours"
                                        value="<?=$data2['p_do'];?>" required min="1" max="20">
                                </div>



                                <div class="text-center">
                                    <input type="submit" name="SubmitUpdate" value="แก้ไข" class="btn btn-warning">
                                </div>

        

                            </form>
                            <!-- Form -->

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

            if (isset($_POST["SubmitUpdate"])) {
                //นำเข้าไฟล์ การเชื่อมต่อฐานข้อมูล
                include_once("connectdb_admin2.php");

                //คำสั่ง SQL บันทึกข้อมูลลงฐานข้อมูล
                $sqlUp = "UPDATE studentloan SET stu_id = '{$_POST["p_name"]}', stu_n = '{$_POST["p_id"]}', branch = '{$_POST["stu_major"]}', 
                stu_year = '{$_POST["stu_year"]}', stu_board = '{$_POST["s_mbs"]}', std_name = '{$_POST["p_a"]}',
                std_po = '{$_POST["p_b"]}', std_lo = '{$_POST["p_c"]}', s_date = '{$_POST["p_date"]}', t_ime = '{$_POST["p_time"]}',
                p_ao = '{$_POST["p_t"]}', p_io = '{$_POST["p_price"]}', p_lo = '{$_POST["p_count"]}', p_do = '{$_POST["p_hours"]}' 
                        WHERE std_id_auto = '{$_GET["std_id_auto"]}';";

                
                    

                if (mysqli_query($conn, $sqlUp)) { 
                    echo
                        "<script> 
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'เเก้ไขข้อมูลสำเร็จ',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(()=> location = 'stu.php')
                </script>";
                } else {
                    echo
                        "<script> 
                    Swal.fire({
                        icon: 'error',
                        title: 'เเก้ไขข้อมูลไม่สำเร็จ', 
                        text: 'โปรดตรวจสอบความถูกต้องของข้อมูล!',
                    }) 
                </script>";
                }
            }

            ?>
    </bodyclass=>
</body>

</html>