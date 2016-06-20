<div class="form-group">
    {!! Form::label('name','Name : ',['class'=>'control-label col-sm-4']) !!}
    <div class="col-sm-8">
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('description','Description : ',['class'=>'control-label col-sm-4']) !!}
    <div class="col-sm-8">
        {!! Form::textarea('description',null,['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('taskType','Type : ',['class'=>'control-label col-sm-4']) !!}
    <div class="col-sm-8">
        {!! Form::select('taskType',array('user' => 'User', 'manager' => 'Manager'),null,['class'=>'form-control','placeholder'=>'Please select']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('assignedTo','Assign To : ',['class'=>'control-label col-sm-4']) !!}
    <div class="col-sm-8">
        {!! Form::select('assignedTo',$users,null,['class'=>'form-control','placeholder'=>'Please select']) !!}
    </div>
</div>
<div class="form-group">
    <div class=" col-sm-offset-4 col-sm-8">
        {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
    </div>
</div>