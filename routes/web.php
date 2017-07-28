<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

  Route::resource('contact', 'contacController');







  //Route::get('contact/show/{id}','contacController@show');

//// les  routes  ogmenté 


   // Route::get('/', function () {
   //      $contact = \App\contact::orderBy('created_at', 'asc')->get();
   //      return view('contact', [
   //          'contact' => $contact
   //      ]);
   //  });

   //  /**
   //   * Add New Task
   //   */
   //  Route::post('/contact', function (Request $request) {
   //      $validator = Validator::make($request->all(), [
   //          'name' => 'required|max:255',
   //      ]);

   //      // if ($validator->fails()) {
   //      //     return redirect('/')
   //      //         ->withInput()
   //      //         ->withErrors($validator);
   //      // }

   //      $contact = new \App\contact;
   //      $contact->name = $request->name;
   //      $contact->save();

   //      return redirect('/contact');
   //  });

   //  /**
   //   * Delete Task
   //   */
   //  Route::delete('/contact/{contact}', function (\App\contact $contact) {
   //      $contact->delete();

   //      return redirect('/');
   //  });