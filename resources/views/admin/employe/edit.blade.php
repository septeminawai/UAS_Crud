@extends('layouts.app-dashboard.app-dashboard')

@section('title')
Employee Edit
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
                                            <li class="breadcrumb-item"><a href="{{route('employee.index')}}">Employee</a></li>
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
                                        <a href="#" class="btn btn-sm btn-danger">
                                            <div class="fas fa-chevron-circle-left"></div> Back
                                        </a>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <h2 class="header-title mt-2"><i class="fas fa-user-edit mr-1"></i>@yield('title')</h2>
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

                        <form action="{{route('employee.update',['employee' =>$employe->id ])}}" class="parsley-examples" novalidate="" method="POST">
                            @csrf
                            @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                        <div class="form-group">
                                            <label for="#">Full Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" parsley-trigger="change" required=""
                                            placeholder="Enter Full name" value="{{old('name',$employe->name)}}" class="form-control @error('name') is-invalid @enderror">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="email" name="email" parsley-trigger="change" required=""
                                            placeholder="Enter email" class="form-control @error('email') is-invalid @enderror" value="{{old('email',$employe->email)}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Phone Number<span class="text-danger">*</span></label>
                                            <input type="number" name="mobile_phone_number" parsley-trigger="change" required=""
                                            placeholder="Enter Phone Number" class="form-control @error('mobile_phone_number') is-invalid @enderror"
                                            value="{{old('mobile_phone_number',$employe->mobile_phone_number)}}">
                                            @error('mobile_phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Postion<span class="text-danger">*</span></label>
                                            <input type="text" name="position" parsley-trigger="change" required=""
                                            placeholder="Enter position" class="form-control @error('position') is-invalid @enderror" value="{{old('position',$employe->position)}}">
                                            @error('position')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="">Job Desk<span class="text-danger">*</span></label>
                                            <textarea class="form-control @error('jobdesk') is-invalid @enderror" required="" name="jobdesk" placeholder="Enter JobDesk Employee"  rows="2" autocomplete="on">{{old('jobdesk',$employe->jobdesk)}}</textarea>
                                            @error('jobdesk')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                </div> <!-- end card-box -->
                            </div>
                            <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card-box">
                                        <div class="form-group">
                                            <label for="userName">Genger<span class="text-danger">*</span></label>
                                            <select name="gender" class="form-control @error('gender') is-invalid @enderror" required="" autofocus>
                                                    <option value="{{$employe->gender}}" @if (old('gender') == "$employe->gender") {{ 'selected' }} @endif> {{$employe->gender}} </option>
                                                    <option value="Pria" @if (old('gender') == "Pria") {{ 'selected' }} @endif>Pria</option>
                                                    <option value="Wanita" @if (old('gender') == "Wanita") {{ 'selected' }} @endif>Wanita </option>
                                            </select>
                                            @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="emailAddress">Place Of Birth<span class="text-danger">*</span></label>
                                            <input type="text" name="place_of_date" parsley-trigger="change" required=""
                                            placeholder="Enter place of date" class="form-control @error('place_of_date') is-invalid @enderror" value="{{old('place_of_date',$employe->place_of_date)}}">
                                            @error('place_of_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="emailAddress">Date Of Birth<span class="text-danger">*</span></label>
                                            <input type="date" name="date_of_birth" parsley-trigger="change" required=""
                                            placeholder="Enter date of birth" class="form-control @error('date_of_birth') is-invalid @enderror" value="{{old('date_of_birth',$employe->date_of_birth)}}">
                                            @error('date_of_birth')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                </div> <!-- end card-box -->
                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-warning waves-effect waves-light" type="submit">
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                    </form>

                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

@stop
