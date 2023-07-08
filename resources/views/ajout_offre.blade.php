
@extends('master')
@section('content')
<div class="page-content">
  <form action="ajouter_offre" method="POST" class="col-10 offset-1  bg-white" enctype="multipart/form-data">
    <fieldset > 
      <legend><h3 class ="text-center">Ajouter une offre</h3></legend>
        @csrf
          <div class="row">
            <div class="col-12">
                 <div class="card">
                      <div class="card-body">

                              <div class="mb-4 row">
                                  <label for="example-text-input" class="col-md-2 col-form-label">Designation</label>
                                  <div class="col-md-10">
                                      <input class="form-control" type="text" name="designation" value="" id="example-text-input" autofocus  placeholder="Entrez le nom de l'offre">
                                  </div>
                              </div>

                              <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Coût</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="cout" value="" id="example-text-input" placeholder="Prix de l'offre">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="example-text-input" class="col-md-2 col-form-label">Type</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="text" name="type" value="" id="example-text-input"   placeholder="Type d'offre">
                              </div>
                          </div>

                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Agents_max</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="agents_max" value="" id="example-text-input" placeholder="Entrez le nombre d'agents maximal">
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="example-text-input" class="col-md-2 col-form-label">CollaborateurMax</label>
                              <div class="col-md-10">
                                  <input class="form-control" type="text" name="collaborateurs_max" value="" id="example-text-input"  placeholder="Entrez le nombre de collaborateur maximal">
                              </div>
                          </div>

                          <div class="mb-3 row">
                            <label for="example-text-input" class="col-md-2 col-form-label">Clients_max</label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" name="clients_max" value="" id="example-text-input"  placeholder="Entrez le nombre de client maximal">
                            </div>
                        </div>

                        <div class="mb-3 row">
                          <label for="example-text-input" class="col-md-2 col-form-label">Durée</label>
                          <div class="col-md-10">
                              <input class="form-control" type="text" name="duree" value="" id="example-text-input"   placeholder="Durée de l'offre">
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light offset-6">Ajouter l'offre</button>
                    </div>
                </div>
            </div> <!-- end col -->
          </div>
          
     </fieldset>
 </form>
</div>   
@endsection


