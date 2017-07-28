<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
use App\contact;
use View;
use Validator;
use Input;
use Session;
use Redirect;



class contacController extends Controller
{
    //
	public function index()
	{
        // get all the contact
		$contact = contact::all();

        // load the view and pass the contact
		return View('contact.index',compact('contact'));
	}







/**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
public function create()
{
        // load the create form (app/views/nerds/create.blade.php)
	return View::make('contact.create');

}


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
    	$rules = array(
    		'nom' => 'required|nom',
    		'prenom'  => 'required|prenom',
    		'fonction' => 'required|fonction',
    		'entreprise' => 'required|entreprise',
    		'tel' => 'required|tel',

    		'image' => 'required|images|mimes:jpeg,png,jpg,gif,svg|max:2048'


    		);
        // $validator = Validator::make(Input::all(), $rules);

        // // // process the login
        // if ($validator->fails()) {
        //     return Redirect::to('contact/create')
        //         ->withErrors($validator)

        // } else {

    	$destination='images';
       
       $extension=Input::file('image')->getClientOriginalExtension();

    	$filename=rand(11111,99999).'.'.$extension;

    	Input::file('image')->move($destination, $filename);


    	$contact = new contact;
    	$contact->nom = Input::get('nom');
    	$contact->prenom = Input::get('prenom');
    	$contact->fonction = Input::get('fonction');
    	$contact->entreprise = Input::get('entreprise');
    	$contact->tel = Input::get('tel');
    	$contact->image = $filename;
       $contact->save();




             // $imageName = $product->id . '.' . $request->file('image')->getClientOriginalExtension();

             //  $request->file('image')->move(base_path() . '/public/image/', $imageName);




    	Session::flash('message', 'Succe
            // redirectssfully created contact!');
    		return Redirect::to('contact');
    	}


    	public function show($id)
    	{
        // get the nerd
    		$contact = contact::find($id);


        // show the view and pass the nerd to it
    		return View::make('contact.show')
    		->with('contact', $contact);
    	}






/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */

/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
public  function edit($id)
{
        // get the nerd
	$contact = contact::find($id);

        // show the edit form and pass the nerd
	return View::make('contact.edit')
	->with('contact', $contact);
}

// app/controllers/NerdController.php





    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // validate
       // read more on validation at http://laravel.com/docs/validation
    	$rules = array(
    		'nom' => 'required|nom',
    		'prenom' => 'required|prenom',
    		'fonction' => 'required|fonction',
    		'entreprise' => 'required|entreprise',
    		'tel' => 'required|tel'
    		);
    	$validator = Validator::make(Input::all(), $rules);

        // // process the login
         // if ($validator->fails()) {
         //   return Redirect::to('contact/' . $id . '/edit')
         //        ->withErrors($validator)
         //      ->withInput(Input::except('password'));
         // } else {


    	$contact = contact::find($id);
    	$contact->nom = Input::get('nom');
    	$contact->prenom = Input::get('prenom');
    	$contact->fonction = Input::get('fonction');
    	$contact->entreprise = Input::get('entreprise');
    	$contact->tel = Input::get('tel');
    	$contact->save();

            // redirect
    	Session::flash('message', 'Successfully updated contact!');
    	return Redirect::to('contact');
    }
    



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete 
    	$contact = contact::find($id);
    	$contact->delete();

        // redirect
    	Session::flash('message', 'Successfully deleted the contact!');
    	return Redirect::back();
    }




//// images
/**

     * Create a new controller instance.

     *

     * @return void

     */

    // public function __construct()

    // {

    //     $this->middleware('auth');

    // }


    // public function fileUpload(Request $request)

    // {

    //     $this->validate($request, [

    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    //     ]);


    //     $image = $request->file('image');

    //     $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

    //     $destinationPath = public_path('/images');

    //     $image->move($destinationPath, $input['imagename']);


    //     $this->postImage->add($input);


    //     return back()->with('success','Image Upload successful');

    // }


}
