<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Contracts\View\View;

class EmailController extends Controller
{
    public function index(): View
    {
        return view('pages.email.index', [
            'emails' => Email::with('person')->paginate(10),
        ]);
    }
}
