@extends('dashboard.layouts.app')

<!-- ============ Body content start ============= -->
@section('content')
    <div class="breadcrumb">
        <a href="{{ route('dashboard.home') }}">
            <h1>الرئيسية</h1>
        </a>
        <ul>
            <li>مقدمين الخدمة</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>

    <!-- end of row -->

    <div class="row mb-4">
        <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-header">
                    <div class="card-title mb-3">
                        <strong class="text-primary"> قائمة مقدمين الخدمة</strong>
                        <span class="align-baseline" style="display:inline;">
                            <a class="btn btn-primary " href="{{ url('dashboard/providers/create') }}" style="float: left">
                                <i class="i-Add align-middle" style="font-size: 17px; font-weight: 600;"></i> إضافة قسم </a>
                        </span>
                    </div>
                </div>
                @include('dashboard.layouts.message')
                <div class="card-body">
                    @if (count($data) > 0)
                        <div class="table-responsive">
                            <table id="alternative_pagination_table" class="display table table-striped table-bordered"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>الاسم </th>
                                        <th>تفاصيل</th>
                                        <th> الصورة </th>
                                        <th> القسم </th>
                                        <th> القسم الفرعي</th>
                                        <th>التقييم</th>
                                        <th> الحالة </th>
                                        <th>التحكم </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($data) > 0 && !empty($data))
                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>
                                                    <img src="{{ config('provider_storage') . $item->image }}"
                                                        width="200" height="100" alt="">
                                                </td>
                                                <td>{{ $item->section->title }}</td>
                                                <td>{{ $item->subsection->title }}</td>
                                                <td><span
                                                        class="badge badge-pill badge-success ml-1 mr-1">{{ $item->rate }}</span>
                                                </td>
                                                @if ($item->status == '1')
                                                    <td style="text-align: center;"><a
                                                            href="{{ url('dashboard/user/suspend/' . $item->id) }}"
                                                            class="badge badge-success status-btn"
                                                            style="width:80px;height: 25px;padding:auto;margin:auto;
                                                    padding-top: 7px; font-size: small">نشط</a>
                                                    </td>
                                                @else
                                                    <td style="text-align: center;"><a
                                                            href="{{ url('dashboard/user/activate/' . $item->id) }}"
                                                            class="badge badge-danger status-btn"
                                                            style="width:80px;height: 25px;padding:auto;margin:auto;
                                                    padding-top: 7px; font-size: small">غير
                                                            نشط</a></td>
                                                @endif

                                                <td style="text-align: center;">
                                                    <a href="{{ url('dashboard/providers/edit/' . $item->id) }}"
                                                        class="text-info mr-2">
                                                        <i class="nav-icon i-Eye font-weight-bold "></i>
                                                    </a>
                                                    <a href="{{ url('dashboard/providers/destroy/' . $item->id) }}"
                                                        class="text-danger mr-2">
                                                        <i class="nav-icon i-Close-Window font-weight-bold delete-btn"></i>
                                                    </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>

                            </table>
                        </div>
                    @else
                        <p class="alert alert-danger text-danger"> لا يوجد بيانات حاليا</p>
                    @endif

                </div>
            </div>
        </div>
        <!-- end of col -->

    </div>
    <!-- end of row -->


@endsection
<!-- ============ Body content End ============= -->
@section('js')
    <script>
        $(document).ready(function() {

            $("#alternative_pagination_table").on('click', '.status-btn', function() {
                var id = $(this).attr('id');
                var r = confirm("هل انت متاكد من تغيير الحالة");
                if (!r) {
                    return false
                }
            });

            $("#alternative_pagination_table").on('click', '.delete-btn', function() {
                var id = $(this).attr('id');
                var r = confirm("هل انت متاكد من عمليه الحذف ؟");
                if (!r) {
                    return false
                }
            });
        });
    </script>
@endsection
