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
            
    </div>                </div>
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
                                <!--                                        <div class="col">
                                            <a href="#" class="btn btn-sm sub_category" data-sub-category-type="sub_category16">PUBLIC SERVICE</a>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-sm sub_category" data-sub-category-type="sub_category17">CURRENT NOTIFICATION</a>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-sm sub_category" data-sub-category-type="sub_category18">ESERVICE</a>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-sm sub_category" data-sub-category-type="sub_category19">LEGAL SERVICE</a>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-sm sub_category" data-sub-category-type="sub_category20">OTHERS</a>
                                        </div>-->
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
                                                                    <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_428406624-03-202210-18-2455723PSTM.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_184006-12-202113-57-2894475tamil.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PSTM FORM</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_660366224-03-202210-20-3211408AADHAR.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_387206-12-202113-56-2793306aadhar correction.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>AADHAAR </b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_661517301-11-202215-07-00287851.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_520906-12-202114-02-1488081emp.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>EMPLOYMENT</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_662362401-11-202215-12-5259253thadco loan.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_802206-12-202114-03-0956608thadco].png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>THADCO</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_665856801-11-202215-14-3123611income 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_195606-12-202114-04-0972437income.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>INCOME</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_666997101-11-202215-16-0861510nativity.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_940606-12-202114-05-3088282native.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>NATIVE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_667322101-11-202215-17-3937690community-1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_973806-12-202114-06-1527483com.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>COMMUNITY</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_668435601-11-202215-21-4538754residence-1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_137106-12-202114-07-1061889res.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>RESIDENCE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_670823901-11-202215-23-1412527first graduate -1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_953106-12-202114-10-0261696FIRST.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>FIRSTGRADUATE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_671182501-11-202215-24-2174016legal-1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_404506-12-202114-11-0340137legal.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>LEGAL HEIR</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_672631701-11-202215-27-3942263small famer -.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_871606-12-202114-12-0280937small.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>SMALL FARMER</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_673932701-11-202215-28-5969096no male child 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_637106-12-202114-13-4776846no male.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>NOMALE CHILD</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_674363201-11-202215-30-0337183obc 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_755506-12-202114-14-5426252OBC.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>OBC FORM</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_675384101-11-202215-31-2540358first marriage1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_197106-12-202114-46-1891773NO MARRIAGE.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>First Marriage</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_677679401-11-202215-32-4985285un employee1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_850406-12-202114-47-4815195in emp.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>UNEMPLOY</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_678547801-11-202215-33-4579470widow 1'.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_135706-12-202114-48-4356481vidow.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>WIDOW</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_681239401-11-202215-35-1032417inter caste 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_808106-12-202114-49-3823710inter mre.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>INTERCASTE CER</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_682121701-11-202215-36-2381118first mrg vao1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_683306-12-202114-55-3658170first vao.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>FIRSTMARRIAGE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_684617501-11-202216-05-2347326widow mrg 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_671706-12-202115-03-2170860vidow dou.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>MARRIAGE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_685340001-11-202216-07-1295819aatharavatror1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_631106-12-202115-04-4087776orphan.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>MARRIAGE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_687833401-11-202216-11-3658111muthiyor 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_812906-12-202115-12-0358538oap.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PENSION</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_688761801-11-202216-14-0291628kanavanal kaivida pattor1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_255506-12-202115-13-0654585WID.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PENSION</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_689787201-11-202216-00-1934913disability1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_793306-12-202115-16-4446351DIS PEN.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PENSION</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_690780701-11-202215-59-0321747unmarried 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_334806-12-202115-18-0213258no mreg.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>UNMARRIED</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_692700001-11-202215-57-2684409patta 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_736406-12-202115-20-5414081patta.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PATTA </b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_693551001-11-202215-55-3929123voter id 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_933506-12-202115-22-3550732voter id.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>VOTER ID</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_694309728-04-202210-52-4815725nalavariyam.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_569706-12-202115-23-3979969nalavariyam.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>NALAVARIYAM</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_743537128-04-202210-55-0621767PATHARAM.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_977206-12-202116-00-2482503EWS.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>EWS AFFIDAVIT</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_896400501-11-202215-53-2163843smart card 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_223924-11-202115-16-5247389SMART CARD.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>SMART CARD</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_897257428-10-202222-11-2530328A3 Adangal a a.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_661929-11-202114-54-2734370adangal.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>VAO ADANGAL</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_899820801-11-202215-51-4238888hindu mrg1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_674506-12-202116-02-0853294INDU.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>MARRIAGE REG</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_900214701-11-202215-49-3473223kalappu thirumanam1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_880106-12-202116-03-0114255INER REG.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>MARRIAGE REG</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_901449101-11-202215-48-0430607christian marriage 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_717106-12-202116-04-1533132cristi].png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>MARRIAGE REG</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_902709301-11-202215-45-5994234marriage reg 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_779906-12-202116-04-5942952muslim.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>MARRIAGE REG</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_904588907-12-202109-23-3796653tamil.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_119707-12-202109-23-1218283tamil.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>GAZETTE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_905969107-12-202109-23-4673701eng.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_927607-12-202109-23-1935097english.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>GAZETTE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_906541007-12-202109-23-5522761both.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_926407-12-202109-23-2646026relo.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>GAZETTE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2662780108-03-202219-09-5051648COMMUNITY.docx" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_742708-03-202219-00-5928972Community.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>COMMUNITY</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2663345109-03-202213-13-1628316PATHARAM.docx" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_449908-03-202219-01-0963472EWS WORD.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>EWS</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2664208509-03-202213-15-0746787House Rent.docx" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_736308-03-202219-01-3423986RENT AGREEMENT.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>HOUSE RENT </b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2665869109-03-202213-10-4233653KULU FORM (2).docx" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_836308-03-202219-02-0997140sUYA UTHAVI KULU.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>KULU FORM</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2666649309-03-202213-41-1498048FIRST GRADUATE.docx" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_879108-03-202219-02-3148320First Graduate.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>FIRST GRADUATE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2667846909-03-202213-18-3819234WEDDING REGISTER.docx" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_789308-03-202219-02-5470237mARRIAGE REG.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>MARRIAGE</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2693496227-04-202212-08-4923013Form49A.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_490127-04-202212-06-5074745New pan.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>NEW PAN</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2694462927-04-202212-10-0464737CORRECTION.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_423427-04-202212-09-5037737CORRECTION.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>CORRECTION</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2695378627-04-202212-12-2774926Annexure -A.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_126727-04-202212-11-2240459annexure a.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Annexure -A</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_2697584501-11-202215-41-0741792kcc1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_820028-04-202209-52-3525730KCC.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>KCC</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2746240720-06-202213-02-5138899Registration Data.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_490820-06-202213-02-3268558ENGG.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>ENGINEERING</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2836639005-09-202213-54-1585264casual leave.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_766005-09-202213-53-1778487casual leave.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Casual Leave</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2837368405-09-202213-56-1524005Medical-leave.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_462905-09-202213-56-0032404Medical Leav.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Medical Leave</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category20">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2856603814-09-202212-28-4130662form 15g.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_881214-09-202212-30-507725015g.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>PF Form</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://tndigitalseva.in/uploads/services/files/service_file_2920846101-11-202215-38-0815334education 1.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_111910-10-202216-33-4154700vidyalakshmi.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Vidyalakshmi</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_2957798628-10-202222-20-0481897cm.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_514828-10-202222-19-3326290CM.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>CM CARD</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_3554676719-11-202220-57-4793098Medical-Fitness.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_436419-11-202220-57-4753713Medical Fitness.jpg" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Medical Fitness</b></span>

                                                                </center>
                                                            </a>
                                                    </div>

                                                    
                                </div>

                                                                        <div class="col-4 col-lg-2 col-md-2 col-sm-2 col-xs-2 service_data" style="margin-top:25px;" data-category-type="category3" data-sub-category-type="sub_category0">

                                                                                        <!--<a href="#" onclick="low_balance()">-->
                                                                                                        <div class="card" style="padding: 15px; height:100%;">
                                                                                                                        <a href="https://www.tndigitalseva.in/uploads/services/files/service_file_3562773302-12-202211-37-48140624.pdf" target="_blank">
                                                                <center>
                                                                    <img src="https://www.tndigitalseva.in/uploads/services/service_image_872602-12-202211-37-4837213educxatipon.png" width="90%"><span style="color:silver">______</span></br>
                                                                    <span class="mb-0 text-sm" style="color:#002366"><b>Nalavariyam</b></span>

                                                                </center>
                                                            </a>
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