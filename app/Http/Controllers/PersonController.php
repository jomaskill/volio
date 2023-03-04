<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonRequest;
use App\Mail\NewPerson;
use App\Models\Email;
use App\Models\Person;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class PersonController extends Controller
{
    public function index(): View
    {
        return view('pages.person.index', [
            'people' => Person::paginate(10),
        ]);
    }

    public function create(): View
    {
        return view('pages.person.create');
    }

    public function store(StorePersonRequest $request): RedirectResponse
    {
        Person::create($request->validated());

        Email::create([
            'to' => $request->get('email'),
            'body' => $request->get('body'),
        ]);

        Mail::to($request->get('email'))
            ->send(new NewPerson($request->get('body'), $request->get('name')));

        return redirect(route('person.index'));
    }
}
