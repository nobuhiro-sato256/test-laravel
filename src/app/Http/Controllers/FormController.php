<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->all();
        return view('confirm' , compact('contact'));
    }

    public function create(Request $request)
    {
        /*$form = $request->all();
        Contact::create($form);
        リレーション実装が出来なかったため割愛*/
        return view('/thanks');
    }
}
