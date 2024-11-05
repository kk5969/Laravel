@extends('layouts.includes.Centered screenshot') 
<p> 
    @if($no_of_user==0) 
    NO user 
 
    @elseif($no_of_user==1) 
    we have one user 
 
    @else 
    many user 
    @endif 
</p>