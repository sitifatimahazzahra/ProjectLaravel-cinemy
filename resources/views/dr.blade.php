@extends('/layout/main2')

@section('judul','Run (2020) | CINEMy')

@section('sub')
Details Run (2020) by CINEMy
@endsection

@section('isi')

<div class="row">
	<div class="col-lg-9">
	    <table class="table table-borderless">
	      <thead>
	        <tr>
	          <td colspan="2"><h1>Run (2020)</h1></td>
	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td style="width:30%">Duration</td>
	          <td style="width:30%">1h 30min</td>
	        </tr>
	        <tr>
	          <td>Genres</td>
	          <td>Horror | Mystery | Thriller</td>
	        </tr>
	        <tr>
	          <td>Release Date</td>
	          <td>20 November 2020</td>
	        </tr>
	        <tr>
	          <td>Country</td>
	          <td>USA | Canada</td>
	        </tr>
	        <tr>
	          <td>Director</td>
	          <td>Aneesh Chaganty</td>
	        </tr>
	        <tr>
	          <td>Writers</td>
	          <td>Aneesh Chaganty, Sev Ohanian</td>
	        </tr>
	      </tbody>
	    </table>
	</div>
	
	<div class="col-lg-3">
		<div class="card">
    		<img src="{{ ('img/prun.jpg ') }}" class="card-img-top">
  		</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-lg-8">
	<p><h2>Synopsis</h2>
		Chloe, a teenager who is confined to a wheelchair, is home schooled by her mother, However, her mother's strange behavior doesn't go unnoticed and when Chloe pries into some private papers, she discovers a Change of Name Certificate document with her mother's name, Diane Sherman, on it. When Chloe googles "Diane Sherman," the internet suddenly disconnnects. Chloe becomes suspicious of all that her mother does, suspecting her of something sinister. She decides to go on the run in her wheelchair in a desperate attempt to get away from her.
	</p>		
	</div>

	<div class="col">
		<p><h6>Watch The Trailer</h6>
			<video src="{{ ('img/run.mp4 ') }}" width="344" controls>
			</video><br>
			<small>Source Video : <a href="https://youtu.be/0Dhh7q9Us5c">Click here</a></small>
		</p>
	</div>

</div><br>

	<a href="/menu" class="btn btn-secondary ms-2 pe-4 ps-4"><b>Back</b></a>

@endsection