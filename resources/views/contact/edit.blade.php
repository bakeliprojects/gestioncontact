
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.js'></script>
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

{{ HTML::ul($errors->all()) }}



{!! Form::model($contact, ['route' => ['contact.update', $contact->id], 'method' => 'patch','files'=>true]) !!}


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

 <input type='button' id='remove' value='remove' class='hide'/>
<input type='file' name="image"  id="imgInp" /><br> 

   <img src="http://localhost/gestioncontact/public/images/{{$contact->image}}", id="blah" alt="profile Pic" height="100" width="200" /> 
        <!--   {{ Form::label('image', 'IMAGES',['value' => 'remove', 'id' => 'remove', 'class' => 'control_label'])}}
          {{ Form::file('image', null, array('class' => 'form-control', 'name' => 'image', 'id' => 'imgInp'))}}          -->  
   </div>
   <div>
    
 
    {{ Form::submit('Edit the contact!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
 <script>
$('#blah').show();
$('#remove').hide();  
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        if( $('#imgInp').val()!="{{$contact->image}}"){
            
            $('#image').show();
            $('#blah').show('slow');
      }
        else{ $('#image').hide();$('#blah').hide('slow');}
        readURL(this);
    });
  
    $('#image').click(function(){
          $('#imgInp').val('');
          $(this).hide();
          $('#blah').hide('slow');
 $('#blah').attr('src','http://upload.wikimedia.org/wikipedia/commons/thumb/4/40/No_pub.svg/150px-No_pub.svg.png');
});
     
 </script>



</body>
</html>