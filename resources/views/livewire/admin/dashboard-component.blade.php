@section('title')
    Tổng quan
@endsection
<div class="page-content">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row">
                        <div class="col">
                            <h4 class="page-title">Sales</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Dastone</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!--end col-->
                        <div class="col-auto align-self-center">
                            <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
                                <span class="day-name" id="Day_Name">Today:</span>&nbsp;
                                <span class="" id="Select_date">Jan 11</span>
                                <i data-feather="calendar" class="ml-1 align-self-center icon-xs"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-outline-primary">
                                <i data-feather="download" class="align-self-center icon-xs"></i>
                            </a>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div><!--end row-->
        <!-- end page title end breadcrumb -->

        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Revenu Status</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       This Month<i class="ml-1 las la-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="">
                            <div id="Revenu_Status" class="apex-charts"></div>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="text-center col">
                                        <span class="h4">$24,500</span>
                                        <h6 class="m-0 mt-2 text-uppercase text-muted">Weekly Sales</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="text-center col">
                                        <span class="h4">520</span>
                                        <h6 class="m-0 mt-2 text-uppercase text-muted">Orders Placed</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="text-center col">
                                        <span class="h4">82.8%</span>
                                        <h6 class="m-0 mt-2 text-uppercase text-muted">Conversion Rate</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-body-->
                    </div><!--end col-->
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="text-center col">
                                        <span class="h4">$80.5</span>
                                        <h6 class="m-0 mt-2 text-uppercase text-muted">Avg. Value</h6>
                                    </div><!--end col-->
                                </div> <!-- end row -->
                            </div><!--end card-body-->
                        </div> <!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!-- end col-->

            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="media">
                                    <img src="assets/images/money-beg.png" alt="" class="align-self-center" height="40">
                                    <div class="ml-3 media-body align-self-center">
                                        <h6 class="m-0 font-20">$1850.00</h6>
                                        <p class="mb-0 text-muted">Total Revenue</p>
                                    </div><!--end media body-->
                                </div><!--end media-->
                            </div><!--end col-->
                            <div class="col-auto align-self-center">
                                <p class="mb-0"><span class="text-success"><i class="mdi mdi-trending-up"></i>4.8%</span> Then Last Month</p>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end card-body-->
                    <div class="row">
                        <div class="col-12">
                            <div class="apexchart-wrapper">
                                <div id="dash_spark_1" class="chart-gutters"></div>
                            </div>
                        </div><!--end col-->
                    </div>
                </div> <!--end card-->
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Earning Reports</h4>
                            </div><!--end col-->
                            <div class="col-auto">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       This Week<i class="ml-1 las la-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Mont</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="text-center">
                            <div id="ana_device" class="apex-charts"></div>
                            <h6 class="px-2 py-3 mb-0 bg-light-alt">
                                <i data-feather="calendar" class="mr-1 align-self-center icon-xs"></i>
                                01 January 2020 to 31 December 2020
                            </h6>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!-- end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Earnings Reports</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Date</th>
                                        <th class="border-top-0">Item Count</th>
                                        <th class="border-top-0">Text</th>
                                        <th class="border-top-0">Earnings</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01 January</td>
                                        <td>50</td>
                                        <td class="text-danger">-$70</td>
                                        <td>$15,000</td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>02 January</td>
                                        <td>25</td>
                                        <td>-</td>
                                        <td>$9,500</td>

                                    </tr><!--end tr-->
                                    <tr>
                                        <td>03 January</td>
                                        <td>65</td>
                                        <td class="text-danger">-$115</td>
                                        <td>$35,000</td>

                                    </tr><!--end tr-->
                                    <tr>
                                        <td>04 January</td>
                                        <td>20</td>
                                        <td>-</td>
                                        <td>$8,500</td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>05 January</td>
                                        <td>40</td>
                                        <td class="text-danger">-$60</td>
                                        <td>$12,000</td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>06 January</td>
                                        <td>45</td>
                                        <td class="text-danger">-$65</td>
                                        <td>$13,500</td>
                                    </tr><!--end tr-->
                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Most Populer Products</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-top-0">Product</th>
                                        <th class="border-top-0">Price</th>
                                        <th class="border-top-0">Sell</th>
                                        <th class="border-top-0">Status</th>
                                        <th class="border-top-0">Action</th>
                                    </tr><!--end tr-->
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="assets/images/products/01.png" height="30" class="mr-3 rounded align-self-center" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Dastone Camera EDM 5D(White)</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A3652</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$50 <del class="text-muted font-10">$70</del></td>
                                        <td>450 <small class="text-muted">(550)</small></td>
                                        <td><span class="px-2 badge badge-soft-warning">Stock</span></td>
                                        <td>
                                            <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="assets/images/products/02.png" height="30" class="mr-3 rounded align-self-center" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Dastone Shoes Max-Zon</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A5002</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$99 <del class="text-muted font-10">$150</del></td>
                                        <td>750 <small class="text-muted">(00)</small></td>
                                        <td><span class="px-2 badge badge-soft-primary">Out of Stock</span></td>
                                        <td>
                                            <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="assets/images/products/04.png" height="30" class="mr-3 rounded align-self-center" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Dastone Mask N99 [ISI]</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A6598</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$199 <del class="text-muted font-10">$250</del></td>
                                        <td>280 <small class="text-muted">(220)</small></td>
                                        <td><span class="px-2 badge badge-soft-warning">Stock</span></td>
                                        <td>
                                            <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <img src="assets/images/products/img-5.png" height="30" class="mr-3 rounded align-self-center" alt="...">
                                                <div class="media-body align-self-center">
                                                    <h6 class="m-0">Dastone Bag (Blue)</h6>
                                                    <a href="#" class="font-12 text-primary">ID: A9547</a>
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>$40 <del class="text-muted font-10">$49</del></td>
                                        <td>500 <small class="text-muted">(1000)</small></td>
                                        <td><span class="px-2 badge badge-soft-primary">Out of Stock</span></td>
                                        <td>
                                            <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                            <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                        </td>
                                    </tr><!--end tr-->

                                </tbody>
                            </table> <!--end table-->
                        </div><!--end /div-->
                    </div><!--end card-body-->
                </div><!--end card-->
            </div> <!--end col-->
        </div><!--end row-->

    </div><!-- container -->

    <footer class="text-center footer text-sm-left">
        &copy; 2020 Dastone <span class="float-right d-none d-sm-inline-block">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
    </footer><!--end footer-->
</div>
<!-- end page content -->
</div>
