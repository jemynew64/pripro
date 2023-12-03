<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Turn;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $route = Route::paginate(3);
        echo view('admin.route.index',compact("route"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $route = new Route();
        echo view('admin.route.create', compact('route'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Route::create($data);
        return redirect("route");
    }

    /**
     * Display the specified resource.
     */
    public function show(Route $route)
    {
        echo view('admin.route.show', compact('route'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Route $route)
    {
        echo view('admin.route.edit', compact('route'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Route $route)
    {
        $data = $request->all();
        $route->update($data);
        //aca pones tu redirect solo pones la ruta 
        return redirect("route");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Route $route)
    {
        $route->delete();
        return to_route("route.index");
    }
}
