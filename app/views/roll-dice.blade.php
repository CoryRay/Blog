@extends('layouts.master')

@section('content')
    <p>Your guess is: {{{$guess}}}</p>

    <p>The random number is: {{{$randNum}}}</p>

    @if ($guess == $randNum)
        <p>You guessed correctly!</p>
    @endif
@stop