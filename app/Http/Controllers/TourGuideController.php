<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourGuideRequest;
use App\Model\TourGuide;
use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    //
    public function index(){
        $query = TourGuide::all();
        return view('admin.tourguide.index', compact('query'));
    }
    public function create(){
        return view('admin.tourguide.create');
    }
    public function store(TourGuideRequest $request){
        TourGuide::query()->create([
            'tourGuide_name' => $request->tourGuide_name,
            'tourGuide_email' => $request->tourGuide_email,
            'tourGuide_phone' => $request->tourGuide_phone,
            'tourGuide_address' => $request->tourGuide_address
        ]);
        return redirect()->route('tourguide.index');
    }
    public function show($id) {
        $tourguide = TourGuide::findOrFail($id);
        return view('admin.tourguide.detail', compact('tourguide'));
    }
    public function edit(TourGuide $tourguide) {
        return view('admin.tourguide.edit', compact('tourguide'));
    }
    public function update($id, TourGuideRequest $request){
        $tourguide = TourGuide::findOrFail($id);
        $tourguide->fill($request->all());
        $tourguide->save();
        return redirect()->route('tourguide.index');
    }
    public function destroy(TourGuide $tourguide) {
        $tourguide->delete();
        return redirect()->route('tourguide.index');
    }
}
