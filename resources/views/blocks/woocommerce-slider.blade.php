<section class="{{ $block->classes }}">

{{-- Fetch new products from WooCommerce --}}
@php
    $args = array(
        'status' => 'publish',
        'limit' => 30, 
        'orderby' => 'date',
        'order' => 'desc'
    );

    $products = wc_get_products($args);
@endphp

{{-- Display new products on the home page --}}
@if (!empty($products))
    @hasfield('header_title') 
        <h2>✈️ @field('header_title') ✈️ </h2> 
    @endfield
    <div class="container">
      <div class="woo-slider">
        @foreach ($products as $product)
        @php
            $product_link = get_permalink($product->get_id());
            $product_name = $product->get_name();
            $product_image = $product->get_image();
            $product_price = $product->get_price();
        @endphp

        <div class="woo-inner">
            <a href="{{ $product_link }}">
                {!! $product_image !!}
            </a>
            <div class="woo-content">
                <h3><a href="{{ $product_link }}">{{ $product_name }}</a></h3>
                <p>{!! wc_price($product_price) !!}</p>
            </div>
            <a href="{{ $product_link }}" class="btn btn-primary">Buy Now</a>
        </div>
        @endforeach
      </div>
    </div>
@else
    No new products found.
@endif
</section>
