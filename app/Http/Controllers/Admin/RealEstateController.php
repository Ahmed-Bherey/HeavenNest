<?php

namespace App\Http\Controllers\Admin;

use App\Models\RealEstate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Support\Facades\Storage;

class RealEstateController extends Controller
{
    public function index()
    {
        $realEstates = RealEstate::get();
        $countries = Country::get();
        return view('admin.pages.realEstates.create', compact('realEstates', 'countries'));
    }

    public function store(Request $request)
    {
        $imgPath = null;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $imgPath = $file->store('images', 'public');
        }

        $realEstate = RealEstate::create([
            'user_id' => 1, // يمكنك استبدال هذا بالقيمة المناسبة
            'country_id' => $request->country_id,
            'img' => $imgPath, // سيتم تخزين المسار النسبي للصورة
            'title' => $request->title,
            'price' => $request->price,
            'desc' => $request->desc,
        ]);
        return redirect()->route('realEstate.index')->with(['success' => "تم اضافة العقار بنجاح"]);
    }

    public function edit($id)
    {
        $countries = Country::get();
        $realEstate = RealEstate::findOrFail($id);
        return view('admin.pages.realEstates.edit', compact('realEstate','countries'));
    }

    public function update(Request $request, $id)
    {
        $realEstate = RealEstate::findOrFail($id);
        $imgPath = $realEstate->attach;
        if ($request->hasFile('img')) {
            if ($imgPath && Storage::disk('public')->exists($imgPath)) {
                Storage::disk('public')->delete($imgPath);
            }
            $file = $request->file('img');
            $imgPath = $file->store('images', 'public');
        }

        $realEstate->update([
            'user_id' => 1,
            'country_id' => $request->country_id,
            'img' => $imgPath,
            'title' => $request->title,
            'price' => $request->price,
            'desc' => $request->desc,
        ]);
        return redirect()->route('realEstate.index')->with(['success' => "تم تحديث بيانات العقار بنجاح"]);
    }

    public function destroy($id)
    {
        $realEstate = RealEstate::findOrFail($id);
        $realEstate->delete();
        return redirect()->route('realEstate.index')->with(['success' => "تم حذف العقار بنجاح"]);;
    }
}
