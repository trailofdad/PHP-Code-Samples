    @extends('template')

    @section('content')

    {{--@if ($first == 'Christian')--}}
        {{--<h1>Hi Christian</h1>--}}
    {{--@else--}}
        {{--<h1>Else</h1>--}}
    {{--@endif--}}

    <h1>About</h1>


    @if (count($people))
    <h3>People I like:</h3>

    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
    @endif

    <p>Herp derpsum derp herpsum herpy pee herderder terpus berp herpler tee merpus. Merp der ter tee, terp ner serp. Derpus derpsum mer der
        herderder terpus terp dee tee. Mer me derp dee. Ter merpus merp mer nerpy herpsum herpem herp pee ner.</p>
