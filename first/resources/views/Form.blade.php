<h1>Form View</h1>
<form method="post" action="formSubmit" enctype="multipart/form-data" >{{ csrf_field() }}
    <div class="form-controller">
        <input name="fname" placeholder="Name*" type="text"/>
    </div>
    @error('fname')
        {{$message}}
    @enderror
    <div class="form-controller">
        <input type="text" name="email" placeholder="Email*" />
    </div>
    @error('email')
        {{$message}}
    @enderror

    <div class="form-controller">
        <input type="file" name="doc" placeholder="File*" />
    </div>

    <input type='submit' name='Submit' value='Submit' />
</form>