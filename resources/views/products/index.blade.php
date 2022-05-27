<x-layout>

  @unless (count($products) == 0)
    <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Manufacturer</th>
            <th scope="col">Tags</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Manage Product</th>
          </tr>
        </thead>
        <tbody>
          
          @foreach ($products as $product)          
          <tr>
            <th scope="row">{{ $product['id'] }}</th>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['company'] }}</td>
            <td>{{ $product['tags'] }}</td>
            <td>{{ $product['quantity'] }}</td>
            <td>{{ $product['price'] }}</td>
            <td><a class="btn btn-primary" href="{{ route('products.issues.create', [ 'product' => $product->id ]) }}
              " role="button">Issue</a>
              
              <a class="btn btn-secondary" href="/products/purchase" role="button">Purchase</a>              
            </td>


          </tr>
           @endforeach
          
                    
        </tbody>
      </table>
 @else
 <h2>No Products Found</h2>
@endunless


</x-layout>