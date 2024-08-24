@extends('admin.layouts.includes.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            {{-- start card --}}
            <div class="row mt-1">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header header-bg">
                            <h3 class="card-title header-title">تعديل بيانات {{$country->name}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('admin.layouts.alerts.success')
                        @include('admin.layouts.alerts.error')
                        <form class="form-horizontal" action="{{ route('country.update',$country->id) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                {{-- row 1 --}}
                                <div class="row mb-3">
                                    <div class="col-6 form-floating">
                                        <input type="text" class="form-control" name="name" placeholder="الاسم" value="{{$country->name}}">
                                        <label for="name" class="col-form-label ">الاسم</label>
                                    </div>
                                    <div class="col-6 form-floating ">
                                        <textarea class="form-control" rows="1" name="desc" placeholder="الوصف">{{$country->desc}}</textarea>
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
        </div>
    </div>
@endsection
