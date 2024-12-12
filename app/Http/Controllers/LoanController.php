<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::where('user_id', auth()->id())
                     ->whereNull('return_date')
                     ->with('book') 
                     ->get();
    
        return view('loans.index', compact('loans'));
    }
    

   
    public function borrow($bookId)
    {
        $book = Book::findOrFail($bookId);

        
        if ($book->is_borrowed) {
            return redirect()->back()->with('error', 'Buku sudah dipinjam');
        }

        
        $loan = Loan::create([
            'user_id' => auth()->id(),
            'book_id' => $book->id,
            'borrow_date' => now(),
            'return_date' => null,
        ]);

       
        $book->update(['is_borrowed' => true]);

        return redirect()->route('loans.index')->with('success', 'Buku berhasil dipinjam');
    }
public function return($bookId)
{
    $loan = Loan::where('book_id', $bookId)->whereNull('return_date')->first();
    if (!$loan) {
        return redirect()->back()->with('error', 'Buku tidak sedang dipinjam!');
    }

    
    $loan->update([
        'return_date' => now(),
    ]);

    return redirect()->back()->with('success', 'Buku berhasil dikembalikan!');
}
}
