@extends('admin.layouts.includes.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            {{-- start card --}}
            <div class="row mt-1">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header header-bg">
                            <h3 class="card-title header-title">اضافة دولة</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('admin.layouts.alerts.success')
                        @include('admin.layouts.alerts.error')
                        <form class="form-horizontal" action="{{ route('country.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                {{-- row 1 --}}
                                <div class="row mb-3">
                                    <div class="col-6 form-floating">
                                        <input type="text" class="form-control" name="name" placeholder="الاسم">
                                        <label for="name" class="col-form-label ">الاسم</label>
                                    </div>
                                    <div class="col-6 form-floating ">
                                        <textarea class="form-control" rows="1" name="desc" placeholder="الوصف"></textarea>
                                        <label for="desc" class="col-form-label ">الوصف</label>
                                    </div>
                                </div>
                                {{-- row 2 --}}
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn bg-success-2 mr-3">
                                    <i class="fa fa-check text-light" aria-hidden="true"></i>
                                </button>
                                <button class="btn bg-secondary" type="reset">
                                    <i class="fas fa-undo"></i>
                                </button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
            {{-- end card --}}
            {{-- start card table --}}
            <div class="row mt-1">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">الدول</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1"
                                            class="table table-bordered table-striped dataTable dtr-inline"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <th>الاسم</th>
                                                    <th>الوصف</th>
                                                    <th>عمليات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($countries as $key => $country)
                                                    <tr class="odd">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $country->name }}</td>
                                                        <td>{{ $country->desc }}</td>
                                                        <td>
                                                            <a href="{{ route('country.edit', $country->id) }}"
                                                                type="submit" class="btn bg-secondary"><i
                                                                    class="far fa-edit" aria-hidden="true"></i></a>
                                                            <a href="{{ route('country.destroy', $country->id) }}"
                                                                type="submit" onclick="return confirm('Are you sure?')"
                                                                class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.content-header -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
