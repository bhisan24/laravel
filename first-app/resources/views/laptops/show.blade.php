@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div>
        <h3>
            {{$laptop['name']}}
        </h3>
            <ul>
                <li>
                    Made by: {{$laptop['brand']}}
                </li>
            </ul>
    </div>

</div>
@endsection