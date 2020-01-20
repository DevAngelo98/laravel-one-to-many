@extends('layouts.base')

@section('content')
<h1>Employee: {{$emps -> count() }}</h1>
<ul>
  @foreach ($emps as $emp)
    <li>{{$emp -> name}} {{$emp -> lastname}}: {{$emp -> tasks() -> count()}}</li>    
  @endforeach
</ul>

<ul>
  <li>
    With task:
    <ul>
      @foreach ($emps as $emp)

        @if($emp -> tasks() -> count() > 0)

          <li>{{$emp -> id}}: {{$emp -> name}} {{$emp -> lastname}}: {{$emp -> tasks() -> count()}}</li>
          <ul>
            @foreach ($emp -> tasks as $task)
              <li> {{$task -> id}}: {{$task -> name}}</li>
            @endforeach  
          </ul> 
          
          @endif  

      @endforeach
    </ul>
  </li>
</ul>
@endsection