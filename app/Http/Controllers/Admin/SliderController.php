<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('admin.slider.index',compact('slider'));
    }
    public function add()
    {
       return view('admin.slider.add');
    }
    public function insert(Request $request)
    {
        $slider = new Slider();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/slider/',$filename);
            $slider->image = $filename;
        }

        $slider->alt = $request->input('alt');
        $slider->status = $request->input('status') == TRUE ? '1':'0';
        $slider->image = $slider->image;
        $slider->save();
       return redirect('/sliders')->with('status',"Slider Added Successfully");
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/slider/'.$slider->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/slider/',$filename);
            $slider->image = $filename;
        }
        $slider->alt = $request->input('alt');
        $slider->status = $request->input('status') == TRUE ? '1':'0';
        $slider->update();
        return redirect('/sliders')->with('status',"Slider Updated Successfully");
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if($slider->image)
        {
            $path = 'assets/uploads/slider/'.$slider->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $slider->delete();
        return redirect('sliders')->with('status',"Slider Deleted Successfully");
    }
}
