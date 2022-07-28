@extends('layout')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <form class="form bg-white p-6 border-1" method="post" action="{{route('laptops.store')}}">
      @csrf
        <div>
            <label class="text-sm" for="name">Laptop Name</label>
            <input class="text-lg border-1" type="text" id="name" value="{{old('name')}}" name="name">
            @error('laptop-name')
            <div class="form-error">
                {{$message }}
            </div>
            @enderror 
        </div>

        <div>
            <label class="text-sm" for="brand">Brand</label>
            <input class="text-lg border-1" type="text" id="brand" value="{{old('brand')}}" name="brand">
            @error('brand')
            <div class="form-error">
                {{$message }}
            </div>
            @enderror 
        </div>

        {{-- <div>
            <label class="text-sm" for="year">Year Made</label>
            <input class="text-lg border-1" type="text" id="year" name="year">
        </div> --}}

        <div>
            <button class="border-1" type="submit">Submit</button>
        </div>
    </form>

</div>
@endsection