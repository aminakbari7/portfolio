<div id="wrapper" style="margin-top: 80px;background-color:rgb(211, 233, 233)">
    <div class="card-body">
               <table class="table">
                 <thead style="background-color:rgb(243, 243, 206)">
                   <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">link</th>
                    <th scope="col">image</th>
                    <th scope="col">body</th>
                    <th scope="col">case</th>
                    <th scope="col">delete</th>
                    <th scope="col">update</th>
                     <th scope="col">
                       <div class="navbar navbar-expand-lg navbar-light">
                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                           <input  wire:model="searchuser" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                           <button wire:click="searchu()"class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                         
                         </div>
                       </div>
                     </th>
                   </tr>
                 </thead>
                 
                 <tbody>
                     @foreach ($projects as $projects )
                     <tr>
                         <th scope="row">{{ $projects->id }}</th>
                         <td>{{ $projects->title }}</td>
                         <td>{{ $projects->link }}</td>
                         <td>{{ $projects->image }}</td>
                         <td>{{ $projects->body }}</td>
                         <td>{{ $projects->case }}</td>
                         <td><a  wire:click="deleteproject({{ $projects->id }})" class="btn btn-danger mb-4 text-center float-left" style="margin-right: 10px;"><Span style="color: black">delete<span></a></td>
                            <td> <a wire:click="updateproject({{ $projects->id }})" wire:key="projects-{{ $projects->id }}"class="btn btn-warning mb-4 text-center float-left"><Span style="color: black">edit<span></a></td>
 
                         </td>
                       </tr>
                    </td>
                    @if ($keyup == 1 && $keyid == $projects->id)
                                        <tr>
                                            <td>new</td>
                                            <td><input type="text" class="form-control red"
                                                    value="{{ $projects->title }}" placeholder="{{ $projects->title }}"
                                                    wire:model="newtitle" /> </td>
                                            <td> <input type="text" class="form-control" value="{{ $projects->link }}"
                                                    placeholder="{{ $projects->link }}" wire:model="newlink" /> </td>
                                            <td> <input type="file" class="form-control" value="{{ $projects->image }}"
                                                    placeholder="{{ $projects->image }}" wire:model="newimage" /> </td>
                                            <td> <input type="text" class="form-control" value="{{ $projects->body }}"
                                                    placeholder="{{ $projects->body }}" wire:model="newbody" /> </td>
                                            <td>
                                                <select wire:model="case" class="form-select  form-control"
                                                    aria-label="Default select example">
                                                    <option selected>{{ $projects->case }}</option>
                                                    <option wire:model="newcase">machine-learning</option>
                                                    <option wire:model="newcase">web-app</option>
                                                </select>

                                            </td>
                                            <td><button wire:click="saveup({{ $projects->id }})"type="submit"
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