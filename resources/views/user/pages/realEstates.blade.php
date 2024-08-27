@extends('user.layouts.includes.master')
{{-- @section('title') اضافة مستخدم @endsection --}}
@section('content')
    <!-- Section: Hero -->
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')

    <!-- Section: Our Properties -->
    <section class="our-properties">
        <div class="container">
            {{-- <h2>العقارات</h2> --}}
            <div class="properties-grid">
                @foreach ($realEstates as $realEstate)
                    <div class="property-card" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="{{ asset('/public/' . Storage::url($realEstate->img)) }}"
                                alt="{{ $realEstate->title }}">
                            <h3>{{ $realEstate->title }}</h3>
                            <p>{{ $realEstate->desc }}</p>
                            <p>السعر: {{ $realEstate->price }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
