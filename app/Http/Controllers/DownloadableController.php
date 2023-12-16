<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Downloadable;

class DownloadableController extends Controller
{
    public function store(Request $request) {
        // return $request->all();
        $request->validate([
            // 'title' => 'required',
            // 'amount' => 'required|numeric|min:99700|between:0,99.99',
            // 'number_of_accounts' => 'required|numeric|min:1|max:15',
            'pdf_file' => 'required|mimes:pdf|max:50000',
        ]);

        $pdf_file = $request->file('pdf_file');

        $path = $pdf_file->store('pdfs', 'public');

        $downloadable = Downloadable::create([
            'name' => $request->name,
            'filepath' => $path,
            // 'status' => $request->status,
            // 'cover_image' => $request->cover_image,
        ]);
        return back()->with('msg', 'Resource registered successfuly');
    }

    public function edit($id) {
        $downloadables = Downloadable::find($id);
        return view('admin.download_edit', compact('downloadables'));
    }
}
