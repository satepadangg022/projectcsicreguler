<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver; 

class BeritaController extends Controller
{

    public function index()
    {
        $data = Berita::all();

        return view('backend.berita.index', compact('data'));
    }


    public function create()
    {
        return view('backend.berita.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
            'source' => 'required',
        ]);
    
            $data = new Berita();
            $data->title = $request->title;
            $data->sub_title = $request->sub_title;
            $data->desc = $request->desc;
            $data->source = $request->source;
            $data->source2 = $request->source2;
            $data->source3 = $request->source3;
            $data->source4 = $request->source4;
            $data->source5 = $request->source5;
            $data->source6 = $request->source6;
            $data->source7 = $request->source7;
            $data->source8 = $request->source8;
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
            
                $img->toPng()->save(public_path('berita/thumbnail/' . $image_name));
            
                $file->move(public_path('berita'), $image_name);
            
                $data->img = $image_name;
            }
    
            $data->save();
            return redirect()->route('index.berita')->with('msg', 'Data berhasil ditambah');
    }


    public function show($id)
    {
        $data = Berita::find($id);

        return view('backend.berita.show', compact('data'));
    }

    
    public function edit($id)
    {
        $data = Berita::findOrFail($id);
        return view('backend.berita.edit', compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $data = Berita::findOrFail($id);
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->desc = $request->desc;
        $data->source = $request->source;
        $data->source2 = $request->source2;
        $data->source3 = $request->source3;
        $data->source4 = $request->source4;
        $data->source5 = $request->source5;
        $data->source6 = $request->source6;
        $data->source7 = $request->source7;
        $data->source8 = $request->source8;
        if ($request->hasFile('img')) {
            $this->validate($request, [
                'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            ]);
    
            // Hapus gambar lama jika ada
            if ($data->img && file_exists(public_path('berita/' . $data->img))) {
                unlink(public_path('berita/' . $data->img));
            }
            if ($data->img && file_exists(public_path('berita/thumbnail/' . $data->img))) {
                unlink(public_path('berita/thumbnail/' . $data->img));
            }
    
            $file = $request->file('img');
            $image_name = time() . '_' . $file->getClientOriginalName();
    
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file->getRealPath());
    
            $img = $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            $img->toPng()->save(public_path('berita/thumbnail/' . $image_name));
            $file->move(public_path('berita'), $image_name);
    
            $data->img = $image_name;
        }
    
        $data->save();
        return redirect()->route('index.berita')->with('msg', 'Data berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $data = Berita::findOrFail($id);
        if ($data->img && file_exists(public_path('berita/' . $data->img))) {
            unlink(public_path('berita/' . $data->img));
        }
        if ($data->img && file_exists(public_path('berita/thumbnail/' . $data->img))) {
            unlink(public_path('berita/thumbnail/' . $data->img));
        }
        $data->delete();
        return redirect(route('index.berita'))->with('msg', 'Data berhasil dihapus');
    }
}
