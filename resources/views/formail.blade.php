@extends('master')
@section('content')
    <div class="page-content">
        <div class="col-xl-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <h4>Nouveau message</h4>
                    <br>
                    <form action="{{ route('envoieMail') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="sujet" class="form-control" id="floatingnameInput" placeholder="Enter Name">
                            <label for="floatingnameInput">Sujet</label>
                        </div>
                        <br>
                        contenu
                        <div class="form-floating mb-3">
                            <textarea name="contenu" id=""  cols="100" rows="7"></textarea>                
                       </div>
                         <br>
                         Joindre un fichier
                         <div class=" mb-3">
                                <input class="form-control form-control-lg" name="file" id="formFileLg" type="file">
                         </div>
                         <br>
                        <div>
                            <button type="submit" class="btn btn-primary w-md offset-5">Envoyer le mail</button>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection