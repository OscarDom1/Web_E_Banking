<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2023 14:56:10 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard</title>

    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css
    " rel="stylesheet">
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/themefy_icon/themify-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/swiper_slider/css/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/select2/css/select2.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/niceselect/css/nice-select.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/gijgo/gijgo.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/tagsinput/tagsinput.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/buttons.dataTables.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/text_editor/summernote-bs4.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/morris/morris.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/material_icon/material-icons.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/metisMenu.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/colors/default.css') }}" id="colorSkinCSS" />
</head>

<style>
    .form-container {
        max-width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-container h5 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group input[type="password"] {
        font-family: inherit;
    }

    .buttoncls {
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .buttoncls:hover {
        background-color: #45a049;
    }
</style>

<body class="crm_body_bg">
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href=""><img src="{{ asset('img/my logo.png') }}" alt class="my-logo" /></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a href="/dashboard/home" aria-expanded="false">
                    <img src="{{ asset('img/menu-icon/1.svg') }}" alt />
                    <span>Dashboard</span>
                </a>
            </li>
            <li class>
                <a href="/customer/notification" aria-expanded="false">
                    <img src="{{ asset('img/icon/msg.svg') }}" alt />

                    <span>Notifications</span>
                </a>

            </li>
        </ul>
    </nav>

    <section class="main_content dashboard_part">
        <div class="container-fluid g-0">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div>
                            <h3 class="text-info">Hi! {{ auth()->user()->name }}</h3><br>
                            <h5 class="font-weight-bold text-success">Account Number:
                                {{ auth()->user()->account_number }}
                            </h5>
                        </div>



                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture">

                                <div class="profile_info_iner">
                                    {{-- <p>Manager</p> --}}
                                    <h3 class="text-warning">{{ auth()->user()->name }}</h3>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile <i class="ti-user"></i></a>
                                        <a href="/customer/set-pin">Change Pin <i class="ti-settings"></i></a>
                                        <form method="POST" action="/logout">
                                            @csrf
                                            <button class="ti-shift-left" type="submit">
                                                Log Out
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
        <div class="form-container">
            <h5>Change Transfer PIN</h5>
            <form action="{{ route('customer.change-pin') }}" method="POST">
                @csrf
        
                <div class="form-group">
                    <label for="current_pin">Current PIN:</label>
                    <input type="password" name="current_pin" placeholder="Enter current PIN">
                </div>
        
                <div class="form-group">
                    <label for="new_pin">New PIN:</label>
                    <input type="password" name="new_pin" placeholder="Enter new PIN">
                </div>
        
                <div class="form-group">
                    <label for="confirm_pin">Confirm New PIN:</label>
                    <input type="password" name="confirm_pin" placeholder="Confirm new PIN">
                </div>
        
                <button class="buttoncls" type="submit">Change PIN</button>
            </form>
        </div>
        
        

    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    <x-flash-message />

    <script src="{{ asset('js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ asset('js/popper1.min.js') }}"></script>

    <script src="{{ asset('js/bootstrap1.min.js') }}"></script>

    <script src="{{ asset('js/metisMenu.js') }}"></script>

    <script src="{{ asset('vendors/count_up/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('vendors/chartlist/Chart.min.js') }}"></script>

    <script src="{{ asset('vendors/count_up/jquery.counterup.min.js') }}"></script>

    <script src="{{ asset('vendors/swiper_slider/js/swiper.min.js') }}"></script>

    <script src="{{ asset('vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('vendors/gijgo/gijgo.min.js') }}"></script>

    <script src="{{ asset('vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>

    <script src="{{ asset('vendors/progressbar/jquery.barfiller.js') }}"></script>

    <script src="{{ asset('vendors/tagsinput/tagsinput.js') }}"></script>

    <script src="{{ asset('vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('vendors/apex_chart/apexcharts.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('vendors/apex_chart/bar_active_1.js') }}"></script>
    <script src="{{ asset('vendors/apex_chart/apex_chart_list.js') }}"></script>

    <script src="//code.tidio.co/cnoxeypkkxeun34hiz1zyodn8skxalw5.js" async></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2023 14:56:35 GMT -->

</html>
