<?php

namespace App\Http\Controllers;

use App\Phonbooks;
use Illuminate\Http\Request;
use App\Http\Requests\ValidatePhonebookData;
class PhonbooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
        return view('PhoneBook');
    }

    public function ListContacts()
    {
        $contacts = phonbooks::orderBy('name','ASC')->get();
        return $contacts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidatePhonebookData $request)
    {
        //
          //return $request->phoneno;
        $phoneApp = new Phonbooks;
        $phoneApp->name = $request->name;
        $phoneApp->email = $request->email;
        $phoneApp->phoneno = $request->phoneno;
        $phoneApp->save();
        // Phonbooks::create([
        //       $request->all()
        // ]);
       // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Phonbooks  $phonbooks
     * @return \Illuminate\Http\Response
     */
    public function show(Phonbooks $phonbooks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Phonbooks  $phonbooks
     * @return \Illuminate\Http\Response
     */
    public function edit(Phonbooks $phonbooks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Phonbooks  $phonbooks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phonbooks $phonbooks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Phonbooks  $phonbooks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phonbooks $phonbooks)
    {
        //
    }
}
