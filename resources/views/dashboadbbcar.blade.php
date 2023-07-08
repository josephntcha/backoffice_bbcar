@extends('master')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row ">
                   <div class="col-md-4">
                       <table class="table  mb-0 text-center bg-light">  
                                <td class="align-middle text-black h4 ">Nombre D'abonnés</td>              
                              <tbody>
                                <td class="h3"><strong>{{ $nombre_abonne }}</strong></td>
                               </tbody>   
                        </table>
                    </div>

                <div class="col-md-4">
                    <table class="table  mb-0 text-center bg-light">  
                                <td class="align-middle text-black h4 ">Nombre D'auto-école</td>              
                        <tbody>
                            <td class="h3"><strong>{{ $nbr_agence }}</strong></td>
                        </tbody>   
                    </table>
                </div>

                <div class="col-md-4">
                    <table class="table  mb-0 text-center bg-light">  
                                <td class="align-middle text-black h4 ">Nombre D'offres</td>              
                        <tbody>
                            <td class="h3"><strong>{{ $nbr_offres }}</strong></td>
                        </tbody>   
                    </table>
                </div>

            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Bon retour</h5>
                                        <p>BBCar Dashboard</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                    </div>
                                    <h5 class="font-size-15 text-truncate"></h5>
                                    <p class="text-muted mb-0 text-truncate">Admini_bbcar</p>
                                </div>

                                <div class="col-sm-8">
                                    <div class="pt-4">

                                        <div class="row">
                                            <div class="col-6">
                                                <h5 class="font-size-15">125</h5>
                                                <p class="text-muted mb-0">Projects</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="font-size-15">$1245</h5>
                                                <p class="text-muted mb-0">Revenue</p>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class="col-xl-8 ">  
                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class=" text-center "><strong>Offres disponibles</strong></div>
                                
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

                                <!-- Tab panes -->
                                <div class="tab-content p-3 text-muted">
                                    <div class="tab-pane active" id="home1" role="tabpanel">
                                        <div class="tab-pane active" id="home-1" role="tabpanel">
                                            
                                                    <div class="col-xl-12">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="card mini-stats-wid">
                                                                    <div class="card-body">
                                                                        <div class="d-flex">
                                                                            <div class="flex-grow-1">
                                                                                
                                                                                @foreach ($liste_offres as $offres)
                                                                                <p class="text-muted fw-medium h5">{{ $offres->designation }}</p>
                                                                                <h5 class="mb-0">{{ $offres->cout}} FCFA</h5>
                                                                                @endforeach
                                                                                
                                                                            </div>
                                            
                                                                            <div class="flex-shrink-0 align-self-center">
                                                                                <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                                    <span class="avatar-title">
                                                                                        <i class="bx bx-copy-alt font-size-24"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card mini-stats-wid">
                                                                    <div class="card-body">
                                                                        <div class="d-flex">
                                                                            <div class="flex-grow-1">
                                                                                
            
                                                                                @foreach ($liste_offres_medium as $offres)
                                                                                <p class="text-muted fw-medium h5">{{ $offres->designation }}</p>
                                                                                <h5 class="mb-0">{{ $offres->cout}} FCFA</h5>
                                                                                @endforeach
                                                                                
                                                                            </div>
                                            
                                                                            <div class="flex-shrink-0 align-self-center ">
                                                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                                                    <span class="avatar-title rounded-circle bg-primary">
                                                                                        <i class="bx bx-archive-in font-size-24"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="card mini-stats-wid">
                                                                    <div class="card-body">
                                                                        <div class="d-flex">
                                                                            <div class="flex-grow-1">
                                                                                
            
                                                                                @foreach ($liste_offres_premium as $offres)
                                                                                <p class="text-muted fw-medium h5">{{ $offres->designation }}</p>
                                                                                <h5 class="mb-0">{{ $offres->cout}} FCFA</h5>
                                                                                @endforeach
                                                                                
                                                                            </div>
                                            
                                                                            <div class="flex-shrink-0 align-self-center">
                                                                                <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                                                    <span class="avatar-title rounded-circle bg-primary">
                                                                                        <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                            
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="profile1" role="tabpanel">
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="card mini-stats-wid">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    @foreach ($liste_offres_annuelle as $offres)
                                                                    <p class="text-muted fw-medium h5">{{ $offres->designation }}</p>
                                                                    <h5 class="mb-0">{{ $offres->cout}} FCFA</h5>
                                                                    @endforeach
                                                                </div>
                                
                                                                <div class="flex-shrink-0 align-self-center">
                                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                                        <span class="avatar-title">
                                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card mini-stats-wid">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    @foreach ($liste_offres_annuelle_medium as $offres)
                                                                    <p class="text-muted fw-medium h5">{{ $offres->designation }}</p>
                                                                    <h5 class="mb-0">{{ $offres->cout}} FCFA</h5>
                                                                    @endforeach
                                                                </div>
                                
                                                                <div class="flex-shrink-0 align-self-center ">
                                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                                        <span class="avatar-title rounded-circle bg-primary">
                                                                            <i class="bx bx-archive-in font-size-24"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card mini-stats-wid">
                                                        <div class="card-body">
                                                            <div class="d-flex">
                                                                <div class="flex-grow-1">
                                                                    @foreach ($liste_offres_annuelle_premium as $offres)
                                                                    <p class="text-muted fw-medium h5">{{ $offres->designation }}</p>
                                                                    <h5 class="mb-0">{{ $offres->cout}} FCFA</h4>
                                                                    @endforeach
                                                                </div>
                                
                                                                <div class="flex-shrink-0 align-self-center">
                                                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                                        <span class="avatar-title rounded-circle bg-primary">
                                                                            <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->
                                
                                
                                        </div>
                                    </div>
                    
                                </div>

                            </div>
                        </div>   
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Les 25 derniers abonnements</h4>
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="form-check font-size-16 align-middle">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                                <label class="form-check-label" for="transactionCheck01"></label>
                                            </div>
                                        </th>
                                        <th>ID</th>
                                        <th>Nom </th>
                                        <th>Mail</th>
                                        <th>Téléphone</th>
                                        <th>Début de l'abonnement</th>
                                        <th>Fin de l'abonnement</th>
                                        <th>Mode de payement</th>
                                        <th>essai gratuit</th>
                                        <th>offre</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($Liste_abonne as $abonne)
                                    
                                        <td style="width: 20px;">
                                            <div class="form-check font-size-16 align-middle">
                                                <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                                <label class="form-check-label" for="transactionCheck01"></label>
                                            </div>
                                        </td>
                                     <td>{{ $abonne->user_id}}</td>
                                     <td>{{ $abonne->name}}</td>   
                                     <td>{{ $abonne->email}}</td>
                                     <td>{{ $abonne->telephone}}</td>
                                     <td>{{ $abonne->date_abonnement}}</td>
                                     <td>{{ $abonne->fin_abonnement}}</td>
                                     <td>{{ $abonne->mode_paiement}}</td>
                                     <td>{{ $abonne->essai_gratuit}}</td>
                                     <td>{{ $abonne->offre_id}}</td>
                                     
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