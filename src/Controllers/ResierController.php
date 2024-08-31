<?php

namespace ResierPackage\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ResierPackage\Models\ResierModel;
use Inertia\Inertia;

class ResierController extends Controller
{
    public function index()
    {
        $data = ResierModel::getExampleData();
        return Inertia::render('Resier/Index', ['data' => $data]);
    }
}