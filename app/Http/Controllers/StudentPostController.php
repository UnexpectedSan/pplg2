<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentPost;
use Illuminate\Http\RedirectResponse;

class StudentPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Sposts = StudentPost::latest()->paginate(5);
        return view('post.index', compact('Sposts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Form Tambah Data Siswa';
        $Sposts = StudentPost::all();
        return view('post.create', compact('Sposts', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'nama' => 'required',
            'jurusan' => 'required',
            'nis' => 'required|unique:student_posts',
            'alamat' => 'required|min:10'
        ]);

        // uploud gamabar
        $image = $request->file('image');
        $image->storeAs('public/post', $image->hashName());

        StudentPost::create([
            'image' => $image->hashName(),
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'nis' => $request->nis,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('post.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
