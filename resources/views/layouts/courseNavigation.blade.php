<div class="courseNavigation">
	@if(!isset($category))
		<h2>Hovedkategorier</h2>
		<ul>
			<li><a href="{{{ route('category', 'klassiske-fag') }}}">Klassiske Fag</a></li>
			<li><a href="{{{ route('category', 'it') }}}">IT</a></li>
			<li><a href="{{{ route('category', 'dyr') }}}">Dyr</a></li>
			<li><a href="{{{ route('category', 'have') }}}">Have</a></li>
			<li><a href="{{{ route('category', 'personlig-udvikling') }}}">Personlig Udvikling</a></li>
		</ul>
	@elseif($category == "klassiske-fag")
		<h2>Klassiske Fag</h2>
		<ul>
			<li><a href="">Natur</a></li>
			<li><a href="">Sprog</a></li>
			<li><a href="">Samfund</a></li>
			<li><a href="">Medicin</a></li>
		</ul>
		<a href="{{URL::to('kurser')}}" class="back">&laquo; Til hovedkategorier</a>
	@endif
</div><!-- courseNavigation -->