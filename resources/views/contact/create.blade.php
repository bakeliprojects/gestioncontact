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
@if (Session::has('error'))
    <div class="alert alert-info">{{ Session::get('error') }}</div>
@endif


<h1>Create a contact</h1>

<!-- if there are creation errors, they will show here -->


{{ Form::open(array('url' => 'contact','files' => true))}}

    <div class="form-group">
        {{ Form::label('nom', 'Nom') }}
        {{ Form::text('nom', Input::old('nom'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('prenom', 'Prenom') }}
        {{ Form::text('prenom', Input::old('prenom'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('fonction', 'Fonction ') }}
        {{ Form::text('fonction', Input::old('fonction'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('entreprise', 'Entreprise') }}
        {{ Form::text('entreprise', Input::old('entreprise'), array('class' => 'form-control')) }}
    </div>


<div class="form-group">
        {{ Form::label('tel', 'TEL') }}
        {{ Form::text('tel', Input::old('tel'), array('class' => 'form-control')) }}
    </div>

<div class="form-group">
        {{ Form::label('image', 'IMAGE') }}
        {{ Form::file('image', Input::old('image'), array('class' => 'form-control')) }}
    </div>




    

    {{ Form::submit('Create the contact!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>