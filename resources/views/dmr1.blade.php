@extends('/layout/main2')

@section('judul','The Maze Runner (2014) | CINEMy')

@section('sub')
Details The Maze Runner (2014) by CINEMy
@endsection

@section('isi')

<div class="row">
	<div class="col-lg-9">
	    <table class="table table-borderless">
	      <thead>
	        <tr>
	          <td colspan="2"><h1>The Maze Runner (2014)</h1></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td style="width:30%">Duration</td>
	          <td style="width:30%">1h 53min</td>
	        </tr>
	        <tr>
	          <td>Genres</td>
	          <td>Action | Adventure | Sci-Fi | Thriller</td>
	        </tr>
	        <tr>
	          <td>Release Date</td>
	          <td>17 September 2014</td>
	        </tr>
	        <tr>
	          <td>Country</td>
	          <td>USA | UK</td>
	        </tr>
	        <tr>
	          <td>Director</td>
	          <td>Wes Ball</td>
	        </tr>
	        <tr>
	          <td>Writers</td>
	          <td>T.S. Nowlin (screenplay by), Noah Oppenheim (screenplay by), Grant Pierce Myers (screenplay by), James Dashner (based upon the novel by)</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
	
	<div class="col-lg-3">
		<div class="card">
    		<img src="{{ ('img/pmr1.jpg ') }}" class="card-img-top">
  		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-8">
	<p><h2>Synopsis</h2>
		Awakening in an elevator, remembering nothing of his past, Thomas emerges into a world of about thirty teenage boys, all without past memories, who have learned to survive under their own set of rules in a completely enclosed environment, subsisting on their own agriculture and supplies. With a new boy arriving every thirty days, the group has been in "The Glade" for three years, trying to find a way to escape through the Maze that surrounds their living space (patrolled by cyborg monsters named 'Grievers'). They have begun to give up hope when a comatose girl arrives with a strange note, and their world begins to change with the boys dividing into two factions: those willing to risk their lives to escape and those wanting to hang onto what they've got and survive.
	</p>		
	</div>

	<div class="col">
		<p><h6>Watch The Trailer</h6>
			<video src="{{ ('img/mr1.mp4 ') }}" width="344" controls>
			</video><br>
			<small>Source Video : <a href="https://youtu.be/64-iSYVmMVY">Click here</a></small>
		</p>
	</div>

</div><br>

	<a href="/menu" class="btn btn-secondary ms-2 pe-4 ps-4"><b>Back</b></a>

@endsection