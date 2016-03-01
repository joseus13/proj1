 
@extends('layout')

 @section('head')
     
 @stop
 
 
        @section('content')
        <h1>page</h1>
        
                        <div class="title">Laravel 5</div>
				<!-- <?php foreach ($people as $person) : ?>
				<li><?= $person; ?></li>
				<?php endforeach; ?> -->
    
				@foreach ($people as $person)
				<li> {{ $person }} </li>
				@endforeach
				
				@if(empty($people))
				<h1>and thats it</h1>
				@endif
        @stop
        
        
          @section('footer')
     
 @stop
