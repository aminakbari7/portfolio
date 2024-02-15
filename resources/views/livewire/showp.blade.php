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
               <td><a href="delete-products.html" class="btn btn-danger  text-center ">delete</a></td>
            </tr>
            @endforeach
          </tbody>
        </table> 
      </div>
    </div>
  </div>
</div>

</div>
