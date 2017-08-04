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


$validator = Validator::make(
    Input::all(),
    $rules

);

if ($validator->fails())
{
    // The given data did not pass validation


        Session::flash('error', 'veuiilez saisir tous les champs !');

    return Redirect::back();


}
else
{


        

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



    	Session::flash('message', 'Succe
            // redirectssfully created contact!');

    		return Redirect::to('contact');
        }

    	}


    	public function show($id)
    	{
        // get the contact
    		$contact = contact::find($id);


        // show the view and pass the contactct to it
    		return View::make('contact.show')
    		->with('contact', $contact);
    	}


		public  function edit($id)
		{
		        // get the contact
			$contact = contact::find($id);

		        // show the edit form and pass the contact
			return View::make('contact.edit')
			->with('contact', $contact);
		}  



    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
    	$rules = array(
    		'nom' => 'required|nom',
    		'prenom' => 'required|prenom',
    		'fonction' => 'required|fonction',
    		'entreprise' => 'required|entreprise',
    		'tel' => 'required|tel',
    		 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		);
        
              
 if (Input::hasFile('image')) {



            $contact = contact::find($id);
            	   
            $destination='images';

        	$extension=Input::file('image')->getClientOriginalExtension();

        	$filename=rand(11111,99999).'.'.$extension;   

             $uploadSuccess=Input::file('image')->move($destination, $filename);






// $file_name = $generate_name . '.' . $extension;
//         $image->move(public_path() . '/images/', $file_name);


        //      if ($request->hasFile('input_img')) {
        //      if($request->file('input_img')->isValid()) {
        // try {
        //     $file = $request->file('input_img');
        //     $name = time() . '.' . $file->getClientOriginalExtension();
           

// $filenam = time().'.'.$request->image->getClientOriginalExtension();


		    	$contact->nom = Input::get('nom');
		    	$contact->prenom = Input::get('prenom');
		    	$contact->fonction = Input::get('fonction');
		    	$contact->entreprise = Input::get('entreprise');
		    	$contact->tel = Input::get('tel');
		    	$contact->image = $filename;
                $contact->save();

//                  $request->file('input_img')->move("fotoupload", $name);

//                  } catch (Illuminate\Filesystem\FileNotFoundException $e) {

//         }
//     } 
// }
// $request->image->move(public_path('avatars'), $filenam);
    
//update sas changer la photo
              } else {
        echo 'no file uploaded. oops.';
    }

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

 }
