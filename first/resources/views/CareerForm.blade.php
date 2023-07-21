<style>
.container-form {
    width: 100%;
    height: auto;
    background: silver;
    padding: 32px 6px;
}

.form-controller-div form {
    width: 50%;
    display: block;
    margin: auto;
    height: auto;
}

.form-controller-div input {
    padding: 7px 23px;
    margin-top: 13px;
    border: 1px solid silver;
    border-radius: 21px;
    /* width: 50%; */
}

.form-controller-div input[type="submit"] {
    width: 146px;
    border: 1px solid silver;
    border-radius: 25px;
    display: block;
    color: white;
    background: black;
}
.form-controller-div input[type="submit"]:hover{          
    color: black;
    background: silver;
    cursor: pointer;
    border:1px solid black;
}
.error{
    color:red;
    margin-left: 24px;
}


</style>
<div class="container-form">
    <div class="form-controller-div">
        <form method="post" action="/apply/" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="form-controller">
                <input type="text" name="name" placeholder="Name*" value="{{ old('name') }}" />
            </div>
            @error('name')
            <span class="error">{{$message}} </span>
            @enderror
            <div class="form-controller">
                <input type="text" name="email" placeholder="Email*" value="{{old('email')}}"  />
            </div>
            @error('email')
            <span class="error">{{$message}} </span>
            @enderror
            <div class="form-controller">
                <input type="file" name="resume" placeholder="Resume*" />
            </div>               
            @error('resume')
                <span class="error">{{$message}} </span>
            @enderror
            <input type="submit" value="Apply Now" />
        </form>
    </div>
</div>