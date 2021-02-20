<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{
    public function view() {
        $packages = Package::get();
        return view('pages.packages',[
            'packages'=>$packages
        ]);
    }
}
