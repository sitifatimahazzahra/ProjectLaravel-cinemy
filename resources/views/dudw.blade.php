@extends('/layout/main2')

@section('judul','Unfriended: Dark Web (2018) | CINEMy')

@section('sub')
Details Unfriended: Dark Web (2018) by CINEMy
@endsection

@section('isi')

<div class="row">
	<div class="col-lg-9">
	    <table class="table table-borderless">
	      <thead>
	        <tr>
	          <td colspan="2"><h1>Unfriended: Dark Web (2018)</h1></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td style="width:30%">Duration</td>
	          <td style="width:30%">1h 32min</td>
	        </tr>
	        <tr>
	          <td>Genres</td>
	          <td>Horror | Mystery | Thriller</td>
	        </tr>
	        <tr>
	          <td>Release Date</td>
	          <td>20 July 2018</td>
	        </tr>
	        <tr>
	          <td>Country</td>
	          <td>USA | Russia</td>
	        </tr>
	        <tr>
	          <td>Director</td>
	          <td>Stephen Susco</td>
	        </tr>
	        <tr>
	          <td>Writers</td>
	          <td>Stephen Susco</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
	
	<div class="col-lg-3">
		<div class="card">
    		<img src="{{ ('img/pudw.jpg ') }}" class="card-img-top">
  		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-8">
	<p><h2>Synopsis</h2>
		When a teenager discovers a laptop containing secret files, he and his friends begin to realize that the owner can access the dark web - and are now watching them both.
	</p>		
	</div>

	<div class="col">
		<p><h6>Watch The Trailer</h6>
			<video src="{{ ('img/udw.mp4 ') }}" width="344" controls>
			</video><br>
			<small>Source Video : <a href="https://youtu.be/XenTM_C9fxM">Click here</a></small>
		</p>
	</div>

</div><br>

	<a href="/menu" class="btn btn-secondary ms-2 pe-4 ps-4"><b>Back</b></a>

@endsection