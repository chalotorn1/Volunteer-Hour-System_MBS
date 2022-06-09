<?php
@session_start();
if(isset($_SESSION["suser"])){ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบบันทึกชั่วโมงจิตอาสา กยศ. กรอ.
        คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม</title>
    </p>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-table"></i>
                </div>
                <div class="sidebar-brand-text mx-3">MBS Together</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->


            <!-- Divider -->
            <hr class="sidebar-divider">







            <!-- Heading -->
            <div class="sidebar-heading">
                Report
            </div>



            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-table"></i>
                    <span>รายงาน (Report)</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Student MBS
                                    <?php
				if ( empty( $_SESSION[ 'sname' ] ) ) {
					?>

                                    <?php }
				else{
				?>
                                    <h6 class="">
                                        <?=$_SESSION['sname'];?>
                                    </h6>

                                </span>
                                <img class="img-profile rounded-circle" src="mbs.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> ออกจากระบบ
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">บันทึกชั่วโมงจิตอาสา กยศ. กรอ.
                        คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม</h1><?php } ?>
                    <p class="mb-4"></p>

                    <!-- DataTales Example -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            ตารางใบรายงานชั่วโมงจิตอาสานิสิต



                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#modelId">
                                พิมพ์ใบชั่วโมงกิจกรรมจิตอาสาแบบรวม
                            </button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>รหัสนิสิต</th>
                                            <th>ชื่อ-สกุล</th>
                                            <th>สาขา</th>
                                            <th>ชั้นปี</th>
                                            <th>คณะ</th>
                                            <th>จำนวนชั่วโมงรวม</th>
                                            <th>ชื่อกิจกรรมจิตอาสา</th>
                                            <th>ปีการศึกษา</th>
                                            <th>View</th>


                                        </tr>

                                    </thead>


                                    </tbody>
                                    <?php
    include_once("connectdb_admin2.php");

 $sql = "SELECT * FROM studentloan st WHERE st.stu_id ='{$_SESSION[ 'suser' ]}'";
 $result = mysqli_query($conn,$sql);
 while($data = mysqli_fetch_array($result)){
            ?>
                                    <tr>
                                        <td><?=$data['stu_id'];?></td>
                                        <td><?=$data['stu_n'];?></td>
                                        <td><?=$data['branch'];?></td>
                                        <td><?=$data['stu_year'];?></td>
                                        <td><?=$data['stu_board'];?></td>
                                        <td><?=$data['p_do'];?></td>
                                        <td><?=$data['std_name'];?></td>
                                        <td><?=$data['p_lo'];?></td>

                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-info btn-circle" data-toggle="modal"
                                                    data-target="#exampleModalLong<?=$data['std_id_auto'];?>"
                                                    data-toggle="tooltip" data-placement="top" title="ดูข้อมูล">
                                                    <i class="fas fa-eye"></i>
                                                </button>



                                                <!-- a href="report_print.php?id=<?=$data['std_id_auto'];?>"
                                                    class="btn btn-primary btn-circle" data-toggle="tooltip"
                                                    data-placement="top" title="พิมพ์รายงาน">
                                                    <i class="fas fa-print" placeholder=""></i>
                                                </a-->


                                        </td>




                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong<?=$data['std_id_auto'];?>"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">
                                                        รายละเอียดชั่วโมงจิตอาสา</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <b>รหัสนิสิต</b> <?=$data['stu_id'];?><br>
                                                    <b>ชื่อ - นามสกุล</b> <?=$data['stu_n'];?><br>
                                                    <b>สาขา</b> <?=$data['branch'];?><br>
                                                    <b>ชั้นปี</b> <?=$data['stu_year'];?><br>
                                                    <b>คณะ</b> <?=$data['stu_board'];?><br>
                                                    <b>ชื่อกิจกรรมจิตอาสา</b> <?=$data['std_name'];?><br>
                                                    <b>สถานที่ทำกิจกรรม</b> <?=$data['std_po'];?><br>
                                                    <b>ลักษณะของกิจกรรม</b> <?=$data['std_lo'];?><br>
                                                    <b>วัน/เดือน/ปี</b> <?=$data['s_date'];?><br>
                                                    <b>เวลาที่ทำกิจกรรม</b> <?=$data['t_ime'];?><br>
                                                    <b>ถึง</b> <?=$data['p_ao'];?><br>
                                                    <b>ภาคเรียนที่</b> <?=$data['p_io'];?><br>
                                                    <b>ปีการศึกษา</b> <?=$data['p_lo'];?><br>
                                                    <b>จำนวนชั่วโมงรวม</b> <?=$data['p_do'];?> ชั่วโมง<br>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">ปิด</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                
                                }  ?>

                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>

                    <p class="small text-center text-muted my-5">
                        <em>คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม ต.ขามเรียง อ.กันทรวิชัย จ.มหาสารคาม 44150
                            <br> Tel:0-4375-333 to 3445</em>
                    </p>

                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <footer class="sticky-footer">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright © Your Website 2019</span>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">แน่ใจว่าต้องการออกจากระบบ ? </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        เลือก "ออกจากระบบ" ด้านล่างหากคุณพร้อมที่จะสิ้นสุดเซสชันปัจจุบันของคุณ</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">ยกเลิก</button>
                        <a class="btn btn-primary" href="index.php">ออกจากระบบ</a>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="report_total.php" method="get">
                        <div class="modal-header">
                            <h5 class="modal-title">สั่งพิมพ์ใบชั่วโมงกิจกรรมจิตอาสาแบบรวม</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="">กรอกปีการศึกษา</label>
                                <input type="number" min="0" class="form-control" name="p_lo" required placeholder="">
                                <input type="hidden" class="form-control" name="id" value="<?=$_SESSION['suser'];?>"
                                    id="" placeholder="">

                                <!-- <small id="helpId" class="form-text text-muted">Help text</small> -->
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                            <button type="submit" class="btn btn-danger">ส่ง</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
<?php }else{
    echo "<script>";
    echo "location = 'index.php';";
    echo "</script>";
    exit();
}
?>