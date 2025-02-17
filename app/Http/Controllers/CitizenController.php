<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Pasport;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function pasportshow()
    {
        //
        $pasports = Citizen::with('pasports')->get();
        return view('toys.citizen', compact('pasports'));
        // return $pasports;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function citizenshow()
    {
        //
        $citizens = Pasport::with('citizens')->get();
        return view('toys.citizen', compact('citizens'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }


}
