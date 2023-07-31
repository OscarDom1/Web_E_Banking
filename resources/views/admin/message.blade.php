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
    .send-message-form {
        padding: 20px;
    }

    .send-message-form textarea {
        width: 50%;
        height: 300px;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .send-message-form button[type="submit"] {
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<body class="crm_body_bg">
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a href="/admin/home"><img src="{{ asset('img/my logo.png') }}" alt class="my-logo" /></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class>
                <a href="/admin/home" aria-expanded="false">
                    <img src="{{ asset('img/menu-icon/1.svg') }}" alt />
                    <span>Dashboard</span>
                </a>
            </li>
            <li class>
                <a href="/admin/customers" aria-expanded="false">
                    <img src="{{ asset('img/menu-icon/5.svg') }}" alt />
                    <span>Manage Customers</span>
                </a>
            </li>
            <li class>
                <a href="/admin/notifications" aria-expanded="false">
                    <img src="{{ asset('img/icon/msg.svg') }}" alt />

                    <span>Notifications</span>
                </a>

            </li>
            <li class="mm-active">
                <a href="/admin/message" aria-expanded="false">
                    <img src="{{ asset('img/menu-icon/7.svg') }}" alt />
                    <span>Message</span>
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
                        <div class="serach_field-area">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here..." />
                                    </div>
                                    <button type="submit">
                                        <img src="{{ asset('img/icon/icon_search.svg') }}" alt />
                                    </button>
                                </form>
                            </div>
                        </div>
                        <h3 class="text-info">Hi! {{ auth()->user()->name }}</h3>

                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="{{ asset('img/client_img.png') }}" alt="#" />
                                <div class="profile_info_iner">
                                    {{-- <p>Manager</p> --}}
                                    <h3 class="text-warning">{{ auth()->user()->name }}</h3>
                                    <div class="profile_info_details">
                                        <a href="#">My Profile <i class="ti-user"></i></a>
                                        {{-- <a href="#">Settings <i class="ti-settings"></i></a> --}}
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

        
        <div class="send-message-form">
            <h5>Send Message</h5>
            <form action="{{ route('admin.message.send') }}" method="POST">
                @csrf
                <textarea name="message" placeholder="Enter your message"></textarea>
                <br>
                <button type="submit">Send Message</button>
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
</body>

<!-- Mirrored from demo.dashboardpack.com/hospital-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2023 14:56:35 GMT -->

</html>
