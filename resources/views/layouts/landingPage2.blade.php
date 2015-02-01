<div class="landingPage2">
	<div class="hero">
		<h1 class="title">Online kurser og videoundervisning</h1>
		<h2 class="subtitle">Klog på den gode måde</h2>
	</div><!-- hero -->
	
	
	@for ($i = 0; $i < 8; $i++)
		<div class="highlights">
			@if($i % 2 == 0)
				<div class="left indent">
					<div class="icon"><img src="{{{ asset('icons/teachingCourses.svg') }}}" alt=""></div>
					<h3 class="feature">Klog på 10min</h3>
					<p class="benefit">Viden fordøjes bedre i små bidder. Prudentes videoer er aldrig over 10min. Du kan altid overskue at blive klogere her.</p>
				</div><!-- left -->
			@else
				<div class="right indent">
					<div class="icon"><img src="{{{ asset('icons/teachingCourses.svg') }}}" alt=""></div>
					<h3 class="feature">Klog på 10min</h3>
					<p class="benefit">Viden fordøjes bedre i små bidder. Prudentes videoer er aldrig over 10min. Du kan altid overskue at blive klogere her.</p>
				</div><!-- right -->
			@endif
		</div><!-- highlights -->	
	@endfor
</div><!-- landingPage2 -->
