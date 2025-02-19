<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('transaksi.peminjaman', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi.tambah');
    }

    /**
     * action="{{ route('books.store') }}
     */
    public function store(Request $request)
    {

        // dd($request);
        $validasi = $request->validate([
            'judul_buku' => 'required|string',
            'deskripsi' => 'required|string',
            'jumlah_buku' => 'required|integer',
            'pengarang' => 'required|string',
            'tahun_terbit' => 'required|integer|between:1900,2040'
        ]);
        Book::create($validasi);

        return redirect()->route('books.index');
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
    public function edit(Book $book)
    {
        return view('transaksi.edit', compact('book'));
    }

    /**
     * action="{{ route('books.update', $book->id) }}
     */
    public function update(Request $request, Book $book)
    {
        $val = $request->validate([
            'judul_buku' => 'required|string',
            'deskripsi' => 'required|string',
            'jumlah_buku' => 'required|integer',
            'pengarang' => 'required|string',
            'tahun_terbit' => 'required|integer|between:1900,2040'
        ]);

        $book->update($val);

        return redirect()->route('books.index');
    }

    /**
     * action="{{ route('books.destroy', $book->id) }}
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
