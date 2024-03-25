@extends('layouts.main')
@section('title', 'Quản lý ' . $contest_type_text)
@section('page-title', 'Quản lý ' . $contest_type_text)
@section('content')

    <div class="card card-flush p-4">
        <div class="row">
            <div class=" col-lg-6">

                <h1>
                    Danh sách {{ $contest_type_text }}
                    <span role="button" data-bs-toggle="tooltip" title="Tải lại trang "
                        class="refresh-btn svg-icon svg-icon-primary svg-icon-2x">
                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/General/Update.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path
                                    d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z"
                                    fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    @admin()
                        <a
                            href="{{ route('admin.contest.soft.delete', 'contest_soft_delete=1') . '&type=' . (request('type') ?? 0) }}">

                            <span data-bs-toggle="tooltip" title="Kho lưu trữ bản xóa "
                                class=" svg-icon svg-icon-primary svg-icon-2x">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Files/Deleted-folder.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path
                                            d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z"
                                            fill="#000000" opacity="0.3" />
                                        <path
                                            d="M10.5857864,14 L9.17157288,12.5857864 C8.78104858,12.1952621 8.78104858,11.5620972 9.17157288,11.1715729 C9.56209717,10.7810486 10.1952621,10.7810486 10.5857864,11.1715729 L12,12.5857864 L13.4142136,11.1715729 C13.8047379,10.7810486 14.4379028,10.7810486 14.8284271,11.1715729 C15.2189514,11.5620972 15.2189514,12.1952621 14.8284271,12.5857864 L13.4142136,14 L14.8284271,15.4142136 C15.2189514,15.8047379 15.2189514,16.4379028 14.8284271,16.8284271 C14.4379028,17.2189514 13.8047379,17.2189514 13.4142136,16.8284271 L12,15.4142136 L10.5857864,16.8284271 C10.1952621,17.2189514 9.56209717,17.2189514 9.17157288,16.8284271 C8.78104858,16.4379028 8.78104858,15.8047379 9.17157288,15.4142136 L10.5857864,14 Z"
                                            fill="#000000" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </a>
                    @endadmin
                </h1>
            </div>
            @hasanyrole(config('util.ROLE_ADMINS'))
                <div class=" col-lg-6">
                    <div class=" d-flex flex-row-reverse bd-highlight">
                        <a href="{{ route('admin.contest.create') . '?type=' . (request('type') ?? 0) }}"
                            class=" btn btn-primary">Tạo mới {{ $contest_type_text }}
                        </a>
                    </div>
                </div>
            @endhasrole
        </div>

        <div class="row card-format">
            <div class=" col-12 col-lg-4 col-sx-12 col-md-12 col-sm-12 col-xxl-4 col-xl-4">
                <div class="   form-group ">
                    <label class="form-label">Chuyên ngành </label>
                    <select id="select-major" class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                        data-hide-search="true" tabindex="-1" aria-hidden="true">
                        <option value="0">Chọn chuyên ngành</option>
                        @foreach ($majors as $major)
                            @php
                                $dash = '';
                            @endphp
                            <option @selected(request('major_id') == $major->id) value="{{ $major->id }}">{{ $major->name }} </option>
                            @include('pages.major.include.listSelecterChislAdd', [
                                'majorPrent' => $major,
                            ])
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-sx-12 col-md-12 col-sm-12 col-xxl-4 col-xl-4">
                <div class="form-group">
                    <label class="form-label">Trạng thái hiển thị </label>
                    <select id="select-status" class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                        data-hide-search="true" tabindex="-1" aria-hidden="true">
                        <option value="3" @selected(!request()->has('status'))>Chọn tình trạng</option>
                        <option @selected(request('status') == 1) value="1">Kích họat
                        </option>
                        <option @selected(request()->has('status') && request('status') == 0) value="0">Không kích hoạt
                        </option>
                    </select>
                </div>
            </div>

            <div class="col-12 col-lg-4 col-sx-12 col-md-12 col-sm-12 col-xxl-4 col-xl-4">
                <div class="  form-group">
                    <label class="form-label">Tìm kiếm </label>
                    <input type="text" value="{{ request('q') ?? '' }}" placeholder="*Enter tìm kiếm ..."
                        class=" ip-search form-control">
                </div>
            </div>

            <div class="col-12 col-lg-4 col-sx-12 col-md-12 col-sm-12 col-xxl-4 col-xl-4">
                <label class="form-label">Thời gian </label>
                <input class="form-control " placeholder="Pick date rage" id="kt_daterangepicker_2" />
            </div>

            @contest()
                <div class="col-12 col-lg-4 col-sx-12 col-md-12 col-sm-12 col-xxl-4 col-xl-4">
                    <label for="" class="form-label">Hoạt động {{ $contest_type_text }} </label>
                    <select class="select-date-time-contest form-select mb-2 select2-hidden-accessible" data-control="select2"
                        data-hide-search="true" tabindex="-1" aria-hidden="true">
                        <option class="form-control">Chọn hoạt động {{ $contest_type_text }}</option>
                        {{-- <option class="form-control" @selected(request()->has('upcoming_date')) value="upcoming_date">Sắp diễn ra
                        </option> --}}
                        <option class="form-control" @selected(request()->has('pass_date')) value="pass_date"> Sắp và đang
                            diễn
                            ra
                        </option>
                        <option class="form-control" @selected(request()->has('registration_date')) value="registration_date"> Đang
                            mở
                            đăng kí
                        </option>
                        <option class="form-control" @selected(request()->has('miss_date')) value="miss_date">Đã diễn ra
                        </option>

                    </select>
                </div>
            @endcontest
        </div>

        {{--  --}}
        <div>
            <div class="back">

                <span data-bs-toggle="tooltip" title="Đóng lọc" class="btn-hide svg-icon svg-icon-primary svg-icon-2x">
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Stockholm-icons/Navigation/Angle-up.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                </span>

                <span data-bs-toggle="tooltip" title="Mở lọc" class="btn-show svg-icon svg-icon-primary svg-icon-2x">
                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Angle-down.svg--><svg
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                fill="#000000" fill-rule="nonzero"
                                transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999) " />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>

            </div>
        </div>

        <div class="table-responsive table-responsive-md">
            <table class="table table-row-bordered table-row-gray-300 gy-7  table-hover ">
                <thead>
                    <tr>
                        {{-- <th scope="col">
                            <span role="button" data-key="id"
                                class=" svg-icon svg-icon-primary  svg-icon-2x format-database">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Up-down.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="width: 14px !important ; height: 14px !important" width="24px"
                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(6.000000, 11.000000) rotate(-180.000000) translate(-6.000000, -11.000000) "
                                            x="5" y="5" width="2" height="12"
                                            rx="1" />
                                        <path
                                            d="M8.29289322,14.2928932 C8.68341751,13.9023689 9.31658249,13.9023689 9.70710678,14.2928932 C10.0976311,14.6834175 10.0976311,15.3165825 9.70710678,15.7071068 L6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 L2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 C2.68341751,13.9023689 3.31658249,13.9023689 3.70710678,14.2928932 L6,16.5857864 L8.29289322,14.2928932 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(18.000000, 13.000000) scale(1, -1) rotate(-180.000000) translate(-18.000000, -13.000000) "
                                            x="17" y="7" width="2" height="12"
                                            rx="1" />
                                        <path
                                            d="M20.2928932,5.29289322 C20.6834175,4.90236893 21.3165825,4.90236893 21.7071068,5.29289322 C22.0976311,5.68341751 22.0976311,6.31658249 21.7071068,6.70710678 L18.7071068,9.70710678 C18.3165825,10.0976311 17.6834175,10.0976311 17.2928932,9.70710678 L14.2928932,6.70710678 C13.9023689,6.31658249 13.9023689,5.68341751 14.2928932,5.29289322 C14.6834175,4.90236893 15.3165825,4.90236893 15.7071068,5.29289322 L18,7.58578644 L20.2928932,5.29289322 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(18.000000, 7.500000) scale(1, -1) translate(-18.000000, -7.500000) " />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </th> --}}
                        <th scope="col">{{ \Str::title($contest_type_text) }}
                            <span role="button" data-key="name" data-bs-toggle="tooltip"
                                title="Lọc theo tên {{ $contest_type_text }}"
                                class=" svg-icon svg-icon-primary  svg-icon-2x format-database">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Up-down.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="width: 14px !important ; height: 14px !important" width="24px"
                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(6.000000, 11.000000) rotate(-180.000000) translate(-6.000000, -11.000000) "
                                            x="5" y="5" width="2" height="12"
                                            rx="1" />
                                        <path
                                            d="M8.29289322,14.2928932 C8.68341751,13.9023689 9.31658249,13.9023689 9.70710678,14.2928932 C10.0976311,14.6834175 10.0976311,15.3165825 9.70710678,15.7071068 L6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 L2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 C2.68341751,13.9023689 3.31658249,13.9023689 3.70710678,14.2928932 L6,16.5857864 L8.29289322,14.2928932 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(18.000000, 13.000000) scale(1, -1) rotate(-180.000000) translate(-18.000000, -13.000000) "
                                            x="17" y="7" width="2" height="12"
                                            rx="1" />
                                        <path
                                            d="M20.2928932,5.29289322 C20.6834175,4.90236893 21.3165825,4.90236893 21.7071068,5.29289322 C22.0976311,5.68341751 22.0976311,6.31658249 21.7071068,6.70710678 L18.7071068,9.70710678 C18.3165825,10.0976311 17.6834175,10.0976311 17.2928932,9.70710678 L14.2928932,6.70710678 C13.9023689,6.31658249 13.9023689,5.68341751 14.2928932,5.29289322 C14.6834175,4.90236893 15.3165825,4.90236893 15.7071068,5.29289322 L18,7.58578644 L20.2928932,5.29289322 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(18.000000, 7.500000) scale(1, -1) translate(-18.000000, -7.500000) " />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </th>
                        @contest()
                            <th scope="col">Đội thi
                            </th>
                            <th scope="col">Ban giám khảo
                            </th>
                        @endcontest
                        <th scope="col">Chuyên ngành </th>
                        <th scope="col">Tình trạng </th>
                        @contest()
                            <th scope="col"> Quá trình </th>
                        @endcontest
                        <th scope="col">Thời gian bắt đầu
                            <span role="button" data-key="date_start" data-bs-toggle="tooltip"
                                title="Lọc theo thời gian bắt đầu "
                                class=" svg-icon svg-icon-primary  svg-icon-2x format-database">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Up-down.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="width: 14px !important ; height: 14px !important" width="24px"
                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(6.000000, 11.000000) rotate(-180.000000) translate(-6.000000, -11.000000) "
                                            x="5" y="5" width="2" height="12"
                                            rx="1" />
                                        <path
                                            d="M8.29289322,14.2928932 C8.68341751,13.9023689 9.31658249,13.9023689 9.70710678,14.2928932 C10.0976311,14.6834175 10.0976311,15.3165825 9.70710678,15.7071068 L6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 L2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 C2.68341751,13.9023689 3.31658249,13.9023689 3.70710678,14.2928932 L6,16.5857864 L8.29289322,14.2928932 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(18.000000, 13.000000) scale(1, -1) rotate(-180.000000) translate(-18.000000, -13.000000) "
                                            x="17" y="7" width="2" height="12"
                                            rx="1" />
                                        <path
                                            d="M20.2928932,5.29289322 C20.6834175,4.90236893 21.3165825,4.90236893 21.7071068,5.29289322 C22.0976311,5.68341751 22.0976311,6.31658249 21.7071068,6.70710678 L18.7071068,9.70710678 C18.3165825,10.0976311 17.6834175,10.0976311 17.2928932,9.70710678 L14.2928932,6.70710678 C13.9023689,6.31658249 13.9023689,5.68341751 14.2928932,5.29289322 C14.6834175,4.90236893 15.3165825,4.90236893 15.7071068,5.29289322 L18,7.58578644 L20.2928932,5.29289322 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(18.000000, 7.500000) scale(1, -1) translate(-18.000000, -7.500000) " />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </th>
                        <th scope="col">Thời gian kết thúc
                            <span role="button" data-key="register_deadline" data-bs-toggle="tooltip"
                                title="Lọc theo thời gian kết thúc "
                                class=" svg-icon svg-icon-primary  svg-icon-2x format-database">
                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Up-down.svg--><svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    style="width: 14px !important ; height: 14px !important" width="24px"
                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(6.000000, 11.000000) rotate(-180.000000) translate(-6.000000, -11.000000) "
                                            x="5" y="5" width="2" height="12"
                                            rx="1" />
                                        <path
                                            d="M8.29289322,14.2928932 C8.68341751,13.9023689 9.31658249,13.9023689 9.70710678,14.2928932 C10.0976311,14.6834175 10.0976311,15.3165825 9.70710678,15.7071068 L6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 L2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 C2.68341751,13.9023689 3.31658249,13.9023689 3.70710678,14.2928932 L6,16.5857864 L8.29289322,14.2928932 Z"
                                            fill="#000000" fill-rule="nonzero" />
                                        <rect fill="#000000" opacity="0.3"
                                            transform="translate(18.000000, 13.000000) scale(1, -1) rotate(-180.000000) translate(-18.000000, -13.000000) "
                                            x="17" y="7" width="2" height="12"
                                            rx="1" />
                                        <path
                                            d="M20.2928932,5.29289322 C20.6834175,4.90236893 21.3165825,4.90236893 21.7071068,5.29289322 C22.0976311,5.68341751 22.0976311,6.31658249 21.7071068,6.70710678 L18.7071068,9.70710678 C18.3165825,10.0976311 17.6834175,10.0976311 17.2928932,9.70710678 L14.2928932,6.70710678 C13.9023689,6.31658249 13.9023689,5.68341751 14.2928932,5.29289322 C14.6834175,4.90236893 15.3165825,4.90236893 15.7071068,5.29289322 L18,7.58578644 L20.2928932,5.29289322 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(18.000000, 7.500000) scale(1, -1) translate(-18.000000, -7.500000) " />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </th>
                        @contest()
                            <th scope="col">Thời gian bắt đầu đăng ký
                                <span role="button" data-key="start_register_time" data-bs-toggle="tooltip"
                                    title="Lọc theo thời gian bắt đầu đăng ký"
                                    class=" svg-icon svg-icon-primary  svg-icon-2x format-database">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Up-down.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="width: 14px !important ; height: 14px !important" width="24px"
                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(6.000000, 11.000000) rotate(-180.000000) translate(-6.000000, -11.000000) "
                                                x="5" y="5" width="2" height="12"
                                                rx="1" />
                                            <path
                                                d="M8.29289322,14.2928932 C8.68341751,13.9023689 9.31658249,13.9023689 9.70710678,14.2928932 C10.0976311,14.6834175 10.0976311,15.3165825 9.70710678,15.7071068 L6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 L2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 C2.68341751,13.9023689 3.31658249,13.9023689 3.70710678,14.2928932 L6,16.5857864 L8.29289322,14.2928932 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(18.000000, 13.000000) scale(1, -1) rotate(-180.000000) translate(-18.000000, -13.000000) "
                                                x="17" y="7" width="2" height="12"
                                                rx="1" />
                                            <path
                                                d="M20.2928932,5.29289322 C20.6834175,4.90236893 21.3165825,4.90236893 21.7071068,5.29289322 C22.0976311,5.68341751 22.0976311,6.31658249 21.7071068,6.70710678 L18.7071068,9.70710678 C18.3165825,10.0976311 17.6834175,10.0976311 17.2928932,9.70710678 L14.2928932,6.70710678 C13.9023689,6.31658249 13.9023689,5.68341751 14.2928932,5.29289322 C14.6834175,4.90236893 15.3165825,4.90236893 15.7071068,5.29289322 L18,7.58578644 L20.2928932,5.29289322 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(18.000000, 7.500000) scale(1, -1) translate(-18.000000, -7.500000) " />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </th>
                            <th scope="col">Thời gian kết thúc đăng ký
                                <span role="button" data-key="end_register_time" data-bs-toggle="tooltip"
                                    title="Lọc theo thời gian kết thúc đăng ký "
                                    class=" svg-icon svg-icon-primary  svg-icon-2x format-database">
                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Navigation/Up-down.svg--><svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="width: 14px !important ; height: 14px !important" width="24px"
                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(6.000000, 11.000000) rotate(-180.000000) translate(-6.000000, -11.000000) "
                                                x="5" y="5" width="2" height="12"
                                                rx="1" />
                                            <path
                                                d="M8.29289322,14.2928932 C8.68341751,13.9023689 9.31658249,13.9023689 9.70710678,14.2928932 C10.0976311,14.6834175 10.0976311,15.3165825 9.70710678,15.7071068 L6.70710678,18.7071068 C6.31658249,19.0976311 5.68341751,19.0976311 5.29289322,18.7071068 L2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 C2.68341751,13.9023689 3.31658249,13.9023689 3.70710678,14.2928932 L6,16.5857864 L8.29289322,14.2928932 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(18.000000, 13.000000) scale(1, -1) rotate(-180.000000) translate(-18.000000, -13.000000) "
                                                x="17" y="7" width="2" height="12"
                                                rx="1" />
                                            <path
                                                d="M20.2928932,5.29289322 C20.6834175,4.90236893 21.3165825,4.90236893 21.7071068,5.29289322 C22.0976311,5.68341751 22.0976311,6.31658249 21.7071068,6.70710678 L18.7071068,9.70710678 C18.3165825,10.0976311 17.6834175,10.0976311 17.2928932,9.70710678 L14.2928932,6.70710678 C13.9023689,6.31658249 13.9023689,5.68341751 14.2928932,5.29289322 C14.6834175,4.90236893 15.3165825,4.90236893 15.7071068,5.29289322 L18,7.58578644 L20.2928932,5.29289322 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(18.000000, 7.500000) scale(1, -1) translate(-18.000000, -7.500000) " />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </th>
                        @endcontest
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($contests as $key => $contest)

                        <tr>

                            <td>
                                @contest()
                                    <a href="{{ route('admin.contest.show', ['id' => $contest->id]) }}">
                                        {{ $contest->name }}
                                    </a>
                                @else
                                    <a href="{{ route('admin.contest.show.capatity', ['id' => $contest->id]) }}">
                                        {{ $contest->name }}
                                    </a>
                                @endcontest

                            </td>
                            @contest
                                <td class="text-center">

                                    {{ $contest->teams_count }}

                                </td>

                                <td class="text-center">

                                    {{ $contest->judges_count }}

                                </td>
                            @endcontest
                            <td>{{ $contest->major->name ?? 'Chưa có chuyên ngành ' }}</td>
                            <td>
                                @hasanyrole('admin|super admin')
                                    @if ($contest->status <= 1)
                                        <div data-bs-toggle="tooltip" title="Cập nhật trạng thái "
                                            class="form-check form-switch">
                                            <input value="{{ $contest->status }}" data-id="{{ $contest->id }}"
                                                class="form-select-status form-check-input" @checked($contest->status == 1)
                                                type="checkbox" role="switch">

                                        </div>
                                    @else
                                        <span class="badge bg-danger"> {{ config('util.CONTEST_STATUS_2') }} </span>
                                    @endif
                                @else
                                    <div data-bs-toggle="tooltip" title="Cập nhật trạng thái "
                                        class="form-check form-switch">
                                        <input value="{{ $contest->status }}" data-cls="{{ $contest->id }}"
                                            class="form-check-input" @checked($contest->status == 1) type="checkbox" disabled
                                            role="switch">
                                    </div>
                                @endhasrole

                            </td>
                            @contest
                                <td>
                                    @if ($contest->status <= 1)
                                        @if ((request('type') ?? 0) == config('util.TYPE_CONTEST') &&
                                            \Carbon\Carbon::parse($contest->date_start)->toDateTimeString() >
                                                \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString())
                                            <span class="badge bg-primary">Sắp diễn ra </span>
                                        @else
                                            @if ((request('type') ?? 0) == config('util.TYPE_CONTEST') &&
                                                \Carbon\Carbon::parse($contest->register_deadline)->toDateTimeString() >
                                                    \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString())
                                                <span class="badge bg-success">Đang diễn ra </span>
                                            @elseif((request('type') ?? 0) == config('util.TYPE_CONTEST') &&
                                                \Carbon\Carbon::parse($contest->register_deadline)->toDateTimeString() <
                                                    \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString())
                                                <span class="badge bg-danger"> Đã diễn ra </span>
                                            @endif
                                        @endif

                                        @if ((request('type') ?? 0) == config('util.TYPE_CONTEST') &&
                                            \Carbon\Carbon::parse($contest->start_register_time)->toDateTimeString() <
                                                \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString() &&
                                            \Carbon\Carbon::parse($contest->end_register_time)->toDateTimeString() >
                                                \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString())
                                            <span class="badge bg-info">Đang mở đăng ký </span>
                                        @else
                                            {{-- <span class="badge bg-info">Chưa mở đăng ký </span> --}}
                                            {{-- @elseif ((request('type') ?? 0) == config('util.TYPE_CONTEST') &&
                                            \Carbon\Carbon::parse($contest->end_register_time)->toDateTimeString() >
                                                \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString())
                                            <span class="badge bg-success">Đang mở đăng kí </span>
                                        @elseif (\Carbon\Carbon::parse($contest->date_start)->toDateTimeString() >
                                            \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString())
                                            <span class="badge bg-danger">Đã đóng đăng kí </span>
                                        @elseif (\Carbon\Carbon::parse($contest->register_deadline)->toDateTimeString() >
                                            \Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString())
                                            <span class="badge bg-success">Đang diễn ra </span>
                                        @else
                                            <span class="badge bg-danger"> Đã diễn ra </span> --}}
                                        @endif
                                    @else
                                        <span class="badge bg-danger"> Đã kết thúc </span>
                                    @endif

                                </td>
                            @endcontest
                            <td>{{ $contest->date_start }}</td>
                            <td>{{ $contest->register_deadline }}</td>
                            @contest
                                <td>{{ $contest->start_register_time }}</td>
                                <td>{{ $contest->end_register_time }}</td>
                            @endcontest
                            @hasanyrole(config('util.ROLE_ADMINS'))
                                <td>
                                    <div data-bs-toggle="tooltip" title="Thao tác " class="btn-group dropstart">
                                        <button type="button" class="btn   btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <span class="svg-icon svg-icon-success svg-icon-2x">
                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/General/Settings-2.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                    viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path
                                                            d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                            fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu  px-4 ">
                                            @if ($contest->status <= 1)
                                                <li class="my-3">
                                                    <a
                                                        href="{{ route('admin.contest.edit', ['id' => $contest->id]) . '?type=' . (request('type') ?? 0) }}">
                                                        <span role="button" class="svg-icon svg-icon-success svg-icon-2x">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Design/Edit.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                        height="24" />
                                                                    <path
                                                                        d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) " />
                                                                    <rect fill="#000000" opacity="0.3" x="5"
                                                                        y="20" width="15" height="2"
                                                                        rx="1" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                        Chỉnh sửa
                                                    </a>
                                                </li>
                                            @endif
                                            {{-- @if (request('type') != config('util.TYPE_TEST'))
                                                <li class="my-3">
                                                    <a href="{{ route('admin.contest.show', ['id' => $contest->id]) }}">
                                                        <span class="svg-icon svg-icon-primary svg-icon-2x ">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Text/Redo.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                        height="24" />
                                                                    <path
                                                                        d="M21.4451171,17.7910156 C21.4451171,16.9707031 21.6208984,13.7333984 19.0671874,11.1650391 C17.3484374,9.43652344 14.7761718,9.13671875 11.6999999,9 L11.6999999,4.69307548 C11.6999999,4.27886191 11.3642135,3.94307548 10.9499999,3.94307548 C10.7636897,3.94307548 10.584049,4.01242035 10.4460626,4.13760526 L3.30599678,10.6152626 C2.99921905,10.8935795 2.976147,11.3678924 3.2544639,11.6746702 C3.26907199,11.6907721 3.28437331,11.7062312 3.30032452,11.7210037 L10.4403903,18.333467 C10.7442966,18.6149166 11.2188212,18.596712 11.5002708,18.2928057 C11.628669,18.1541628 11.6999999,17.9721616 11.6999999,17.7831961 L11.6999999,13.5 C13.6531249,13.5537109 15.0443703,13.6779456 16.3083984,14.0800781 C18.1284272,14.6590944 19.5349747,16.3018455 20.5280411,19.0083314 L20.5280247,19.0083374 C20.6363903,19.3036749 20.9175496,19.5 21.2321404,19.5 L21.4499999,19.5 C21.4499999,19.0068359 21.4451171,18.2255859 21.4451171,17.7910156 Z"
                                                                        fill="#000000" fill-rule="nonzero"
                                                                        transform="translate(12.254964, 11.721538) scale(-1, 1) translate(-12.254964, -11.721538) " />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        Chi tiết
                                                    </a>
                                                </li>
                                            @endif --}}

                                            <li class="my-3">

                                                <a
                                                    href=" @contest()
{{ route('admin.contest.show', ['id' => $contest->id]) }}
@else
{{ route('admin.contest.show.capatity', ['id' => $contest->id]) }}
@endcontest
                                                        ">
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x ">
                                                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Text/Redo.svg--><svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24"
                                                                    height="24" />
                                                                <path
                                                                    d="M21.4451171,17.7910156 C21.4451171,16.9707031 21.6208984,13.7333984 19.0671874,11.1650391 C17.3484374,9.43652344 14.7761718,9.13671875 11.6999999,9 L11.6999999,4.69307548 C11.6999999,4.27886191 11.3642135,3.94307548 10.9499999,3.94307548 C10.7636897,3.94307548 10.584049,4.01242035 10.4460626,4.13760526 L3.30599678,10.6152626 C2.99921905,10.8935795 2.976147,11.3678924 3.2544639,11.6746702 C3.26907199,11.6907721 3.28437331,11.7062312 3.30032452,11.7210037 L10.4403903,18.333467 C10.7442966,18.6149166 11.2188212,18.596712 11.5002708,18.2928057 C11.628669,18.1541628 11.6999999,17.9721616 11.6999999,17.7831961 L11.6999999,13.5 C13.6531249,13.5537109 15.0443703,13.6779456 16.3083984,14.0800781 C18.1284272,14.6590944 19.5349747,16.3018455 20.5280411,19.0083314 L20.5280247,19.0083374 C20.6363903,19.3036749 20.9175496,19.5 21.2321404,19.5 L21.4499999,19.5 C21.4499999,19.0068359 21.4451171,18.2255859 21.4451171,17.7910156 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(12.254964, 11.721538) scale(-1, 1) translate(-12.254964, -11.721538) " />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    Chi tiết
                                                </a>
                                            </li>
                                            <li class="my-3">
                                                @hasrole(config('util.ROLE_DELETE'))
                                                    @if ($contest->rounds_count == 0 &&
                                                        $contest->teams_count == 0 &&
                                                        $contest->contest_users_count == 0 &&
                                                        $contest->posts_count == 0 &&
                                                        $contest->enterprise_count == 0 &&
                                                        $contest->judges_count == 0)
                                                        <form
                                                            action="{{ route('admin.contest.destroy', ['id' => $contest->id]) . '?type=' . (request('type') ?? 0) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button onclick="return confirm('Bạn có chắc muốn xóa không !')"
                                                                style=" background: none ; border: none ; list-style : none"
                                                                type="submit">
                                                                <span role="button" class="svg-icon svg-icon-danger svg-icon-2x">
                                                                    <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Home/Trash.svg--><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24"
                                                                                height="24" />
                                                                            <path
                                                                                d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                                fill="#000000" fill-rule="nonzero" />
                                                                            <path
                                                                                d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                                fill="#000000" opacity="0.3" />
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                                Xóa bỏ
                                                            </button>
                                                        </form>
                                                    @endif
                                                @else
                                                    <div style="cursor: not-allowed; user-select: none">

                                                        <span class="svg-icon svg-icon-danger svg-icon-2x">
                                                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Code/Lock-circle.svg--><svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none"
                                                                    fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24"
                                                                        height="24" />
                                                                    <circle fill="#000000" opacity="0.3" cx="12"
                                                                        cy="12" r="10" />
                                                                    <path
                                                                        d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z"
                                                                        fill="#000000" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        Xóa bỏ
                                                    </div>
                                                @endhasrole

                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            @endhasrole
                        </tr>
                        @if ($contest->type == 0 && count($contest->rounds) > 0)
                            <tr>
                                <td style="padding: 0" colspan="12">
                                    <table class="table table-row-dashed table-row-gray-500 gy-5 gs-5 mb-0">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800">
                                                <th scope="col"> Vòng thi </th>
                                                <th style="float: right" scope="col">Xem chi tiết </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($contest->rounds as $round)
                                                @if (auth()->user()->hasRole(['admin', 'super admin']) || in_array(auth()->id(), $round->judges->pluck('user_id')->toArray()))
                                                    <tr>
                                                        <td style="width: 70%">{{ $round->name }}</td>
                                                        <td style="width: 30%"><a style="float: right"
                                                                href="{{ route('admin.round.detail', ['id' => $round->id]) }}">Xem
                                                                chi tiết</a> </td>
                                                    </tr>
                                                @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        @endif
                    @empty
                    @endforelse
                </tbody>
            </table>
            {{ $contests->appends(request()->all())->links('pagination::bootstrap-4') }}
        </div>
    </div>

@endsection
@section('page-script')

    <script>
        let url = "/admin/contests?{{ request()->has('type') ? 'type=' . request('type') : '' }}&";
        const _token = "{{ csrf_token() }}";
        const sort = '{{ request()->has('sort') ? (request('sort') == 'desc' ? 'asc' : 'desc') : 'asc' }}';
        const start_time =
            '{{ request()->has('start_time') ? \Carbon\Carbon::parse(request('start_time'))->format('m/d/Y h:i:s A') : \Carbon\Carbon::now()->format('m/d/Y h:i:s A') }}'
        const end_time =
            '{{ request()->has('end_time') ? \Carbon\Carbon::parse(request('end_time'))->format('m/d/Y h:i:s A') : \Carbon\Carbon::now()->format('m/d/Y h:i:s A') }}'
    </script>
    <script src="assets/js/system/formatlist/formatlis.js"></script>
    <script src="assets/js/system/contest/contest.js"></script>
@endsection
