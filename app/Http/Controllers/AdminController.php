<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Post;

class AdminController extends Controller
{

   
    public function storePost(Request $request)
    {

       // Validasi data yang diterima dari form
    $request->validate([
        'judul' => 'required',
        'content' => 'required',
    ]);

    // Simpan data ke database
    $data = new Post();
    $data->no = $request->input('no');
    $data->judul = $request->input('judul');
    $data->content = $request->input('content');
    // $data->thumbnail = $request->input('thumbnail');
    $data->tanggal = $request->input('tanggal');
    // $data->status = $request->input('status');
    // Tambahkan atribut lain sesuai kebutuhan

    $data->save();

    // Redirect kembali ke halaman yang sesuai
    return redirect()->route('listPost')->with('success', 'Data berhasil disimpan.');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan aturan validasi sesuai kebutuhan
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName); // Simpan gambar ke direktori tertentu, sesuaikan dengan kebutuhan Anda

            // Anda juga dapat menyimpan nama file gambar ini ke dalam database jika diperlukan

            return redirect()->back()->with('success', 'Gambar berhasil diunggah.');
        }

        return redirect()->back()->with('error', 'Gagal mengunggah gambar.');
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim melalui formulir
        $request->validate([
            'judul' => 'required',
            'content' => 'required',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        // Contoh: Mengambil data dari database berdasarkan ID
        $data = post::find($id);


        // Kemudian, perbarui data berdasarkan input dari formulir
        $data->no = $request->no;
        $data->judul = $request->judul;
        $data->content = $request->content;
        $data->tanggal = $request->tanggal;
        $data->save();
        // Perbarui bidang lain sesuai kebutuhan

        // // Simpan perubahan
        // $data->save();

        // Redirect kembali ke halaman daftar data atau halaman lain yang sesuai
        return redirect()->route('listPost')->with('success', 'Data berhasil diperbarui');
    }
    

    public function index()
    {
        $data = post::all();
        return view('listPost', compact('data'));

    }

    public function admin()
    {
        return view('admin');
    }

    public function post()
    {
        return view('pages.post');
    }

    public function listPost()
    {
        return view('pages.listPost');
    }
    public function createPost()
    {
        return view('pages.post');
    }
    public function tambahBerita()
    {
        return view('pages.tambahBerita');
    }
    public function editBerita()
    {
        return view('pages.editBerita');
    }
   
}
