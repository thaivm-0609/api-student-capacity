@extends('layouts.main')
@section('title', 'Thêm cuộc thi')
@section('page-title', 'Thêm mới cuộc thi')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-flush h-lg-100 p-10">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Code/Done-circle.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                    <path
                                        d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z"
                                        fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <strong></strong> {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    @php
                        Session::forget('success');
                    @endphp
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span class="svg-icon svg-icon-danger svg-icon-2x">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo2/dist/../src/media/svg/icons/Code/Warning-2.svg--><svg
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path
                                        d="M11.1669899,4.49941818 L2.82535718,19.5143571 C2.557144,19.9971408 2.7310878,20.6059441 3.21387153,20.8741573 C3.36242953,20.9566895 3.52957021,21 3.69951446,21 L21.2169432,21 C21.7692279,21 22.2169432,20.5522847 22.2169432,20 C22.2169432,19.8159952 22.1661743,19.6355579 22.070225,19.47855 L12.894429,4.4636111 C12.6064401,3.99235656 11.9909517,3.84379039 11.5196972,4.13177928 C11.3723594,4.22181902 11.2508468,4.34847583 11.1669899,4.49941818 Z"
                                        fill="#000000" opacity="0.3" />
                                    <rect fill="#000000" x="11" y="9" width="2" height="7" rx="1" />
                                    <rect fill="#000000" x="11" y="17" width="2" height="2" rx="1" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <strong></strong> {{ session()->get('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    @php
                        Session::forget('error');
                    @endphp
                @endif
                <form id="formContest" action="{{ route('admin.contest.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-10">
                        <label for="" class="form-label">Tên cuộc thi</label>
                        <input type="text" name="name" value="{{ old('name') }}" class=" form-control" placeholder="">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group mb-10">
                                <label for="" class="form-label">Thời gian bắt đầu </label>
                                <input id="begin" value="{{ old('date_start') }}" type="datetime-local" name="date_start"
                                    class="form-control" placeholder="">
                                @error('date_start')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label for="" class="form-label">Thời gian kết thúc</label>
                                <input value="{{ old('register_deadline') }}" type="datetime-local"
                                    name="register_deadline" id="end" class="form-control" placeholder="">
                                @error('register_deadline')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label for="" class="form-label">Thời gian bắt đầu đăng ký</label>
                                <input value="{{ old('start_register_time') }}" type="datetime-local"
                                    name="start_register_time" id="start_time" class="form-control" placeholder="">
                                @error('start_register_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label for="" class="form-label">Thời gian kết thúc đăng ký</label>
                                <input value="{{ old('end_register_time') }}" type="datetime-local"
                                    name="end_register_time" id="end_time" class="form-control" placeholder="">
                                @error('end_register_time')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-10">
                                <label for="" class="form-label">Thuộc chuyên ngành</label>
                                <select class="form-select mb-2 select2-hidden-accessible" data-control="select2"
                                    data-hide-search="false" tabindex="-1" aria-hidden="true" name="major_id"
                                    value="{{ old('major_id') }}">
                                    @foreach ($majors as $major)
                                        <option value="{{ $major->id }}"> {{ $major->name }}</option>
                                    @endforeach
                                </select>
                                @error('major_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group mb-10">
                                <label for="" class="form-label">Giới hạn thành viên trong đội</label>
                                <input name="max_user" type='number' class="form-control" />

                            </div>
                            <div class="form-group ">
                                <label for="" class="form-label">Ảnh cuộc thi</label>
                                <input name="img" type='file' id="file-input" accept=".png, .jpg, .jpeg"
                                    class="form-control" />
                                <img class="w-100 mt-4 border rounded-3" id="image-preview"
                                    src="https://vanhoadoanhnghiepvn.vn/wp-content/uploads/2020/08/112815953-stock-vector-no-image-available-icon-flat-vector.jpg" />
                            </div>



                        </div>
                    </div>
                    <label for="" class="form-label">Phần thưởng theo mức điểm</label>
                    <div class="row mb-5 pb-5">
                        <div class="col-3">
                            <div class="form-group mt-4 ">
                                <label for="" class="form-label">Top 1</label>
                                <input name="top1" type='number' class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group mt-4 ">
                                <label for="" class="form-label">Top 2</label>
                                <input name="top2" type='number' class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group mt-4 ">
                                <label for="" class="form-label">Top 3</label>
                                <input name="top3" type='number' class="form-control" />
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group mt-4 ">
                                <label for="" class="form-label">Còn lại</label>
                                <input name="leave" type='number' class="form-control" />
                            </div>
                        </div>

                    </div>
                    <div class="form-group mb-10">
                        <label for="" class="form-label">Mô tả cuộc thi</label>
                        <textarea class="form-control" name="description" id="" rows="3">
                            {{ old('description') }}
                        </textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-10 ">
                        <button type="submit" name="" id="" class="btn btn-success btn-lg btn-block">Lưu </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('page-script')

    <script src="assets/js/system/preview-file/previewImg.js"></script>
    <script src="assets/js/system/date-after/date-after.js"></script>
    <script src="assets/js/system/contest/form.js"></script>
    <script>
        rules.img = {
            required: true,
        };
        messages.img = {
            required: 'Chưa nhập trường này !',
        };

        dateAfter('input[type=datetime-local]#begin', 'input[type=datetime-local]#end',
            'input[type=datetime-local]#start_time', 'input[type=datetime-local]#end_time')
        preview.showFile('#file-input', '#image-preview');
    </script>
    <script src="assets/js/system/validate/validate.js"></script>
@endsection
