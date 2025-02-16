<?php
namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    // Show all toys
    public function index()
    {
        $toys = Toy::all();
        return view('toys.index', compact('toys'));
    }

    // Show create form
    public function create()
    {
        return view('toys.create');
    }

    // Store new toy
    public function store(Request $request)
    {
        Toy::create($request->all());
        return redirect()->route('toys.index');
    }

    // Show edit form
    public function edit(Toy $toy)
    {
        return view('toys.edit', compact('toy'));
    }

    // Update toy
    public function update(Request $request, Toy $toy)
    {
        $toy->update($request->all());
        return redirect()->route('toys.index');
    }

    // Delete toy
    public function destroy(Toy $toy)
    {
        $toy->delete();
        return redirect()->route('toys.index');
    }
}
