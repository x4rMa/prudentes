<div class="forms">
		{{Form::open(array('url' => '/'))}}
		{{Form::label('email', 'Email')}}
		{{Form::text('email')}}
		<br>
		{{Form::label('password', 'Kodeord')}}
		{{Form::password('password')}}
		<br>
		{{Form::submit('Login')}}
		{{Form::close()}}
		<a href="{{URL::route('createUser')}}">Ikke registreret? Opret dig her.</a>
</div><!-- forms -->