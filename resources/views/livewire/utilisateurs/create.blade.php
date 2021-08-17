 <div class="row p-4 pt-5">
       <div class="col-md-6">
        <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> <i class="fas fa-user-plus fa-2x"></i> Creation d'un nouvel utilisateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form" wire:submit.prevent="addUser()">
                <div class="card-body">
                  <div class="d-flex">
                   
                     <div class="form-group flex-grow-1 mr-2">
                        <label >Nom</label>
                        <input type="text" wire:model="newUser.nom" class="form-control @error('newUser.nom') is invalide @enderror">
                        @error("newUser.nom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                   <div class="form-group flex-grow-1">
                         <label >Prenom</label>
                         <input type="text" wire:model="newUser.prenom" class="form-control @error('newUser.prenom') is invalide @enderror">
                        @error("newUser.prenom")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                   </div>
                  
                  <div class="form-group ">
                    <label >Adresse</label>
                    <input type="text" wire:model="newUser.adresse" class="form-control @error('newUser.adresse') is invalide @enderror">
                        @error("newUser.adresse")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                       <label >Sexe</label>
                       <select class="form-control" wire:model="newUser.sexe">
                          <option value="">--------<option>
                          <option value="F">Femme<option>
                          <option value="H">Homme<option>
                         </select>
                         @error("newUser.sexe")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                
                   
                     <div class="form-group  ">
                    <label >Adresse E-mail</label>
                    <input type="text" wire:model="newUser.email" class="form-control @error('newUser.email') is invalide @enderror">
                        @error("newUser.email")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   <div class="form-group ">
                    <label >Telephone</label>
                    <input type="text" wire:model="newUser.telephone" class="form-control @error('newUser.telephone') is invalide @enderror">
                        @error("newUser.telephone")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                   
                  <div class="d-flex">
                    <div class="form-group flex-grow-1 mr-2">
                       <label >Piece Identité</label>
                       <select class="form-control flex-grow-1  @error('newUser.piecIdentite') is invalide @enderror" wire:model="newUser.pieceIdentite" >
                          <option value="CNI">CNI<option>
                          <option value="PERMIS DE CONDUIRE">Permet de conduire<option>
                          <option value="PASSPORT">Passport<option>
                         </select>
                          @error("newUser.pieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label >Numero de piece d'identité</label>
                    <input type="text"  wire:model="newUser.numeroPieceIdentite"  placeholder="Numero de piece d'identité"class="form-control  @error('newUser.numeroPieceIdentite') is invalide @enderror">
                        @error("newUser.numeroPieceIdentite")
                            <span class="text-danger">{{ $message }}</span>
                        @enderror 
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="password"  wire:model="newUser.password"  class="form-control" disabled placeholder="Password">
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                   <button type="button" wire:click="goToListUser()" class="btn btn-danger">liste des utilisateur</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>



    