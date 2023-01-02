@extends('masterAdmin')
@section('adminOrder')

<!-- content @s -->
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    

                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">order Section</h4>
                                                <div class="nk-block-des">
                                                    <p>You can make style out your setting related form as per below example.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    

                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">order Section</h4>
                                                <div class="nk-block-des">
                                                    <p>You can make style out your setting related form as per below example.</p>
                                                </div>
                                            </div>
                                        </div>
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="pro-thumbnail">Order id</th>
                                 
                                    <th class="pro-remove">Status</th>
                                    <th class="pro-remove">Details</th>
                                    <th>Change status</th>
                                </tr>
                            </thead>
                            @if($orders)
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td class="pro-size">{{$order->id}}</td>
                                    
                                    <td class="pro-subtotal tk-part">{{$order->status}}</td>
                                    <td class="pro-remove">
                                        
                                        <a class="btn bg-white btn-light mx-1px text-95" href="{{url('/admin/view/invoice/'.$order->id)}}" target="_blank" data-title="Print">
                                                <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                                                view invoice
                                        </a>
                                        <a class="btn bg-white btn-light mx-1px text-95" href="{{url('/admin/invoice/'.$order->id.'/generate')}}"  data-title="PDF">
                                            <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                                                download
                                        </a>
                                    </td>
                                    <td>
                                    <form enctype="multipart/form-data" action="">
                                    @csrf
                                    <input type="hidden" value="{{$order->id}}" id="order_id" name="order_id" class="order_id">
                                    <select name="status" id="status" >
                                    <option data-display="{{$order->status}}">{{$order->status}}</option>
                                    <option value="pending">pending</option>
                                    <option value="processing">processing</option>
                                    <option value="complete">complete</option>
                                    </select>
                                    <button type="button" class="button-status">Submit</button>
                                    </form>
                                    </td>
                                    
                                </tr>
                                @endforeach

                            </tbody>
                            @endif
                        </table>
                    </div>


                </div>
            </div>

        </div>
</div>
</div>


 <!-- JavaScript -->
 <script src="{{ asset('adminFrontend/assets/js/bundle.js?ver=3.1.1')}}"></script>
    <script src="{{ asset('adminFrontend/assets/js/scripts.js?ver=3.1.1')}}"></script>
    <!----Jquery----->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!--=====popper js=====-->
    <script src="assets/js/popper.min.js"></script>
    <!--=====bootstrap=====-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=====Owl carousel=====-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--=====header script=====-->
    <script src="assets/js/script.js"></script>
    <!--=====header script=====-->
    <script src="assets/js/main.js"></script>


    <script type="text/Javascript">
$(".button-status").click(function(e){
e.preventDefault();

var $button = $(this);
var status = $button.parent().find("select").val();
var order_id = $button.parent().find("input.order_id").val();
console.log(status,order_id);
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$.ajax({
            type:'POST',
            url:"{{ route('orderStatus') }}",
            data:{order_id:order_id, status:status},
            success:function(data){
                
                console.log(data);
            }
        });


});
</script>
@endsection