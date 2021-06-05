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

    public function getText()
    {
        return view('image-to-text');
    }

    public function applyFilter(Request $request)
    {
        if ($request->hasFile('image')) {
            $file_response = $request->file('image');
            $nome = $file_response->getClientOriginalName();

            $path_file = $file_response->store('public/pre');

            $path_get = "../storage/app/".$path_file;
            $path_set = "../storage/app/public/pos/".$nome;
            $command_py = "python ../python/gray-filter.py \"{$path_get}\" \"{$path_set}\"";
            $response = shell_exec($command_py."  2>&1");

            Storage::delete($path_file);
            return response()->download(storage_path('app/public/pos/'.$nome))->deleteFileAfterSend(true);
        } else {
            return redirect()->back();
        }
    }

    public function imageToText(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagename = $file->getClientOriginalName();
            $path_file = $file->store('public/text');

            $path_get = "../storage/app/".$path_file;
            $command_py = "python ../python/image-to-text.py {$path_get} 2>&1";
            $raw_text = utf8_encode(shell_exec($command_py));
            $text = substr($raw_text, 0, -2);

            if ($text == " \n") {
                $text = "";
            }

            Storage::delete($path_file);
            return view('result-text', compact('imagename', 'text'));
        } else {
            return redirect()->back();
        }
    }
}
