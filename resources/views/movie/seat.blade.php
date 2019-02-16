@extends('layouts.app')

@section('content')
    <h1 align="center">movie</h1>
    <div align="center">
        @foreach($data as $k=>$v)
                @if($v==0)
                    <button class="btn btn-info"><a href="/domovie/{{$k}}"><font color="black">座位{{$k}}</font></a></button>
                @else
                    <button class="btn btn-danger"><font color="white">座位{{$k}}</font></button>
                @endif
                @if($k%5==0)
                    <br />
                    <br />
                @endif
         @endforeach
    </div>
@endsection