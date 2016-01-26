<!-- Temporary -->

<!-- Title input field -->
<div class="form-group">
    {!! Form::label('title','Titre: ') !!}
    {!! Form::text('title',null, ['class'=>'form-control']) !!}
</div>

<!-- Body input field -->
<div class="form-group">
    {!! Form::label('body','Description: ') !!}
    {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
</div>

<!-- Published_at input field -->
<div class="form-group">
    {!! Form::label('published_at','Publié le: ') !!}
    {!! Form::input('date','published_at',date('Y-m-d'), ['class'=>'form-control']) !!}
</div>

<!-- Submit button -->
<div class="form-group">
    {!! Form::submit($submitButton,['class'=>'btn btn-primary form-control']) !!}
</div>