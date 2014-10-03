@extends('layouts.master')

@section('content')
<p>Your guess is: <?= $guess ?></p>

<?php if ($guess == $randNum): ?>
<p>You guessed correctly!</p>
<?php endif ?>

<p>Your random number is: <?= $randNum ?></p>
@stop