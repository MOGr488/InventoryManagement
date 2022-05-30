<x-layout>


<div class="card">
    <h5 class="card-header">Product ID: {{ $product->id }}</h5>
    <div class="card-body">
      <h5 class="card-title">Product Details</h5>
      <p class="card-text">{{ $product->description }}</p>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Product Name: {{ $product->name }}</li>
        <li class="list-group-item">Product Company: {{ $product->company }}</li>
        <li class="list-group-item">Product tags: {{ $product->tags }}</li>
        <li class="list-group-item">Product Price: {{ $product->price }} OMR</li>
        <li class="list-group-item">Product Quantity: {{ $product->quantity }}</li>
      </ul>
    </div>
</div>

<section id="issue-section">
    <div class="container-lg">
        <div class="text-center mt-3">
            <h2>Issue The Product</h2>
        </div>

        <div class="row justify-content-center my-3">

            <div class="col-lg-6">
                <form action="POST">
                    @csrf
                    
                    <div class="form-floating mb-4 mt-2">
                        <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Quantity to issue" min="1">
                        <label for="quantity">Quantity to issue</label>

                    </div>
                    
                    <div class="form-floating mb-2 mt-2">
                        <select name="customer" id="customer" class="form-control">
                            <option value="x">Customer A</option>
                            <option value="x">Customer B</option>
                            <option value="x">Customer C</option>
                            <option value="x">Customer D</option>
                            
                        </select>
                        <label for="customer">Choose a Customer</label>
                    </div>
@php
    $mindate = date("Y-m-d");
@endphp

                    <div class="form-floating mb-2 mt-2">
                        <input type="date" name="issuedate" id="issuedate" class="form-control" min="{{ $mindate }}">
                        
                        <label for="issuedate">Issue Date</label>
                    </div>
                    
                    <div class="form-floating mb-2 mt-2">
                        <input type="number" name="invoice" id="invoice" class="form-control" min="1">
                        <label for="invoice">Invoice Number</label>
                    </div>


                    <div class="form-floating mb-2 mt-2">
                        <textarea name="comment" id="comment" style="height: 140px" class="form-control"></textarea>
                        <label for="comment">Comment..</label>
                    </div>

                    <div class="mb-4 text-center">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                </form>


            </div>

        </div>



    </div>


</section>

</x-layout>
