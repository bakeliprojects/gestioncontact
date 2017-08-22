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
use Auth;
use App\User;



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


  public function logoutcon(){
     Auth::logout();
  return redirect('login');
  }




    public function authenticate()
    {
        
        $email =  Input::get('email');
        $password = Input::get('password');

     //   dd($email);
       
          if (Auth::attempt(['email' => $email, 'password' => $password]))

        {
            return redirect('fatou');
        }
    }



 public function storess(Request $request) {

      //  $v = User::validate(Input::all());

        $name = $request->input('name');
        $firstname = $request->input('firstname');
        $email = $request->input('email');
        $password = $request->input('password');


        //if ( $v->passes() ) {  

            $user = new User;
            $user->name = $name;
             $user->firstname = $firstname;
              $user->email = $email;
               $user->password = bcrypt($password);
            $user->save();

        //}
 Auth::login($user);
      
         return Redirect::to('fatou');

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
         $erreurs = array(); 
     
        // $formulaireOK=false; 

       
if( Input::get('nom') == Null)  // Si la valeur "nom" est vide 
    { 
        // On rempli le message  des erreurs par un texte 
        Session::flash('error', 'veuiilez saisir  le champs nom!');
             return Redirect::back();
    } 
     
    if( Input::get('prenom') == "")  // Si la valeur "prenom" est vide 
    { 
        // On rempli le message des erreurs par un texte 
       Session::flash('error', 'veuiilez saisir le champ prenom!');
             return Redirect::back();
    } 
     
    if( Input::get('fonction') == Null) // Si la valeur du fonction  est vide 
    { 
       Session::flash('error', 'veuiilez saisir tous les champs fontion!');
             return Redirect::back();
     }

    if( Input::get('entreprise') == "") 
    { 
      Session::flash('error', 'veuiilez saisir le champ entrprise!');
             return Redirect::back();
    }
     
    if( Input::get('tel') == "") 
    { 
        // Si la valeur  tel est vide 
      Session::flash('error', 'veuiilez saisir le champ tel!');
             return Redirect::back(); 
    }

if( Input::hasFile('image') == "") 
    { 
      Session::flash('error', 'veuiilez saisir le champ image!');
             return Redirect::back(); 
    }
 
     //    if (Input::get('nom')==Null &&
     //        Input::get('prenom')==Null &&
     //        Input::get('fonction')==Null &&
     //        Input::get('entreprise')==Null  &&
     //        Input::get('tel')==Null 
     // )

    // The given data did not pass validation


    if( empty($erreurs))     // S'il ya pas  d'erreurs, 
    { 
        // CREATION DU contact    


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

// On met la variable du formulaireOK appelé tout en haut en VALIDE (soit true) 
        // $formulaireOK=true; 

           Session::flash('message', 'Succe redirectssfully created contact!');

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

//            $erreurs = array(); 
     
      
// if( Input::get('nom') == Null)  // Si la valeur "nom" est vide 
//     { 
//         // On rempli le message  des erreurs par un texte 
//         Session::flash('error', 'veuiilez remplir  le champs nom!');
//              return Redirect::back();
//     } 
     
//     if( Input::get('prenom') == "")  // Si la valeur "prenom" est vide 
//     { 
//         // On rempli le message des erreurs par un texte 
//        Session::flash('error', 'veuiilez remplir le champ prenom!');
//              return Redirect::back();
//     } 
     
//     if( Input::get('fonction') == Null) // Si la valeur du fonction  est vide 
//     { 
//        Session::flash('error', 'veuiilez saisir tous les champs fonction!');
//              return Redirect::back();
//      }

//     if( Input::get('entreprise') == "") 
//     { 
//       Session::flash('error', 'veuiilez saisir le champ entrprise!');
//              return Redirect::back();
//     }
     
//     if( Input::get('tel') == "") 
//     { 
//         // Si la valeur  tel est vide 
//       Session::flash('error', 'veuiilez modifier le champ tel!');
//              return Redirect::back(); 
//     }

// if( Input::hasFile('image') == "") 
//     { 
//       Session::flash('error', 'veuiilez modifier le champ image!');
//              return Redirect::back(); 
//     }
 


// if( empty($erreurs))   // Si le tableau des "erreurs" est vide, 


    {


        $contact = contact::find($id);

        $contact->nom = Input::get('nom');
        $contact->prenom = Input::get('prenom');
        $contact->fonction = Input::get('fonction');
        $contact->entreprise = Input::get('entreprise');
        $contact->tel = Input::get('tel');
        $contact->image =$contact->image ;
        $contact->save();
}
         if (Input::hasFile('image')) {

       
        $destination='images';

        $extension=Input::file('image')->getClientOriginalExtension();

        $filename=rand(11111,99999).'.'.$extension;   

        $uploadSuccess=Input::file('image')->move($destination, $filename);



        $contact->nom = Input::get('nom');
        $contact->prenom = Input::get('prenom');
        $contact->fonction = Input::get('fonction');
        $contact->entreprise = Input::get('entreprise');
        $contact->tel = Input::get('tel');
        $contact->image = $filename;
        $contact->save();


//update sa changer la photo
    // } else {
    //     echo 'no file uploaded. oops.';
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
