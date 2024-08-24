@extends('admin.layouts.includes.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            {{-- start card --}}
            <div class="row mt-1">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header header-bg">
                            <h3 class="card-title header-title">تعديل بيانات العقار "{{$realEstate->title}}"</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('admin.layouts.alerts.success')
                        @include('admin.layouts.alerts.error')
                        <form class="form-horizontal" action="{{ route('realEstate.update', $realEstate->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                {{-- row 1 --}}
                                <div class="row mb-3">
                                    <div class="row col-9">
                                        <div class="col-4 form-floating">
                                        <select required class="form-control js-example-basic-single" name="country_id"
                                            id="country_id">
                                            <option value="">اختر الدولة</option>
                                            @foreach ($countries as $key => $country)
                                                <option value="{{ $country->id }}"
                                                    @if ($realEstate->country_id == $country->id) selected @endif>{{ $country->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <label for="country_id" class="col-form-label n_right">اختر الدولة</label>
                                    </div>
                                    <div class="col-4 form-floating">
                                        <input type="text" class="form-control" name="title"
                                            value="{{ $realEstate->title }}" placeholder="العنوان">
                                        <label for="title" class="col-form-label ">العنوان</label>
                                    </div>
                                    <div class="col-4 form-floating">
                                        <input type="text" class="form-control" name="price"
                                            value="{{ $realEstate->price }}" placeholder="السعر">
                                        <label for="price" class="col-form-label ">السعر</label>
                                    </div>
                                    <div class="col-4 form-floating">
                                        <input type="file" class="form-control" name="img" placeholder="اختر صورة">
                                        <label for="img" class="col-form-label ">اختر صورة</label>
                                    </div>
                                    <div class="col-4 form-floating ">
                                        <textarea class="form-control" rows="1" name="desc" placeholder="الوصف">{{ $realEstate->desc }}</textarea>
                                        <label for="desc" class="col-form-label ">الوصف</label>
                                    </div>
                                    </div>
                                    <div class="col-3">
                                        <img src="{{ asset('/public/' . Storage::url($realEstate->img)) }}"
                                                style="max-width: 100%;" id="imgshow">
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
