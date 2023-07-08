@extends('master')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <h4>liste des Auto-écoles</h4>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4"></h4>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0 table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th class="align-middle">logo</th>
                                        <th class="align-middle">Nom de l'auto-école</th>
                                        <th class="align-middle">adresse</th>
                                        <th class="align-middle">code postal</th>
                                        <th class="align-middle">ville</th>
                                        <th class="align-middle">pays</th>
                                        <th class="align-middle">telephone</th>
                                        <th class="align-middle">Email</th>
                                        <th class="align-middle">Agrement</th>
                                        <th class="align-middle">Date de l'agrement</th>
                                        <th class="align-middle">Siret</th>
                                        <th class="align-middle">Type permis</th>
                                        <th class="align-middle">Device</th>
                                        <th class="align-middle">Numéro de l'administrateur</th>
                                        <th class="align-middle">Statut</th>
                                        <th class="align-middle">Banque</th>
                                        <th class="align-middle">Code_banque</th>
                                        <th class="align-middle">Numero du compte</th>
                                        <th class="align-middle">iban</th>
                                        <th class="align-middle">swift</th>
                                        <th class="align-middle">Pourcentage payement</th>
                                    </tr>
                                </thead>

                                <tbody>


                                   
                                    @foreach ($Liste_agence as $agence)
                                    <tr>
                                        <td>{{ $agence->logo }}</td>   
                                        <td>{{ $agence->nom }}</td>
                                        <td>{{ $agence->adresse }}</td>
                                        <td>{{ $agence->code_postal }}</td>
                                        <td>{{ $agence->ville }}</td>
                                        <td>{{ $agence->pays }}</td>
                                        <td>{{ $agence->telephone }}</td>
                                        <td>{{ $agence->email }}</td>
                                        <td>{{ $agence->agrement }}</td>
                                        <td>{{ $agence->date_agrement }}</td>
                                        <td>{{ $agence->siret }}</td>
                                        <td>{{ $agence->type_permis }}</td>
                                        <td>{{ $agence->devise }}</td>
                                        <td>{{ $agence->admin_user_id }}</td>
                                        <td>{{ $agence->statut }}</td>
                                        <td>{{ $agence->bank }}</td>
                                        <td>{{ $agence->code_bank }}</td>
                                        <td>{{ $agence->account_number }}</td>
                                        <td>{{ $agence->iban }}</td>
                                        <td>{{ $agence->swift}}</td>
                                        <td>{{ $agence->pourcentage_paiement}}</td>
                                    </tr>
                                    @endforeach
     
                                </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div> 
            </div>
        </div>

    </div>
</div>        
    
@endsection