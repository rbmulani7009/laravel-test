
@if($errors->any())
<div class = "form-group">
    <div class = "col-sm-offset-4 col-sm-8">
        <ul class = "alert alert-danger">
            @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>
</div>
@endif
