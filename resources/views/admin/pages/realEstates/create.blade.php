@extends('admin.layouts.includes.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            {{-- start card --}}
            <div class="row mt-1">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header header-bg">
                            <h3 class="card-title header-title">اضافة عقار</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('admin.layouts.alerts.success')
                        @include('admin.layouts.alerts.error')
                        <form class="form-horizontal" action="{{ route('realEstate.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                {{-- row 1 --}}
                                <div class="row mb-3">
                                    <div class="col-4 form-floating">
                                        <select required class="form-control js-example-basic-single" name="country_id"
                                            id="country_id">
                                            <option value="">اختر الدولة</option>
                                            @foreach($countries as $key => $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                        <label for="country_id" class="col-form-label n_right">اختر الدولة</label>
                                    </div>
                                    <div class="col-4 form-floating">
                                        <input type="text" class="form-control" name="title" placeholder="العنوان">
                                        <label for="title" class="col-form-label ">العنوان</label>
                                    </div>
                                    <div class="col-4 form-floating">
                                        <input type="text" class="form-control" name="price" placeholder="السعر">
                                        <label for="price" class="col-form-label ">السعر</label>
                                    </div>
                                    <div class="col-4 form-floating">
                                        <input type="file" class="form-control" name="img" placeholder="اختر صورة">
                                        <label for="img" class="col-form-label ">اختر صورة</label>
                                    </div>
                                    <div class="col-4 form-floating ">
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
                            <h3 class="card-title">العقارات</h3>
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
                                                    <th>الدولة</th>
                                                    <th>العنوان</th>
                                                    <th>السعر</th>
                                                    <th>الوصف</th>
                                                    <th>عمليات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($realEstates as $key => $realEstate)
                                                    <tr class="odd">
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $realEstate->countries->name }}</td>
                                                        <td>{{ $realEstate->title }}</td>
                                                        <td>{{ $realEstate->price }}</td>
                                                        <td>{{ $realEstate->desc }}</td>
                                                        <td>
                                                            <a href="{{ route('realEstate.edit', $realEstate->id) }}"
                                                                type="submit" class="btn bg-secondary"><i
                                                                    class="far fa-edit" aria-hidden="true"></i></a>
                                                            <a href="{{ route('realEstate.destroy', $realEstate->id) }}"
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
