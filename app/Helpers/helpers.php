<?php
use Illuminate\Support\Str;


function setActiveMenu($menus){
    $result = "";
    foreach ($menus as $menu) {
        if(request()->route()->getName() === $menu){
            $result = "active";
        }
    }
    return $result;
}

function setRootMenu($menus, $class){
    $result = "";
    foreach ($menus as $menu) {
        if(contains(request()->route()->getName(), $menu)){
            $result = $class;
        }
    }
    return $result;
}


function contains($container, $contenu){
    return Str::contains($container, $contenu);
}

function authNomComplet(){
    return auth()->user()->prenom . " " . auth()->user()->nom;
}

function getRolesName(){
    $rolesName = "";
    $i =0;
    foreach(auth()->user()->roles as $role){
        $rolesName .= $role->nom;

        if($i < sizeof(auth()->user()->roles) - 1){
            $rolesName .= ",";
        }
        $i++;
    }
    

    return $rolesName;
}