<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class Utilisateur extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $isBtnAddClicked = false;

    public $newUser = [];
    public $editUser = [];

    protected $rules = [ 
        'newUser.nom'=> 'required',
        'newUser.prenom'=> 'required',
        'newUser.email'=> 'required|email|unique:users,email',
        'newUser.telephone'=> 'required|numeric|unique:users,telephone',
        'newUser.pieceIdentite'=> 'required',
        'newUser.sexe'=> 'required',
        'newUser.adresse'=> 'required',
        'newUser.numeroPieceIdentite'=> 'required|unique:users,numeroPieceIdentite'
       
    
    ];
    
    //protected $messages = [
       // 'newUser.nom.required' => 'le nom de l"utilisateur est requis.',
        //'email.email' => 'The Email Address format is not valid.',
    //];
    //protected $validationAttributes = [
       // 'email' => 'email address'
    //];


    public function render()
    {
        return view('livewire.utilisateurs.index', [
            "users" => User::latest()->paginate(10)
        ])
                    ->extends('layouts.master')
                    ->section('contenu');
    }

    public function goToAddUser(){
          $this->isBtnAddClicked = true;
         
    }
    public function goToListUser(){
        $this->isBtnAddClicked = false;
  }
  public function addUser(){
    


    //vérifier les information envoyée  ask correctes
      $validationAttributes = $this->validate();
      $validationAttributes["newUser"]["password"] = "password";

    //ajouter un nouvel utilisateur
    User::create($validationAttributes["newUser"]);

    $this->newUser = [];
   

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utlisateur créé avec succés"]);
}

public function confirmDelete($name, $id){
    $this->dispatchBrowserEvent("showConfirmMessage", ["message"=>[
    "text" => "vous etes sur le point de supprimer $name de la listes des utilisateur, voulez-vous continuer",
    "title" => "Etes-vous sur de continuer?",
    "type" => "warning",
   "data" => [
       "user_id" => $id
   ]

    ]]);
}
public function deleteUser($id){
    User::destroy($id);

    $this->dispatchBrowserEvent("showSuccessMessage", ["message"=>"Utlisateur supprimer avec succés"]);
}
     
}
