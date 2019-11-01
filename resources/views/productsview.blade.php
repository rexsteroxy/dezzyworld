@extends('layouts.index')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
        @if(count($products) > 0)

@foreach($products->all() as $product)
<div class="row">
<h1>{{ $product->title}}</h1>
<img src="{{$product->image}}" alt="Still Loading"><hr>

       <div id="content" class="col-md-8" 
       style="margin:2px; border:2px solid grey; padding:24px; color:red">
       <button id="dbutton"class="btn btn-success">Description</button> 
       <button id="pbutton" class="btn btn-success" style="float:right">Pricing</button><hr>
                <div id="description">
                    {{ $product->description }}

                </div>
            <div style="display:none" id="pricing">
                <table class="table">
                    <tr>
                        <th>Size</th>
                        <th>Quantiy</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>{{ $product->size}}</td>
                        <td>100</td>
                        <td><?php echo $product->price * 100 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>200</td>
                        <td><?php echo $product->price * 200 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>300</td>
                        <td><?php echo $product->price * 300 ;?></td>
                    </tr>
                   
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            View More
                            </button>
                        </td>
                    </tr>
            </table>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $product->title }} Pricing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <table class="table">
                    <tr>
                        <th>Size</th>
                        <th>Quantiy</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td>{{ $product->size}}</td>
                        <td>100</td>
                        <td><?php echo $product->price * 100 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>200</td>
                        <td><?php echo $product->price * 200 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>300</td>
                        <td><?php echo $product->price * 300 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>400</td>
                        <td><?php echo $product->price * 400 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>500</td>
                        <td><?php echo $product->price * 500 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>600</td>
                        <td><?php echo $product->price * 600 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>700</td>
                        <td><?php echo $product->price * 700 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>800</td>
                        <td><?php echo $product->price * 800 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>900</td>
                        <td><?php echo $product->price * 900 ;?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>1000</td>
                        <td><?php echo $product->price * 1000 ;?></td>
                    </tr>
                   
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                </table>
            </div>
        </div> 

           
         
</div>
   <hr> 

@endforeach
@else
@endif
        </div>
        <div class="col-md-4">
            <h2>Price Calculator</h2><hr>
        <form>
            <div class="form-group">
            <label>Size</label>
                <input type="disable" class="form-control" id="" value="{{ $product->size}}">
            </div>
            <input type="hidden" value="{{ $product->price}}" id="price">
            <div class="form-group">
                <label>Quantity</label>
                <select class="form-control" id="quantity">
                <option>100</option>
                <option>200</option>
                <option>300</option>
                <option>400</option>
                <option>500</option>
                <option>600</option>
                <option>700</option>
                <option>800</option>
                <option>900</option>
                <option>1000</option>
                </select>
            </div>
           
</form>
            <h2 id="result" class="btn btn-success"></h2>
        </div>
    </div>

</div>

<script>
let price = document.getElementById('price').value;
    let quantity =  document.getElementById('quantity').value;
    let resultDisplay=  document.getElementById('result');
    let result = quantity * price;
    //console.log(result);
    resultDisplay.innerHTML = `Total: N ${result}`;

let button =  document.getElementById('quantity');
button.addEventListener('change', calculate);

function calculate(e){
    e.preventDefault();

    let price = document.getElementById('price').value;
    let quantity =  document.getElementById('quantity').value;
    let resultDisplay=  document.getElementById('result');
    let result = quantity * price;
    //console.log(result);
    resultDisplay.innerHTML = `Total: N ${result}`;


}
let dbutton = document.getElementById('dbutton');
    let pbutton = document.getElementById('pbutton');
pbutton.addEventListener('click', ()=>{
    let pricing = document.getElementById('pricing');
    let description = document.getElementById('description');
    description.style.display = "none";
    pricing.style.display="initial";
});
dbutton.addEventListener('click', ()=>{
    let pricing = document.getElementById('pricing');
    let description = document.getElementById('description');
    description.style.display = "initial";
    pricing.style.display="none";
});

    
    
 




</script>
@endsection