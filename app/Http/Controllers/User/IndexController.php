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
        $countries = Country::with('real_estate')->get();
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
}
