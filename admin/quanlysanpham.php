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
    <!-- /#left-panel -->

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
                                    <li class="active">Quản lý Sản Phẩm</li>
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
                            <div class="card-header"><strong>Thêm Sản Phẩm</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="company" class=" form-control-label">Mã Sản Phẩm</label><input type="text" id="company" placeholder="Nhập Mã SP" class="form-control"></div>
                                <div class="form-group"><label for="vat" class=" form-control-label">Tên Sản Phẩm</label><input type="text" id="vat" placeholder="Nhập Tên SP" class="form-control"></div>
                                <div class="form-group"><label for="street" class=" form-control-label">Hình Ảnh</label><br><input type="file" id="street" placeholder="" class=""></div>
                                <div class="row form-group">
                                    <div class="col-8">
                                        <div class="form-group"><label for="city" class=" form-control-label">Giá Bán</label><input type="text" id="city" placeholder="Nhập Giá Bán" class="form-control"></div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group"><label for="postal-code" class=" form-control-label">Chọn Danh Mục Sản Phẩm</label> <br>
                                        <select>
                                           <option> <span>1</span> </option> 
                                           <option> <span>1</span> </option>
                                           <option> <span>1</span> </option>
                                           <option> <span>1</span> </option>
                                           <option> <span>1</span> </option>
                                        </select> </div>
                                    </div>
                                </div>
                                <div class="form-group"><label for="country" class=" form-control-label">Nội Dung</label><input type="textarea" id="country" placeholder="Nhập Nội Dung" class="form-control"></div>
                                <button type="button" class="btn btn-success">Thêm</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Danh Sách Sản Phẩm</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th class="serial">STT</th>
                                            <th class="avatar">Mã Sản Phẩm</th>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Hình Ảnh</th>
                                            <th>Giá Bán</th>
                                            <th>Danh Mục Sản Phẩm</th>
                                            <th>Nội Dung</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="serial">1.</td>
                                            <td class="avatar">
                                                #1231723
                                            </td>
                                            <td> ASUS </td>
                                            <td> <span class="name">hinhanh.PNG</span> </td>
                                            <td> <span class="product">40.000.000 VNĐ</span> </td>
                                            <td><span class="count">1</span></td>
                                            <td>
                                                <span">Nội Dung</span>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger">Xóa</button>
                                                <a href="chitietsanpham.php"><button type="button" class="btn btn-success">  Sửa</button></a>
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