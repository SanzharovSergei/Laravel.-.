<?php

namespace App\Http\Controllers;

use App\Models\RequestForm;
use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    public function index()
    {
        $request_forms = RequestForm::latest()->get();
        return view('request_form.index', ['request_forms' => $request_forms]);
    }

    public function create()
    {
        return view('request_form.create');
    }

    public function store(Request $request)
    {
        $this->validateRequestForm();
        $request_form = new RequestForm();

        $request_form->username = request('username');
        $request_form->phone = request('phone');
        $request_form->email = request('email');
        $request_form->requested = request('requested');


        $request_form->save();

        return redirect('/request_form'); //Todo: заменить
    }

    public function show(RequestForm $request_form)
    {
        return view('request_form.show', ['request_form' => $request_form]);
    }

    protected function validateRequestForm()
    {
        return request()->validate([
            'username' => 'required|min:3',
            'phone' => 'required|min:11',
            'email' => 'required|email',
            'requested' => 'required'
        ]);
    }

}
