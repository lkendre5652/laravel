<h1>Form View</h1>
<form method="post" action="formSubmit">{{ csrf_field() }}
    <input name="fname" placeholder="Name*"/>
    <input type='submit' name='Submit' value='Submit' />
</form>