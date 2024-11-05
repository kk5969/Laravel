@extends('layouts.includes.Centered hero') 
@section('title', 'This Is today MVC PAGE') 
 
@for ($i=0;$i<=05;$i++) 
 
<p>The today number is <b>{{$i}}</b></p> 
 
@endfor 
 
 <h1><i>{{$heading}}</i></h1> 
 
   <p><?php echo $heading?></p> 
 
 <p><?=htmlentities($heading)?></p> 
 
<p>{!!$heading!!}</p>  
 
 @section('title', 'This Is KARTHICK PAGE') 
 
  @foreach ( $authors as $author) 
<p>{{$author}}</p> 
 
@endforeach 
 
@while ($author = array_pop($authors)) 
    <p>{{ $author }}</p> 
@endwhile 