@extends('dashboard.layouts.app')
@section('css')
    <link id="gull-theme" rel="stylesheet" href="{{ asset('assets') }}/styles/css/image.css">
@endsection

<!-- ============ Body content start ============= -->
@section('content')
    <div class="breadcrumb">
        <a href="{{ route('dashboard.home') }}">
            <h1>الرئيسية</h1>
        </a>
        <ul>
            <li><a> الأقسام</a></li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title mb-3"> <strong class="text-primary">إضافة قسم</strong></div>
                </div>
                @include('dashboard.layouts.message')

                <div class="card-body">
                    <form id="change-pwd" action="{{ url('dashboard/providers/store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center">الصورة</h3>
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="image" id="imageUpload" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        <div id="imagePreview">
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('image'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="title_ar">الإسم </label>
                                <input type="text" class="form-control" name="title_ar" id="title_ar"
                                    placeholder="الإسم " value="{{ old('title_ar') }}" autocomplete="off">
                                @if ($errors->has('title_ar'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('title_ar') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="title_en">الإسم الانجليزي</label>
                                <input type="text" class="form-control" name="title_en" id="title_en"
                                    placeholder="الإسم الإنجليزي" value="{{ old('title_en') }}" autocomplete="off">
                                @if ($errors->has('title_en'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('title_en') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="description_ar">المقال بلغة العربيه </label>
                                <input type="text" class="form-control" name="description_ar" id="description_ar"
                                    placeholder="description_ar " value="{{ old('description_ar') }}" autocomplete="off">
                                @if ($errors->has('description_ar'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('description_ar') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="description_en">المقال بلغة الانجليزية </label>
                                <input type="text" class="form-control" name="description_en" id="description_en"
                                    placeholder="description_en " value="{{ old('description_en') }}" autocomplete="off">
                                @if ($errors->has('description_en'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('description_en') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{--
                            <div class="col-md-6 form-group mb-3">
                                <label for="rate">rate </label>
                                <input type="number" class="form-control" name="rate" id="rate" placeholder="rate "
                                    value="{{ old('rate') }}" autocomplete="off">
                                @if ($errors->has('rate'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->has('rate') }}</strong>
                                    </span>
                                @endif
                            </div> --}}

                            {{-- <div class="col-md-6 form-group mb-3">
                                <label for="status">status </label>
                                <input type="number" class="form-control" name="status" id="status"
                                    placeholder="status " value="{{ old('status') }}" autocomplete="off">
                                @if ($errors->has('status'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->has('status') }}</strong>
                                    </span>
                                @endif
                            </div> --}}

                            {{-- <div class="col-md-6 form-group mb-3">
                                <label for="lat">lat </label>
                                <input type="number" class="form-control" name="lat" id="lat" placeholder="lat "
                                    value="{{ old('lat') }}" autocomplete="off">
                                @if ($errors->has('lat'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->has('lat') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="lng">lng </label>
                                <input type="number" class="form-control" name="lng" id="lng"
                                    placeholder="lng " value="{{ old('lng') }}" autocomplete="off">
                                @if ($errors->has('lng'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->has('lng') }}</strong>
                                    </span>
                                @endif
                            </div> --}}


                            <div class="col">
                                <label for="inputName" class="control-label">القسم</label>
                                <select name="section" class="form-control SlectBox" onclick="console.log($(this).val())"
                                    onchange="console.log('change is firing')">
                                    <!--placeholder-->
                                    <option value="" selected disabled>حدد القسم</option>
                                    @foreach ($sections as $section)
                                        <option value="{{ $section->id }}"> {{ $section[lang('title')] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('section'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('section') }} </strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="subsection"> القسم الفرعي</label>
                                <select class="form-control attribute" name="subsection" id="subsection">
                                    <option selected disabled>اختر القسم أولا </option>

                                </select>
                                @if ($errors->has('subsection'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('subsection') }} </strong>
                                    </span>
                                @endif
                            </div>
                            {{-- <div class="col-12 pt-3">
                                <textarea name="description" class="editor with-file-explorer">{{ old('description') }}</textarea>
                            </div> --}}
                            <div class="col-md-12">
                                <button class="btn btn-primary">حفظ</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
<!-- ============ Body content End ============= -->
@section('js')
    <script src="{{ asset('assets') }}/js/image.js"></script>


    <script>
        $(document).ready(function() {
            $('select[name="section"]').on('change', function() {
                var SectionId = $(this).val();
                if (SectionId) {
                    $.ajax({
                        url: "{{ URL::to('dashboard/providers/show') }}/" + SectionId,
                        type: "get",
                        dataType: "json",
                        success: function(data) {
                            if (data.status == 1) {
                                $('#subsection option').remove();
                                $('#subsection').append(
                                    "<option selected disabled>اختر التصنيف</option>");
                                $.each(data.data, function(index, value) {
                                    // console.log(data.data);
                                    $('#subsection').append("<option value=" + value
                                        .id + ">" + value.title_ar +
                                        "</option>");
                                });
                            }
                        }
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        $("#form").validate({
            // Specify the validation rules
            rules: {
                name: {
                    required: true,
                    alpha: true
                },
                url: {
                    required: true,
                    url: true,
                },

            },
            // Specify the validation error messages
            messages: {
                name: {
                    required: 'يرجى إدخال اسم الموقع ',
                    alpha: 'يجب ان يتكون اسم الموقع من حروف فقط ',
                },
                url: {
                    required: 'يرجى إدخال رابط الموقع  ',
                    url: 'برجاء ادخال رابط صحيح',
                },
            },
            submitHandler: function(form) {
                form.submit();
            },
            highlight: function(element) {
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass(
                    'glyphicon-remove');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass(
                    'glyphicon-ok');
            },
            errorElement: 'span',
            errorClass: 'help-block',
            errorPlacement: function(error, element) {
                if (element.parent('.input-group').length) {
                    error.insertAfter(element.parent());
                } else if (element.closest('.form-group').find('.cke').length) {
                    error.appendTo(element.closest('.form-group'));
                } else {
                    error.insertAfter(element);
                }
            }
        });
    </script>
@endsection
