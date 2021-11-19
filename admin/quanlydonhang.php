<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<?php include 'layout/header.php'?>
<body>
    <!-- Left Panel -->
    <?php include 'layout/leftmenu.php'?>
    <!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include 'layout/rightmenu.php'?>
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
                                    <li class="active">Quản lý Đơn Hàng</li>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh Sách Đơn Hàng</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>
                                            <th class="avatar">Mã Đơn Hàng</th>
                                            <th>Tên Khách Hàng</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Địa Chỉ</th>
                                            <th>Email</th>
                                            <th>Trạng Thái</th>
                                            <th>Chi Tiết Đơn Hàng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td class="serial">1.</td>
                                            <td>#123456</td>
                                            <td>
                                                <span>Phạm Anh Quốc</span>
                                            </td>
                                            <td> 0764544572 </td>
                                            <td> <span class="name">Hồ Chí Minh</span> </td>
                                            <td> <span class="product">DH51802752@gmail.com</span></td>
                                            <td><span>Đã Xử Lý</span></td>
                                            <td>
                                            <a href="chitietdonhang.php"> <button type="button" class="btn btn-danger">  Xem</button></a>
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
