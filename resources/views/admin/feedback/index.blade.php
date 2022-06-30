@extends('layouts.app-dashboard.app-dashboard')

@section('title')
Feedback
@endsection

@section('content')


<!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dasbor</a></li>
                                            <li class="breadcrumb-item active">@yield('title') </li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="btn btn-sm btn-secondary">
                                            <div class="fas fa-file-export"></div> Export Excel
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h2 class="header-title mt-2"><i class="fas fa-book mr-1"></i>@yield('title')</h2>
                                        </div><!-- end col-->
                                        <div class="col-lg-4">
                                            {{-- <div class="text-lg-right">
                                                <a href="#" class="btn btn-primary waves-effect waves-light">
                                                    <i class="mdi mdi-plus-circle"></i>
                                                </a>
                                            </div> --}}
                                        </div><!-- end col-->
                                    </div> <!-- end row -->
                                </div> <!-- end card-box -->
                            </div><!-- end col-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <div class="table-responsive">
                                        @include('admin.feedback._list',[
                                            'data' => $data
                                        ])
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                                  {{$data->links('vendor.pagination.bootstrap-4')}}
                            </div>
                        </div>

                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

@stop
