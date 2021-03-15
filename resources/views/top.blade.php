@extends('/layout/main')

@section('judul','Top Movies | CINEMy')

@section('sub')
Top Movies by CINEMy
@endsection

@section('isi')

<div class="row">

  <div class="col-lg-3 ps-5">
    <div class="card alert-success" style="width: 10rem;">
    <img src="{{ ('img/pgm.jpg ') }}" class="card-img-top">
  </div>
  </div>

  <div class="col">

    <table class="table table-borderless table-sm">
      <thead>
        <tr class="tr1 bg-success text-dark">
          <td colspan="2"><h2><b>TOP 1</b></h2></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><h3>The Green Mile (1999)</h3></td>
        </tr>
        <tr>
          <td><b>Ratings</b></td>
          <td><b>: 8,6</b></td>
        </tr>
        <tr>
          <td>Popularity</td>
          <td>: 137</td>
        </tr>
        <tr>
          <td></td>
          <td align="right"><a href="https://www.imdb.com/title/tt0120689/" class="btn btn-dark text-warning mt-2 me-4">See Details</a></td>
        </tr>
      </tbody>
    </table>

  </div>

</div>


<hr>
<div class="row">

  <div class="col-lg-3 ps-5">
    <div class="card alert-success" style="width: 10rem;">
    <img src="{{ ('img/pnysm1.jpg ') }}" class="card-img-top">
  </div>
  </div>

  <div class="col">

    <table class="table table-borderless table-sm">
      <thead>
        <tr class="tr1 bg-warning text-dark">
          <td colspan="2"><h2><b>TOP 2</b></h2></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><h3>Now You See Me (2013)</h3></td>
        </tr>
        <tr>
          <td><b>Ratings</b></td>
          <td><b>: 7,3</b></td>
        </tr>
        <tr>
          <td>Popularity</td>
          <td>: 806</td>
        </tr>
        <tr>
          <td></td>
          <td align="right"><a href="https://www.imdb.com/title/tt1670345/" class="btn btn-dark text-warning mt-2 me-4">See Details</a></td>
        </tr>
      </tbody>
    </table>

  </div>

</div>


<hr>
<div class="row">

  <div class="col-lg-3 ps-5">
    <div class="card alert-success" style="width: 10rem;">
    <img src="{{ ('img/pmr1.jpg ') }}" class="card-img-top">
  </div>
  </div>

  <div class="col">

    <table class="table table-borderless table-sm">
      <thead>
        <tr class="tr1 bg-danger text-dark">
          <td colspan="2"><h2><b>TOP 3</b></h2></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><h3>The Maze Runner (2014)</h3></td>
        </tr>
        <tr>
          <td><b>Ratings</b></td>
          <td><b>: 6,8</b></td>
        </tr>
        <tr>
          <td>Popularity</td>
          <td>: 474</td>
        </tr>
        <tr>
          <td></td>
          <td align="right"><a href="https://www.imdb.com/title/tt1790864/" class="btn btn-dark text-warning mt-2 me-4">See Details</a></td>
        </tr>
      </tbody>
    </table>

  </div>

</div>


<hr>
<h2 class="haa alert-success text-dark" align="right"><b>Top Movies by Editor</b></h2>
<div class="row mt-5">

  <div class="col">

    <table class="table table-borderless table-sm">
      <thead>
        <tr class="tr1 bg-success text-dark">
          <td colspan="2"><h2><b>TOP 1</b></h2></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><h3>Catch Me If You Can (2002)</h3></td>
        </tr>
        <tr>
          <td style="width:70%"><b>Ratings</b></td>
          <td><b>: 8,1</b></td>
        </tr>
        <tr>
          <td>Popularity</td>
          <td>: 130</td>
        </tr>
        <tr>
          <td></td>
          <td align="right"><a href="https://www.imdb.com/title/tt0264464/" class="btn btn-dark text-warning mt-2 me-4">See Details</a></td>
        </tr>
      </tbody>
    </table>

  </div>

  <div class="col-lg-3 ps-5">
    <div class="card alert-success" style="width: 10rem;">
    <img src="{{ ('img/pcm.jpg ') }}" class="card-img-top">
  </div>
  </div>

</div>


<hr>
<div class="row">

  <div class="col">

    <table class="table table-borderless table-sm">
      <thead>
        <tr class="tr1 bg-warning text-dark">
          <td colspan="2"><h2><b>TOP 2</b></h2></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><h3>Inception (2010)</h3></td>
        </tr>
        <tr>
          <td style="width:70%"><b>Ratings</b></td>
          <td><b>: 8,8</b></td>
        </tr>
        <tr>
          <td>Popularity</td>
          <td>: 86</td>
        </tr>
        <tr>
          <td></td>
          <td align="right"><a href="https://www.imdb.com/title/tt1375666/" class="btn btn-dark text-warning mt-2 me-4">See Details</a></td>
        </tr>
      </tbody>
    </table>

  </div>

  <div class="col-lg-3 ps-5">
    <div class="card alert-success" style="width: 10rem;">
    <img src="{{ ('img/pi.jpg ') }}" class="card-img-top">
  </div>
  </div>

</div>


<hr>
<div class="row">

  <div class="col">

    <table class="table table-borderless table-sm">
      <thead>
        <tr class="tr1 bg-danger text-dark">
          <td colspan="2"><h2><b>TOP 3</b></h2></td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><h3>Now You See Me 2 (2016)</h3></td>
        </tr>
        <tr>
          <td style="width:70%"><b>Ratings</b></td>
          <td><b>: 6,5</b></td>
        </tr>
        <tr>
          <td>Popularity</td>
          <td>: 1.760</td>
        </tr>
        <tr>
          <td></td>
          <td align="right"><a href="https://www.imdb.com/title/tt3110958/" class="btn btn-dark text-warning mt-2 me-4">See Details</a></td>
        </tr>
      </tbody>
    </table>

  </div>

  <div class="col-lg-3 ps-5">
    <div class="card alert-success" style="width: 10rem;">
    <img src="{{ ('img/pnysm2.jpg ') }}" class="card-img-top">
  </div>
  </div>

</div>


@endsection



