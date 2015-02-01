<div class="landingPage1">

	<div class="hero">
		<h1 class="title">Online kurser og videoundervisning</h1>
		<h2 class="subtitle">Klog på den gode måde</h2>
		<a href="{{URL::route('createUser')}}" class="button">Opret bruger</a>
	</div><!-- hero -->

	<div class="learn">
		<h2 class="subtitle">Til dig der vil lære</h2>
		<br>
		<ul>
		@for ($i = 0; $i < 8; $i++)
			<li>
				<div class="icon">
					<i class="fa fa-clock-o fa-5x"></i>
				</div>
				<h3 class="feature">Klog på 10min</h3>
				<p class="benefit">Viden fordøjes bedre i små bidder. Prudentes videoer er aldrig over 10min. Du kan altid overskue at blive klogere her.</p>
			</li>
		@endfor
		</ul>
		<a href="{{URL::route('createUser')}}" class="button">Opret bruger</a>
	</div><!-- learn -->

	<div class="teach">
		<h2 class="subtitle">Til dig der vil undervise</h2>
		<br>
		<ul>
		@for ($i = 0; $i < 8; $i++)
			<li>
				<div class="icon">
					<i class="fa fa-clock-o fa-5x"></i>
				</div>
				<h3 class="feature">Klog på 10min</h3>
				<p class="benefit">Viden fordøjes bedre i små bidder. Prudentes videoer er aldrig over 10min. Du kan altid overskue at blive klogere her.</p>
			</li>
		@endfor
		</ul>
		<a href="{{URL::route('createUser')}}" class="button">Opret bruger</a>
	</div><!-- teach -->

</div><!-- landingPage1 -->
