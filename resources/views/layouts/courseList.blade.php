<div class="courseList">
	@if(!isset($category))
		<ul>
			@for ($i = 0; $i < 6; $i++)
				<a href="{{ route('course', 'sådan-fikser-du-din-cykel')}}">
					<li>
						<div class="courseImg"><img src="{{ asset('cykel.jpg') }}" alt=""></div>
						<h3 class="courseTitel">Sådan fikser du din cykel! Spar tid og penge, uden for meget besvær.</h3>
						<table class="courseFacts">
							<tr>
								<td class="darken">Pris</td>
								<td class="underline">995kr</td>
							</tr>
								<td class="darken">Lektioner</td>
								<td>16</td>
							<tr>
								<td class="darken">Taget af</td>
								<td>337 kursister</td>
							</tr>
							<tr>
								<td class="darken">Lærer</td>
								<td>Lars Hanstholm</td>
							</tr>
						</table>
					</li>
				</a>
			@endfor
		</ul>
	@elseif($category == "klassiske-fag")
		<ul>
			@for ($i = 0; $i < 6; $i++)
				<li>
					<div class="courseImg"><img src="{{ asset('classic_subjects.jpg') }}" alt=""></div>
					<h3 class="courseTitel">kursus titel</h3>
					<p class="courseFacts">Her vil alle kurser fra klassiske fag blive vist.</p>
				</li>
			@endfor
		</ul>	
	@endif
</div><!-- courseList -->