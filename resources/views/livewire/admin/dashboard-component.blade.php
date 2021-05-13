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
                            <h4 class="page-title">Bán hàng</h4>
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
                                <h4 class="card-title text-bold">Thống kê đơn đặt hàng</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body">
                        <div style="width:900px;height: 500px; margin:auto;">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="text-center col">
                                        <span class="h4">{{ number_format($total_week) }},000 VND</span>
                                        <h6 class="m-0 mt-2 text-uppercase text-muted">Doanh thu trong tuần</h6>
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
                                        <span class="h4">{{ $order }}</span>
                                        <h6 class="m-0 mt-2 text-uppercase text-muted">Đơn đặt hàng</h6>
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
                                        <span class="h4">{{ number_format($avg) }},000 VND</span>
                                        <h6 class="m-0 mt-2 text-uppercase text-muted">Trung bình mỗi đơn hàng</h6>
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
                                        <h6 class="m-0 font-20">{{ number_format($total) }},000 VND</h6>
                                        <p class="mb-0 text-muted">Tổng doanh thu tháng {{ $now->month }}</p>
                                    </div><!--end media body-->
                                </div><!--end media-->
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
            </div><!-- end col-->
        </div><!--end row-->

    </div>
</div>
<!-- end page content -->
</div>
