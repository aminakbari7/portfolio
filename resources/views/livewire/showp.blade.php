<div class="container-fex" style="margin-top: 100px">

    <div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body" style="background-color: rgb(221, 235, 230)">
        <table class="table">
          <thead style="background-color: rgb(223, 223, 185)">
            <tr>
              <th scope="col">#</th>
              <th scope="col">title</th>
              <th scope="col">link</th>
              <th scope="col">image</th>
              <th scope="col">body</th>
              <th scope="col">delete</th>
              <th scope="col">update</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($ml as $ml )
            <tr>
               <th scope="row">1</th>
               <td>{{ $ml->title }}</td>
               <td>{{ $ml->link }}</td>
               <td>{{ $ml->image }}</td>
               <td>{{ $ml->body }}</td>
               <td><a wire:click="deletep({{ $ml->id }})" class="btn btn-danger  text-center ">delete</a></td>
               <td><a wire:click="updatep({{ $ml->id }})" class="btn btn-warning  text-center ">update</a></td>
            </tr>
            @if($upkey==1)
            <tr>
              <td>new</td>
              <td><input type="text"  class="form-control red" value="{{ $ml->title }}" placeholder="{{ $ml->title }}"   wire:model="newtitle" /> </td>
              <td> <input type="text"  class="form-control" value="{{ $ml->link }}" placeholder="{{ $ml->link }}" wire:model="newlink" /> </td>
              <td> <input type="file"  class="form-control" value="{{ $ml->image }}" placeholder="{{ $ml->image }}" wire:model="newimage" /> </td>
              <td> <input type="text"  class="form-control" value="{{ $ml->body }}" placeholder="{{ $ml->body }}" wire:model="newbody" /> </td>
              <td><button wire:click="edit({{ $ml->id }})"type="submit" name="submit" class="btn btn-success  mb-4 text-center" style="background-color: green">save</button></td>
       
             </tr>

            @endif
            @endforeach
          </tbody>
        </table> 
      </div>
    </div>
  </div>
</div>

</div>
