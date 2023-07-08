<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

              
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="{{route ('dashboadbbcar') }}" class="waves-effect">
                        <i class="bx bx-chat"></i>
                        <span key="t-dashboards">Dashboards</span>
                    </a>
                </li>                

                <li class="menu-title" key="t-apps">Apps</li>
                
                   <li>
                    <a href="{{route('abonne') }}" class=" waves-effect">
                        <i class="bx bxs-group"></i> 
                        <span key="t-layouts">Liste des abonnements</span>
                    </a>
                    </li>

                    <li>
                        <a href="{{route('ecole')}}" class=" waves-effect">
                            <i class="bx bxs-home"></i> 
                            <span key="t-layouts">Liste des auto-écoles</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('pack') }}" class=" waves-effect">
                            <i class="bx bxs-badge"></i> 
                            <span key="t-layouts">Gestion des packs</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('gestion_mail') }}" class=" waves-effect">
                            <i class="bx bx-envelope"></i> 
                            <span key="t-layouts">Gestion des mails</span>
                        </a>
                    </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>