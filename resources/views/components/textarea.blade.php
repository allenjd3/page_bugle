<div class="form-group">
    {{ Form::label($name, $prettyname, ['class' => 'control-label']) }}
    {{ Form::textarea($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>