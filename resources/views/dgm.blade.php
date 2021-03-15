@extends('/layout/main2')

@section('judul','The Green Mile (1999) | CINEMy')

@section('sub')
Details The Green Mile (1999) by CINEMy
@endsection

@section('isi')

<div class="row">
	<div class="col-lg-9">
	    <table class="table table-borderless">
	      <thead>
	        <tr>
	          <td colspan="2"><h1>The Green Mile (1999)</h1></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td style="width:30%">Duration</td>
	          <td style="width:30%">3h 9min</td>
	        </tr>
	        <tr>
	          <td>Genres</td>
	          <td>Crime | Drama | Fantasy | Mystery</td>
	        </tr>
	        <tr>
	          <td>Release Date</td>
	          <td>10 December 1999</td>
	        </tr>
	        <tr>
	          <td>Country</td>
	          <td>USA</td>
	        </tr>
	        <tr>
	          <td>Director</td>
	          <td>Frank Darabont</td>
	        </tr>
	        <tr>
	          <td>Writers</td>
	          <td>Stephen King (novel), Frank Darabont (screenplay)</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
	
	<div class="col-lg-3">
		<div class="card">
    		<img src="{{ ('img/pgm.jpg ') }}" class="card-img-top">
  		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-8">
	<p><h2>Synopsis</h2>
		A black man named John Coffey was accused of raping and murdering two girls. He was jailed and sentenced to death. Paul Edgecomb, the warden of the prison, felt that something was wrong with John Coffey. He has a different behavior from other criminals. Paul later befriends him and learns that John has magical powers. However, their friendship did not last long as John was going to be put to death.
	</p>		
	</div>

	<div class="col">
		<p><h6>Watch The Trailer</h6>
			<video src="{{ ('img/gm.mp4 ') }}" width="344" controls>
			</video><br>
			<small>Source Video : <a href="https://youtu.be/Ki4haFrqSrw">Click here</a></small>
		</p>
	</div>

</div><br>

	<a href="/menu" class="btn btn-secondary ms-2 pe-4 ps-4"><b>Back</b></a>

@endsection