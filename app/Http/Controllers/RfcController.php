<?php

namespace App\Http\Controllers;

use App\Models\Rfc;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver; 
use Illuminate\Support\Str;

class RfcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Rfc::all();

        return view('backend.rfc.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.rfc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'img' => 'nullable|file|image|mimes:jpeg,png,jpg|max:8192',
            'pdf' => 'nullable|file|mimes:pdf|max:5120', // maksimal 5MB
        ]);
    
        $data = new Rfc();
        $data->title = $request->title;
    
        // Handle Upload Gambar
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $image_name = time() . '_' . Str::random(5) . '.' . $file->getClientOriginalExtension();
    
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file->getRealPath());
    
            $img = $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            $img->toPng()->save(public_path('rfc/thumbnail/' . $image_name));
    
            $file->move(public_path('rfc'), $image_name);
    
            $data->img = $image_name;
        }
    
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdf_name = time() . '_' . Str::random(5) . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('rfc/pdf'), $pdf_name);
    
            $data->pdf = $pdf_name;
        }
    
        $data->save();
    
        return redirect()->route('index.rfc')->with('msg', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function show(Rfc $rfc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Rfc::findOrFail($id);
        return view('backend.rfc.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'img' => 'nullable|file|image|mimes:jpeg,png,jpg|max:8192',
            'pdf' => 'nullable|file|mimes:pdf|max:5120',
        ]);
    
        $data = Rfc::findOrFail($id);
        $data->title = $request->title;
    
        if ($request->hasFile('img')) {
            if ($data->img && file_exists(public_path('rfc/' . $data->img))) {
                unlink(public_path('rfc/' . $data->img));
            }
            if ($data->img && file_exists(public_path('rfc/thumbnail/' . $data->img))) {
                unlink(public_path('rfc/thumbnail/' . $data->img));
            }
    
            $file = $request->file('img');
            $image_name = time() . '_' . Str::random(5) . '.' . $file->getClientOriginalExtension();
    
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file->getRealPath());
    
            $img = $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            $img->toPng()->save(public_path('rfc/thumbnail/' . $image_name));
    
            $file->move(public_path('rfc'), $image_name);
    
            $data->img = $image_name;
        }
    
        if ($request->hasFile('pdf')) {
            if ($data->pdf && file_exists(public_path('rfc/pdf/' . $data->pdf))) {
                unlink(public_path('rfc/pdf/' . $data->pdf));
            }
    
            $pdf = $request->file('pdf');
            $pdf_name = time() . '_' . Str::random(5) . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('rfc/pdf'), $pdf_name);
    
            $data->pdf = $pdf_name;
        }
    
        $data->save();
    
        return redirect()->route('index.rfc')->with('msg', 'Data berhasil diupdate');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rfc  $rfc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Rfc::findOrFail($id);
    
        if ($data->img) {
            $imagePath = public_path('rfc/' . $data->img);
            $thumbnailPath = public_path('rfc/thumbnail/' . $data->img);
    
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            if (file_exists($thumbnailPath)) {
                unlink($thumbnailPath);
            }
        }
    
        if ($data->pdf) {
            $pdfPath = public_path('rfc/pdf/' . $data->pdf);
            if (file_exists($pdfPath)) {
                unlink($pdfPath);
            }
        }
    
        $data->delete();
    
        return redirect()->route('index.rfc')->with('msg', 'Data berhasil dihapus');
    }
    
}
