<x-header  componentName="abouts" />
<h1> about  page </h1>
@include('inner')

@foreach ($user as $items)
<h2>{{$items}}</h3>
@endforeach
