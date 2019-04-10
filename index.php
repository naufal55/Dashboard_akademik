<!doctype html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="chartjs/Chart.min.js"></script>

<head>
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

 <script src="documentation/js/jquery-3.1.0.min.js"></script>

 <?php include 'indo.php';  ?>
 <?php include 'header.php'; ?>

 <script src="documentation/js/highmaps.js"></script>
 <script src="documentation/js/id-all.js"></script>
 <script src="documentation/js/exporting.js"></script>   
 

</head>

<body id="page-top">
    <!-- ============================================================== -->

    <!-- tampilan atas header dari menu -->
    <?php include 'navbar_atas.php'; ?>
    <!-- akhir dari tampilan dari -->

    <!-- tampilan navbar kiri -->
    <?php include 'navbar_kiri.php'; ?>

    <!-- ============================================================== -->

    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
              <div id="beranda">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                         
                            <h2 class="pageheader-title">Beranda</h2>
                            <!--  <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p> -->
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard Akademik</li>
                                    </ol>
                                </nav>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- tampilan laman yang ada pada awal -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <dl>
                                    <dt>
                                        Akademik                    
                                    </dt>
                                    <dd style="text-align: justify;">
                                        Informasi akademik bersumber pada Database Sistem Informasi Akademik pada Bagian Biro Administrasi Akademik Kemahasiswaan yang telah ditampung dan diolah dari datawarehouse Universitas Darussalam Gontor secara periodik.                 
                                    </dd>
                                    <dt>
                                        Kriteria Data
                                    </dt>
                                    <dd style="text-align: justify;">
                                        Kriteria data yang ditampilkan meliputi data pendaftar, mahasiswa aktif maupun IPK rata - rata Sarjana (S1) dan ditampilkan secara periodik.                    
                                    </dd>
                                    <dd>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="kpi-label-atas">Deksripsi</div><br>   
                                    <p><i class="fa fa-arrow-circle-up kpi-naik"></i> : Meningkat</p>
                                    <p><i class="fa fa-arrow-circle-down kpi-turun"></i> : Menurun</p>
                                    <p><i class="fa fa-exclamation-circle kpi-bahaya"></i> : Bahaya</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                

                <!-- AKADEMIKA -->
                <div id="akademika">
                <!-- ============================================================== -->
                <h2 class="pageheader-title">&nbsp;&nbsp;&nbsp;Akademika</h2><br><br><br>
                <div class="ecommerce-widget">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                
                                <?php include 'card1.php';  ?>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <?php include 'card2.php';  ?>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                           <?php include 'card3.php';  ?>
                        </div>
                    </div>

                </div>
            </div>
            </div>


            <div class="row">
            
              <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                <div id="rata-rata">
                <div class="card">
                <ul class="nav navbar-nav">
                    <h4 align="center" class="card-header">Rata Rata IPK Perprodi</h4>
                </ul>
                    
                         <ul class="nav navbar-nav navbar-right">
                           <div class="card-body">
                                <h5 class="card-title">Tahun akademik </h5>

                                <select id="tahun" >
                                    <option value="2016-2017">2016 - 2017</option>
                                    <option value="2017-2018">2017 - 2018</option>
                                    <option value="2018-2019">2018 - 2019</option>
                                </select>

                                <script type="text/javascript">
                                    $('#tahun').change(function(){
                                        $.ajax({
                                            url : 'proces_ajax.php',
                                            type : 'POST',
                                            data : 'tahun='+$(this).val(),
                                            success : function(hasil){
                                                var result = $.parseJSON(hasil);
                                                
                                                $.each(result,function(key,value){
                                                    console.log(key +" "+ value);
                                                });
                                            }
                                        });
                                    }); 
                                </script>

                            </div>
                        </ul>

                    <div class="card-body">
                        <!-- ============================================================== -->
                        <style type="text/css">
                        body{
                            font-family: roboto;
                        }

                        table{
                            margin: 0px auto;
                        }
                    </style>

                    
                 <?php include 'table.php';  ?>


                </div>
            </div>
        </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
        <div id="sex">
            <div class="card">
                <h5 class="card-header">Gender Mahasiswa</h5>
                <div class="card-body">
               
                    <?php include 'piebar.php';  ?>
                </div>    
            </div>
        </div>
        </div>

        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
    
        <div id="domisili">
        <div id="container">
            <div class="card">
                <h5 class="card-header">Domisili Mahasiswa</h5>
                <div class="card-body">

                    <div class="container-fluid" style="margin-top:7px">
                     <div id ="bro"></div>
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
</div>
</div>
</div>
<?php include 'config.php'; ?>
</body>

</html>