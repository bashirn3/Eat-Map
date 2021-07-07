@extends('layout.main')
@section('content')

<div class="container">
  <section>



      <div class="row">
          <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset">
                <h3 class="jumbotron">Upload Vendor Images</h3>
               <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group control-group increment" >
                     <input type="file" name="images[]" class="form-control">
                       <div class="input-group-btn"> 
                             <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                        <div class="clone hide">
                             <div class="control-group input-group" style="margin-top:10px">
                                 <input type="file" name="images[]" class="form-control">
                                   <div class="input-group-btn"> 
                                     <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                 </div>
                               </div>

                
                                <div>
                                <button type="submit" style=" margin-top: 10px;" class="btn btn-primary btn-rounded">Upload Images</button>
                                </div>
                 </form>
           </div>
        </div>

   </section>

  

</div>
</div>
@endsection