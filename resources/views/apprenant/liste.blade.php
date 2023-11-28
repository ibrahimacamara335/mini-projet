@include("layouts.menu.header")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <div class="container container-div">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Gestion des Apprenants</h2>
                </div>
                @if (session('status'))
                    <div class="alert alert-success alert-div">
                        {{session('status')}}
                    </div>
                 @endif
                <div class="card-body">
                    <a href="{{route('add-apprenant')}}" class="btn btn-primary">
                        Ajouter un Apprenant
                    </a>
                    <br/>
                    <br/>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>MATRICULE</th>
                                    <th>NOM</th>
                                    <th>PRENOM</th>
                                    <th>NIVEAU</th>
                                    <th class="text-center">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>L-00001ISI</td>
                                    <td>Camara</td>
                                    <td>Ibrahima</td>
                                    <td>Debutant</td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-info">Modifier</a>
                                        <a href="" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            </tbody>

                        </table>



                </div>

            </div>

        </div>

    </div>

   </div>
</body>
</html>

@include("layouts.menu.footer")