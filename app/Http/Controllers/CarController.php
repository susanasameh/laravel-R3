<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car=Car::get();
        return view("carTable",compact("car"));
        // return view('carTable');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //to insert and add data to db table
        $car=new Car();
        $car->title=$request->title;
        $car->description=$request->description;
        if(isset($request->published)){
            $car->published=1;
        }else{
            $car->published=0;
        }
        $car->save();
        return "data added successfully";

        //add static data to db

        // $car=new Car();
        // $car->title="BMW";
        // $car->description="BMWdescription";
        // $car->published= 1;
        // $car->save();
        // return "DATA Added successfully";

        //to return all data in form
        //return dd($request->request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
