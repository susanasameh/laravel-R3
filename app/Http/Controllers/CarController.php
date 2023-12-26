<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Car;
use App\Traits\Common;

class CarController extends Controller
{
    use Common;

    // private $columns = [
    //     'title',
    //     'description',
    //     'published',
    // ];

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

        // $messages=[
        //     'title.required'=>'العنوان مطلوب',
        //     'title.string'=>'Should be string',
        //     'description.required'=> 'should be text',
        //     ];
        $messages = $this->messages();
        $data=$request->validate([
            "title"=>'required|string|max:50',
            "description"=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:2048',
        ],$messages);
        $fileName = $this->uploadFile($request->image, 'assets/images');
        $data['image'] = $fileName;
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
        //best answer
        $messages = $this->messages();
        $data = $request->validate([
             'title'=>'required|string|max:50',
             'description'=> 'required|string',
             //sometimes mean not required very important
             'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
            ], $messages);

            if($request->hasFile('image')){
                $fileName = $this->uploadFile($request->image, 'assets/images');
                $data['image'] = $fileName;
                unlink("assets/images/" . $request->oldImage);
            }

            $data['published'] = isset($request->published);
            Car::where('id', $id)->update($data);
            return redirect('car');


        // $data=$request->only($this->columns);

        // $messages = $this->messages();
        // $data=$request->validate([
        //     "title"=>'required|string|max:50',
        //     "description"=>'required|string',
        //     'image'=>'required|mimes:png,jpg,jpeg,webp|max:2048',
        // ],$messages);
        // $fileName = $this->uploadFile($request->image, 'assets/images');
        // $data['image'] = $fileName;
        // $data['published']=isset($request->published);
        // Car::where('id',$id)->update($data);
        // return redirect('car');

    //     $car = Car::findOrFail($id);
    //     if ($request->hasFile('image')) {
    //         // Remove old image (optional)
    //         if ($car->image !== null && Storage::exists('public/' . $car->image)) {
    //             Storage::delete('public/' . $car->image);
    //         }

    //         // Store new image
    //         $image = $request->file('image');
    //         $filename = $image->store('public/images');

    //         $car->image = $filename;
    //     }

    //     // Update other fields
    //     $car->update($request->all());

    //     return redirect()->route('your-route')->with('success', 'Image updated successfully');
    // }


    // $messages = $this->messages();
    //     $data=$request->validate([
    //         "title"=>'required|string|max:50',
    //         "description"=>'required|string',
    //         'image'=>'required|mimes:png,jpg,jpeg,webp|max:2048',
    //     ],$messages);
    //     $fileName = $this->uploadFile($request->image, 'assets/images');
    //     $data['image'] = $fileName;
    //     $data['published']=isset($request->published);
    //     // Car::where('id',$id)->update($data);
    //     // return redirect('car');
    //     $car = Car::where('id',$id)->update($data);
    // if ($request->hasFile('image')) {
    //     // Remove old image (optional)
    //     if ($car->image !== null && Storage::exists('public/' . $car->image)) {
    //         Storage::delete('public/' . $car->image);
    //     }

    //     // Store new image
    //     $image = $request->file('image');
    //     $filename = $image->store('public/images');

    //     $car->image = $filename;
    //     return redirect('car');
    // }

    // $messages = $this->messages();
    // $data = $request->validate([
    //     "title" => 'required|string|max:50',
    //     "description" => 'required|string',
    //     'image' => 'mimes:png,jpg,jpeg,webp|max:2048', // Make image optional
    // ],$messages);

    // if ($request->hasFile('image')) {
    //     $oldImage = $request->input('old_image'); // Assuming you have old image name
    //     if ($oldImage && Storage::exists('public/' . $oldImage)) {
    //         Storage::delete('public/' . $oldImage);
    //     }

    //     $fileName = $this->uploadFile($request->image, 'assets/images');
    //     $data['image'] = $fileName;
    // }

    // $data['published'] = isset($request->published);
    // Car::where('id', $id)->update($data);

    // return redirect('car');



// the task answer for validate and upload image

//     $messages = $this->messages();
//     $data = $request->validate([
//         "title" => 'required|string|max:50',
//         "description" => 'required|string',
//         'image' => 'mimes:png,jpg,jpeg,webp|max:2048', // Make image optional
//     ],$messages);
//     $fileName = $this->uploadFile($request->image, 'assets/images');

// // If a new image is uploaded, clear the old image
// if ($request->hasFile('image')) {
//     $car = Car::find($id); // Retrieve the existing Car model instance

//     if ($car->image !== null && Storage::exists('app/public/assets/images/' . $car->image)) {
//         Storage::delete('app/public/assets/images/' . $car->image); // Delete the old image file
//     }




    // Retrieve the old image path
    // $oldImagePath = $car->image;

    // Delete the old image if it exists
//     if (Storage::exists(public_path($oldImagePath))) {
//         Storage::delete(public_path($oldImagePath));
//     }

//     $data['image'] = $fileName; // Update the image field with the new filename
// }

// $data['published'] = isset($request->published);
// Car::where('id', $id)->update($data);

// return redirect('car');



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
//بدل ما اعيدها في كل مكان احتاجها فيه جوة الجدول بعملها function
//هنادي عليها في الجزء اللي انا عايزاه كده
//$messages = $this->messages();
//add $messages to validate
    public function messages(){
        return[
            'title.required'=>'اسم السيارة مطلوب',
            'title.string'=>'Should be string',
            'description.required'=> 'should be text',
            'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',

        ];
    }

}
