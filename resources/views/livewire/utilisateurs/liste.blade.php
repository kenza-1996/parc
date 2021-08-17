 <h4>Gestion des utilisateurs.</h4>
    <div class="row p-4 pt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-primary d-flex align-items-center">
                <h3 class="card-title flex-grow-1"> <i class="fas fa-users fa-2x"></i> Liste des utilisateurs</h3>

                <div class="card-tools d-flex align-items-center">
                  <a class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddUser()"> <i class="fas fa-user-plus"></i>
                  Nouvel utilisateur</a>

                  <div class="input-group input-group-md" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th style="width:5% ;"class="text-center"></th>
                      <th style="width:25% ;"class="text-center">Utilisateur</th>
                      <th style="width:20% ;">Role</th>
                      <th style="width:20% ;"class="text-center">Ajouté</th>
                      <th style="width:30%;"class="text-center">Action</th>
                      
                    </tr>
                    
                  </thead>
                  <tbody>
                  @foreach ($users as $user)
                    
                  
                    <tr>
                      <td class="text-center">
                      @if ($user->sexe == "F") 
                      <img src="{{asset('images/women.png')}}" width="24"/>
                        
                      @else
                        <img src="{{asset('images/homme.png')}}" width="24"/> 
                      @endif
                      </td>
                      <td class="text-center">{{ $user->prenom }} {{ $user->nom }}</td>
                      <td>
                        @foreach ($user->roles as $role )
                          {{$role->nom }} |
                        @endforeach
                      </td>
                      <td class="text-center"><span class="tag tag-success">{{ $user->created_at->diffForHumans() }}</span></td>
                      <td class="text-center">
                      <button class="btn btn-link"><i class="far fa-edit"></i></button>
                      <button class="btn btn-link" wire:click="confirmDelete('{{ $user->prenom }} {{ $user->nom }}',{{$user->id}})"><i class="far fa-trash-alt"></i></button>

                    </tr>
                   
                   
                     
                   
                    
                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->

             <div  class="card-footer">
                <div class="float-right">
                 {{$users-> links()}}
                </div>
             </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
       
<script>
    window.addEventListener("showConfirmMessage", event=>{
    Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuer!'
      }).then((result) => {
        if (result.isConfirmed) {
            @this.deleteUser(event.detail.message.data.user_id)
        }
      })
    })

</script>
