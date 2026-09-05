{{ $profile['name'] }}
 <br>
Program: {{ $profile['program'] }}
<br>
 Year Level: {{ $profile['year'] }}
 <br>

 Skills: @forelse ($profile['skills'] as $skill)
 <li>{{ $skill }}</li>
  @empty No skills listed.
   @endforelse

<br>
Career Goals: {{ $profile['career_goals'] }}
