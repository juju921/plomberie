<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //1. Validate the data

        $this->validate($request, [
            'nBatiment' => 'required|integer',
            'firstName' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'inovoiceAdress' => 'required|string|max:255',
            'habitation' => 'required|string|max:255',
            'accesCode' => 'required|numeric',
            'accesCode2' => 'required|numeric',
            'phoneNumber' => 'required|numeric',
            'fax' => 'numeric',
            'mobileNumber' => 'required|numeric',
            'email' => 'required|email',
        ]);

        //2. Store it in database
        $user = new User();
        $user->nBatiment = $request->nBatiment;
        $user->firstName =  $request->nBatiment;
        $user->  name =  $request->name;
        $user-> adress =  $request->adress;
        $user-> inovoiceAdress =  $request->inovoiceAdress;
        $user-> habitation =  $request->habitation;
        $user-> accesCode = $request->accesCode;
        $user-> accesCode2 =  $request->accesCode2;
        $user-> phoneNumber =  $request->phoneNumber;
        $user-> fax =  $request->fax;
        $user-> mobileNumber =  $request->mobileNumber;
        $user-> email=  $request->email;
        $user->save();
        Session::flash('error', 'l utilisateur a été ajouté');



       //return redirect('/');

       // 3. Redirect to either show() or index()

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
