<div class="form-group">
    {{ Form::label($name, $prettyname, ['class' => 'control-label']) }}
    {{ Form::file($name, ['class' => 'form-control']) }}
</div>