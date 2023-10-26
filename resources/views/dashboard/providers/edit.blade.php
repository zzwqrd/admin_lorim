@extends('dashboard.layouts.app')
@section('css')
    <link id="gull-theme" rel="stylesheet" href="{{ asset('assets') }}/styles/css/image.css">
@endsection


@section('content')
    <div class="breadcrumb">
        <a href="{{ route('dashboard.home') }}">
            <h1>الرئيسية</h1>
        </a>
        <ul>
            <li><a> مقدمين الخدمة</a></li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="card-title mb-3"> <strong class="text-primary">تعديل مقدم خدمة</strong></div>
                </div>
                @include('dashboard.layouts.message')

                <div class="card-body">
                    <form id="change-pwd" action="{{ url('dashboard/providers/update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center">الصورة</h3>
                                <div class="avatar-upload">
                                    <div class="avatar-edit">
                                        <input type='file' name="image" id="imageUpload" />
                                        <label for="imageUpload"></label>
                                    </div>
                                    <div class="avatar-preview">
                                        @isset($data)
                                            <div id="imagePreview" style="background-image: url({{ $data->image }});">
                                            </div>
                                        @endisset
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
                                    placeholder="الإسم " value="{{ $data->title_ar }}" autocomplete="off">
                                @if ($errors->has('title_ar'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('title_ar') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="title_en">الإسم الانجليزي</label>
                                <input type="text" class="form-control" name="title_en" id="title_en"
                                    placeholder="الإسم الإنجليزي" value="{{ $data->title_en }}" autocomplete="off">
                                @if ($errors->has('title_en'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('title_en') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="description_ar">المقال بلغة العربيه </label>
                                @isset($data)
                                    <textarea type="text" class="form-control" name="description_ar" id="description_ar" placeholder="description_ar "
                                        value="{{ $data->description_en }}" autocomplete="off">{{ $data->description_ar }}</textarea>
                                @endisset

                                @if ($errors->has('description_ar'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('description_ar') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-md-6 form-group mb-3">
                                <label for="description_en">المقال بلغة الانجليزية </label>
                                @isset($data)
                                    <textarea type="text" class="form-control" name="description_en" id="description_en" placeholder="description_en "
                                        value="{{ $data->description_en }}" autocomplete="off">{{ $data->description_en }}</textarea>
                                @endisset
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

                                    @foreach ($data->section as $dataSection)
                                        <div class="control-group app_selectd  input-group"
                                            style="margin-top:10px;padding: 10px;">
                                            <div class="col-md-6 form-group mb-3">
                                                <label for="section" class="control-label">القسم</label>
                                                {{-- "{{ url('dashboard/providers/show') }}" + '/' + id; --}}
                                                <select name="section[]" data-placeholder="حدد القسم"
                                                    class="form-control  SlectBox">

                                                    {{-- sectionTo --}}
                                                    {{-- multiple --}}
                                                    <!--placeholder-->

                                                    @foreach ($sections as $item)
                                                        <option
                                                            value="{{ $item->id }}"@if ($item->id == $dataSection->id) selected @endif>
                                                            {{ $item[lang('title')] }}
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
                                                    multiple>

                                                    @foreach ($data->providsub as $sub)
                                                    @endforeach

                                                    {{-- @foreach ($subSections as $i)
                                                        <option value="{{ $i->id }}"
                                                            @if (in_array($i->id, $data->providsub->pluck('id')->toArray())) selected @endif>
                                                            {{ $i[lang('title')] }}
                                                        </option>
                                                    @endforeach --}}



                                                </select>


                                                @if ($errors->has('sub_section'))
                                                    <span class="text-danger" role="alert">
                                                        <strong>{{ $errors->first('sub_section') }} </strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <div class="input-group-btn px-3">
                                                <button class="btn btn-danger remove" type="button"><i
                                                        class="glyphicon glyphicon-remove"></i> حذف</button>
                                            </div>
                                        </div>
                                    @endforeach


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
                    ' name="providsub[]"  multiple>\n' +
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
        $( "ul li" ).addClass(function( index ) {
            return "item-" + index;
        });
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

            var values = [];
            $('.form-group select[name="section[]"]').each(function(i, sel) {
                $(this).parent().closest('.app_selectd').find(
                    '.subsection option').remove();
                var selectedVal = $(sel).val();
                values.push(selectedVal);
                // console.log(values.push(selectedVal));
                // console.log(values);
                console.log(selectedVal);


                var dataid = $(this).parent().closest('.app_selectd').find(
                    '.subsection');

                var g = '{{ $sub->id }}';


                var id = $(this).val();

                var url = "{{ url('dashboard/providers/showsub') }}" + '/' + selectedVal;

                $.ajax({
                    url: url,
                    dataType: 'json',
                    type: 'get',
                    data: {
                        selectedVal: selectedVal,
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
                                // console.log([index]);
                                // console.log(values);
                                // console.log("{{ $data->providsub }}");



                                var html =
                                    '<option value=" \n' +
                                    value.id +
                                    ' "selected > \n' +
                                    value.title_ar + ' </option>';



                                dataid.append(html);

                            });
                        }
                    }
                });
            });
        });
    </script>




    <script>
        $(document).ready(function() {
            'use strict';

            $(document).on('change', '.form-group select[name="section[]"]', function(event) {
                event.preventDefault();
                $(this).parent().closest('.app_selectd').find(
                    '.subsection option').remove();

                console.log($(this).attr('option[value]'));


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

    <script>
        $(document).ready(function() {
            $('.select2-select2').select2('destroy');
        });
    </script>
    <script>
        //  $( "ul li" ).addClass(function( index ) {
        //     return "item-" + index;
        // });
        $(document).ready(function() {
            return $('.select2-select').select2();
        });
    </script>

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
                                $('#sub_section option').remove();
                                $('#sub_section').append(
                                    "<option  disabled>اختر التصنيف</option>");
                                $.each(data.data, function(index, value) {
                                    // console.log(data.data);
                                    $('#sub_section').append("<option value=" + value
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
