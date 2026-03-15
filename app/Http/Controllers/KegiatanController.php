<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver; 

class KegiatanController extends Controller
{

    public function index()
    {
        $data = Kegiatan::all();

        return view('backend.kegiatan.index', compact('data'));
    }


    public function create()
    {
        return view('backend.kegiatan.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'resume' => 'nullable|string',
        ]);
    
            $data = new Kegiatan();
            $data->name = $request->name;
            $data->resume = $request->resume;
            if ($request->hasFile('img')) {
                $this->validate($request, [
                    'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
                    'resume' => 'nullable|string',
                ]);
            
                $file = $request->file('img');
                $image_name = time() . '_' . $file->getClientOriginalName();
            
                $manager = new ImageManager(new Driver());
                $img = $manager->read($file->getRealPath());
            
                $img = $img->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });
            
                $img->toPng()->save(public_path('kegiatan/thumbnail/' . $image_name));
            
                $file->move(public_path('kegiatan'), $image_name);
            
                $data->img = $image_name;
            }
    
            $data->save();
            return redirect()->route('index.kegiatan')->with('msg', 'Data berhasil ditambah');
    }


    public function show($id)
    {
        $data = Kegiatan::find($id);

        return view('backend.kegiatan.show', compact('data'));
    }

    
    public function edit($id)
    {
        $data = Kegiatan::findOrFail($id);
        return view('backend.kegiatan.edit', compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $data = Kegiatan::findOrFail($id);
        $data->name = $request->name;
        $data->resume = $request->resume;
    
        if ($request->hasFile('img')) {
            $this->validate($request, [
                'img' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
                'resume' => 'nullable|string',
            ]);
    
            // Hapus gambar lama jika ada
            if ($data->img && file_exists(public_path('kegiatan/' . $data->img))) {
                unlink(public_path('kegiatan/' . $data->img));
            }
            if ($data->img && file_exists(public_path('kegiatan/thumbnail/' . $data->img))) {
                unlink(public_path('kegiatan/thumbnail/' . $data->img));
            }
    
            $file = $request->file('img');
            $image_name = time() . '_' . $file->getClientOriginalName();
    
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file->getRealPath());
    
            $img = $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            $img->toPng()->save(public_path('kegiatan/thumbnail/' . $image_name));
            $file->move(public_path('kegiatan'), $image_name);
    
            $data->img = $image_name;
        }
    
        $data->save();
        return redirect()->route('index.kegiatan')->with('msg', 'Data berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $data = Kegiatan::findOrFail($id);
        if ($data->img && file_exists(public_path('kegiatan/' . $data->img))) {
            unlink(public_path('kegiatan/' . $data->img));
        }
        if ($data->img && file_exists(public_path('kegiatan/thumbnail/' . $data->img))) {
            unlink(public_path('kegiatan/thumbnail/' . $data->img));
        }
        $data->delete();
        return redirect(route('index.kegiatan'))->with('msg', 'Data berhasil dihapus');
    }

    // Untuk menampilkan semua kegiatan di halaman publik
public function listPublik()
{
    $kegiatan = Kegiatan::latest()->get();
    return view('frontend.kegiatan', compact('kegiatan'));
}

// Untuk menampilkan detail kegiatan publik
public function detailPublik($id)
{
    $data = Kegiatan::findOrFail($id);
    return view('frontend.kegiatan-detail', compact('data'));
}

}
