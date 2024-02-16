<div id="wrapper" style="margin-top: 80px;background-color:rgb(211, 233, 233)">
    <div class="card-body">
               <table class="table">
                 <thead style="background-color:rgb(243, 243, 206)">
                   <tr >
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">role</th>
                    <th scope="col">delete</th>
                    <th scope="col">update</th>
                     <th scope="col">
                       <div class=" navbar-expand-lg navbar-light">
                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <input  wire:model="searchuser" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                           <button wire:click="searchu()"class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                         
                         </div>
                       </div>
                     </th>
                   </tr>
                 </thead>
                 
                 <tbody>
                     @foreach ($users as $users )
                     <tr>
                         <th scope="row">{{ $users->id }}</th>
                         <td>{{ $users->name }}</td>
                         <td>{{ $users->email }}</td>
                         <td>{{ $users->role }}</td>
                         <td><a  wire:click="deleteuser({{ $users->id }})" class="btn btn-danger mb-4 text-center float-left" style="margin-right: 10px;"><Span style="color: black">delete<span></a></td>
                         <td> <a wire:click="updateuser({{ $users->id }})" wire:key="users-{{ $users->id }}"class="btn btn-warning mb-4 text-center float-left"><Span style="color: black">edit<span></a></td>
 
                         </td>
                       </tr>
                       @if ($ukey == 1 && $uid == $users->id)
                       <tr>
                           <td>new</td>
                           <td><input type="text" class="form-control red"
                                   value="{{ $users->name }}" placeholder="{{ $users->name }}"
                                   wire:model="newname" /> </td>
                           <td> <input type="text" class="form-control" value="{{ $users->email }}"
                                   placeholder="{{ $users->email }}" wire:model="newemail" /> </td>
                           
                           <td> <input type="text" class="form-control" value="{{ $users->role }}"
                                   placeholder="{{ $users->role }}" wire:model="newrole" /> </td> 
                           <td><button wire:click="saveupdate({{ $users->id }})"type="submit"
                                   name="submit" class="btn btn-success  mb-4 text-center"
                                   style="background-color: green">save</button></td>
                           <td><button wire:click="cancelup"type="submit" name="submit"
                                   class="btn btn-success  mb-4 text-center"
                                   style="background-color: gray">cancel</button></td>

                       </tr>
                   @endif
                        
                     @endforeach
                 </tbody>
               </table> 
              
           </div>
               
 </div>