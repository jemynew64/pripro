<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::paginate(3);
        echo view('admin.driver.index',compact("drivers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $driver = new Driver();
        echo view('admin.driver.create', compact('driver'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Driver::create($data);
        return redirect("driver");
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        echo view('admin.driver.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {
        echo view('admin.driver.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $data = $request->all();
        $driver->update($data);
        //aca pones tu redirect solo pones la ruta 
        return redirect("driver");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();
        return to_route("driver.index");
    }
}
