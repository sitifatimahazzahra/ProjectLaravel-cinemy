@extends('/layout/main2')

@section('judul','Maze Runner: The Death Cure (2018) | CINEMy')

@section('sub')
Details Maze Runner: The Death Cure (2018) by CINEMy
@endsection

@section('isi')

<div class="row">
	<div class="col-lg-9">
	    <table class="table table-borderless">
	      <thead>
	        <tr>
	          <td colspan="2"><h1>Maze Runner: The Death Cure (2018)</h1></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td style="width:30%">Duration</td>
	          <td style="width:30%">2h 23min</td>
	        </tr>
	        <tr>
	          <td>Genres</td>
	          <td>Action | Adventure | Sci-Fi | Thriller</td>
	        </tr>
	        <tr>
	          <td>Release Date</td>
	          <td>24 January 2018</td>
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
	          <td>T.S. Nowlin (screenplay by), James Dashner (based upon the novel by)</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
	
	<div class="col-lg-3">
		<div class="card">
    		<img src="{{ ('img/pmr3.jpg ') }}" class="card-img-top">
  		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-8">
	<p><h2>Synopsis</h2>
		Thomas and a group of Gladers embark on a mission to find a drug called a "flare". But in order to achieve that goal, they must enter Last City and come face to face with the WCKD who can control a deadly labyrinth.
	</p>		
	</div>

	<div class="col">
		<p><h6>Watch The Trailer</h6>
			<video src="{{ ('img/mr3.mp4 ') }}" width="344" controls>
			</video><br>
			<small>Source Video : <a href="https://youtu.be/4-BTxXm8KSg">Click here</a></small>
		</p>
	</div>

</div><br>

	<a href="/menu" class="btn btn-secondary ms-2 pe-4 ps-4"><b>Back</b></a>

@endsection