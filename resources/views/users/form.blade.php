<div class="form-group">
    {!! Form::label('name','Name : ',['class'=>'control-label col-sm-4']) !!}
    <div class="col-sm-8">
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('email','Email : ',['class'=>'control-label col-sm-4']) !!}
    <div class="col-sm-8">
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('password','Password : ',['class'=>'control-label col-sm-4']) !!}
    <div class="col-sm-8">
        {!! Form::password('password',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Type','Type : ',['class'=>'control-label col-sm-4']) !!}
    <div class="col-sm-8">
        {!! Form::select('type',array('user' => 'User', 'manager' => 'Manager'),null,['class'=>'form-control','placeholder'=>'Please select']) !!}
    </div>
</div>
<div class="form-group">
    <div class=" col-sm-offset-4 col-sm-8">
        {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
    </div>
</div>