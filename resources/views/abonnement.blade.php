@extends('master')
@push('pone')
<!-- DataTables -->
<link href=" {{asset ('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{asset ('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
    type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{asset (' assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
    rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <h4>Gestion des abonnements des Auto-écoles</h4>
        <br><br>
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Nom </th>
                                <th>Mail</th>
                                <th>Téléphone</th>
                                <th>Début de l'abonnement</th>
                                <th>Fin de l'abonnement</th>
                                <th>Mode de payement</th>
                                <th>essai gratuit</th>
                                <th>offre</th>
                                <th>Numéro client</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($Liste_abonne as $abonne)
                            <tr>
                                <td>{{ $abonne->name}}</td>
                                <td>{{ $abonne->email}}</td>
                                <td>{{ $abonne->telephone}}</td>
                                <td>{{ $abonne->date_abonnement}}</td>
                                <td>{{ $abonne->fin_abonnement}}</td>
                                <td>{{ $abonne->mode_paiement}}</td>
                                <td>{{ $abonne->essai_gratuit}}</td>
                                <td>{{ $abonne->offre_id}}</td>
                                <td>{{ $abonne->user_id}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!-- end col -->
        </div>


    </div>
</div>
@push('java')


<!-- Required datatable js -->
<script src="{{asset ('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src=" {{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/jszip/jszip.min.js') }}"></script>
<script src=" {{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src=" {{ asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src=" {{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

<script src="{{ asset('assets/js/app.js') }}"></script>

@endpush

@endsection