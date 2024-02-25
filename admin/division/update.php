<?php
    include("../../conn.php");
?>

<!DOCTYPE html>
<html data-wf-page="649405786f67f1e064203600">

<head>
    <meta charset="utf-8" />
    <title>Admin Page - Update Division</title>
    <link
        href="../../style.css"
        rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    
</head>

<body>
    <div style="opacity:0" class="page-wrapper">
        <div data-w-id="da732deb-5db6-156b-08c9-e9fd059bc49f" data-animation="default" data-collapse="medium"
            data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="header-wrapper w-nav">
            <div class="container-default w-container">
                <div class="header-content-wrapper"><a href="../dashboard/index.php" aria-current="page"
                        class="logo-link-wrapper w-nav-brand w--current">JSW ISPAT SPECIAL SOLUTIONS LIMITED</a>
                    <div class="header-right-side-container">
                    <div style="text-align: center;"><?php $user = $_COOKIE['user']; ?> <?php echo $user ?> </div>
                        <div class="hidden-on-mbl">
                        
                            <div class="buttons-row gap-column-12px"><a data-w-id="dc3b625c-4a68-4ebe-9b74-d3193fa9f32f"
                                    href="../../Login/index.php" class="btn-primary w-inline-block">
                                    <div class="flex-horizontal gap-column-4px">
                                        <div>Log Out</div>
                                    </div>
                                </a></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="main-section pd-bottom-64px wf-section">
            <div class="container-default w-container">
                <div class="grid-2-columns main-dashboard-grid">
                    <div class="sticky-top hidden-on-tablet">
                        <div id="w-node-_33df89bc-f82c-cc1e-d5c4-4959632564a9-632564a9" class="sidebar-container">
                            <div class="grid-1-column sidebar-links-grid mg-bottom-48px">
                                <a href="../dashboard/index.php" aria-current="page"
                                    class="sidebar-link w-inline-block w--current">
                                        <span class="las la-igloo"></span>
                                    <div class="text-100 medium">Dashboard</div>

                                </a><a href="../users/index.php" class="sidebar-link w-inline-block">
                                <span class="las la-user-tie"></span>
                                    <div class="text-100 medium">Users</div>

                                </a><a href="../approver/index.php" class="sidebar-link w-inline-block">
                                <span class="las la-user-plus"></span>
                                    <div class="text-100 medium">Approvers</div>

                                </a><a href="../department/index.php" class="sidebar-link w-inline-block">
                                <span class="las la-building"></span>
                                    <div class="text-100 medium">Department</div>

                                </a><a href="index.php" class="sidebar-link w-inline-block">
                                <span class="las la-layer-group"></span>
                                    <div class="text-100 medium active">Division</div>

                                </a><a href="../location/index.php" class="sidebar-link w-inline-block">
                                <span class="las la-location-arrow"></span>
                                    <div class="text-100 medium">Location</div>

                                </a><a href="../designation/index.php" class="sidebar-link w-inline-block">
                                <span class="las la-user-graduate"></span>
                                    <div class="text-100 medium">Designation</div>
                                </a></div>
                        </div> 
                    </div>
                    <div id="w-node-_4df30bee-185d-16f7-3c30-cf645872aa85-64203600" class="dashboard-main-content">
                    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Update Approver</h4>
                    </div>
                    <div class="card-body p-4">
                        <div id="show_alert"></div>
                        <form action="#" method="POST" id="add_form" enctype="multipart/form-data">
                            <div id="show_item">
                                <div class="row">

                                <?php
                include("../../conn.php");

                $ids = $_GET['id'];

                                    $showquery = "select * from division where division='$ids'";
                                    $showdata= mysqli_query($conn2,$showquery);
                                    $arrdata = mysqli_fetch_array($showdata);
                                    $sno = $arrdata['sno'];

                                    if(isset($_POST['submit'])){
                                        $division = $_POST['division'];

                                        $sno = $arrdata['sno'];
        
                                        $updatequery = "UPDATE `division` SET `division`='$division' where sno='$sno'";

                                        $res = mysqli_query($conn2,$updatequery);

                                        echo '<script>window.location="index.php"</script>';
                                    }
                                ?>
    
                                    <div class="col-md-4 mb-3">
                                        Division
                                        <input type="text" name="division" value="<?php echo $arrdata['division']; ?>" class="form-control" id="division">
                                    </div>

                                </div>
                            </div>
                            <center>
                            <div>
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary w-50" id="add_btn">
                            </div></center>
                        </form>
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
   
    
    <script src="../../index.js"
        type="text/javascript"></script>
        
</body>

</html>