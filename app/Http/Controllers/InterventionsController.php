<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intervention;

class InterventionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interventions = Intervention::all();
        return view('interventions.index')->with('interventions', $interventions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('interventions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'address' => 'required',
            'type' => 'required'
        ]);

        $intervention = new Intervention;
        $intervention->description = $request->input('description');
        $intervention->address = $request->input('address');
        $intervention->type = $request->input('type');
        $intervention->save();
        return redirect('/interventions')->with('success', 'Intervencija kreirana');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intervention = Intervention::find($id);
        return view('interventions.show')->with('intervention', $intervention);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $intervention = Intervention::find($id);
        return view('interventions.edit')->with('intervention', $intervention);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required',
            'address' => 'required',
            'type' => 'required'
        ]);

        $intervention = Intervention::find($id);
        $intervention->description = $request->input('description');
        $intervention->address = $request->input('address');
        $intervention->type = $request->input('type');
        $intervention->save();
        return redirect('/interventions')->with('success', 'Intervencija ažurirana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intervention = Intervention::find($id);
        $intervention->delete();
        return redirect('/interventions')->with('success', 'Intervencija obrisana');
    }
}
