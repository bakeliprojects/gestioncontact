<!-- app/views/contact/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('contact') }}">contact Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('contact') }}">View All contact</a></li>
        <li><a href="{{ URL::to('contact/create') }}">Create a contact</a>
    </ul>
</nav>

<h1>Edit {{ $contact->nom}}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

<!-- {!! Form::open( array( 'route' => 'admin.products.store', 'class' => 'form', 'novalidate' => 'novalidate', files' => true)) !!} -->


{{ Form::model($contact, array('route' => array('contact.update', $contact->id)) }}

    <div class="form-group">
        {{ Form::label('nom', 'Nom') }}
        {{ Form::text('nom', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('prenom', 'Prenom') }}
        {{ Form::text('prenom', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('fonction', 'Fonction') }}
        {{ Form::text('fonction', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('entreprise', 'Entreprise') }}
        {{ Form::text('entreprise', null, array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('tel', 'Tel') }}
        {{ Form::number('tel', null, array('class' => 'form-control')) }}
    </div>
     <div class="form-group">
        {{ Form::label('image', 'IMAGE') }}
        {{ Form::file('image', null, array('class' => 'form-control')) }}
    </div>


    

    <!-- <div class="form-group">
        {{ Form::label('nerd_level', 'Nerd Level') }}
        {{ Form::select('nerd_level', array('0' => 'Select a Level', '1' => 'Sees Sunlight', '2' => 'Foosball Fanatic', '3' => 'Basement Dweller'), null, array('class' => 'form-control')) }}
    </div>
 -->
    {{ Form::submit('Edit the contact!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>