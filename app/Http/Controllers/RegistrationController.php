<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;


class RegistrationController extends Controller
{
    public function create() {
    return view('register');
}

public function store(Request $request) {
    $validated = $request->validate([
        'full_name' => 'required',
        'father_name' => 'required',
        'mother_name' => 'required',
        'dob' => 'required|date',
        'gender' => 'required',
        'marital_status' => 'required',
        'current_address' => 'required',
        'permanent_address' => 'required',
        'gotra_self' => 'required',
        'gotra_mother' => 'required',
        'gotra_nani' => 'required',
        'gotra_dadi' => 'required',
        'qualification' => 'required',
        'blood_group' => 'required',
        'mobile' => 'required',
        'whatsapp' => 'required',
        'work_type' => 'required',
        'satimata_place' => 'required',
        'bheruji_place' => 'required',
        'kuldevi_place' => 'required',
    ]);

    if ($request->hasFile('profile_photo')) {
        $validated['profile_photo'] = $request->file('profile_photo')->store('photos', 'public');
    }

    $validated['job_type'] = $request->job_type;
    $validated['designation'] = $request->designation;
    $validated['work_city'] = $request->work_city;

    Registration::create($validated);
    return redirect('/thank-you');
}

}
