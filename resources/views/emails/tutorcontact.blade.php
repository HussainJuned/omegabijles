<h3>Je hebt een nieuwe bijlesaanvraag,  <a href="{{ url('/tutorprofile/') }}/{{ $tutor->user_id }}">{{ $tutor->firstname . ' ' . $tutor->lastname }}</a></h3>
<div>
	<h5>Bericht: </h5>
	<ul>
		<li>Naam: {{ $data->name }}</li>
		<li>email : {{ $data->email }}</li>
		<li>Leerling/ouder : {{ $data->tutortype }}</li>
		<li>Bericht: {{ $data->description }}</li>
	</ul>
</div>