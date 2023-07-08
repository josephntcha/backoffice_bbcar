
@extends('layoutprofile')
@section('content')
<div class="page-content">
  <form action="{{ route('offre.update',$offre->id) }}" method="POST" class="col-8 offset-2  bg-white" enctype="multipart/form-data">
           <fieldset > 
              <legend><h3 class ="text-center">Editer l'offre</h3></legend>
                @csrf
                @method('put')

                <div class="card-body">

                  <div class="mb-4 row">
                      <label for="example-text-input" class="col-md-2 col-form-label">Designation</label>
                      <div class="col-md-10">
                          <input class="form-control" type="text" name="designation" id="example-text-input"  value="{{ $offre->designation }}">  
                      </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Coût</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="cout" id="example-text-input" value="{{ $offre->cout }}" >
                    </div>
                 </div>

                 <div class="mb-3 row">
                  <label for="example-text-input" class="col-md-2 col-form-label">Type</label>
                  <div class="col-md-10">
                      <input class="form-control" type="text" name="type" id="example-text-input" value="{{ $offre->type }}" >
                  </div>
                 </div>

                 <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Agents_max</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="agents_max" id="example-text-input" value="{{ $offre->agents_max }} ">
                    </div>
                 </div>

                 <div class="mb-3 row">
                  <label for="example-text-input" class="col-md-2 col-form-label">CollaborateurMax</label>
                  <div class="col-md-10">
                      <input class="form-control" type="text" name="collaborateurs_max"  id="example-text-input" value="{{ $offre->collaborateurs_max }}"  >
                  </div>
                 </div>

                  <div class="mb-3 row">
                    <label for="example-text-input" class="col-md-2 col-form-label">Clients_max</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="clients_max" id="example-text-input"  value="{{ $offre->clients_max}}" >
                    </div>
                 </div>

                 <div class="mb-3 row">
                  <label for="example-text-input" class="col-md-2 col-form-label">Durée</label>
                  <div class="col-md-10">
                      <input class="form-control" type="text" name="duree"  id="example-text-input"  value="{{ $offre->duree}}" >
                  </div>
                 </div>
                 <button type="submit" class="btn btn-primary waves-effect waves-light offset-6">Modifier</button>
               </div>
       </fieldset>
    </form>
</div>   
@endsection


