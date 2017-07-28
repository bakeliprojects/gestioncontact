<!-- app/views/nerds/show.blade.php -->

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

<h1>Showing {{ $contact->nom}}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $contact->Name }}</h2>
        <p>
            <strong>nom:</strong> {{ $contact->nom }}<br>
           <strong>Prenom:</strong> {{ $contact->prenom }}<br>
             <strong>Fonction:</strong> {{ $contact->fonction }}<br>
            <strong>Entreprise:</strong> {{ $contact->entreprise }}<br>
            <strong>Tel:</strong> {{ $contact->tel }}<br>
             <strong>IMAGE:</strong> {{ $contact->image }}
        </p>
    </div>

</div>
</body>
</html>
