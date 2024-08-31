<?php

namespace ResierPackage\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ResierPackage\Models\ResierModel;

class ResierController extends Controller
{
    public function index()
    {
        $data = ResierModel::getExampleData();
        return view('resier::resier-view', compact('data'));
    }
}