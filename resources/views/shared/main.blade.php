<main>
    <ul>
        @foreach ($products as $product)
            <li>
                @include('shared.product')
            </li>
        @endforeach
    </ul>

</main>