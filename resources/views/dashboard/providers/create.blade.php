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
            <li><a> الشركات</a></li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title mb-3"> <strong class="text-primary">إضافة شركة</strong></div>
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

                                <textarea type="text" class="form-control" name="description_ar" id="description_ar" placeholder="description_ar "
                                    value="{{ old('description_ar') }}" autocomplete="off"></textarea>
                                @if ($errors->has('description_ar'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('description_ar') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="description_en">المقال بلغة الانجليزية </label>
                                <textarea type="text" class="form-control" name="description_en" id="description_en" placeholder="description_en "
                                    value="{{ old('description_en') }}" autocomplete="off"></textarea>
                                @if ($errors->has('description_en'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('description_en') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="card-body">
                                <div class="input-group control-group  after-add-more">




                                </div>
                                <div id="add_new" class="input-group control-group after-add-more">
                                    <div class="control-group app_selectd  input-group"
                                        style="margin-top:10px;padding: 10px;">
                                        <div class="col-md-6 form-group mb-3">
                                            <label for="section" class="control-label">القسم</label>
                                            <select name="section[]" data-placeholder="حدد القسم"
                                                class="form-control  SlectBox">
                                                {{-- sectionTo --}}
                                                {{-- multiple --}}
                                                <!--placeholder-->
                                                <option selected disabled>اختر القسم </option>
                                                @foreach ($sections as $section)
                                                    <option value="{{ $section->id }}"> {{ $section[lang('title')] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('section'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('section') }} </strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="col-md-6 form-group mb-3">
                                            <label for="sub_section" class="control-label"> القسم الفرعي</label>
                                            <select data-placeholder="اختر القسم أولا "
                                                class="form-control subsection select2-select" name="providsub[]"
                                                id="sub_section" multiple>
                                                {{-- <option selected disabled> </option> --}}

                                            </select>
                                            @if ($errors->has('sub_section'))
                                                <span class="text-danger" role="alert">
                                                    <strong>{{ $errors->first('sub_section') }} </strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group-btn px-3">
                                    <button class="btn btn-success add-more" type="button"><i
                                            class="glyphicon glyphicon-plus"></i>
                                        أضافة قسم جديد</button>
                                </div>

                            </div>


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

    <script type="text/javascript">
        $(document).ready(function() {
            $(".add-more").click(function() {
                let rand = Math.floor(Math.random() * (999999 - 1)) + 1;
                var html =
                    '<div class="control-group app_selectd  input-group" style="margin-top:10px;padding: 10px;">\n' +
                    '   <div class="col-md-6 form-group mb-3">\n' +
                    ' <select class="form-control" name="section[]"\n' +
                    '          required>\n' +
                    ' <option selected disabled>اختر القسم </option>\n' +
                    '               @foreach ($sections as $section)\n' +
                    '                  <option value="{{ $section->id }}"> {{ $section[lang('title')] }}</option>\n' +
                    '             @endforeach\n' +

                    ' </select>\n' +
                    ' </div>\n' +
                    '\n' +
                    '   <div class="col-md-6 form-group mb-3">\n' +
                    ' <select  data-placeholder="اختر القسم أولا " class="form-control subsection select2-select" \n' +
                    ' name="providsub[]" id="select' + rand + '" multiple>\n' +
                    ' </select>\n' +
                    ' </div>\n' +
                    '\n' +
                    '            <div class="input-group-btn px-3">\n' +
                    '                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> حذف</button>\n' +
                    '            </div>\n' +
                    '        </div>';
                $("#add_new").append(html);


                $('.select2-select').select2();


            });

            $('body').on('click', '.remove', function() {
                $(this).closest('.app_selectd').remove();
            });


        });
    </script>

    {{-- <script>
        $(document).on('change', '.form-group select[name="section[]"]', function(e) {
            e.preventDefault();


            $(this).parent().closest('.app_selectd .active').find(
                'select').removeClass('active');
            $(this).parent().closest('.app_selectd').find(
                '.subsection').addClass('active');
        });
    </script> --}}

    <script>
        $(document).ready(function() {
            'use strict';

            $(document).on('change', '.form-group select[name="section[]"]', function(event) {
                event.preventDefault();
                $(this).parent().closest('.app_selectd').find(
                    '.subsection option').remove();


                var dataid = $(this).parent().closest('.app_selectd').find(
                    '.subsection');

                var id = $(this).val();

                var url = "{{ url('dashboard/providers/show') }}" + '/' + id;

                $.ajax({
                    url: url,
                    dataType: 'json',
                    type: 'get',
                    data: {
                        id: id,
                        dataid: dataid,
                    },

                    // mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        // alert(url);
                    },
                    success: function(data) {
                        if (data.status) {


                            $.each(data.data, function(index, value) {
                                console.log(dataid);



                                dataid.append("<option value=" +
                                    value
                                    .id + ">" + value.title_ar + "</option>");

                            });
                        }
                    }
                });
            });
        });
    </script>


    {{-- <script>
        $(document).ready(function() {
            'use strict';

            $(document).on('change', '.form-group select[name="section[]"]', function(event) {
                event.preventDefault();
                $(this).parent().closest('.app_selectd').find(
                    '.subsection option').remove();




                var id = $(this).val();

                var url = "{{ url('dashboard/providers/show') }}" + '/' + id;
                $.ajax({
                    url: url,
                    dataType: 'json',
                    type: 'get',
                    data: {
                        id: id,
                    },

                    // mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false,
                    beforeSend: function() {
                        // alert(url);
                    },
                    success: function(data) {
                        if (data.status) {


                            $.each(data.data, function(index, value) {
                                // console.log(data.data[index].section_id);



                                $('.form-group select[name="section[]"]').parent()
                                    .closest('.app_selectd')
                                    .find(
                                        '.subsection').append("<option value=" +
                                        value
                                        .id + ">" + value.title_ar + "</option>");

                            });
                        }
                    }
                });
            });
        });
    </script> --}}

    <script>
        // $(document).ready(function() {
        //     $('.sectionTo').select2('destroy');
        // });
    </script>
    <script>
        $(document).ready(function() {
            $('.select2-select').select2();
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
