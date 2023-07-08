

@extends('master')

@section('content')

<div class="page-content">
    
    <p class="h3 text-black"> Gestion des offres disponibles sur BBCar</p>
    <br><br>

    <div class="col-xl-12">
         <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#home1" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Mensuelle</span> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#profile1" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Annuelle</span> 
                            </a>
                        </li> 
                    </ul>
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="home1" role="tabpanel">
                            <div class="tab-pane active" id="home-1" role="tabpanel">
                                
                                <table class="table table-striped table-hover">
                                    <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Designation</th>
                                        <th>Cout</th>
                                        <th>Type</th>
                                        <th>Agent_max</th>
                                        <th>Collaborateurs_max</th>
                                        <th>Clients_max</th>
                                        <th>Duree</th>
                                        <th>Editer</th>
                                        <th>Suprimer</th>
                                    </tr>
                                
                                </thead> 
                            
                                <tbody>
                                @foreach ($liste_offres as $offres) 
                                    <tr>
                                        <td>{{ $offres->id }}</td>
                                        <td>{{ $offres->designation }}</td>
                                        <td>{{ $offres->cout }}</td>
                                        <td>{{ $offres->type }}</td>
                                        <td>{{ $offres->agents_max }}</td>
                                        <td>{{ $offres->collaborateurs_max }}</td>
                                        <td>{{ $offres->clients_max }}</td>
                                        <td>{{ $offres->duree}}</td>
                                        <td><a href="{{ route('editer', $offres->id) }}" class="btn btn-primary" title="Editer"><i class="bx bxs-edit-alt"></i></a></td>
                                        <td>
                                            <form action="{{ route('supprimer', $offres->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button  class="btn btn-danger" title="Editer"><i class="bx bx-trash"></i></button>

                                                <!--
                                            <button class="btn btn-danger" type="submit" name="supprimer" title="Supprimer"><i class="bx bx-trash"></i></button>
                                                -->
                                            </form>
                                        </td> 
                                    </tr>
                                @endforeach        
                            </tbody>
                            
                            </table>  
                                
                            </div>
                        </div>
                        <div class="tab-pane" id="profile1" role="tabpanel">
                            


                            <div class="container-fluid">
                                <table class="table table-striped table-hover">
                                      <thead class="table-light">
                                      <tr>
                                          <th>ID</th>
                                          <th>Designation</th>
                                          <th>Cout</th>
                                          <th>Type</th>
                                          <th>Agent_max</th>
                                          <th>Collaborateurs_max</th>
                                          <th>Clients_max</th>
                                          <th>Duree</th>
                                          <th>Editer</th>
                                          <th>Suprimer</th>
                                      </tr>
                                  
                                  </thead> 
                              
                                  <tbody>
                                  @foreach ($liste_offres_annuelle  as $offres) 
                                      <tr>
                                          <td>{{ $offres->id }}</td>
                                          <td>{{ $offres->designation }}</td>
                                          <td>{{ $offres->cout }}</td>
                                          <td>{{ $offres->type }}</td>
                                          <td>{{ $offres->agents_max }}</td>
                                          <td>{{ $offres->collaborateurs_max }}</td>
                                          <td>{{ $offres->clients_max }}</td>
                                          <td>{{ $offres->duree}}</td>
                                          <td><a href="{{ route('editer', $offres->id) }}" class="btn btn-primary" title="Editer"><i class="bx bxs-edit-alt"></i></a></td>
                                          <td>
                                              <form action="{{ route('supprimer', $offres->id) }}" method="post">
                                                  @csrf
                                                  @method('DELETE')
                                                  <button  class="btn btn-danger" title="Editer"><i class="bx bx-trash"></i></button>
  
                                                  <!--
                                              <button class="btn btn-danger" type="submit" name="supprimer" title="Supprimer"><i class="bx bx-trash"></i></button>
                                                  -->
                                              </form>
                                          </td> 
                                      </tr>
                                  @endforeach        
                              </tbody>
                              
                              </table>
                              </div>
                          </div>
                      
                         
        
                    </div>
                    </div>
                     <br>
                    <div class="input-groupd mt-0 col-7 col-lg-3 offset-10">
                        <a href="ajouter_une_offre" class="btn btn-outline-primary"><strong>Ajouter une offre</strong></a>
                    </div>  
                </div>
                               
          </div>

    </div>
</div>     
@endsection