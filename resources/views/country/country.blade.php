<head>
            <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<div>
    <h1 style="text-align:center">
        List of the countries
    </h1>
    @if(count($country_list) > 1)
        @foreach($country_list as $country)
            <div class="well">
                <p>Id: {{$country->id}}</p>                
                <p>Name: {{$country->names}}</p>
                <p>ISO-2: {{$country->iso2}}</p>
                <p>ISO-3: {{$country->iso3}}</p>
            </div>
        @endforeach
    @else 
        <div class="well">
            <p> No data</p>        
        </div>
    @endif
</div>