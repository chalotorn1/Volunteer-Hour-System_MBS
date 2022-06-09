<?php
@session_start(); 
    unset($_SESSION[ 'sid' ]);
    unset($_SESSION[ 'suser' ]);
    unset($_SESSION[ 'sname' ]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ชั่วโมงจิตอาสา กยศ. กรอ.
        คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<center>
    <div class="px-3 py-1 bg-gradient-primary text-white">Mahasarakham Business School, Mahasarakham University </div>
</center>

<body class="">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <center>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="p-4">
                        </center>
                        <div class="text-center">
                            <a href="mbs.png" center><img src="mbs.png" width="100" height="100"> </a>


                            <h4>
                                <font color="#00BFFF" font size="6"> MBS Together </font>
                            </h4>

                            </center>
                            <div class=" h5 text-gray-900 mb-3">ชั่วโมงจิตอาสา กยศ. กรอ. <br>
                                คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม

                            </div>
                            <center>
                                <form class="form-horizontal" action="" method="post">
                                    <fieldset>

                                        <!-- Form Name -->
                                        <center>

                                            <label class="col-md-4 control-label" for="a"></label>
                                            <div class="col-md-4">
                                                <input id="a" name="a" type="text" placeholder="รหัสนิสิต"
                                                    class="form-control input-md" required="">

                                            </div>

                                            <!-- Password input-->

                                            <label class="col-md-4 control-label" for="b"></label>
                                            <div class="col-md-4">
                                                <input id="b" name="b" type="password" placeholder="Password"
                                                    class="form-control input-md" required="">

                                            </div>

                                            <!-- Button -->

                                            <label class="col-md-4 control-label" for="Submit"></label>
                                            <div class="col-md-4">
                                                <button id="Submit" name="Submit" class="btn btn-success">Login</button>
                                            </div>


                                            <label class="col-md-4 control-label" for="Submit"></label>
                                            <div class="col-md-4">
                                                <a href="login.php" button id="" name=""
                                                    class="btn btn-danger">เจ้าหน้าที่เข้าสู่ระบบ</button></a>
                                            </div>
                                    </fieldset>
                                </form>
                                <hr>
                                <?php
	if ( isset( $_POST[ 'Submit' ] ) ) {
		include_once( "connectdb_admin.php" );

		$sql = "SELECT * FROM `student` WHERE suser ='" . $_POST[ 'a' ] . "' and spwd='" . $_POST[ 'b' ] . "' LIMIT 1 ";
		$result = mysqli_query( $conn, $sql );
		$num = mysqli_num_rows( $result );

		if ( $num == 1 ) { //ถ้าเจอ
			$data = mysqli_fetch_array( $result );
			//สร้างตัวแปล
            $_SESSION[ 'sid' ] = $data[ 'sID' ];
            $_SESSION[ 'suser' ] = $data[ 'suser' ];
			$_SESSION[ 'sname' ] = $data[ 'sname' ];

			echo "<script>";
			 //echo "alert('เข้าสู่ระบบสำเร็จ');";
			echo "window.location='std_report.php';";
                                echo "</script>";
                                } else {
                                echo "<script>
                                ";
                                echo "alert('รหัสผ่านไม่ถูกต้อง');";
                                echo "
                                </script>";
                                }
                                }
                                ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>
    </div>

    <center>
        <p> หมายเหตุ : <br>

            1. กรณีเข้าใช้งานครั้งแรกหรือเข้าระบบไม่ได้ ให้เข้าไปที่ระบบอัพเดตข้อมูลนิสิต เพื่อกำหนดรหัสผ่าน
            <a href="http://acc.msu.ac.th/AppMBS/upstudent/"> ระบบอัพเดตข้อมูลนิสิต <br> </a>
            2.หากทำทุกขั้นตอนแล้วยังเข้าระบบไม่ได้ กรุณาติดต่อเจ้าหน้าที่คอมพิวเตอร์
            คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม ผ่าน <a href="http://acc.msu.ac.th/alert-webservice/">
                ระบบแจ้งบริการคอมพิวเตอร์
        </p> </a>
        <hr> พัฒนาโดย ฝ่ายนวัตกรรมและบริการวิชาการคณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม <br>
        © 2020 Copyright : <a href="http://www.mbs.msu.ac.th/">www.mbs.msu.ac.th/ </a>All reserve
    </center>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>