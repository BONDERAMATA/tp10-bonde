<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tp7-bonde</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
    
    <div class="container">
    <div class="row">
    
    <div class="col s12">
    <h1>AJOUTER UN TUTTEUR - LARAVEL 10</h1>
    <hr>
    
    @if (session('status'))
    <div class="alert alert-success">
    {{ session('status') }}
    </div>
    @endif
    
    
    <ul>
    @foreach ($errors->all() as $error )
    <li class="alert alert-danger"> {{ $error }} </li>
    @endforeach
    </ul>
    <form action="/ajoute/traitement" method="POST" class="form-group">
      @csrf
      
        <div class="form-group">
          <label for="Nom">Nom</label>
          <input type="text" class="form-control" id="Nom" name="Nom">
        </div>
        
        <div class="form-group">
          <label for="Prenom">Prenom</label>
          <input type="text" class="form-control" id="Prenom" name="Prenom">
        </div>
        
        <div class="form-group">
          <label for="Classe">profession</label>
          <input type="text" class="form-control" id="profession" name="profession">
        </div>
        
        <div class="form-group">
          <label for="Nom">contact</label>
          <input type="text" class="form-control" id="contact" name="contact">
        </div>
        
      <br>
        <button type="submit" class="btn btn-primary">AJOUTER UN TUTTEUR</button>
      <br> <br>

      <a href="/tutteur" class="btn btn-danger">Revenir a liste des tutteur</a>
    </form>
    
    </div>
    
    </div>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>