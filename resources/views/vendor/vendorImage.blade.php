@extends('layout.main')
@section('content')

<div class="container">
 <section>


<h3>Gallery</h3>
<form method="post" action="" enctype="multipart">
  <div class="file-upload-previews"></div>
    <div class="file-upload">
       <input type="file"  name="images[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="4" accept="gif|jpg|png">
        <span>Click or drag vendor images here</span>
     </div>
       <button type="submit" class="btn btn-primary btn-rounded">Upload Images</button>
</form>
</div>

    </section>
    </div>
@endsection