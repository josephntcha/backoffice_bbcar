<?php

namespace App\Http\Controllers;
use App\Models\Abonne;
use App\Models\Agence;
use App\Models\Offre;
use App\Models\Userbbcar;
use App\Mail\MailUtilisateur;
use App\Models\EnvoieMail;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AuthentificateController extends Controller
{
   /* la fonction sert a gerer l'authentification des clients du système*/
            public function check_authentificate(){

                  if (!Auth::user()) {
                        return redirect()->route('login');
                  }
                  else
                  { 
                        return redirect()->route('dashboadbbcar');

                  }
         }
         /* gestion des abonnées du site pour une periode donnée sur le site*/

         public function abonne(){
            // permet d'envoier les données des abonnée
            $Liste_abonne= Abonne::all();
            

            return view('abonnement', compact('Liste_abonne'));     
         }
         /* la méthode sert à gerer les auto écoles disponibles sur le site*/

         public function ecole(){
            $Liste_agence= Agence::all();
            return view('ecole', compact('Liste_agence'));
            
         }

         public function gestion_des_offres(){
            //Cette methode permet de gerer les offres mensuelle et annuelle 

            $liste_offres=Offre::where('type','Mensuelle')->get();
            $liste_offres_annuelle=Offre::where('type','Annuelle')->get();
            return view('pack', compact('liste_offres','liste_offres_annuelle'));
            
         }

         public function dashboad(){ 
            //Cette methode gere le dashboard, elle permet d'envoyer des sur la vue du dashboard
                  $Liste_abonne= Abonne::all();
                  $Liste_des_agences= Agence::all();
                  $nbr_agence=count($Liste_des_agences);
                  $nbr_offres=count(Offre::all());
                  

                  $liste_offres=Offre::where( 
                     ['type'=>'Mensuelle','id'=>1]
                  )->get();

                  $liste_offres_medium=Offre::where( 
                     ['type'=>'Mensuelle','id'=>3]
                  )->get();

                  $liste_offres_premium=Offre::where( 
                     ['type'=>'Mensuelle','id'=>5]
                  )->get();

                  $liste_offres_annuelle=Offre::where( 
                     ['type'=>'Annuelle','id'=>'2']
                  )->get();

                  $liste_offres_annuelle_medium=Offre::where( 
                     ['type'=>'Annuelle','id'=>'4']
                  )->get();

                  $liste_offres_annuelle_premium=Offre::where( 
                     ['type'=>'Annuelle','id'=>'6']
                  )->get();
                  
                  $Liste_agence= Abonne::all();
                  $nombre_abonne=count($Liste_agence);
           
                  return view('dashboadbbcar', compact('nbr_agence','nbr_offres','nombre_abonne','liste_offres','liste_offres_medium','liste_offres_premium','liste_offres_annuelle','liste_offres_annuelle_medium','liste_offres_annuelle_premium','Liste_abonne'));
            
         }
  /* cette méthode sert à gerer l'ajout d'une offres sur le site */
         public function ajout_offre(Request $ripequest){
            // methode qui permet d'enregister une offre dans la base de donnée
            $Ajout_offre=request()->validate([
               'designation'=>'required',
               'cout'=>'required',
               'type'=>'required',
               'agents_max'=>'required',
               'collaborateurs_max'=>'required',
               'clients_max'=>'required',
               'duree'=>'required',
            ]);

            Offre::create($Ajout_offre);
            return redirect()->route('pack');   
         }


         public function edit($id){
            //methode qui permet de voir les annciennes informations de l'offre avant de modifier
            $offre = Offre::findOrFail($id);
            return view('editer', compact('offre'));
               
         }


         public function update(request $request,$id){
            // methode qui permet de modifier une offre
            Offre::where('id',$id)->update(
                     [
                           'designation'=>$request->designation,
                           'cout'=>$request->cout,
                           'type'=>$request->type,
                           'agents_max'=>$request->agents_max,
                           'collaborateurs_max'=>$request->collaborateurs_max,
                           'clients_max'=>$request->clients_max,
                           'duree'=>$request->duree,
                     ]
                     );
                     return redirect()->route('pack');  
         
            
         }

         public function suppression($id){
            //methode qui permet de supprimer une offre dans la base de données
            $sup_offres = Offre::findOrFail($id);
            $sup_offres->delete();
            return redirect()->route('pack');
         }

         public function logout(Request $request)
         {
            //methode qui gere la deconnexion 
             Auth::guard('web')->logout();
     
             $request->session()->invalidate();
     
             $request->session()->regenerateToken();
     
             return redirect('/');
         }
         public function notificate(Request $request){
         //..............notificate est une methode qui recupere les informations du mail à travers le  formulaire , les stocke et envoie les mails......
           $fichier=Storage::disk('public')->put('Fichiers',$request->file);
           $data = [
            'sujet'=> $request->sujet,
            'contenu'=>$request->contenu,
            'file'=>$request->file
            ];

            $data_mail=request()->validate([
               'sujet'=>'required',
               'contenu'=>'required',
               'file'=>$fichier
              ]);
              
              // enregistrement des données du mail 
               EnvoieMail::create($data_mail);
              
               $users=Userbbcar::all();
               //boucle qui sert à envoier le mail à tous les utilisateurs
               foreach ($users as  $user) {
                  
                  Mail::to($user->email)->send(new MailUtilisateur($data,$user->email));  
               }
               return redirect()->route('gestion_mail'); 
            }   

            public function newmail(){
            //...........newmail est une methode qui permet de récupérer tous les mail des utilisateurs de bbcar..........

               $info_mail=EnvoieMail::all();

               return view('mail', compact('info_mail'));   
          }
        
}