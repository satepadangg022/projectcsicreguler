<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\File;
use Intervention\Image\Drivers\Gd\Driver; 

class InfografisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Infografis::all();

        return view('backend.infografis.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.infografis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'kategori_artikel' => 'required',
        //     'desc' => 'required',
        // ]);
    
            $data = new Infografis();

            if ($request->hasFile('img')) {
                $this->validate($request, [
                    'img' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
                ]);
            
                $file = $request->file('img');
                $image_name = time() . '_' . $file->getClientOriginalName();
            
                $manager = new ImageManager(new Driver());
                $img = $manager->read($file->getRealPath());
            
                $img = $img->resize(500, 500, function ($constraint) {
                    $constraint->aspectRatio();
                });
            
                $img->toPng()->save(public_path('infografis/thumbnail/' . $image_name));
            
                $file->move(public_path('infografis'), $image_name);
            
                $data->img = $image_name;
            }
    
            $data->save();
            return redirect()->route('index.infografis')->with('msg', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Infografis::find($id);

        return view('backend.infografis.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $data = Infografis::findOrFail($id);
        return view('backend.infografis.edit', compact('data'));
    }
    
    public function update(Request $request, $id)
    {
        $data = Infografis::findOrFail($id);
    
        if ($request->hasFile('img')) {
            $this->validate($request, [
                'img' => 'required|file|image|mimes:jpeg,png,jpg|max:5120',
            ]);
    
            // Hapus gambar lama jika ada
            if ($data->img && file_exists(public_path('infografis/' . $data->img))) {
                unlink(public_path('infografis/' . $data->img));
            }
            if ($data->img && file_exists(public_path('infografis/thumbnail/' . $data->img))) {
                unlink(public_path('infografis/thumbnail/' . $data->img));
            }
    
            $file = $request->file('img');
            $image_name = time() . '_' . $file->getClientOriginalName();
    
            $manager = new ImageManager(new Driver());
            $img = $manager->read($file->getRealPath());
    
            $img = $img->resize(500, 500, function ($constraint) {
                $constraint->aspectRatio();
            });
    
            $img->toPng()->save(public_path('infografis/thumbnail/' . $image_name));
            $file->move(public_path('infografis'), $image_name);
    
            $data->img = $image_name;
        }
    
        $data->save();
        return redirect()->route('index.infografis')->with('msg', 'Data berhasil diperbarui');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infografis  $infografis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Infografis::findOrFail($id);
        if ($data->img && file_exists(public_path('infografis/' . $data->img))) {
            unlink(public_path('infografis/' . $data->img));
        }
        if ($data->img && file_exists(public_path('infografis/thumbnail/' . $data->img))) {
            unlink(public_path('infografis/thumbnail/' . $data->img));
        }
        $data->delete();
        return redirect(route('index.infografis'))->with('msg', 'Data berhasil dihapus');
    }
}
