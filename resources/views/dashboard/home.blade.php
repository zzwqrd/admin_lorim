@extends('dashboard.layouts.app')

@section('content')
    <div class="breadcrumb">
        <a href="#">
            <h1>الرئيسية</h1>
        </a>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <div class="row">
        <!-- ICON BG -->
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Add-User"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">المستخدمين</p>
                        <p class="text-primary text-24 line-height-1 mb-2">205</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Add-User"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">الشركاء</p>
                        <p class="text-primary text-24 line-height-1 mb-2">205</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Financial"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">مبيعات</p>
                        <p class="text-primary text-24 line-height-1 mb-2">$4021</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-icon-bg card-icon-bg-primary o-hidden mb-4">
                <div class="card-body text-center">
                    <i class="i-Checkout-Basket"></i>
                    <div class="content">
                        <p class="text-muted mt-2 mb-0">طلبات</p>
                        <p class="text-primary text-24 line-height-1 mb-2">80</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-lg-12 col-md-12 text-center">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title text-left pb-2">مبيعات</div>
                    <div id="echartBar" style="height: 300px;"></div>
                </div>
            </div>
        </div>

    </div>
    <h1>دي هنستخدمها علشانن نضيف اكتر من خدمة جوا الليست</h1>
    <div class="card-body">
        <div class="input-group control-group  after-add-more">
            <div id="add_new" class="input-group 22 control-group after-add-more"></div>
            <input type="text" name="details['0'][key]" class="form-control custom-input mx-2"
                placeholder=" نوع الخدمة ">
            <input type="text" name="details['0'][value]" class="form-control custom-input  mx-2" placeholder="القيمة ">

            <div class="input-group-btn px-3">
                <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i>
                    إضافة</button>
            </div>

        </div>

    </div>

    <!-- end of row -->
@endsection
<!-- ============ Body content End ============= -->
@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".add-more").click(function() {
                let rand = Math.floor(Math.random() * (999999 - 1)) + 1;
                var html =
                    '<div class="control-group 22 input-group" style="margin-top:10px;padding: 10px;">\n' +
                    '            <input type="text" name="details[' + rand +
                    '][key]" class="form-control mx-2 custom-input" placeholder="نوع الخدمة">\n' +
                    '            <input type="text" name="details[' + rand +
                    '][value]" class="form-control mx-2 custom-input" placeholder="القيمة ">\n' +
                    '\n' +
                    '            <div class="input-group-btn px-3">\n' +
                    '                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> حذف</button>\n' +
                    '            </div>\n' +
                    '        </div>';
                $("#add_new").append(html);

            });




            $('body').on('click', '.remove', function() {
                $(this).closest('.22').remove();
            });


        });
    </script>
@endsection
