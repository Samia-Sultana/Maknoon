@extends('masterAdmin')
@section('adminProduct')

<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">


                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Product Input Section</h4>

                            </div>
                        </div>

                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">Add Product</h5>
                                </div>
                                <form enctype="multipart/form-data" method="POST" action="{{ route('createProduct') }}" class="d-flex">
                                    @csrf
                                    <div class="p-2">
                                        <label for="productName">Product Name</label><br>
                                        <input type="text" id="productName" name="productName" value=""><br>

                                        <label for="price">Price</label><br>
                                        <input type="text" id="price" name="price" value=""><br><br>

                                    </div>

                                    <div class="p-2">
                                        <label for="thumbnail">Thumbnail Image</label><br>
                                        <input type="file" id="thumbnail" name="thumbnail" value=""><br><br>

                                        <label for="image">images</label><br>
                                        <input type="file" id="image" name="images[]" multiple="multiple" /><br><br>


                                    </div>

                                    <div class="p-2">
                                        <label for="catagory">Choose a catagory:</label>
                                        <select name="catagory" id="catagory">
                                            @foreach($catagories as $catagory )
                                            @if($catagory->status == "enable")
                                            <option value="{{$catagory->catagoryName}}">{{$catagory->catagoryName}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        </br></br>
                                        <label for="latestOrTop"> Latest or Top rated</label>
                                        <select name="latestOrTop" id="latestOrTop">
                                            <option value="0">Latest</option>
                                            <option value="1">Top Rated</option>

                                        </select>

                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </form>

                            </div>

                        </div><!-- card -->
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="card-head">
                                    <h5 class="card-title">All Products</h5>
                                </div>
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <!-- <th class="pro-thumbnail">Thumbnail</th>
                                    <th class="pro-title">Product</th> -->
                                                <th class="pro-id">Id</th>
                                                <th class="pro-sku">SKU</th>
                                                <th class="pro-price">Price</th>
                                                <th class="pro-available">Available</th>
                                                <th class="pro-remove">Delete</th>
                                                <th class="pro-update">Update</th>
                                                <th class="pro-status">status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allProducts as $product)
                                            <tr>

                                                <td>{{$product->product_id}}</td>
                                                <td>{{$product->sku}}</td>
                                                <td>{{$product->unitPrice}}</td>
                                                <td>{{$product->totalStock}}</td>
                                                <td>
                                                    <form action="{{route('deleteProduct')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{$product->product_id}}" name="product_id">
                                                        <input type="hidden" value="{{$product->sku}}" name="sku">
                                                        <button type="submit" class="btn btn-danger btn-delete-product">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="{{'#update_product_'.$product->product_id}}">
                                                        Update
                                                    </button>
                                                    <div class="modal fade" id="{{'update_product_' . $product->product_id}}" tabindex="-1" role="dialog" aria-labelledby="update_product_lebel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="update_product_lebel">Update Product</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="" class="d-flex" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="p-1">
                                                                            <input type="hidden" id="update_productId" name="update_productId" value="{{$product->product_id}}">

                                                                            <input type="hidden" id="update_sku" name="update_sku" value="{{$product->sku}}">

                                                                            <label for="update_price"> Unit Price</label><br>
                                                                            <input type="text" id="update_price" name="update_price" value="{{$product->unitPrice}}"><br><br>

                                                                            <label for="update_thumbnail">Thumbnail Image</label><br>

                                                                            <input type="file" id="update_thumbnail" name="update_thumbnail" value=""><br><br>

                                                                            <label for="update_image">images</label><br>
                                                                            <input type="file" id="update_image" name="update_images[]" multiple="multiple" /><br><br>

                                                                        </div>

                                                                        <div>




                                                                            <label for="update_catagory">Choose a catagory:</label>
                                                                            <select name="update_catagory" id="update_catagory">
                                                                                @foreach($catagories as $catagory )
                                                                                @if($catagory->status == "enable")
                                                                                <option value="{{$catagory->catagoryName}}">{{$catagory->catagoryName}}</option>
                                                                                @endif
                                                                                @endforeach
                                                                            </select>
                                                                            </br></br>
                                                                            <label for="update_latestOrTop"> Latest or Top rated</label>
                                                                            <select name="update_latestOrTop" id="update_latestOrTop">
                                                                                <option value="0">Latest</option>
                                                                                <option value="1">Top Rated</option>

                                                                            </select>


                                                                            <br><br>
                                                                            <label for="update_quantity"> Quantity</label><br>
                                                                            <input type="text" id="update_quantity" name="update_quantity" value="{{$product->availableStock}}"><br><br>

                                                                        </div>


                                                                    </form>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary btn-update-product">Save changes</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal -->
                                                    
                                                </td>
                                                <td>
                                                    <select name="status" id="status" class="btn btn-success status">
                                                        <option data-display="{{$product->status}}">{{$product->status}}</option>
                                                        <option value="enable">Enable</option>
                                                        <option value="disable">Disable</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            @endforeach
                                </div>
                            </div>

                        </div>

                    </div><!-- .nk-block -->

                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
<!----Jquery----->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!--=====popper js=====-->
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<!--=====bootstrap=====-->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<!--=====Owl carousel=====-->
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('assets/js/script.js')}}"></script>
<!--=====header script=====-->
<script src="{{ asset('assets/js/main.js')}}"></script>
<!--=====modal script=====-->

<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js')}}"></script>
<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js')}}"> </script>
<script src="{{ asset('http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap-modal.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap-transition.js')}}"></script>



<script type="text/Javascript">

    $(".btn-update-product").on("click", function() {
    
    var $button = $(this);
    var id = $button.parent().prev().find("input#update_productId").val();
    var sku =$button.parent().prev().find("input#update_sku").val();
    var price = $button.parent().prev().find("input#update_price").val();
    var quantity =$button.parent().prev().find("input#update_quantity").val() ;
    var latestOrTop =$button.parent().prev().find("input#update_latestOrTop").val();
    var catagory =$button.parent().prev().find("select#update_catagory").val();
    var thumbnail = $button.parent().prev().find("input#update_thumbnail")[0].files;
    var multiImage = $button.parent().prev().find("input#update_image")[0].files;
    var totalImage = $button.parent().prev().find("input#update_image")[0].files.length;

    var fd = new FormData();
    fd.append('id',id);
    fd.append('price',price);
    fd.append('quantity',quantity);
    fd.append('sku',sku);
    if(latestOrTop == 0){
        fd.append('latest',latestOrTop);
    }
    else{
        fd.append('top',latestOrTop);
    }
    
    fd.append('catagory',catagory);
    fd.append('thumbnail',thumbnail[0]);
    fd.append('totalImage', totalImage);

    let images = $button.parent().prev().find("input#update_image")[0].files;
    console.log(images);
    for (let i = 0; i < totalImage; i++) {
        console.log(images[i]);
        fd.append('images' + i, images[i]);
            }
 
$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateProduct') }}",
            data: fd,
            contentType: false,
            processData: false,
            dataType: 'json',
            success:function(data){
                console.log('hiiiiiiiiiiiiiiiiii');
          }
       });
  
    });

    $(".status").on("change", function() {
        var $select = $(this);
        var id = $select.parent().prev().find("input#update_productId").val();
        var sku =$select.parent().prev().find("input#update_sku").val();
        var status = $select.val();

        $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $.ajax({
            type:'POST',
            url:"{{ route('updateStatus') }}",
            data: {id:id,sku:sku,status:status},
            success:function(data){
                console.log('hiiiiiiiiiiiiiiiiii');
          }
       });
        

    });
    
    
    

</script>
@endsection



<!--  --->