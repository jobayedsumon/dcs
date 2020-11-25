

<div class="modal_body">




    <div class="container">
        <div class="row">
            <div class="col-6 col-xs-12">
                <img class="img img-responsive" src="{{ asset('uploads/images/'.$product->image) }}" alt="">
            </div>
            <div class="col-6 ol-xs-12">
                    <div class="modal_title mb-3">
                        <h2>{{ $product->title }}</h2>
                    </div>

                    <div class="modal_description">
                        {!! $product->short_description !!}
                        <br>
                        {!! $product->description !!}
                    </div>

                    <div class="variants_selects">


                                    @forelse($product->variations as $variation)

                                        <div class="mt-2">

                                            <div class="form-check-label flex flex-col-reverse items-center">

                                                <input min="0" max="9999" step="1" value="0" type="number" class="mr-5 count" name="count[]">
                                                <input type="text" readonly class="bold mr-5 size" value="{{ $variation->size }}" name="size[]">
                                                <input type="text" readonly class="bold price" value="{{ $variation->price }}" name="price[]">
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse

                                        <input type="hidden" name="product_id" id="productId_modal" value="{{ $product->id }}" required>



                    </div>

            </div>
        </div>
    </div>



</div>



<script>


    $('.count').on('change', function () {
      let size = $(this).siblings('.size').val().slice(0, 4);
      let total = size * $(this).val();
      $(this).siblings('.price').val(total);
    });




    $('#addToCartModal').click(function (e) {

        let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        productId = $('#productId_modal').val();
        var price = $("input[name='price[]']")
            .map(function(){return $(this).val();}).get();
        var size = $("input[name='size[]']")
            .map(function(){return $(this).val();}).get();
        var count = $("input[name='count[]']")
            .map(function(){return $(this).val();}).get();

        $.ajax({
            type: 'POST',
            url: '/cart/add',
            data: {
                _token: CSRF_TOKEN,
                product_id: productId,
                size: size,
                price: price,
                count: count,
            },
            success: function (data) {

            }
        });

    });
</script>
