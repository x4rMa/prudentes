<div class="siteNavigation">
	<ul>
		@if(true)
		<li><a href="{{URL::route('courses')}}">Kurser</a></li>
		<li><a href="{{URL::route('menu')}}">Min menu</a></li>
		@elseif(false)
		<li><a href="{{URL::route('index')}}">Hjem</a></li>
		<li><a href="{{URL::route('courses')}}">Kurser</a></li>
		<li><a href="{{URL::route('login')}}">Login</a></li>
		<li><a href="{{URL::route('createUser')}}">Opret bruger</a></li>
		@endif
	</ul>
</div><!-- navigations -->