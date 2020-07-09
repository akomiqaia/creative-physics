@extends('layouts.app')

@section('content')
    <body>
        <div class="flex-center position-ref full-height">
                    <div class="content">
                <div class="title m-b-md">
                   Challanges
                </div>
            <p>{{$title}}</p>
            
            @if($duration > 15) 
                <p>This chapter is hard and takes time</p>
                            
            @elseif($duration < 15) 
                <p>It takes only {{$duration}} minutes from your studies </p>

            @endif

            @unless ($chapter == "Chapter 2")
                <p>This is not a chapter 2</p>
            @endunless

            @php
                $name = "Mark";
                echo($name);
            @endphp

            </div>
        </div>
    </body>
</html>
@endsection