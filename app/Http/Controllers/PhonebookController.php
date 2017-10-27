<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhonebookRequest;
use App\Phonebook;

class PhonebookController extends Controller
{

    public function index()
    {
        return view('phonebook');
    }

    public function create()
    {
        //
    }

    public function store(PhonebookRequest $request)
    {
        $newPB = Phonebook::create($request->all());
        return $newPB;

    }

    public function show(Phonebook $phonebook)
    {
        //
    }

    public function edit(Phonebook $phonebook)
    {
        //
    }

    public function update(PhonebookRequest $request)
    {
        $new = Phonebook::find($request->id);
        $new->name = $request->name;
        $new->phone = $request->phone;
        $new->email = $request->email;
        $new->save();
    }

    public function destroy(Phonebook $phonebook)
    {
        Phonebook::where('id',$phonebook->id)->delete();
    }

    public function getData()
    {
       return Phonebook::orderBy('name','ASC')->get();
    }
}
