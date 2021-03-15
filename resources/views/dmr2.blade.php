@extends('/layout/main2')

@section('judul','Maze Runner: The Scorch Trials (2015) | CINEMy')

@section('sub')
Details Maze Runner: The Scorch Trials (2015) by CINEMy
@endsection

@section('isi')

<div class="row">
	<div class="col-lg-9">
	    <table class="table table-borderless">
	      <thead>
	        <tr>
	          <td colspan="2"><h1>Maze Runner: The Scorch Trials (2015)</h1></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td style="width:30%">Duration</td>
	          <td style="width:30%">2h 11min</td>
	        </tr>
	        <tr>
	          <td>Genres</td>
	          <td>Action | Adventure | Sci-Fi | Thriller</td>
	        </tr>
	        <tr>
	          <td>Release Date</td>
	          <td>11 September 2015</td>
	        </tr>
	        <tr>
	          <td>Country</td>
	          <td>USA</td>
	        </tr>
	        <tr>
	          <td>Director</td>
	          <td>Wes Ball</td>
	        </tr>
	        <tr>
	          <td>Writers</td>
	          <td>T.S. Nowlin (screenplay by), James Dashner (based upon the novel "The Scorch Trials" by)</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
	
	<div class="col-lg-3">
		<div class="card">
    		<img src="{{ ('img/pmr2.jpg ') }}" class="card-img-top">
  		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-8">
	<p><h2>Synopsis</h2>
		6 months after the events of the maze runner, Thomas, Teresa, Newt, Winston, Minho, Winston, and the other gladers who survived the maze have been at peace until now. They are put to a citadel run by W.C.K.D (world catastrophe killzone department) where every night, other humans are brought to a lab and are crucified. When Thomas, the other gladers, and a lonely boy named Eris, hear about this, they escape and end up in a terrain known as the "scortch", which is a desert-like landscape that shows the world is devastated, and now must overcome its obstacles and escape W.C.K.D
	</p>		
	</div>

	<div class="col">
		<p><h6>Watch The Trailer</h6>
			<video src="{{ ('img/mr2.mp4 ') }}" width="344" controls>
			</video><br>
			<small>Source Video : <a href="https://youtu.be/-44_igsZtgU">Click here</a></small>
		</p>
	</div>

</div><br>

	<a href="/menu" class="btn btn-secondary ms-2 pe-4 ps-4"><b>Back</b></a>

@endsection