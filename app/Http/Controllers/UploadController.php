<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');

            // Simpan file tanpa validasi (rentan)
            $fileName = $file->getClientOriginalName();

            // Simpan di folder storage/app/public/uploads
            $path = $file->storeAs('public/uploads', $fileName);

            // Kembalikan URL akses file
            return response()->json([
                'success' => true,
                'url' => '/storage/uploads/' . $fileName
            ]);
        }

        return response()->json(['success' => false, 'message' => 'No file uploaded']);
    }
}
