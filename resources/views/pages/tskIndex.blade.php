@extends('layouts.base')

@section('content')
<h1>Task: {{$tsks -> count()}}</h1>
<ul>
  @foreach ($tsks as $tsk)
    <li>Nome Task: {{$tsk -> name}}</li>
  <li>Employee associato 
    <ul>
      <li>ID:{{$tsk -> employee_id }} </li>
      <li>Nome:{{$tsk -> employee -> name }}</li>
    </ul>
  </li>    
  @endforeach
</ul>
@endsection