@extends('/layout/main2')

@section('judul','Now You See Me (2013) | CINEMy')

@section('sub')
Details Now You See Me (2013) by CINEMy
@endsection

@section('isi')

<div class="row">
	<div class="col-lg-9">
	    <table class="table table-borderless">
	      <thead>
	        <tr>
	          <td colspan="2"><h1>Now You See Me (2013)</h1></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td style="width:30%">Duration</td>
	          <td style="width:30%">1h 55min</td>
	        </tr>
	        <tr>
	          <td>Genres</td>
	          <td>Crime | Mystery | Thriller</td>
	        </tr>
	        <tr>
	          <td>Release Date</td>
	          <td>31 May 2013</td>
	        </tr>
	        <tr>
	          <td>Country</td>
	          <td>USA | France</td>
	        </tr>
	        <tr>
	          <td>Director</td>
	          <td>Louis Leterrier</td>
	        </tr>
	        <tr>
	          <td>Writers</td>
	          <td>Ed Solomon (screenplay), Boaz Yakin (screenplay), Edward Ricourt (screenplay)</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
	
	<div class="col-lg-3">
		<div class="card">
    		<img src="{{ ('img/pnysm1.jpg ') }}" class="card-img-top">
  		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-8">
	<p><h2>Synopsis</h2>
		Four magicians each answer a mysterious summons to an obscure address with secrets inside. A year later, they are the Four Horsemen, big time stage illusionists who climax their sold-out Las Vegas show with a bank apparently robbed for real. This puts F.B.I. Agents Dylan Rhodes and Interpol Agent Alma Dray on the case to find out how they did it. However, this mystery proves to be difficult to solve, even with the insights of professional illusion exposer Thaddeus Bradley. What follows is a bizarre investigation where nothing is what it seems to be, with illusions, dark secrets, and hidden agendas galore as all involved are reminded of a great truth in this puzzle: the closer you look, the less you see.
	</p>		
	</div>

	<div class="col">
		<p><h6>Watch The Trailer</h6>
			<video src="{{ ('img/nysm1.mp4 ') }}" width="344" controls>
			</video><br>
			<small>Source Video : <a href="https://youtu.be/KzJNYYkkhzc">Click here</a></small>
		</p>
	</div>

</div><br>

	<a href="/menu" class="btn btn-secondary ms-2 pe-4 ps-4"><b>Back</b></a>

@endsection