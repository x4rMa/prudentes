<div class="forms">
		{{Form::open(array('url' => '/'))}}
		{{Form::label('email', 'Email')}}
		{{Form::text('email')}}
		<br>
		{{Form::label('password', 'Kodeord')}}
		{{Form::password('password')}}
		<br>
		{{Form::submit('Opret mig!')}}
		{{Form::close()}}
		<a href="{{URL::route('login')}}">Har du en bruger? Login her.</a>
</div><!-- forms -->
