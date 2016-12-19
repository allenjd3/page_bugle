<?php // resources/views/components/email.blade.php?>
<div class="form-group">
    {{ Form::label($name, $prettyname, ['class' => 'control-label']) }}
    {{ Form::email($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
</div>