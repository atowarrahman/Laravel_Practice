<x-header  componentName="Users" />

<h1> User page </h1>

@include('inner')




@if ($user=="anil")
<h1> hello {{$user}}</h1>

@elseif ($user=="emon")
<h1> hello {{$user}}</h1>
@endif

@for($i=0;$i<10;$i++)
<h2> {{$i}}</h2>
@endfor