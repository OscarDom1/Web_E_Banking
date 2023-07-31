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
    .pagination {
        justify-content: flex-end;
    }

    .pagination .page-item:first-child .page-link,
    .pagination .page-item:last-child .page-link {
        display: inline-flex;
        padding: 6px 12px;
        border: 1px solid #dee2e6;
        color: #333;
        text-decoration: none;
        background-color: #fff;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .pagination .page-item:first-child .page-link {
        margin-left: auto;
        margin-right: 5px;
    }

    .pagination .page-item:last-child .page-link {
        margin-right: 0;
        margin-left: 5px;
    }

    .pagination .page-item .page-link {
        padding: 6px 10px;
        border: 1px solid #dee2e6;
        color: #333;
        text-decoration: none;
        background-color: #fff;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .pagination .page-item .page-link:hover {
        background-color: #f0f0f0;
    }

    .pagination .page-item.active .page-link {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
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
            <li class="mm-active">
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
            <li class>
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
                        {{-- <div class="serach_field-area">
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
                        </div> --}}
                        <h3 class="text-info">Hi! {{ auth()->user()->name }}</h3>

                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}"
                                    alt="Profile Picture">
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

        <div class="main_content_iner">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="single_element">
                            <div class="quick_activity">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quick_activity_wrap">
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('img/icon/man.svg') }}" alt />
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ $totalCustomers }}</span></h3>
                                                    <p>Customers</p>
                                                </div>
                                            </div>
                                            {{-- <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('img/icon/cap.svg') }}" alt />
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">0</span></h3>
                                                    <p>Staff</p>
                                                </div>
                                            </div> --}}
                                            <div class="single_quick_activity d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('img/icon/wheel.svg') }}" alt />
                                                </div>
                                                <div class="count_content">
                                                    <h3><span class="counter">{{ $totalCustomers }}</span></h3>
                                                    <p>Accounts</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="white_box mb_30">
                            <div class="box_header border_bottom_1px">
                                <div class="main-title">
                                    <h3 class="mb_25">Transaction details</h3>
                                </div>
                            </div>
                            <div class="income_servay">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="count_content">
                                            <h3>$ <span class="counter">{{ $totalDeposit }}</span></h3>
                                            <p>Total Deposits</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="count_content">
                                            <h3>$ <span class="counter">{{ $totalWithdrawal }}</span></h3>
                                            <p>Total Withdrawals</p>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="count_content">
                                            <h3>$ <span class="counter">{{ $totalTransfers }}</span></h3>
                                            <p>Total Funding</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- <div id="bar_wev"></div> -->
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="white_box QA_section card_height_100">
                            <div class="white_box_tittle list_header m-0 align-items-center">
                                <div class="main-title mb-sm-15">
                                    <h3 class="m-0 nowrap">Transaction History</h3>
                                </div>
                                {{-- <div class="box_right d-flex lms_block">
                                    <div class="serach_field-area2">
                                        <div class="search_inner">
                                            <form active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search here..." />
                                                </div>
                                                <button type="submit">
                                                    <i class="ti-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="QA_table">
                                <table class="table lms_table_active2">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Amount</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td>{{ $transaction->user?->name }}</td>
                                                <td>{{ $transaction->amount }}</td>
                                                <td>{{ $transaction->description }}</td>
                                                <td>{{ $transaction->created_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="pagination">
                                    {{ $transactions->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
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
