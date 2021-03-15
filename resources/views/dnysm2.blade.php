@extends('/layout/main2')

@section('judul','Now You See Me 2 (2016) | CINEMy')

@section('sub')
Details Now You See Me 2 (2016) by CINEMy
@endsection

@section('isi')

<div class="row">
	<div class="col-lg-9">
	    <table class="table table-borderless">
	      <thead>
	        <tr>
	          <td colspan="2"><h1>Now You See Me 2 (2016)</h1></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td style="width:30%">Duration</td>
	          <td style="width:30%">2h 9min</td>
	        </tr>
	        <tr>
	          <td>Genres</td>
	          <td>Action | Adventure | Comedy | Crime | Mystery | Thriller</td>
	        </tr>
	        <tr>
	          <td>Release Date</td>
	          <td>8 June 2016</td>
	        </tr>
	        <tr>
	          <td>Country</td>
	          <td>USA | Mexico | France | Hong Kong</td>
	        </tr>
	        <tr>
	          <td>Director</td>
	          <td>Jon M. Chu</td>
	        </tr>
	        <tr>
	          <td>Writers</td>
	          <td>Ed Solomon (screenplay by), Ed Solomon (story by), Peter Chiarelli (story by), Boaz Yakin (based on characters created by), Edward Ricourt (based on characters created by)</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
	
	<div class="col-lg-3">
		<div class="card">
    		<img src="{{ ('img/pnysm2.jpg ') }}" class="card-img-top">
  		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-8">
	<p><h2>Synopsis</h2>
		One year after outwitting the F.B.I. and winning the public's adulation with their Robin Hood-style magic spectacles, The Four Horsemen resurface for a comeback performance in hopes of exposing the unethical practices of a tech magnate. The man behind their vanishing act is none other than Walter Mabry, a tech prodigy who threatens the Horsemen into pulling off their most impossible heist yet. Their only hope is to perform one last unprecedented stunt to clear their names and reveal the mastermind behind it all.
	</p>		
	</div>

	<div class="col">
		<p><h6>Watch The Trailer</h6>
			<video src="{{ ('img/nysm2.mp4 ') }}" width="344" controls>
			</video><br>
			<small>Source Video : <a href="https://youtu.be/4I8rVcSQbic">Click here</a></small>
		</p>
	</div>

</div><br>

	<a href="/menu" class="btn btn-secondary ms-2 pe-4 ps-4"><b>Back</b></a>

@endsection