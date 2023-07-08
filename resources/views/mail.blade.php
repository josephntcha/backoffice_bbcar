@extends('master')
@push('pone')
<!-- DataTables -->
<link href=" {{asset ('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset ('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="{{asset (' assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />     
@endpush

@section('content')
    <div class="page-content">


        <div class="row">
            
            <div class="col-12">
                <div class="card">
                    
                    
                    <div class="card-body">
                        <div class="offset-10  h4"><a href="notification" class="btn btn-outline-primary"><strong>Nouveau message </strong></a></div>
                         <div class="card-title  h4">Envoyer un mail aux entreprises</div>
                        <p class="card-title-desc">Liste des notifications </p>

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Date d'envoie</th>
                                <th>Sujet</th>
                                <th>Contenu du message</th>
                                <th>Fichiers joints</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($info_mail as $info)
                                <tr>
                                 <td>{{ $info->created_at}}</td>   
                                 <td>{{ $info->sujet}}</td>
                                 <td>{{ $info->contenu}}</td>
                                 <td>{{ $info->file}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
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