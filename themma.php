<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hôm nay ăn gì? - Admin</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/select2-bootstrap.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
    <link href="fSelect.css" rel="stylesheet">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script src="fSelect.js"></script>
<script src="js/select2.min.js"></script>
<script>
(function($) {
    $(function() {
        $('.select2-vmid').select2({
            theme: "bootstrap" ,
            placeholder: {
                id: '1', // the value of the option
                text: 'Cả nước'
            }
        }); 
    });
})(jQuery);

(function($) {
    $(function() {
        $('.select2-muaid').select2({
            theme: "bootstrap" ,
            placeholder: {
                id: '1', // the value of the option
                text: 'Cả năm'
            }
        }); 
    });
})(jQuery);

(function($) {
    $(function() {
        $('.select2-skid').select2({
            theme: "bootstrap" ,
            placeholder: {
                id: '1', // the value of the option
                text: 'Mọi đối tượng'
            }
        }); 
    });
})(jQuery);

(function($) {
    $(function() {
        $('.select2-tdid').select2({
            theme: "bootstrap" ,
            placeholder: {
                id: '1', // the value of the option
                text: 'Cả ngày'
            }
        }); 
    });
})(jQuery);

(function($) {
    $(function() {
        $('.multi-select-dd').fSelect({
            placeholder: 'Chọn ',
            numDisplayed: 4,
            overflowText: '{n} selected',
            searchText: 'Tìm ',
            showSearch: true
        });
    });
})(jQuery);
(function($) {
    $(function() {
        $('#vm_id').on('select2:select', function (e) {
          console.log($(this).val());
        });
    });
})(jQuery);
(function($) {
    $(function() {
        $('#vm_id').on('select2:unselect', function (e) {
          console.log($(this).val());
        });
    });
})(jQuery);
</script>

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li >
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Trang chủ</a>
                    </li>
                    <li class="menu-title">Món ăn</li><!-- /.menu-title -->
                     <li class="active">
                        <a href="themma.php"> <i class="menu-icon fa fa-cutlery"></i> Thêm mới</a>
                    </li>
                    <li>
                        <a href="dsma.php"> <i class="menu-icon fa fa-list"></i> Danh sách món ăn</a>
                    </li>

                    <li class="menu-title">Công thức</li><!-- /.menu-title -->
                    <li>
                        <a href="themct.php"> <i class="menu-icon fa fa-book"></i> Thêm mới</a>
                    </li>
                    <li>
                        <a href="dsct.php"> <i class="menu-icon fa fa-list"></i> Danh sách công thức</a>
                    </li>
                    <li class="menu-title">Danh mục</li><!-- /.menu-title -->
                    <li>
                        <a href="loainl.php"> <i class="menu-icon fa fa-glass"></i> Loại nguyên liệu</a>
                    </li>
                    <li>
                        <a href="loaima.php"> <i class="menu-icon fa fa-birthday-cake"></i> Loại món ăn</a>
                    </li>

                    <li class="menu-title">Nguyên liệu</li><!-- /.menu-title -->
                    <li>
                        <a href="themnl.php"> <i class="menu-icon fa fa-lemon-o"></i> Thêm mới</a>
                    </li>
                    <li>
                        <a href="dsnl.php"> <i class="menu-icon fa fa-list"></i> Danh sách nguyên liệu</a>
                    </li>
                   
                    <li class="menu-title">Thành phần dinh dưỡng</li><!-- /.menu-title -->
                    <li>
                        <a href="themdinhduong.php"> <i class="menu-icon fa fa-tint"></i> Thêm mới</a>
                    </li>
                    <li>
                        <a href="dsdinhduong.php"> <i class="menu-icon fa fa-list"></i> Danh sách TPDD</a>
                    </li>

                    <li class="menu-title">Người dùng</li><!-- /.menu-title -->
                    <li>
                        <a href="themuser.php"> <i class="menu-icon fa fa-user-plus"></i> Thêm mới</a>
                    </li>
                    <li>
                        <a href="dsuser.php"> <i class="menu-icon fa fa-list"></i> Danh sách người dùng</a>
                    </li>

                    <li class="menu-title">Bài đăng</li><!-- /.menu-title -->
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-check"></i> Duyệt bài đăng</a>
                    </li>
                    <li>
                        <a href="#"> <i class="menu-icon fa fa-list"></i> Danh sách bài đăng</a>
                    </li>
                   

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" alt="Logo" width="130%"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <!--<span class="count bg-danger">3</span>-->
                            </button>
                         
                        </div>
                       

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/1.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            

                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                
                </div>
            </div>            
        </header>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Món ăn</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.html">Trang chủ</a></li>
                                    <li><a href="#">Món ăn</a></li>
                                    <li class="active">Thêm mới</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                
               
                


<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><strong>Món ăn</strong></div>
                            <div class="card-body card-block">
                            <form class="form-horizontal form-label-left input_mask" action="XL_themma.php" method="POST"enctype="multipart/form-data" accept-charset="utf-8">
                                <div class="form-group"><labelclass=" form-control-label">Tên món ăn</label><input type="text" name="ma_ten" placeholder="Nhập tên món ăn" class="form-control"></div>
                                <div class="form-group"><label class=" form-control-label">KCAL</label><input type="text" name="ma_kcal" placeholder="Nhập kcal" class="form-control"></div>
                                <div class="row form-group">
                                        <div class="col col-md-6"><label class=" form-control-label">Loại món</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="loaima_id" class="form-control" required="" />
                                              <option value="">Chọn loại món ăn</option>
                                              <a href="">Thêm món ăn khác</a>
                                              <?php
                                                include('connect.php');
                                                $sql = "SELECT * FROM loai_mon_an";
                                                $result = mysqli_query($con,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                  echo "<option value='".$row['loaima_id']."'>".$row['loaima_ten']."</option>";
                                                }
                                            ?>
                                            </select> 
                                        </div>
                                </div>
                                <div class="row form-group">
                                     <div class="col col-md-6"><label for="select" class=" form-control-label">Vùng miền</label></div>
                                     
                                                <div class="col-12 col-md-9">
                                                    <select class="select2-vmid  form-control " multiple="multiple" name='vm_id[]'  id="vm_id" />
                                                      <?php
                                                        include('connect.php');
                                                        $sql="SELECT * FROM vung_mien ";
                                                        $result = mysqli_query($con,$sql);
                                                        while($row=mysqli_fetch_array($result)){
                                                            echo"<option   value='".$row['vm_id']."'>".$row['vm_ten']."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                        
                                                </div>
                                        
                                        <button type="button" class="btn btn-info btn-lg vung_mien" data-toggle="modal" data-target="#myModal">+</button></td></tr>
     
                                </div>

                                <div class="row form-group">
                                     <div class="col col-md-6"><label for="select" class=" form-control-label">Mùa</label></div>
                                     
                                                <div class="col-12 col-md-9">
                                                    <select class="select2-muaid  form-control " multiple="multiple" name='mua_id[]'  id="mua_id" />
                                                      <?php
                                                        include('connect.php');
                                                        $sql="SELECT * FROM mua ";
                                                        $result = mysqli_query($con,$sql);
                                                        while($row=mysqli_fetch_array($result)){
                                                            echo"<option   value='".$row['mua_id']."'>".$row['mua_ten']."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                        
                                                </div>
                                        
                                        <button type="button" class="btn btn-info btn-lg mua" data-toggle="modal" data-target="#myModal1">+</button>
     
                                </div>
                                 
                                <div class="row form-group">
                                        <div class="col col-md-6"><label for="select" class=" form-control-label">Độ tuổi phù hợp</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="dotuoi_id" class="form-control" required="" />
                                              <option value="">Chọn độ tuổi</option>
                                              <?php
                                                include('connect.php');
                                                $sql = "SELECT * FROM do_tuoi";
                                                $result = mysqli_query($con,$sql);
                                                while ($row = mysqli_fetch_array($result)) {
                                                  echo "<option value='".$row['dotuoi_id']."'>".$row['dotuoi_tuoi']."</option>";
                                                }
                                            ?>
                                            </select> 
                                        </div>
                                </div>
                                
                                <div class="row form-group">
                                     <div class="col col-md-6"><label for="select" class=" form-control-label">Sức khỏe</label></div>
                                     
                                                <div class="col-12 col-md-9">
                                                    <select class="select2-skid  form-control " multiple="multiple" name='sk_id[]'  id="sk_id" />
                                                      <?php
                                                        include('connect.php');
                                                        $sql="SELECT * FROM suc_khoe ";
                                                        $result = mysqli_query($con,$sql);
                                                        while($row=mysqli_fetch_array($result)){
                                                            echo"<option   value='".$row['sk_id']."'>".$row['sk_loaisk']."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                        
                                                </div>
                                        
                                        <button type="button" class="btn btn-info btn-lg suc_khoe" data-toggle="modal" data-target="#myModal2">+</button>
                                </div>

                                <div class="row form-group">
                                     <div class="col col-md-6"><label for="select" class=" form-control-label">Thời điểm</label></div>
                                     
                                                <div class="col-12 col-md-9">
                                                    <select class="select2-tdid  form-control " multiple="multiple" name='td_id[]'  id="td_id" />
                                                      <?php
                                                        include('connect.php');
                                                        $sql="SELECT * FROM thoi_diem ";
                                                        $result = mysqli_query($con,$sql);
                                                        while($row=mysqli_fetch_array($result)){
                                                            echo"<option   value='".$row['td_id']."'>".$row['td_ten']."</option>";
                                                        }
                                                        ?>
                                                    </select>
                                        
                                                </div>
                                        
                                        <button type="button" class="btn btn-info btn-lg suc_khoe" data-toggle="modal" data-target="#myModal3">+</button>
                                </div>
                               
                               

                                
                                     <div class="form-group"><label class=" form-control-label">Hình ảnh</label><input type="file" name="ma_hinhanh" multiple  accept="image/*" class="form-control"></div>
                                </div>
                                
                            <div class="form-actions form-group"><button type="submit" class="btn btn-primary btn-sm">Lưu</button> <button type="submit" class="btn btn-sm btn-danger">Hủy</button></div> 
                           </form> 
                            </div>
                        </div>

                    </div>





                    <form class="form-horizontal form-label-left input_mask" action="XL_themvm.php" method="POST"enctype="multipart/form-data" accept-charset="utf-8">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm vùng miền</h4>
        </div>
        <div class="modal-body">
       
          <div class="form-group"><label class=" form-control-label">Vùng miền</label><input type="text" name="vm_ten" placeholder="Nhập tên vùng miền mới" class="form-control"></div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-primary btn-sm" >Lưu</button>
          <button type="submit" class="btn btn-sm" data-dismiss="modal">Hủy</button>
       
        </div>
      </div>
      
    </div>
  </div>
</form>




<form class="form-horizontal form-label-left input_mask" action="XL_themmua.php" method="POST"enctype="multipart/form-data" accept-charset="utf-8">
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm mùa</h4>
        </div>
        <div class="modal-body">
       
          <div class="form-group"><label class=" form-control-label">Mùa</label><input type="text" name="mua_ten" placeholder="Nhập mùa mới" class="form-control"></div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-primary btn-sm" >Lưu</button>
          <button type="submit" class="btn btn-sm" data-dismiss="modal">Hủy</button>
       
        </div>
      </div>
      
    </div>
  </div>
</form>




<form class="form-horizontal form-label-left input_mask" action="XL_themsk.php" method="POST"enctype="multipart/form-data" accept-charset="utf-8">
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm loại sức khỏe</h4>
        </div>
        <div class="modal-body">
       
          <div class="form-group"><label class=" form-control-label">Loại sức khỏe</label><input type="text" name="sk_loaisk" placeholder="Nhập loại mới" class="form-control"></div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-primary btn-sm" >Lưu</button>
          <button type="submit" class="btn btn-sm" data-dismiss="modal">Hủy</button>
       
        </div>
      </div>
      
    </div>
  </div>
</form>





<form class="form-horizontal form-label-left input_mask" action="XL_themtd.php" method="POST"enctype="multipart/form-data" accept-charset="utf-8">
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Thêm thời điểm</h4>
        </div>
        <div class="modal-body">
       
          <div class="form-group"><label class=" form-control-label">Thời điểm</label><input type="text" name="td_ten" placeholder="Nhập thời điểm mới" class="form-control"></div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-primary btn-sm" >Lưu</button>
          <button type="submit" class="btn btn-sm" data-dismiss="modal">Hủy</button>
       
        </div>
      </div>
      
    </div>
  </div>
</form>



               
        <!-- /.content -->
        <div class="clearfix"></div>
        <br><br><br><br><br>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Hôm nay ăn gì?
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>


    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>
