<h1> This is call.blade.php content. </h1>

@if (strlen($name) < 10)
    Name is small.
@else
    Name is big.
@endif

@if (count($users) < 10)
    Array is small.
@else
    Array is big.
@endif

@if (isset($name))
    String is set.
@else
    String is not set.
@endif

@isset($name)
    @empty($name)
        String is empty.
    @endempty
    {{$name}} is not empty.
@endisset


@for ($i = 0; $i < 10; $i++) 
    {{$i}}  
@endfor

@forelse ($users as $item)
      {{$item}}
@empty
    Array is empty
@endforelse


@while ($i < 10)
    {{$i++}}
@endwhile
<br>
@foreach ($users as $user)
    {{$loop->index}}.{{$user}}<br>
@endforeach

<br>
@foreach ($users as $user)
    {{$loop->iteration}}. {{$user}}<br>
@endforeach

<br>
@foreach ($users as $user)
    {{$loop->remaining}}. {{$user}}<br>
@endforeach

<br>
@foreach ($users as $user)
    {{$loop->count}}. {{$user}}<br>
@endforeach

<br>
@foreach ($users as $user)
    @if ($loop->first)
        {{$user}}
    @endif

    @if ($loop->last)
        {{$user}}
    @endif
@endforeach

<br>
@php
    echo "EJDBI";
@endphp


 