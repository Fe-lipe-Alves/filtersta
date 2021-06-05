<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function filter()
    {
        return view('apply-filter');
    }

    public function applyFilter(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $nome = $file->getClientOriginalName();

            $path_file = $file->store('public/pre');

            $path_get = "../storage/app/".$path_file;
            $path_set = "../storage/app/public/pos/".$nome;
            $command_py = "python ../python/gray-filter.py ". $path_get ." $path_set";
            shell_exec($command_py);

            return Storage::download("public/pos/".$nome);
        } else {
            return redirect()->back();
        }
    }
}
