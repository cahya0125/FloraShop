<script>
    document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll('.buy-now a').forEach(function(element) {
                element.addEventListener('click', function(event) {
                    event.preventDefault();
                    var formId = this.dataset.formId;
                    console.log("Submitting form ID: " + formId);
                    document.getElementById(formId).submit();
                });
            });
        });
</script>
<div class="col-md-6 col-lg-3 ftco-animate">
    <div class="product">
        <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset('/images/produk/' . $item->gambar) }}" alt="Colorlib Template">
            <div class="overlay"></div>
        </a>
        <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="#">{{ $item->nama_produk }}</a></h3>
            <div class="d-flex">
                <div class="pricing">
                    <p class="price"><span class="price-sale">{{ number_format($item->harga) }}</span></p>
                </div>
            </div>
            <div class="bottom-area d-flex px-3">
                <div class="m-auto d-flex">
                    <a href="{{route('shop.detail', $item->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                        <span><i class="ion-ios-menu"></i></span>
                    </a>
                    <form action="{{ route('cart.store')}}" method="POST" id="myForm-{{$item->id}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                        @csrf
                        <input type="hidden" name="id_produk" value="{{$item->id}}">
                        <input type="hidden" name="quantity" value="1">
                        <a href="javascript:void(0);"  data-form-id="myForm-{{ $item->id }}"class="buy-now d-flex justify-content-center align-items-center mx-1" onclick="submitForm()">
                            <span><i class="ion-ios-cart"></i></span>
                        </a>
                        
                    </form>
                    {{-- <a href="#" class="heart d-flex justify-content-center align-items-center " onclick="submitForm()">
                        <span><i class="ion-ios-heart"></i></span>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

