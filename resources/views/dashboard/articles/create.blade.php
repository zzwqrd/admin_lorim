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
                    <form id="change-pwd" action="{{ url('dashboard/articles/store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">


                            <div class="col-md-6 form-group mb-3">
                                <label for="title">الإسم </label>
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="الإسم " value="{{ old('title') }}" autocomplete="off">
                                @if ($errors->has('title'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="col-md-6 form-group mb-3">
                                <label for="article_text">المقال بلغة العربيه </label>

                                <textarea type="text" class="form-control" name="article_text" id="article_text" placeholder="article_text "
                                    value="{{ old('article_text') }}" autocomplete="off"></textarea>
                                @if ($errors->has('article_text'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('article_text') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="col-md-6 form-group mb-3">
                                <label for="inputName" class="control-label">القسم</label>

                                <select name="tag[]" class="form-control  select2-select"
                                    onclick="console.log($(this).val())" onchange="console.log('change is firing')"
                                    multiple>

                                    <!--placeholder-->
                                    <option value="" disabled>حدد القسم</option>

                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"> {{ $tag->name }}</option>
                                    @endforeach

                                </select>

                                @if ($errors->has('section'))
                                    <span class="text-danger" role="alert">
                                        <strong>{{ $errors->first('section') }} </strong>
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
            $('.select2-select').select2();
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
