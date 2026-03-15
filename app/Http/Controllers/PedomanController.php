<?php

namespace App\Http\Controllers;

use App\Models\Pedoman;
use App\Models\Rfc;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver; 
use Illuminate\Support\Str;

class PedomanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pedoman::all();

        return view('backend.pedoman.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pedoman.create');
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
            'name' => 'required',
            'type' => 'required',
        ]);
    
            $data = new Pedoman();
            $data->name = $request->name;
            $data->type = $request->type;
            if ($request->hasFile('img')) {
                $this->validate($request, [
                    'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
                ]);
            
                $file = $request->file('img');
                $image_name = time() . '_' . $file->getClientOriginalName();
            
                $manager = new ImageManager(new Driver());
                $img = $manager->read($file->getRealPath());
            
                $img = $img->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });
            
                $img->toPng()->save(public_path('pedoman/thumbnail/' . $image_name));
            
                $file->move(public_path('pedoman'), $image_name);
            
                $data->img = $image_name;
            }

            if ($request->hasFile('pdf')) {
                $pdf = $request->file('pdf');
                $pdf_name = time() . '_' . Str::random(5) . '.' . $pdf->getClientOriginalExtension();
                $pdf->move(public_path('pedoman/pdf'), $pdf_name);
        
                $data->pdf = $pdf_name;
            }
    
            $data->save();
            return redirect()->route('index.pedoman')->with('msg', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedoman  $pedoman
     * @return \Illuminate\Http\Response
     */
    public function show(Pedoman $pedoman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedoman  $pedoman
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pedoman::findOrFail($id);
        return view('backend.pedoman.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedoman  $pedoman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
        ]);
    
        $data = Pedoman::findOrFail($id);
        $data->name = $request->name;
        $data->type = $request->type;
    
        if ($request->hasFile('img')) {
            $this->validate($request, [
                'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            // Hapus gambar lama
            if ($data->img) {
                $oldImagePath = public_path('pedoman/' . $data->img);
                $oldThumbnailPath = public_path('pedoman/thumbnail/' . $data->img);
    
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                if (file_exists($oldThumbnailPath)) {
                    unlink($oldThumbnailPath);
                }
            }
    
            // Upload gambar baru
            $file = $request->file('img');
            $image_name = time() . '_' . $file->getClientOriginalName();
    
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file->getRealPath());
    
            $img = $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            $img->toPng()->save(public_path('pedoman/thumbnail/' . $image_name));
    
            $file->move(public_path('pedoman'), $image_name);
    
            $data->img = $image_name;
        }

        if ($request->hasFile('pdf')) {
            if ($data->pdf && file_exists(public_path('pedoman/pdf/' . $data->pdf))) {
                unlink(public_path('pedoman/pdf/' . $data->pdf));
            }
    
            $pdf = $request->file('pdf');
            $pdf_name = time() . '_' . Str::random(5) . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('pedoman/pdf'), $pdf_name);
    
            $data->pdf = $pdf_name;
        }
    
        $data->save();
    
        return redirect()->route('index.pedoman')->with('msg', 'Data berhasil diupdate');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedoman  $pedoman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pedoman::findOrFail($id);
    
        // Hapus gambar
        if ($data->img) {
            $imagePath = public_path('pedoman/' . $data->img);
            $thumbnailPath = public_path('pedoman/thumbnail/' . $data->img);
    
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            if (file_exists($thumbnailPath)) {
                unlink($thumbnailPath);
            }
        }
    
        // Hapus data dari database
        $data->delete();
    
        return redirect()->route('index.pedoman')->with('msg', 'Data berhasil dihapus');
    }
    
}
