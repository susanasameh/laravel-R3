<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{

    private $columns = [
        'title',
        'description',
        'published',
    ];

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
        $data=$request->validate([
            "title"=>'required|string|max:50',
            "description"=>'required|string',
        ]);
        $data['published']=isset($request->published);
        Car::create($data);
        return redirect('car');


        //use model+controll method to insert data
        //use protected $fillable

        // $data=$request->only($this->columns);
        // $data['published']=isset($request->published);
        // Car::create($data);
        // return redirect('car');


        //to insert and add data to db table
        // $car=new Car();
        // $car->title=$request->title;
        // $car->description=$request->description;
        // if(isset($request->published)){
        //     $car->published=1;
        // }else{
        //     $car->published=0;
        // }
        // $car->save();
        // return "data added successfully";

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
        $car = Car::findOrFail($id);
        return view('showCar',compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('updateCar',compact("car"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->only($this->columns);
        $data['published']=isset($request->published);
        Car::where('id',$id)->update($data);
        return redirect('car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id',$id)->delete();
        return redirect('car');
    }

    public function trashed()
    {
        $car=Car::onlyTrashed()->get();
        return view('trashed',compact('car'));
    }

    public function forceDelete(string $id)
    {
        Car::where('id',$id)->forceDelete();
        return redirect('car');
    }

    public function restore(string $id)
    {
        Car::where('id',$id)->restore();
        return redirect('car');
    }
}
