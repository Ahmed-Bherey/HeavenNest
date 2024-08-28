<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\RealEstate;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // جلب البلدان مع أحدث 6 عقارات لكل بلد
        $countries = Country::with(['real_estate' => function ($query) {
            $query->take(6);
        }])->get();

        // جلب العقارات مع دعم الترقيم
        $realEstates = RealEstate::paginate(6);

        return view('user.pages.index', compact('countries', 'realEstates'));
    }


    public function showProperties()
    {
        $cities = [
            [
                'id' => 'dubai',
                'name' => 'دبي',
                'properties' => [
                    ['name' => 'عقار دبي 1', 'description' => 'تفاصيل عن العقار في دبي...', 'image' => 'public/user/img/1.jpg'],
                    ['name' => 'عقار دبي 2', 'description' => 'تفاصيل عن العقار في دبي...', 'image' => 'public/user/img/1.jpg']
                ]
            ],
            [
                'id' => 'cairo',
                'name' => 'القاهرة',
                'properties' => [
                    ['name' => 'عقار القاهرة 1', 'description' => 'تفاصيل عن العقار في القاهرة...', 'image' => 'public/user/img/1.jpg'],
                    ['name' => 'عقار القاهرة 2', 'description' => 'تفاصيل عن العقار في القاهرة...', 'image' => 'public/user/img/1.jpg']
                ]
            ],
            [
                'id' => 'sharjah',
                'name' => 'الشارقة',
                'properties' => [
                    ['name' => 'عقار الشارقة 1', 'description' => 'تفاصيل عن العقار في الشارقة...', 'image' => 'public/user/img/1.jpg'],
                    ['name' => 'عقار الشارقة 2', 'description' => 'تفاصيل عن العقار في الشارقة...', 'image' => 'public/user/img/1.jpg']
                ]
            ]
        ];

        return view('user.pages.index', compact('cities'));
    }

    public function realEstates()
    {
        $countries = Country::with('real_estate')->get();
        $realEstates = RealEstate::paginate(3);
        return view('user.pages.realEstates', compact('countries', 'realEstates'));
    }

    public function realEstateDetails($realEstate_id)
    {
        $realEstate = RealEstate::findOrFail($realEstate_id);
        $countryRealEstates = RealEstate::where('country_id', $realEstate->country_id)
            ->take(3)->inRandomOrder()->get();
        return view('user.pages.realEstate_details', compact('realEstate', 'countryRealEstates'));
    }

    public function showCountryRealEstates($id)
    {
        // تحقق من وجود البلد
        $country = Country::findOrFail($id);

        // الحصول على جميع العقارات المرتبطة بهذا البلد مع التصفح
        $realEstates = $country->real_estate()->paginate(10);

        return view('user.pages.showCountryRealEstates', compact('country', 'realEstates'));
    }
}
