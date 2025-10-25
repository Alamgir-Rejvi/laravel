@foreach($categories as $category)
    <h3>{{ $category->name }}</h3>

    @if($category->products->count() > 0)
        <ul>
            @foreach($category->products as $product)
                <li>{{ $product->item }}</li>   {{-- ✅ এখানে নাম দেখাবে --}}
            @endforeach
        </ul>
    @else
        <p>No products available for this category.</p>
    @endif
@endforeach
