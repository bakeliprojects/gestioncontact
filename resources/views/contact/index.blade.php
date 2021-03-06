<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href=" {{asset('//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('contact') }}">contact Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('contact') }}">View All contact</a></li>
        <li><a href="{{ URL('bin/create') }}">Create a contact</a>
    </ul>


    <!--  ajout de logout  -->

<ul class="nav navbar-nav navbar-right">
 <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('deconect') }}">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('deconect') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }} 
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            </ul>



</nav>

<h1>All the contact</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif



<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>NOM</td>
            <td>PRENOM</td>
            <td>FONCTION</td>
            <td>ENTREPRISE</td>
            <td>TEL</td>
            <td>IMAGE</td>
            
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($contact as $key => $value)
        <tr>
            <td>{{ $value->nom }}</td>
            <td>{{ $value->prenom }}</td>
            <td>{{ $value->fonction }}</td>
            <td>{{ $value->entreprise }}</td>
            <td>{{ $value->tel}}</td>
      
            <td> <img src="images/{{$value->image}}" alt="profile Pic" height="100" width="200"></td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the contact (uses the destroy method DESTROY /contact/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'contact/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'Delete') }}  
                    {{ Form::submit('Delete this contact', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}


                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
               <!--  <a class="btn btn-small btn-success" href="{{ URL::to('contact/' . $value->id) }}">Show this contact</a> -->
                 <a class="btn btn-small btn-success" href="{{url('kine/' . $value->id) }}">Show this contact</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ url('giv/' .$value->id . '/edit') }}">Edit this contact</a>




            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>


 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>