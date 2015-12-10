@extends('app')

@section('content')
<h1>About Me: {{ $name }} {{ $first }} {{ $last }}</h1>


    @if ($first == 'Kian')
    <h2>Hi Kian,</h2>
    @else
    <H1>Hi,</H1>
    @endif

@if (count($people))
    <h3>People I like</h3>
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@endif

<p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla molestie vestibulum urna ut sollicitudin. Fusce scelerisque bibendum facilisis. Vestibulum luctus mi ipsum, aliquam lacinia magna semper eu. Phasellus in ligula vel nunc pellentesque consectetur. Aliquam quis orci id purus pharetra tempor in sed dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras eu ultricies lectus, et viverra nulla. Duis dignissim id nisi in tincidunt. Nam eu enim ultrices, pellentesque metus ut, gravida nunc. Nunc ac volutpat justo. Sed pulvinar ornare lectus, eget cursus odio facilisis non. Phasellus lobortis semper vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
</p>

@stop

@section('grafica')
    <div class="container">
        <div class="col-xs-12">
            <iframe style="height:800px; width:100%" src="https://bricksness.bime.io/dashboard/CD1B699ED9EC921467911CB74249D6EA845A03E3150571990C08F14D375122DF"></iframe>
        </div>


    </div>
    @stop