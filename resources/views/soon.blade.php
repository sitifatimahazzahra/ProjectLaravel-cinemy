@extends('/layout/main')

@section('judul','Coming Soon | CINEMy')

@section('sub')
Movies Coming Soon
@endsection

@section('isi')


<table class="table table-bordered border-secondary">
  <tbody>
    <tr class="border-top border-start" >
      <td style="width: 14rem;"> <img src="{{ ('img/pbb.jpg ') }}" alt="100"  class="card-img-top gb"> <br>
      	<b>The Boss Baby: Family Business (2021)</b> <br>
      	<small>Date : September 17, 2021</small>
      </td>
      <td style="width: 14rem;"> <img src="{{ ('img/pv.jpg ') }}" alt="..."  class="card-img-top gb"> <br>
      	<b>Venom: Let There Be Carnage (2021)</b> <br>
      	<small>Date : June 25, 2021</small>
      </td>
      <td style="width: 14rem;"> <img src="{{ ('img/pr.png ') }}" alt="..."  class="card-img-top gb"> <br>
      	<b>Raya and the Last Dragon (2021)</b> <br>
      	<small>Date : March 5, 2021</small>
      </td>
      <td style="width: 14rem;"> <img src="{{ ('img/pbw.jpg ') }}" alt="..."  class="card-img-top gb"> <br>
      	<b>Black Widow (2021)</b> <br>
      	<small>Date : May 7, 2021</small>
      </td>
      <td class="border-end" style="width: 14rem;"> <img src="{{ ('img/ptg.jpg ') }}" alt="..."  class="card-img-top gb"> <br>
      	<b>Top Gun: Maverick (2021)</b> <br>
      	<small>Date : July 2, 2021</small>
      </td>
    </tr>
    <tr class="border-top border-start border-bottom" >
      <td style="width: 14rem;"> <img src="{{ ('img/pc.png ') }}" alt="100"  class="card-img-top gb"> <br>
      	<b>Candyman (2021)</b> <br>
      	<small>Date : August 27, 2021</small>
      </td>
      <td style="width: 14rem;"> <img src="{{ ('img/phk.jpg ') }}" alt="..."  class="card-img-top gb"> <br>
      	<b>Halloween Kills (2021)</b> <br>
      	<small>Date : October 15, 2021</small>
      </td>
      <td style="width: 14rem;"> <img src="{{ ('img/pwt.jpg ') }}" alt="..."  class="card-img-top gb"> <br>
      	<b>Wrong Turn (2021)</b> <br>
      	<small>Date : January 26, 2021</small>
      </td>
      <td style="width: 14rem;"> <img src="{{ ('img/pn.jpeg ') }}" alt="..."  class="card-img-top gb"> <br>
      	<b>Nobody (2021)</b> <br>
      	<small>Date : April 2, 2021</small>
      </td>
      <td class="border-end" style="width: 14rem;"> <img src="{{ ('img/pss.jpg ') }}" alt="..."  class="card-img-top gb"> <br>
      	<b>The Suicide Squad (2021)</b> <br>
      	<small>Date : August 6, 2021</small>
      </td>
    </tr>
  </tbody>
</table>

  


@endsection
