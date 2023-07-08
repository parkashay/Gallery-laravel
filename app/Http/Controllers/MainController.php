<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Image;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use function PHPSTORM_META\type;

class MainController extends Controller
{
    public function getPageData()
    {
        $images = Image::all();
        $about = About::all();
        return view('welcome');
    }

    public function addNewImage()
    {
        return view('pages.addnew');
    }
    public function saveImage(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        try {
            $insertion =  Image::create([
                'image' => $imageName,
                'title' => $request->title,
                'description' => $request->description
            ]);
            return redirect()->back()->with(['message' => 'Image Uploaded Successfully']);
        } catch (Exception $e) {
            return redirect()->back()->with(['message' => $e->getMessage()]);
        }
        // return redirect()->back()->with(['message' => 'Image Uploaded Successfully']);

    }

    public function getAll()
    {
        $images = Image::all();
        return view('pages.all')->with(['images' => $images]);
    }

    public function delete($id)
    {
        $image = Image::find($id);
        $imagePath = public_path('uploads/' . $image->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
            $image->delete();
            return redirect()->back()->with(['message' => 'Image Deleted Successfully']);
        }
        else{
            return redirect()->back()->with(['message' => 'Image Not Found']);
        }
    }

    public function addAbout(){
        return view('pages.addabout');
    }
    public function saveAbout(Request $request){
        $request->validate([
            'heading' =>'required',
            'description' =>'required',
        ]);

        $about = About::create([
            'heading' => $request->heading,
            'description' => $request->description
        ]);
        return redirect()->back()->with(['message' => 'About Uploaded Successfully']);
    }
}
