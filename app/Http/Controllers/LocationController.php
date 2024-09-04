<?php
// app/Http/Controllers/LocationController.php
namespace App\Http\Controllers;

use App\Models\Upazila;
use App\Models\District;
use App\Models\Division;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $divisions = Division::all();
        return view('locations.index', compact('divisions'));
    }

    // Fetch districts based on division
    public function getDistricts($divisionId)
    {
        $districts = District::where('division_id', $divisionId)->get();
        return response()->json($districts);
    }

    // Fetch upazilas based on district
    public function getUpazilas($districtId)
    {
        $upazilas = Upazila::where('district_id', $districtId)->get();
        return response()->json($upazilas);
    }
}