<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->
<?php include 'layout/header.php' ?>

<body>
    <!-- Left Panel -->
    <?php include 'layout/leftmenu.php' ?>


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include 'layout/rightmenu.php' ?>
        <!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Table</a></li>
                                    <li class="active">Quản lý user</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Thêm User</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Họ Và Tên</label><input type="text" id="company" placeholder="Họ Tên" class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Số Điện Thoại Liên Hệ</label><input type="text" id="vat" placeholder="Nhập số điện thoại" class="form-control"></div>
                                <div class="form-group"><label for="street" class=" form-control-label">Địa Chỉ</label><input type="text" id="street" placeholder="Nhập địa chỉ" class="form-control"></div>
                                <div class="row form-group">
                                    <div class="col-12">
                                        <div class="form-group"><label for="city" class=" form-control-label">Email</label><input type="text" id="city" placeholder="Nhập Email" class="form-control"></div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-success">Thêm</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh Sách User</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>


                                            <th>Họ Và Tên</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Địa Chỉ</th>
                                            <th>Email</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td>
                                                <span>Phạm Anh Quốc</span>
                                            </td>
                                            <td> 0764544572 </td>
                                            <td> <span class="name">Hồ Chí Minh</span> </td>
                                            <td> <span class="product">DH51802752@student.stu.edu.vn</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-danger">Xóa</button>
                                                <a href="chitietuser.php"> <button type="button" class="btn btn-success">Sửa</button></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="serial">2.</td>
                                            <td>
                                                <span>Phan Văn Thành</span>
                                            </td>
                                            <td> 0764544572 </td>
                                            <td> <span class="name">Hồ Chí Minh</span> </td>
                                            <td> <span class="product">DH51802752@student.stu.edu.vn</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-danger">Xóa</button>
                                                <a href="chitietuser.php"> <button type="button" class="btn btn-success">Sửa</button></a>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

    <?php include 'layout/footer.php' ?>


</body>

</html>