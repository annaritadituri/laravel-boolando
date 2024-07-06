<div class="product">

    <img src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="{{ $product['name'] }}">

    <div class="on-image">

        @for ($i = 0; $i < count($product['badges']); $i++)
            @if ($product['badges'][$i]['type'] == 'discount')
                <span class="discount-percent p-1 px-2 me-1">
                    {{ $product['badges'][$i]['value'] }}
                </span>
            @endif
        @endfor
        
        @for ($i = 0; $i < count($product['badges']); $i++)
            @if ($product['badges'][$i]['type'] == 'tag')
                <span class="label p-1 px-2">
                    {{ $product['badges'][$i]['value'] }}
                </span>
            @endif
        @endfor
        
    </div>

    <p class="brand-name m-0 mt-1">{{ $product['brand'] }}</p>
    <p class="product-name m-0 fw-bold">{{ $product['name'] }}</p>
    <span class="sale">&euro;
        @for ($i = 0; $i < count($product['badges']); $i++)
            @if (count($product['badges']) == 2)
                @if ($product['badges'][$i]['type'] == 'discount')
                    {{ number_format($product['price'] + (intval($product['badges'][$i]['value']) / 100) * $product['price'], 2) }}
                @endif
            @else
                @if ($product['badges'][$i]['type'] == 'discount')
                    {{ number_format($product['price'] + (intval($product['badges'][$i]['value']) / 100) * $product['price'], 2) }}
                @else
                    {{ $product['price'] }}
                @endif
            @endif
        @endfor

        
    </span>
    <span class="price">&euro;{{ $product['price'] }}</span>

</div>