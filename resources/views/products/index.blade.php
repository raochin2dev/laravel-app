

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

@include('products.add')

<div class="container">
  <h2>Products</h2>

  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Quantity</th>
        <th>Per Unit Price</th>
        <th>Date Time Submitted</th>
        <th>Total Value</th>
      </tr>
    </thead>
    <tbody id="tblBody">
      @if(!empty($products))
        @php $total_price = 0; @endphp
        @foreach($products as $p)
          @php
              $cur_price = $p->product_qty*$p->product_price;
              $total_price += $cur_price;
          @endphp
        <tr>
          <td>{{$p->product_name}}</td>
          <td>{{$p->product_qty}}</td>
          <td>{{$p->product_price}}</td>
          <td>{{date('n/j/Y',strtotime($p->created_at))}}</td>
          <td>{{$cur_price}}</td>
        </tr>
        @endforeach
        <tr><td colspan="5"></td></tr>
        <tr>
          <td colspan="5">Collective total : {{$total_price}}</td>
        </tr>
      @endif

    </tbody>
  </table>
</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script src="{{ asset('js/myapp.js') }}"></script>