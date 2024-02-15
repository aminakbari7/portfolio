<div class="container-fluid" style="margin-top: 100px" dir="rtl">
  <div class="row">
   <div class="col">
     <div class="card">
       <div class="card-body">
         <h5 class="card-title mb-5 d-inline">Create Product</h5>

     <form wire:submit="save">
           <!-- Email input -->
           <div class="form-outline mb-4 mt-4">
             <input type="text" wire:model="title" id="form2Example1" class="form-control" placeholder="tiltle" />
           </div>
           <div class="form-outline mb-4 mt-4">
             <input type="text" wire:model="link" id="form2Example1" class="form-control" placeholder="link" />
            
           </div>
           <div class="form-outline mb-4 mt-4">
             <input type="file" wire:model="image" id="form2Example1" class="form-control"  />
           </div>
           <div class="form-outline mb-4 mt-4">

               <select wire:model="case" class="form-select  form-control" aria-label="Default select example">
                 <option selected>Choose Type</option>
                 <option value="machine-learning">machine-learning</option>
                 <option value="web-app">web-app</option>
               </select>
             </div>

           <div class="form-group">
             <label for="exampleFormControlTextarea1">Description</label>
             <textarea  wire:model="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
           </div>  
           <br>

           <!-- Submit button -->
           @if (session()->exists('msg'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show">
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                </div>
              @endif
           <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
         </form>
       </div>
     </div>
   </div>
 </div>
</div>