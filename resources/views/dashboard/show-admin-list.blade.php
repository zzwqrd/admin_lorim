@extends('dashboard.layouts.app')

@section('content')
    <div class="breadcrumb">
        <a href="#">
            <h1>الرئيسية</h1>
        </a>
        <ul>
            <li>قائمة المديرين</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <!-- end of row -->

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-header">
                    <div class="card-title mb-3">
                        <strong class="text-primary"> قائمة المديرين</strong>
                        <span class="align-baseline" style="display:inline;">
                            <a class="btn btn-primary " href="add-admin.html" style="float: left">
                                <i class="i-Add align-middle" style="font-size: 17px; font-weight: 600;">
                                </i>
                                إضافة مدير
                            </a>
                        </span>

                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="alternative_pagination_table" class="display table table-striped table-bordered"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>الإسم </th>
                                    <th>البريد الإلكتروني </th>
                                    <th> الصلاحيات </th>
                                    <th>التحكم </th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>admin</td>

                                    <td>admin@admin.com</td>
                                    <td style="text-align: center;">

                                        <span class="badge badge-info" style="font-size: 90%">مدير
                                        </span>

                                        <!-- <span class="badge badge-warning"
                                                                                  style="font-size: 90%">موظف
                                                                            </span> -->

                                    </td>

                                    <!-- <td style="text-align: center;">
                                                                            <a href=""
                                                                                  class="badge badge-success status-btn"
                                                                                  style="width:80px;height: 25px;padding:auto;margin:auto;
                                                                  padding-top: 7px; font-size: small">
                                                                                  نشط
                                                                            </a>
                                                                      </td> -->

                                    <!-- <td style="text-align: center;">
                                                                            <a href="" class="badge badge-danger status-btn"
                                                                                  style="width:80px;height: 25px;padding:auto;margin:auto;
                                                                  padding-top: 7px; font-size: small">
                                                                                  غير نشط
                                                                            </a>
                                                                      </td> -->

                                    <td style="text-align: center;">
                                        <a href="#" class="text-success mr-2">
                                            <i class="nav-icon i-Pen-2 font-weight-bold "></i>
                                        </a>

                                        <a href="#" class="text-danger mr-2">
                                            <i class="nav-icon i-Close-Window font-weight-bold delete-btn"></i>
                                        </a>

                                    </td>

                                </tr>

                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- end of col -->

    </div>
    <!-- end of row -->
@endsection

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
