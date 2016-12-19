<?php // resources/views/components/text.blade.php?>
<div class="form-group">
    {{ Form::label($name, $prettyname, ['class' => 'control-label']) }}
    {{ Form::password($name, ['class' => 'form-control']) }}
</div>