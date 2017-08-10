<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>




<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('contact') }}">contact Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('contact')}}">View All contact</a></li>
        <li><a href="{{ URL::to('contact/create') }}">Create a contact</a>
    </ul>




</nav>



<div class="container" display="inline-block">
<h1>Showing {{ $contact->nom}}</h1>
<hr>

   
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6"> 

            <div style="height: 150px; ">
    
    </div>


{!! Form::model($contact, ['route' => ['contact.show', $contact->id], 'method' => 'patch','files'=>true]) !!}

<img src="http://localhost/gestioncontact/public/images/{{$contact->image}}" alt="profile Pic" class="img-responsive" height="300" width="500"">
          </div>
 <FIELDSET>

    <div class="jumbotron text-center">
        <h2>{{ $contact->Name }}</h2>  

<div class="form-group">
        {!! Form::label('nom', 'NOM:') !!}
        {!! Form::textarea('nom', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('prenom', 'PREENOM:') !!}
        {!! Form::textarea('prenom', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fonction', 'FONCTION:') !!}
        {!! Form::textarea('fonction', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('entreprise', 'ENTREPRISE:') !!}
        {!! Form::textarea('entreprise', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>


    <div class="form-group">
        {!! Form::label('tel', 'TEL:') !!}
        {!! Form::textarea('tel', null, ['class'=>'form-control', 'rows'=>5] ) !!}
    </div>


       <!--  <p>
            <strong>nom:</strong> {{ $contact->nom }}<br>
           <strong>Prenom:</strong> {{ $contact->prenom }}<br>
             <strong>Fonction:</strong> {{ $contact->fonction }}<br>
            <strong>Entreprise:</strong> {{ $contact->entreprise }}<br>
            <strong>Tel:</strong> {{ $contact->tel }}<br>
            
        </p>

 -->





    </div>
</FIELDSET>
 </div>
      </div>
  </div>
</div>
 

</body>
</html>


