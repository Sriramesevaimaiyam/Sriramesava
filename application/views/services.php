<div class="main-content">
            <!-- Top navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Services</a>
                    <!-- Form -->
                    <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" id="search_box" placeholder="Search" type="text">
                            </div>
                        </div>
                    </form>
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <!--                        <li class="nav-item dropdown">
                                                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ni ni-bell-55" onclick="update_notifications();"></i><span class="notification  notification-data-count" onclick="update_notifications();">0</span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                                                        <div class="list-group list-group-flush notification-data">
                                                        </div>
                                                    </div>
                                                </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="https://www.tndigitalseva.in/uploads/profile/profile_image_1756947120-10-202216-35-08191364ljdx2XV_400x400.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Sri Ram E-Sevai  Maiyam</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="https://www.tndigitalseva.in/users/profile" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <!--<a href="./examples/profile.html" class="dropdown-item">
                                  <i class="ni ni-settings-gear-65"></i>
                                  <span>Settings</span>
                                </a>
                                <a href="./examples/profile.html" class="dropdown-item">
                                  <i class="ni ni-calendar-grid-58"></i>
                                  <span>Activity</span>
                                </a>
                                <a href="./examples/profile.html" class="dropdown-item">
                                  <i class="ni ni-support-16"></i>
                                  <span>Support</span>
                                </a>-->
                                <div class="dropdown-divider"></div>
                                <a href="https://www.tndigitalseva.in/logout" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- Header --><style>

    .card {
        box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }

    .card:hover {
        box-shadow: 0 9px 18px 0 rgba(0, 0, 0, 0.2);
    }
    .flip-card {
        background-color: transparent;
        width: 100%;
        height:200px;
        perspective: 4000px;
    }

    .flip-card-inner {
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
        background-color:#002366;
    }

    .flip-card-front{
        margin-top:0px;
        margin-bottom:170px;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }
    .flip-card-back {
        margin-top:-350px;
        width: 100%;
/*        height: 100%;*/
        background-color:#002366;
        backface-visibility: hidden;
        font-size:13px;
        vertical-align: middle;
    }


    .flip-card-back {
        transform: rotateY(180deg);
    }


</style>
<script>
    function flip_multi_service(sid, name) {
        $(".sub_service_modal_div").remove();
        // $('#open_service_modal').modal('show');
        $.ajax({
            url: "https://www.tndigitalseva.in/services/get_user_multi_services/" + sid,
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                //   $('#open_service_label').text(name);
                var length = data.length;
                if (length == 0) {
                    var markup = '<label style="color:red;">Service not enabled contact to admin!</label>';
                    $("#sub" + sid).append(markup);
                } else {
                    for (var i = 0; i <= length; i++) {
                        var category = data[i].category;
                        if (category == 0) {
                            var url = site_url + "" + data[i].url + "/" + data[i].sid;
                        } else {
                            var url = data[i].url;
                        }
                        var markup = ' <a href="' + url + '" target="_blank" class="" style="text-align:left;color:#fff;">  ' + data[i].name + '</a><br><br>';
                        $("#sub" + sid).append(markup);
                    }
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //  alert('Error get data from ajax');
            }
        });
        $("#service_processing").css("display", "none");
    }
    function flip_open_service(sid, name) {
        $(".sub_service_modal_div").remove();
        //   $('#open_service_modal').modal('show');
        $.ajax({
            url: "https://www.tndigitalseva.in/services/get_service_sub_services/" + sid,
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                //   $('#open_service_label').text(name);
                var length = data.length;
                for (var i = 0; i <= length; i++) {
                    var service_type = data[i].type;
                    var url = "";
                    var category = data[i].category;
                    if (service_type == "1") {

                        if (category == 0) {
                            var url = site_url + "" + data[i].url + "/" + sid;
                        } else {
                            var url = data[i].url;
                        }
                    } else if (service_type == "2") {
                        url = data[i].url;
                    }
                    var markup = ' <a href="' + url + '" target="_blank" style="text-align:left;color:#fff;">' + data[i].name + '</a><br><br>';
                    $("#sub" + sid).append(markup);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //alert('Error get data from ajax');
            }
        });
        $("#service_processing").css("display", "none");
    }


    function csp_flip_open_service(sid, category, name, price) {
        $(".sub_service_modal_div").remove();
        //   $('#open_service_modal').modal('show');
        $.ajax({
            url: "https://www.tndigitalseva.in/services/get_service_sub_services/" + sid,
            type: "GET",
            dataType: "JSON",
            success: function (data) {
                //   $('#open_service_label').text(name);
                console.log("++++++++++++++++++++++++");
                console.log(data);
                var site_url = "https://www.tndigitalseva.in/";
                var length = data.length;
                for (var i = 0; i <= length; i++) {
                    var service_type = data[i].type;
                    var url = "";
                    var sub_category = data[i].category;
                    if (service_type == "1") {

                        if (sub_category == 0) {
                            var url = site_url + "" + data[i].url + "/" + sid;
                        } else {
                            var url = data[i].url;
                        }
                    } else if (service_type == "2") {
                        url = data[i].url;
                    }
                    if (i == 0) {
                        var markup = ' <a href="javascript:void(0);" data-href="' + url + '" style="text-align:left;color:#fff;" onclick="view_details(this)">' + data[i].name + '</a><br><br>'
                        markup += '<a href="javascript:void(0);" data-href="' + site_url + 'services/buy/' + category + '/' + sid + '" data-price="' + price + '" style="color:#fff;" onclick="buy_service(this)">Buy Now</a><br><br><br><br>';
                    } else {
                        var markup = ' <a href="' + url + '" target="_blank" style="text-align:left;color:#fff;" class="btn btn-success btn-sm">' + data[i].name + '</a>';
                    }


                    $("#sub" + sid).append(markup);
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //alert('Error get data from ajax');
            }
        });
        $("#service_processing").css("display", "none");
    }


</script>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            <div class="container-fluid">
                <div class="header-body">
                    <div  id="alertMessage" class="row">
        <div class="col-md-12">
                        
                                  
        </div>
            
    </div>                                    <div class="row">
                                        <div class="col-md-12">
                                            <marquee style="color:#fff;" scrollamount="10"><b>APPLY FOR DIPLOMA IN NURSING COURSE FOR WOMEN 2023 - 2024 SESSION LIVE NOW... 3 Year Law Degree Courses for the Academic Year 2023-2024 Live Now...</marquee></b>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                                                                <!-- Card stats -->
                            <!--        <div class="row">
                                <div class="col-xl-3 col-lg-6 category" data-category-type="category1">
                                                        <a href="https://www.tndigitalseva.in/services">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Service</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        </a>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 category" data-category-type="category2">
                                                        <a href="https://www.tndigitalseva.in/services/notification">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Notification</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        </a>
                                        </div>
                                        <div class="col-xl-3 col-lg-6 category" data-category-type="category3">
                                                                            <a href="https://www.tndigitalseva.in/services/forms">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Forms</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        </a>
                                        </div>
                                       <div class="col-xl-3 col-lg-6 category" data-category-type="category4">
                                                                        <a href="https://www.tndigitalseva.in/services/tutorial">
                                            <div class="card card-stats mb-4 mb-xl-0">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <h5 class="card-title text-uppercase text-muted mb-0">Tutorial</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                                        </a>
                                        </div>
                                    </div>-->
                                            </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <!-- Table -->
            <div class="row">
                <div class="col">
                    <div class="card shadow" style="padding: 15px;">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                                                            <div class="col">
                                                <a href="#" class="btn btn-primary btn-sm btn-block sub_category" data-sub-category-type="sub_category1">STATE GOVERNMENT</a>
                                            </div>
                                            <div class="col">
                                                <a href="#" class="btn btn-primary btn-sm btn-block sub_category" data-sub-category-type="sub_category2">CENTRAL GOVERNMENT</a>
                                            </div>
                                            <div class="col">
                                                <a href="#" class="btn btn-primary btn-sm btn-block sub_category" data-sub-category-type="sub_category3">BOOKING & PAYMENTS</a>
                                            </div>
                                            <!--                                            <div class="col">
                                                                                            <a href="#" class="btn btn-sm sub_category" data-sub-category-type="sub_category4">PAYMENT SERVICES</a>
                                                                                        </div>-->
                                            <!--<div class="col">-->
                                            <!--    <a href="#" class="btn btn-sm sub_category" data-sub-category-type="sub_category10">RECRUITMENT</a>-->
                                            <!--</div>-->
                                                                        </div>
                        </div>
                        <div class="row">

                            <div class="col-8">
    <!--                                <h3 class="mb-0">Services</h3>-->
                            </div>
                            <div class="col-4 text-right">
                                <!--<a href="https://www.tndigitalseva.in/services/request" class="btn btn-sm btn-success">Request</a>-->
                                                            </div>
                        </div>
                        <div class="row" id="service_div">
                                                                    <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_344516-12-202117-37-3032345aadhar.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>AADHAAR</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('12', 'AADHAAR');
                                                                        </script>
                                                                                                                                            <b><div id="sub12"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_292416-12-202118-00-5175586license.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>D-LICENSE</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://sarathi.parivahan.gov.in/sarathiservice/sarathiHomePublic.do?stCd=TN" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub19"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_887016-12-202118-00-5930844voter.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>VOTER ID</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('20', 'VOTER ID');
                                                                        </script>
                                                                                                                                            <b><div id="sub20"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_712316-12-202118-01-0730366passport.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PASSPORT</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.passportindia.gov.in/AppOnlineProject/user/userLogin" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub22"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_439516-12-202118-43-2212461SMART.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>RATION CARD</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('23', 'RATION CARD');
                                                                        </script>
                                                                                                                                            <b><div id="sub23"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_937516-12-202118-01-1773489disability.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>DISABILITY</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="http://www.swavlambancard.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub24"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_121016-12-202118-01-2343865msme.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>UDYAM</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://udyamregistration.gov.in/Government-India/Ministry-MSME-registration.htm" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub26"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_921616-12-202118-01-3050059vidya.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>VIDYA LAKSHMI</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.vidyalakshmi.co.in/Students/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub29"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_998916-12-202118-48-5399979POLICE.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>TN POLICE</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('31', 'TN POLICE');
                                                                        </script>
                                                                                                                                            <b><div id="sub31"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_960916-12-202118-50-3378195THADCO.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>TAHDCO LOAN</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="http://application.tahdco.com/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub32"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_135616-12-202118-02-2223854nats.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>THARAMANI</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="http://mhrdnats.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub33"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_939216-12-202118-00-3515770jee.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>LIFE CERTIFI..</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://jeevanpramaan.gov.in/ppouser/login" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub34"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_825016-12-202118-06-5256970epf.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>EPFO</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('36', 'EPFO');
                                                                        </script>
                                                                                                                                            <b><div id="sub36"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_895124-01-202214-45-3443407setc.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>TNSETC</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.tnstc.in/home.html" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub38"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_714924-01-202214-58-1397035IRCTCT.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>TRAIN TICKE</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.irctc.co.in/nget/train-search" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub39"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_653524-01-202215-01-5822708TTD.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>THIRUPATHI</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://online.tirupatibalaji.ap.gov.in/curtain?section=dashboard" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub43"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_158224-01-202215-03-1852440AYYAPPAN.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>SABARIMALAI Q</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://sabarimalaonline.org/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub44"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_498916-12-202118-52-4415492PATTA.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>PATTA / CHITTA</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('65', 'PATTA / CHITTA');
                                                                        </script>
                                                                                                                                            <b><div id="sub65"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_889816-12-202118-58-0287025AMMA.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>AMMA CEMENT</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://ammacement.tn.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub88"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_831916-12-202118-52-3484678EB.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>TAMIL NADU EB</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('89', 'TAMIL NADU EB');
                                                                        </script>
                                                                                                                                            <b><div id="sub89"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_946724-01-202215-11-3239878HINDU.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>TN Temple</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://annamalaiyar.hrce.tn.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub102"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_907724-01-202215-13-2669526E CHALLAN.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>TRAFFIC FINE</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://echallan.parivahan.gov.in/index/accused-challan" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub253"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_209816-12-202118-10-5429950pan link.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>PAN LINK</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('279', 'PAN LINK');
                                                                        </script>
                                                                                                                                            <b><div id="sub279"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_343116-12-202118-15-0223922farmer.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PM-KISAN</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://pmkisan.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub291"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_971205-08-202214-47-5844916BOOK 1.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>SCHOOL BOOK </b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.textbookcorp.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub314"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_967824-01-202215-14-4652511ANNA university.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>ANNA UNIV..</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.aukdc.edu.in/onlinefee/gotoAgree.htm" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub379"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_904924-01-202215-16-0985000bharathidasan.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>BHARATHIDA..</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="http://www.bdu.ac.in/online-payment.php" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub380"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_874224-01-202215-17-3523454annalamali.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>ANNAMALAI</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="http://audde.in/feesnewbox.php" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub381"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_231924-01-202215-18-4816060bharathiyar.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>BHARATHIYAR </b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="http://payment.b-u.ac.in/UMSApp//Fees/StudentFees/FeesOnlinePayment" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub384"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_825116-12-202118-40-3486435NALAVARIYAM.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>NALAVARIYAM</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://tnuwwb.tn.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub392"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_208316-12-202118-21-2024470NSP.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>NPS PORTAL</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://scholarships.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub420"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_696816-12-202118-24-1668774CROP.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>CROP INSUR..</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://pmfby.gov.in/farmerLogin" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub447"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_206616-12-202115-31-4046399EB.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>EB BILL PAY </b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.tnebnet.org/qwp/qpay" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub455"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_481025-01-202215-43-0780252emplye.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>EMPLOYMENT</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://tnvelaivaaippu.gov.in/Empower/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub456"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_572026-01-202216-24-5715381cm 1.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>CM Helth Card</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://claim.cmchistn.com/Payer/PayerMembersearch.aspx" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub461"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_698124-01-202215-21-2382299vahan.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>ROAD TAX</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://vahan.parivahan.gov.in/vahanservice/vahan/ui/statevalidation/homepage.xhtml" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub610"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_305319-01-202215-41-4975259VAC.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Vaccination</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://selfregistration.cowin.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub703"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_273816-12-202118-27-0094589ESHIRM.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>e-Shram</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://register.eshram.gov.in/#/user/self" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub755"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_761524-01-202215-29-1274372challan.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Treasuries</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.karuvoolam.tn.gov.in/challan/echallan" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub898"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_402225-01-202216-23-1475714ec.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>பதிவுத்துறை</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://tnreginet.gov.in/portal/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub907"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_245625-01-202216-10-5770703birth.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>BIRTH / DEATH</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('918', 'BIRTH / DEATH');
                                                                        </script>
                                                                                                                                            <b><div id="sub918"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_634425-01-202216-14-5845484paysli.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>ePayslip</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('919', 'ePayslip');
                                                                        </script>
                                                                                                                                            <b><div id="sub919"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_438825-01-202218-43-1377694paddy.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>நெல்</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://tncsc-edpc.in/Account/Login" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub922"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_696129-08-202217-03-1495528patta3.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Tamil Nilam</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://tamilnilam.tn.gov.in/citizen/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub923"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_687526-01-202216-01-0273427tn sand.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>TN-Sand</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.tnsand.in/Home/Home" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub924"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_230626-01-202216-36-3064690pan.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Instant Pan</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://eportal.incometax.gov.in/iec/foservices/#/pre-login/instant-e-pan" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub926"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_748425-02-202212-31-0174719umang.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>UMANG APP</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://web.umang.gov.in/web_new/login?redirect_to=" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2656"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_134627-04-202212-25-0867121KCC.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>KCC</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://eseva.csccloud.in/kcc/Default.aspx" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2696"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_442023-05-202212-25-4528551md.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Kamaraj Univ..</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://mkuniversity.ac.in/new/epay" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2720"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_736420-06-202216-46-2174107kisan-logo.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Kisan Suvidha</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://kisansuvidha.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2749"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_758529-06-202216-29-0487506TN LOGO.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PEN KALVI</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://penkalvi.tn.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2752"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_207105-07-202209-55-5949660fssai.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>FSSAI</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://foscos.fssai.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2757"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_544224-07-202221-01-3130944medica;.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>TNNMC</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('2776', 'TNNMC');
                                                                        </script>
                                                                                                                                            <b><div id="sub2776"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_886006-09-202212-42-5814645tnpc.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>TNPC</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="http://tnpc.ac.in/home.html" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2838"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_565213-09-202217-44-1885250illam.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Education</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://illamthedikalvi.tnschools.gov.in/volunteer_registration" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2849"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_339304-10-202222-06-5236000NAPS.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Apprenticeship</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.apprenticeshipindia.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2904"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_706506-10-202220-32-5012700cibil.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Cibil Score</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://homeloans.sbi/getcibil" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2908"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_136908-10-202207-09-3235369insurance.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Insurance</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.policybazaar.com/motor-insurance/two-wheeler-insurance/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub2916"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category3">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_635807-02-202316-41-22892425202207.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>Tax Payment</b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('3991', 'Tax Payment');
                                                                        </script>
                                                                                                                                            <b><div id="sub3991"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="flip-card">
                                                            <div class="card flip-card-inner">
                                                                <div class="flip-card-front" style="padding: 15px;">

                                                                    
                                                                    <a href="#">
                                                                        <center>
                                                                            <img src="https://www.tndigitalseva.in/uploads/services/service_image_617207-02-202317-10-2486716scsct.png" width="90%"><span style="color:silver">______</span></br>
                                                                            <span class="mb-0 text-sm" style="color:#002366"><b>Scholarship </b></span>

                                                                        </center>
                                                                    </a>
                                                                </div>
                                                                <div class="flip-card-back" style="padding: 5px;">
                                                                                                                                            <script>
                                                                            flip_open_service('3999', 'Scholarship ');
                                                                        </script>
                                                                                                                                            <b><div id="sub3999"></div></b>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category2">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_902807-02-202317-28-3472477pmjay.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Ayushman Card</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://setu.pmjay.gov.in/setu/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub4001"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_245413-07-202319-35-2147702e-Pettagam.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>e-Pettagam</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://www.epettagam.tn.gov.in/" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub4002"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category1" data-sub-category-type="sub_category1">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                				
                                                                <div class="flip-card">
                                                                    <div class="card flip-card-inner">
                                                                        <div class="flip-card-front" style="padding: 15px;">

                                                                            
                                                                                                                                                                                                                                                                                                                                                                                                            <!--                                                                                <img src="https://www.tndigitalseva.in/assets/panel/img/theme/new_service.jpg" width="30px"></img>-->
                                                                                    
                                                                            <a href="#">
                                                                                <center>
                                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_567414-07-202318-27-2055738tn.png" width="90%"><span style="color:silver">______</span></br>
                                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>TN Transport</b></span>

                                                                                </center>
                                                                            </a>
                                                                        </div>
                                                                        <div class="flip-card-back" style="padding: 5px;padding-top: 50%;">
                                                                            <a href="https://tnsta.gov.in/Indexes" target="_blank" style="color:#fff;">Click Here</a>
                                                                            <b><div id="sub4003"></div></b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                </div>

                                                        </div>

                    </div>
                </div>
            </div>
            <!--Open Service-->
            <div class="modal fade" id="open_service_modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 id="open_service_label" class="modal-title"></h4>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
                        </div>
                        <div class="modal-body">
                            <div id="service_processing">
                                <center>
                                    <img src="https://www.tndigitalseva.in/assets/images/uploading.gif" width="100%">
                                    <br>
                                    <p>Processing data Please wait...</p>
                                </center>
                            </div>
                            <div class="pl-lg-4">
                                <div id="open_service_div" class="row">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>

    /* Button used to open the chat form - fixed at the bottom of the page */
    .open-button {
        /**background-color: green;*/
        color: white;
        border: none;
        cursor: pointer;
        position: fixed;
        bottom: 90px;
        right: 0px;
        opacity: 0.9;
        border-radius: 10px 0px 0px 10px;
    }
    /* Button used to open the chat form - fixed at the bottom of the page */

    .request-button {
        background-color: #ff3709;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        position: fixed;
        bottom: 450px;
        right: 0px;
        opacity: 0.9;
        border-radius: 10px 0px 0px 10px;
    }
    .whatsapp-button {
        /**background-color: #128C7E;*/
        color: white;
        border: none;
        cursor: pointer;
        position: fixed;
        bottom: 400px;
        right: 0px;
        opacity: 0.9;
        border-radius: 10px 0px 0px 10px;
    }
    .telegram-button {
        background-color: #0088cc;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        position: fixed;
        bottom: 350px;
        right: 0px;
        opacity: 0.9;
        border-radius: 10px 0px 0px 10px;
    }
    .call-button {
        background-color: #002366;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        position: fixed;
        bottom: 300px;
        right: 0px;
        opacity: 0.9;
        border-radius: 10px 0px 0px 10px;
    }
    /* The popup chat - hidden by default */
    .billing-popup {
        width:0px;
        position: fixed;
        bottom: 0;
        right: 0px;
        z-index: 9;
        box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.4);
        transition: 0.3s;
        border-radius: 15px;
    }

    /* Add styles to the form container */
    .form-container {
        width:670px;
        max-width: 670px;
        padding: 10px;
        background-color: white;
        border-radius: 15px;
    }

    /* Full-width textarea */
    .form-container .bill_div {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
        min-height: 200px;
    }

    /* When the textarea gets focus, do something */
    .form-container .bill_div:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for the submit/send button */
    /*    .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            margin-bottom:10px;
            opacity: 0.8;
        }*/

    /* Add a red background color to the cancel button */
    .form-container .cancel {
        background-color: red;
    }

    /* Add some hover effects to buttons */
    .form-container .btn:hover, .open-button:hover, .request-button:hover , .whatsapp-button:hover , .telegram-button:hover  , .call-button:hover {
        opacity: 1;
    }
    input,select{
        border-radius:5px;
        border: 0px solid;
    }
    thead{
        background-color: silver;
    }
</style>
                <!--    <button class="open-button" onclick="openForm()"><img src="https://www.tndigitalseva.in/assets/images/bill.jpg" width="35px" height="35px"/></button>-->
    <!--    <button class="request-button" data-toggle="modal" data-target="#servicerequestModal">
             Download SVG icon from http://tabler-icons.io/i/plus 
            <i class="fa fa-plus text-white" style="font-size:20px;"></i>
        </button>-->
       <button class="whatsapp-button" data-toggle="modal" data-target="#whatsappModal">
            <img src="https://www.tndigitalseva.in/assets/images/wts.png" width="30px">
        </button>
         <!--<button class="telegram-button" data-toggle="modal" data-target="#telegramModal">
            <img src="https://www.tndigitalseva.in/assets/panel/img/icons/telegram.png" width="20px">
        </button>
        <button class="call-button" data-toggle="modal" data-target="#callModal">
            <i class="fa fa-phone text-white" style="font-size:20px;"></i>
        </button>-->
    <button class="open-button" onclick="openForm()">
        <img src="https://www.tndigitalseva.in/assets/images/bill.png" width="30px">
    </button>
    
<div class="billing-popup" id="billingForm">
    <form id="billing_form" action="https://www.tndigitalseva.in/billing/create_bill" class="form-container" method="post" onsubmit="processing_form();">
        <!--        <h3>Billing</h3>-->
        <div class="row">
            <div class="col-md-11">

                <label for="customer_bill"><b>Customer</b></label>
                <div class="row">
                    <div class="col-md-3">

                        <input  type="text" id="customer_bill" class="form-control form-control-sm" name="customer_name" placeholder="Name">
                    </div>
                    <div class="col-md-3">
                        <input  type="number" id="customer_mobile" class="form-control form-control-sm" name="customer_mobile" placeholder="Mobile">
                    </div>
                    <div class="col-md-3">
                        <input  type="text" id="bill_date" name="bill_date" class="form-control form-control-sm datepicker" placeholder="Bill_date"  value="19-07-2023" required>
                    </div>
                                   <div class="col-md-3">
                                            <select class="form-control select2 form-control-sm" name="biller" required>
                                                <option value="">Biller</option>
                    <option value='15'>System 1</option><option value='29'>server </option><option value='30'>system 2</option><option value='31'>system 3</option><option value='50'>avita lap</option>                                            </select>
                                        </div>
                </div>


            </div>
            <div class="col-md-1 text-right">
                <button class="btn btn-danger btn-sm" align="right" type="button" onclick="closeForm()"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!--        <label for="bill_div"><b>Services</b></label>-->

        <div id="bill_div" class="bill_div table-responsive" width="600px">
            <table class="table" id="service_bill_table">
                <thead>
                    <tr>
                        <th><span style="backgroumd-color:#fff;cursor: pointer;" onclick="add_serivce_bill();"><i class="fa fa-plus"></i></span></th>
                        <th>Service</th>
                        <th>Type</th>
                        <th>Mode</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Commission</th>
                        <th>Total</th>
                        <th>Balance</th>
                    <tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">Total</th>
                        <th><input type="text" name="bill_service_amount_total" class="bill_service_amount_total"  id="bill_service_amount_total" required style="width:70px;" readonly></th>
                        <th><input type="text" name="bill_service_commission_total" class="bill_service_commission_total"  id="bill_service_commission_total" required style="width:70px;" readonly></th>
                        <th><input type="text" name="bill_total" class="bill_total"  id="bill_total" required style="width:70px;" readonly></th>
                    <tr>
                </tfoot>
            </table>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
    </form>
</div>

<div id="callModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Support contact number</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Services
                            </th>
                            <th>
                                Contact
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Account Activation<br>
                                Payment Issues<br>
                                Shopping zone<br>
                            </td>
                            <td>
                                8098419171
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Pan Card<br>
                                Fastag
                            </td>
                            <td>
                                9677723128,<br>
                                9361208560
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Gst Registration<br>
                                Income Tax<br>
                                Trademark<br>
                                Food License<br>
                                Digital Signature<br>
                                IEC Code<br>
                                ISO Certificate<br>
                                Company Registration<br>
                            </td>
                            <td>
                                9361624563
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<div id="telegramModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Join Group</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <a href="https://t.me/tndigitaleseva" target="_blank">
                    <img src="https://www.tndigitalseva.in/assets/panel/img/telegram.png" width="100%">
                </a>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="servicerequestModal" role="dialog">
    <div class="modal-dialog">
        <form id="create-request-form" role="form" action="https://www.tndigitalseva.in/services/create_request" method="post" enctype="multipart/form-data">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <!--                    <h4 id="exampleModalLabel" class="modal-title">Add New Request</h4>-->
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
                </div>
                <div class="modal-body">
                    <div class="pl-lg-4">
                                     <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-request-name">Description</label>
                                                            <textarea id="input-request-name" name="input-request-name" class="form-control form-control-alternative"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="input-request-url-div">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-request-url">Url</label>
                                                            <input type="url" id="input-request-url" name="input-request-url" class="form-control form-control-alternative" placeholder="http//:">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="input-request-file">File</label>
                                                            <input type="file" id="input-request-file" name="input-request-file" class="form-control form-control-alternative">
                                                        </div>
                                                    </div>
                                                </div>
                        <h3>
<!--                            Help Line : 8098419171<br>-->
                        </h3>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </form>
    </div>
</div>
<div id="whatsappModal" class="modal fade" role="dialog">
    <div class="modal-dialog ">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <a href="http://wa.me/918098419171" target="_blank">
                    <img src="https://www.tndigitalseva.in/assets/images/send-me.jpeg" width="100%">
                </a>
            </div>
        </div>

    </div>
</div>
<script>
    //$("#customer_bill").val("");
    $("#billing_form").attr('autocomplete', 'off'); // Switching form autocomplete attribute to off
    function openForm() {
        $("#billingForm").animate({
            width: '670px',
            right: '15px'
        });

        $("#customer_bill").focus();
    }

    function closeForm() {
        $("#billingForm").animate({
            width: '0px',
            right: '0px'
        });
    }

    function add_serivce_bill() {
        var rowCount = $('#service_bill_table tbody tr').length;
        var delete_onclick = "delete_bill_data('" + rowCount + "')";
        var markup = '<tr>'
                + '<td><span style="backgroumd-color:#fff;cursor: pointer;"  id="bill_record' + rowCount + '" onclick="' + delete_onclick + '"><i class="fa fa-trash"></i></span></td>'
                + '<td><input type="text" name="bill_service_name[]" required></td>'
                + '<td><select name="bill_service_type[]" id="bill_service_type' + rowCount + '" required><option>Credit</option><option>Debit</option></select></td>'
                + '<td><select name="bill_service_mode[]" id="bill_service_mode' + rowCount + '" required><option>Cash</option><option>UPI</option></select></td>'
                + '<td><select name="bill_service_status[]" id="bill_service_status' + rowCount + '" required><option value="1">Paid</option><option value="2">Unpaid</option><option value="3">Partially Paid</option></select></td>'
                + '<td><input type="text" name="bill_service_amount[]" class="bill_service_amount" id="bill_service_amount' + rowCount + '" onkeyup="sum_service_total(' + rowCount + ')" required style="width:70px;"></td>'
                + '<td><input type="text" name="bill_service_commission[]" class="bill_service_commission" id="bill_service_commission' + rowCount + '" onkeyup="sum_service_total(' + rowCount + ')" required style="width:70px;"></td>'
                + '<td><input type="text" name="bill_service_total[]" class="bill_service_total"  id="bill_service_total' + rowCount + '" required style="width:70px;" readonly></td>'
                + '<td><input type="text" name="bill_service_balance[]" class="bill_service_balance"  id="bill_service_balance' + rowCount + '" required style="width:70px;"></td>'
                + '<tr>';
        $("#service_bill_table tbody").append(markup);
    }
    function delete_bill_data(id) {
        $("#bill_record" + id).parents("tr").remove();
    }
    function sum_service_total(count) {
        var sum = 0;
        var bill_service_amount = parseInt($("#bill_service_amount" + count).val());
        var bill_service_commission = parseInt($("#bill_service_commission" + count).val());
        var bill_service_type = $("#bill_service_type" + count).val();
        if (isNaN(bill_service_amount)) {
            bill_service_amount = 0;
        }
        if (isNaN(bill_service_commission)) {
            bill_service_commission = 0;
        }
        if (bill_service_type == "Credit") {
            sum = bill_service_amount + bill_service_commission;
            $("#bill_service_amount" + count).val(Math.abs(bill_service_amount));
            $("#bill_service_commission" + count).val(Math.abs(bill_service_commission));
            $("#bill_service_total" + count).val(Math.abs(sum));
        } else {
            sum -= bill_service_amount + bill_service_commission;
            $("#bill_service_amount" + count).val(-Math.abs(bill_service_amount));
            $("#bill_service_commission" + count).val(-Math.abs(bill_service_commission));
            $("#bill_service_total" + count).val(-Math.abs(sum));
        }

        var total = 0;
        $(".bill_service_total").each(function () {
            total += +$(this).val();
        });
        $("#bill_total").val(total.toFixed(2));
    }
    $(document).on("keyup", ".bill_service_amount", function () {
        var sum = 0;
        $(".bill_service_amount").each(function () {
            sum += +$(this).val();
        });
        $("#bill_service_amount_total").val(sum.toFixed(2));
    });
    $(document).on("keyup", ".bill_service_commission", function () {
        var sum = 0;
        $(".bill_service_commission").each(function () {
            sum += +$(this).val();
        });
        $("#bill_service_commission_total").val(sum.toFixed(2));
    });
    add_serivce_bill();

</script>        
                    <div class="modal fade" id="renewal_alert_modal" role="dialog">
            <div class="modal-dialog modal-md">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Renewal Alert</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-danger">
                        Account will be expired in 34 days. <br>Please renew before 31-12-2100                    </div>
                    <!--        <div class="modal-footer">
                                                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>-->
                </div>

            </div>
        </div>
        <div class="modal fade" id="csp_modal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">View </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-danger">
                        <img width="100%" id="csp_frame" src="">
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="buy_service_modal" role="dialog">
            <div class="modal-dialog modal-sm">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Confirm </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body text-danger">
                        Are you sure want to buy?<br>
                        <span id="confirm_service_price"></span>
                        <div class="text-right">
                            <a href="" class="btn btn-primary btn-sm" id="confirm_service_buy">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="modal fade" id="tutorial_modal" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">View Tutorial</h4>
                        <!--                            <button type="button" class="close" data-dismiss="modal">&times;</button>-->
                        <button type="button" class="close" onclick="hide_tutorial();">&times;</button>
                    </div>
                    <div class="modal-body text-danger">
                        <!--                        <iframe width="100%" height="400" id="tutorial_frame" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                        <div id="tutorial_frame">
                            
                        </div>
                 
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>