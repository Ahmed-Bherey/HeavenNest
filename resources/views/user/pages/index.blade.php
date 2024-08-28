@extends('user.layouts.includes.master')
{{-- @section('title') اضافة مستخدم @endsection --}}
@section('content')
    <!-- Section: Hero -->
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>أفضل الخيارات العقارية</h1>
                <p>استثمر في العقارات مع أفضل الخيارات في أسواقنا المحلية.</p>
                <button>استفسر الآن</button>
            </div>
        </div>
    </section>

    <!-- Section: About Us -->
    <section class="about-us">
        <div class="container">
            <h2>من نحن</h2>
            <div class="about-content" data-aos="fade-right" data-aos-duration="2000">
                <div class="about-text">
                    <p>نحن حريصون على تلبية احتياجات المواطنين والسكان وتيسير البحث عن العقارات في الامارات .

                        لذلك درسنا السوق وركزنا على إيجاد حلول تلبي الباحثين عن العقارات والوكلاء العقاريين.

                        الآن تستمتعون بالاختيار بين العديد من الوحدات السكنية المختلفة وتتمتعون بالرفاهية الكاملة قرب كل
                        الخدمات في الإمارات مع كل الخدمات القانونية والمؤسسات المالية التي تساعدكم </p>
                </div>
                <div class="about-image">
                    <img src="{{ asset('public/user/img/about_us.jpg') }}" alt="من نحن">
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Latest Properties -->

    <div class="latest-properties">
        <h2>أحدث العقارات</h2>
        <div class="tabs">
            @foreach ($countries as $country)
                <button class="tab-link" onclick="openCountry(event, '{{ $country->id }}')">{{ $country->name }}</button>
            @endforeach
        </div>

        @foreach ($countries as $country)
            <div id="{{ $country->id }}" class="tab-content" style="display: none;">
                @foreach ($country->real_estate as $realEstate)
                    <div class="property-card" data-aos="zoom-in" data-aos-duration="2000">
                        <a href="{{ route('user.real-estates.details', $realEstate->id) }}">
                            <img src="{{ asset('/public/' . Storage::url($realEstate->img)) }}"
                                alt="{{ $realEstate->title }}">
                            <h3>{{ $realEstate->title }}</h3>
                            <p>{{ $realEstate->desc }}</p>
                            <p>السعر: {{ $realEstate->price }}</p>
                        </a>
                    </div>
                @endforeach
                <!-- الزر يجب أن يكون داخل الـ tab-content لكي يظهر أسفل العقارات -->
                <div class="text-center mt-3">
                    <a href="{{ route('user.country.real-estates', $country->id) }}" class="realestate-btn">عرض المزيد من
                        العقارات في {{ $country->name }}</a>
                </div>
            </div>
        @endforeach
    </div>



    <!-- Section: Our Properties -->
    <section class="our-properties">
        <div class="container">
            <h2>احدث الاضافات</h2>
            <div class="properties-grid">
                @foreach ($realEstates as $realEstate)
                    <div class="property-card" data-aos="fade-up" data-aos-duration="2000">
                        <a href="{{ route('user.real-estates.details', $realEstate->id) }}">
                            <img src="{{ asset('/public/' . Storage::url($realEstate->img)) }}"
                                alt="{{ $realEstate->title }}">
                            <h3>{{ $realEstate->title }}</h3>
                            <p>{{ $realEstate->desc }}</p>
                            <p>السعر: {{ $realEstate->price }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="{{ route('user.real-estates') }}" class="realestate-btn">للمزيد اضغط هنا</a>
        </div>
    </section>
@endsection
