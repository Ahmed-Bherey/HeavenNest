@extends('user.layouts.includes.master')
{{-- @section('title') اضافة مستخدم @endsection --}}
@section('content')
    <!-- Section: Hero -->
    @include('admin.layouts.alerts.success')
    @include('admin.layouts.alerts.error')
    <div class="container">
        <div class="main-content">
            <div class="property-highlight">
                <img src="{{ asset('/public/' . Storage::url($realEstate->img)) }}" class="highlight-image">
                <div class="highlight-details">
                    <h1>{{ $realEstate->title }}</h1>
                    <p>{{ $realEstate->price }}</p>
                    <p>{{ $realEstate->desc }}</p>
                    <button>استفسر الآن</button>
                </div>
            </div>

            <div class="property-details">
                <div class="property-description">
                    <h2>تفاصيل العقار</h2>
                    <p>{{ $realEstate->desc }}</p>
                </div>
                <div class="contact-form">
                    <h2>تواصل معنا</h2>
                    <form>
                        <input type="text" placeholder="الاسم" required>
                        <input type="email" placeholder="البريد الإلكتروني" required>
                        <input type="text" placeholder="هاتف" required>
                        <button type="submit">إرسال</button>
                    </form>
                </div>
            </div>

            <div class="related-properties">
                <h2>ربما يعجبك أيضًا</h2>
                <div class="properties-grid">
                    @foreach ($countryRealEstates as $countryRealEstate)
                        <div class="property-card">
                            <a href="{{ route('user.real-estates.details', $countryRealEstate->id) }}">
                                <img src="{{ asset('/public/' . Storage::url($countryRealEstate->img)) }}" alt="Property 1">
                                <h3>{{ $countryRealEstate->title }}</h3>
                                <p>{{ $countryRealEstate->price }}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
