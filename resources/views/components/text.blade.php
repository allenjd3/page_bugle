<?php // resources/views/components/text.blade.php?>
<div class="form-group">
    {{ Form::label($name, $prettyname, ['class' => 'control-label']) }}
    {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>