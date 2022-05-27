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

</x-layout>
