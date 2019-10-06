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
                     <li>
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
                    <li class="active">
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
                                    <li class="active">Chi tiết</li>
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
            <div class="col-md-12" style="background-color: #fff;">
            <div class="list-group mytext_rightmenu_size my-1">
                <div class="a">
            <?php  
                include ('connect.php');
                $ma_id = $_GET['ma_id'];
                $sql="SELECT * FROM mon_an, monan_mua, monan_suckhoe, monan_vungmien, monan_thoidiem, loai_mon_an, vung_mien, mua, suc_khoe, thoi_diem, do_tuoi WHERE mon_an.ma_id=monan_mua.ma_id and mon_an.ma_id=monan_suckhoe.ma_id and mon_an.ma_id=monan_vungmien.ma_id and mon_an.ma_id=monan_thoidiem.ma_id and mon_an.loaima_id=loai_mon_an.loaima_id and monan_vungmien.vm_id=vung_mien.vm_id and monan_mua.mua_id=mua.mua_id and monan_suckhoe.sk_id=suc_khoe.sk_id and monan_thoidiem.td_id=thoi_diem.td_id and mon_an.dotuoi_id=do_tuoi.dotuoi_id and mon_an.ma_id='$ma_id'";

                $result=mysqli_query($con,$sql);
                $row=mysqli_fetch_array($result);
                   
            ?>
            <div id="noidung" style="width:100%; height: auto; "> 
                <h4 style="margin-top:10px;  margin-left:60px; font-weight: bold; font-size:26px;"> <?php echo $row['ma_ten'];?> </h4>
                <!-- <br/> -->
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="col-md-4 col-sm-8 pull-left">
                                <div id="ma_hinhanh" style="height:auto; margin-left:30px; width:auto"> 
                                   <?php echo "<img src='".$row['ma_hinhanh']."'>"?>
                                    <!-- <img src="hinhanh/anh20.jpg"> -->
                                </div>
                                <ul class="info" style="margin-left:30px; font-size:17px;">
                                    
                                    <a href="dsma.php"><i class="fa fa-arrow-left pull-right"> Trở về trang trước</i></a>
                                </ul>
                                
                            </div>
                            <div class="col-md-8 col-sm-8 pull-right ">
                                <div class="table-responsive">
                                    <table >
                                        <tr>
                                            <th>Loại: </th>
                                            <td width="1200px"><?php echo $row['loaima_ten'];?></td>
                                        </tr>
                                        <tr>
                                            <th width="40%">KCAL: </th>
                                            <td> <?php echo $row['ma_kcal'];?> </td>
                                        </tr>
                                        <tr>
                                            <th>Vùng miền: </th>
                                            <td>
                                                <?php
                                                            $id = $row['ma_id'];
                                                            $sql1="SELECT * FROM mon_an, monan_vungmien, vung_mien where mon_an.ma_id=monan_vungmien.ma_id and monan_vungmien.vm_id=vung_mien.vm_id";
                                                            $result1 = mysqli_query($con,$sql1);
                                                            while($data=mysqli_fetch_array($result1)){
                                                                if($id === $data['ma_id']){
                                                                    echo  "-";
                                                                    echo "&nbsp";
                                                                    echo "&nbsp";
                                                                    echo $data['vm_ten'];
                                                                    echo "&nbsp";
                                                                    echo "&nbsp";
                                                                    

                                                                    
                                                                }
                                                            }
                                                        ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Mùa: </th>
                                            <td>
                                                <?php
                                                            $id = $row['ma_id'];
                                                            $sql1="SELECT * FROM mon_an, monan_mua, mua where mon_an.ma_id=monan_mua.ma_id and monan_mua.mua_id=mua.mua_id";
                                                            $result1 = mysqli_query($con,$sql1);
                                                            while($data=mysqli_fetch_array($result1)){
                                                                if($id === $data['ma_id']){
                                                                    echo  "-";
                                                                    echo "&nbsp";
                                                                    echo "&nbsp";
                                                                    echo $data['mua_ten'];
                                                                    echo "&nbsp";
                                                                    echo "&nbsp";
                                                                    

                                                                    
                                                                }
                                                            }
                                                        ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Độ tuổi phù hợp: </th>
                                            <td> <?php echo $row['dotuoi_tuoi'];?></td>
                                        </tr>
                                         <tr>
                                            <th>Sức khỏe: </th>
                                            <td>
                                                <?php
                                                            $id = $row['ma_id'];
                                                            $sql1="SELECT * FROM mon_an, monan_suckhoe, suc_khoe where mon_an.ma_id=monan_suckhoe.ma_id and monan_suckhoe.sk_id=suc_khoe.sk_id";
                                                            $result1 = mysqli_query($con,$sql1);
                                                            while($data=mysqli_fetch_array($result1)){
                                                                if($id === $data['ma_id']){
                                                                    echo  "<br> ";
                                                                    echo "&nbsp";
                                                                    echo $data['sk_loaisk'];
                                                                    echo "&nbsp";
                                                                    

                                                                    
                                                                }
                                                            }
                                                        ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Thời điểm phù hợp: </th>
                                            <td> 
                                                <?php
                                                            $id = $row['ma_id'];
                                                            $sql1="SELECT * FROM mon_an, monan_thoidiem, thoi_diem where mon_an.ma_id=monan_thoidiem.ma_id and monan_thoidiem.td_id=thoi_diem.td_id";
                                                            $result1 = mysqli_query($con,$sql1);
                                                            while($data=mysqli_fetch_array($result1)){
                                                                if($id === $data['ma_id']){
                                                                    
                                                                    echo $data['td_ten'];
                                                                    echo "&nbsp";
                                                                    echo "&nbsp";
                                                                    echo  "-";
                                                                    
                                                                    echo "&nbsp";
                                                                    echo "&nbsp";
                                                                    

                                                                    
                                                                }
                                                            }
                                                        ?>
                                            </td>
                                        </tr>
                                          
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
                                   
        </div><!-- .content -->  
               
                













               
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
