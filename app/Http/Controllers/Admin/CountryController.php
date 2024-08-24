<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::get();
        return view('admin.pages.countries.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $country = Country::create([
            'user_id' => 1,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);
        return redirect()->back()->with(['success' => " تم  بنجاح"]);
    }

    public function edit($id)
    {
        $country = Country::findOrFail($id);
        return view('admin.pages.countries.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $country = Country::findOrFail($id);
        $country->update([
            'user_id' => 1,
            'name' => $request->name,
            'desc' => $request->desc,
        ]);
        return redirect()->route('country.index')->with(['success' => "تم تحديث البيانات بنجاح"]);
    }

    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect()->route('country.index')->with(['success' => "تم الحذف بنجاح"]);
    }
}
