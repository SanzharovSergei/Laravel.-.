<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::latest()->get();
        return view('forms.index', ['forms' => $forms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create');
    }

    public function store()
    {
        $this->validateRequestForm();
        $form = new Form();

        $form->username = request('username');
        $form->comment = request('comment');

        $form->save();

        return redirect('/forms'); // заменить на список комментариев
    }

    public function show(Form $form)
    {
        return view('forms.show', ['form' => $form]);
    }

    protected function validateRequestForm()
    {
        return request()->validate([
            'username' => 'required|min:3',
            'comment' => 'required'
        ]);
    }
}


