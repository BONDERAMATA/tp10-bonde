<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tp7-bonde</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
    
          <div class="container text-center">
              <div class="row">
         
                <div class="col s12">
                <h1>VUE DES TUTTEUR</h1>
                <hr>
                
                <a href="/ajoute" class="btn btn-primary">ajouter un tutteur</a>
                <hr>
                @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
                @endif
          <table class="table">
          <thead>
                <tr>
                              <th>#</th>
                              <th>Non</th> 
                              <th>Prenom</th>
                              <th>profession</th>
                              <th>contact</th>
                              <th>action</th>                
                </tr>
          </thead>
          <tbody>
        
          @foreach($tutteurs as $tutteur)
        
                <tr>
                              <td>{{ $tutteur->id }}</td>
                              <td>{{ $tutteur->Nom }}</td>
                              <td>{{ $tutteur->Prenom }}</td>
                              <td>{{ $tutteur->profession }}</td> 
                              <td>{{ $tutteur->contact }}</td>
                
                

          
          
          
         
          <td>
          <a href="/update-tutteur/ {{ $tutteur->id }}" class="btn btn-info">Update</a>
          <a href="/delete-tutteur/ {{ $tutteur->id }}" class="btn btn-danger">Delete</a>
          </td>
          </tr>
        
          @endforeach
        
          </tbody>
          </table>
         
          <br>
          <a href="/etudiant" class="btn btn-info">etudiant</a>


          </div>
          
          </div>
          
          </div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>