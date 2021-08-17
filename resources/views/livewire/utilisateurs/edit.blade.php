 <div class="row p-4 pt-5">
       <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Formulaire d'edition  utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="addUser()">
                <div class="card-body">
                  <div class="d-flex">
                   
                     <div class="form-group flex-grow-1 mr-2">
                        <label >Nom</label>
                        <input type="text" wire:model="editUser.nom" class="form-control @error('editUser.nom') is invalide @enderror">
                        @error("editUser.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                   <div class="form-group flex-grow-1">
                         <label >Prenom</label>
                         <input type="text" wire:model="editUser.prenom" class="form-control @error('editUser.prenom') is invalide @enderror">
                        @error("editUser.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   </div>
                  
                  <div class="form-group ">
                    <label >Adresse</label>
                    <input type="text" wire:model="editUser.adresse" class="form-control @error('editUser.adresse') is invalide @enderror">
                        @error("editUser.adresse")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                       <label >Sexe</label>
                       <select class="form-control" wire:model="editUser.sexe">
                          <option value="">--------<option>
                          <option value="F">Femme<option>
                          <option value="H">Homme<option>
                         </select>
                         @error("editUser.sexe")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                
                   
                     <div class="form-group  ">
                    <label >Adresse E-mail</label>
                    <input type="text" wire:model="editUser.email" class="form-control @error('editUser.email') is invalide @enderror">
                        @error("editUser.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >Telephone</label>
                    <input type="text" wire:model="editUser.telephone" class="form-control @error('editUser.telephone') is invalide @enderror">
                        @error("editUser.telephone")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   
                  <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                       <label >Piece Identité</label>
                       <select class="form-control flex-grow-1  @error('editUser.piecIdentite') is invalide @enderror" wire:model="editUser.pieceIdentite" >
                          <option value="CNI">CNI<option>
                          <option value="PERMIS DE CONDUIRE">Permet de conduire<option>
                          <option value="PASSPORT">Passport<option>
                         </select>
                          @error("editUser.pieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label >Numero de piece d'identité</label>
                    <input type="text"  wire:model="editUser.numeroPieceIdentite"  placeholder="Numero de piece d'identité"class="form-control  @error('editUser.numeroPieceIdentite') is invalide @enderror">
                        @error("editUser.numeroPieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror 
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password"  wire:model="editUser.password"  class="form-control" disabled placeholder="Password">
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Appliquer les modification</button>
                   <button type="button" wire:click="goToListUser()" class="btn btn-danger">liste des utilisateur</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>



    