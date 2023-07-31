<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>CHB-Dashboard</title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<style>
    .count_content .tfr {
        width: 200px;
        height: 70px;
        border-radius: 20px;
        background-color: #1a222a;
        color: white;
    }

    .moving-words-container {
        overflow: hidden;
        width: 800px;
        height: 23px;
    }

    .moving-word {
        display: inline-block;
        margin-right: 10px;
        animation: movingWords 10s linear infinite;
        white-space: nowrap;
    }

    .moving-word p {
        font-style: italic;
        color: orangered;
        font-size: 0.9rem;
    }

    @keyframes movingWords {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }


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
            <a href="/dashboard/home"><img src="{{ asset('img/my logo.png') }}" alt class="my-logo" /></a>
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
                        <div class="col-lg-3">
                            <h3 class="text-info">Hi! {{ auth()->user()->name }}</h3><br>

                            <h3 class="font-weight-bold text-success">Account Number:</h3>
                          

                            <h5 class="font-weight-bold text-success">
                                <span id="accountNumber">{{ auth()->user()->account_number }}</span>
                                <i class="fas fa-eye-slash toggle-icon"></i>
                            </h5>
                            
                        </div>
                        <div class="moving-words-container">
                            <span class="moving-word">
                                <p>Need a Loan? or Investment Services?, Just a click @Contact-us</p>
                            </span>
                            <p>Chinedu's Heritage Bank Plc</p>

                        </div>


                        <div class="header_right d-flex justify-content-between align-items-center">
                            <div class="profile_info">
                                <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}"
                                    alt="Profile Picture">

                                <div class="profile_info_iner">
                                    {{-- <p>Manager</p> --}}
                                    <h3 class="text-warning">{{ auth()->user()->name }}</h3>
                                    <div class="profile_info_details">
                                        <a href="/features/profile">My Profile <i class="ti-user"></i></a>
                                        <a href="/customer/set-pin">Create Pin <i class="ti-settings"></i></a>
                                        <a href="/customer/change-pin">Manage Pin <i class="ti-settings"></i></a>
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
                                                    <h3>$<span class="counter"> {{ auth()->user()->account_balance }}
                                                        </span></h3>
                                                    <p>Available Balance</p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moving-words-container">
                        <span class="moving-word">
                            <p>WARNING!!!. Secure your pin against internet fraudsters!!!</p>
                        </span>
                    </div>
                    <div class="col-lg-12 col-xl-12">
                        <div class="white_box mb_30">
                            <div class="box_header border_bottom_1px">
                                <div class="main-title">
                                    <h3 class="mb_25">Services:</h3>
                                </div>
                            </div>

                            <div class="income_servay">
                                <div class="row">
                                    <div class="col-md-3 ">
                                        <div class="count_content">
                                            <button class="tfr"><a href="/customer/transfer">CHB
                                                    Transfer</a></button>

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="count_content">
                                            <button class="tfr"><a href="/dashboard/fund-transfer">Bank
                                                    Transfer</a></button>

                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <div class="count_content">
                                            <button class="tfr"><a href="{{ route('payment.form') }}">EEDC
                                                    Bill</a>

                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="count_content">
                                            <button class="tfr"><a href="/customer/airtime-purchase">Airtime
                                                    Purchase</a></button>

                                        </div>
                                    </div>



                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="count_content">
                                            <button class="tfr"><a href="{{ route('account.statement') }}">Account
                                                    Statement</a>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="count_content">
                                            <button class="tfr"><a href="/dashboard/card-request">Credit/Debit
                                                    Card</a></button>
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
                                <form action="{{ route('dashboard.home') }}" method="GET">
                                    <div class="form-group">
                                        <label for="type">Transaction Type:</label>
                                        <select name="type" id="type">
                                            <option value="">All</option>
                                            <option value="deposit">Deposit</option>
                                            <option value="transfer">Transfer</option>
                                            <option value="bills">Bills</option>
                                        </select>
                                        <button type="submit">Filter</button>

                                    </div>
                                </form>
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
                                                <td>{{ $transaction->user->name }}</td>
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


    </section>


    <script>
        // Wait for the document to be ready
        $(document).ready(function() {
          // Keep track of whether the number is currently obscured or not
          let obscured = true;
          
          // Get the original account number and store it in a data attribute
          const originalAccountNumber = $("#accountNumber").text();
          $("#accountNumber").data("originalNumber", originalAccountNumber);
          
          // Function to toggle the visibility of the number
          function toggleAccountNumber() {
            if (obscured) {
              // If obscured, show only the last 4 digits in clear
              const lastFourDigits = originalAccountNumber.substr(-4);
              $("#accountNumber").text("*".repeat(originalAccountNumber.length - 4) + lastFourDigits);
              $(".toggle-icon").removeClass("fa-eye-slash").addClass("fa-eye");
            } else {
              // If not obscured, show the original number
              $("#accountNumber").text(originalAccountNumber);
              $(".toggle-icon").removeClass("fa-eye").addClass("fa-eye-slash");
            }
            
            // Toggle the obscured flag
            obscured = !obscured;
          }
          
          // Attach the click event to the icon
          $(".toggle-icon").on("click", toggleAccountNumber);
        });
      </script>

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

</html>
