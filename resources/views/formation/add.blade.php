@include("layouts.menu.header")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">

</head>
<body>
    <div class="container container-div">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Ajouter une Formation</h2>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nom" class="form-label"></label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer le nom de la formation">

                            </div>
                            <div class="mb-3">
                                <label for="code" class="form-label"></label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Entrer le code de la formation">

                            </div>
                            <div class="mb-3">
                                <label for="duree" class="form-label"></label>
                                <input type="date" class="form-control" id="duree" name="duree" placeholder="Indique la durée de la formation">
                            </div>

                            <div class="submit-btn-form">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                                <button class="mx-3 btn btn-primary"><a href="{{route('liste-formation')}}"
                                        class="btn-retour">Retour</a></button>
                            </div>
                        </form>

                    </div>
                </div>
    
            </div>
    
        </div>
    
       </div>
</body>
</html>

@include("layouts.menu.footer")