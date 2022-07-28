@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    @if (count($laptops) > 0)
        
@foreach ($laptops as $laptop)
    <div>
        <h3>
           <a href="{{route('laptops.show',['laptop'=>$laptop['id']])}}">{{$laptop['name']}}</a>
        </h3>
        <ul>
            <li>
                Made by: {{$laptop['brand']}}
            </li>
        </ul>
    </div>
@endforeach

@else 
<h2>There is no laptop.</h2>
@endif 


</div>
@endsection