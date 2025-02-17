<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Book;
use App\Models\member;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = DB::table('peminjaman')
            ->join('users', 'peminjaman.penanggung_jawab', '=', 'users.id')
            ->join('books', 'peminjaman.id_buku', '=', 'books.id')
            ->join('members', 'peminjaman.id_user', '=', 'members.id')
            ->select('peminjaman.*', 'users.name', 'members.nama', 'books.judul_buku')
            ->get();

        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = Book::all();
        $user = member::all();
        $admin = User::all();
        return view('peminjaman.tambah', compact('book', 'user', 'admin'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validasi = $request->validate([
            'id_buku' => 'required',
            'id_user' => 'required',
            'penanggung_jawab' => 'required',
            'tanggal_pinjam' => 'required|date',
            'jumlah_buku' => 'required'
        ]);

        Peminjaman::create($validasi);
        return redirect()->route('peminjaman.index');
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

    public function autocompleteBooks(Request $request)
    {
        $query = $request->get('query');
        $book = Book::where('judul_buku', 'LIKE', "%{$query}%")->limit(10)
            ->get(['id', 'judul_buku']);

        return response()->json($book);
    }
    public function autocompleteUsers(Request $request)
    {
        $query = $request->get('query');
        $user = member::where('nama', 'LIKE', "%{$query}%")->limit(10)
            ->get(['id', 'nama']);

        return response()->json($user);
    }
    public function autocompleteAdmins(Request $request)
    {
        $query = $request->get('query');
        $admin = User::where('name', 'LIKE', "%{$query}%")->limit(10)
            ->get(['id', 'name']);

        return response()->json($admin);
    }
}
