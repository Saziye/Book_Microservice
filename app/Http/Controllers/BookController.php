<?php

namespace App\Http\Controllers;

use App\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Return the list of books 
     * @return Illuminate\Http\Response 
     */
    public function index() 
    {
        $books = Book::all();
        return $this ->successResponse($books);
    }

    /**
     * Create one new book 
     * @return Illuminate\Http\Response 
     */
    public function store(Request $request) 
    {
        $rules = [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|min:1',
            'author_id' => 'required|min:1',
        ];
        $this->validate($request, $rules);
        $book = Book::create($request->all());
        return $this->successResponse($book, Response::HTTP_CREATED);
    }

    /**
     * Obtains and show one book
     * @return Illuminate\Http\Response 
     */
    public function show($book) 
    {
        
    }
    
    /**
     * Update and existing book 
     * @return Illuminate\Http\Response 
     */
    public function update(Request $request, $book) 
    {
        
    }

    /**
     * Remove and existing book 
     * @return Illuminate\Http\Response 
     */
    public function destroy($book) 
    {
        
    }
}