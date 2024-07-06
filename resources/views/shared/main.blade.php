<main>
    <div class="list container text-center px-0 my-5">

        <div class="row gy-5">

            @foreach ($products as $product)
                <div class="col-4">
                    @include('shared.product')
                </div>
            @endforeach
            
        </div>

    </div>

</main>