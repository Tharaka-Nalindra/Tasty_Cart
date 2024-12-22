<?php

namespace App\Http\Controllers;

use Flasher\Toastr\Prime\ToastrInterface;

use App\Models\category;
use Illuminate\Http\Request;

class AdminControlle extends Controller
{
    public function view_category()
    {
        return view('admin.category');
    }
    public function categorie(Request $request)
    {
        $data = new category();
        $data->category_name = $request->category;

        $data->save();

        toastr()->success('Your account has been re-verified.');


        return redirect()->back();
    }
}
