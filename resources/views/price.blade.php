<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Price</title>

    <!-- main css -->

    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">

</head>
<body>
    @include('includes.header1')
    <main>

        <!-- slideshow -->
        <!-- characters -->
        <!-- webshop -->
        <section id="webshop" class="container">
            <h1 class="highlight">Warhammer Online Store: Safety Notice</h1>
            <p>
                Our webstore, games-workshop.com, is taking orders again in some territories
                from May 1st. As ever, the safety of our staff is our number one priority. Here�s what we�re doing to ensure the health and wellbeing of all of our staff:</p>
                <h6>Staff Safety is Our Top Priority</h6>
            <p>
                We are only opening up limited operations,
                and only in warehouse locations where we've
                been able to put in measures that ensure a safe
                working environment. We have strictly followed
                all local government guidelines, and even gone beyond them, to ensure safety.

                We are making sure our staff
                remain suitably separated wherever possible,
                through the use of limited staffing levels,
                increased spacing for our staff, adjustments to the layout of our warehouse, and where necessary, the use of perspex screens.

                We will be maintaining the highest standards
                of hygiene throughout our warehouses, by way of good hand hygiene,
                the use of protective equipment in line with official guidance, and increased and regular cleaning across our sites.
            </p>
            <div class="list-group">
                <h3>Type</h3>
                <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                @foreach ($users as $user)
                <div class="list-group-item checkbox">
                    <label><input type="checkbox" class="common_selector product_type" value='{{$user->product_type}}'  >{{$user->product_type}}</label>
                </div>
                @endforeach

                </div>
             </div>

            <article class="shop" id="uyen" >

                {{ csrf_field() }}
                <section id="selected-shop-item" class="selected-shop-item exit-button hidden"
                         data-exit-target="selected-shop-item">

                    <article class="content">
                        <button class="exit-button" data-exit-target="selected-shop-item">X</button>
                        <figure>
                            <img id="selected-item-img" src="#" alt="#">
                        </figure>
                        <div class="details">
                            <div class="group">
                                <h4 id="selected-item-name" class="item-name">-</h4>
                                <p id="selected-item-description" class="item-description">-</p>
                            </div>
                            <div class="group">
                                <input type="number" placeholder="Amount" min="0">
                                <button class="order-button exit-button" data-exit-target="selected-shop-item">
                                    Order Now!
                                </button>
                            </div>
                        </div>
                    </article>

                </section>
            </article>
        </section>

        <section class="container order-form">
            <article>
                <h5 class="margin-2">Free in-store pickup</h5>
                <p class="margin-2">
                    ALL orders are FREE to collect from any Games Workshop store.
                </p>

                <h5 class="margin-2">Delivery</h5>
                <ul>
                    <li>Delivery prices start from FREE for orders of 125 $ or over, and from 40 $ for orders under 125$.</li>
                    <li>We will endeavour to get all orders dispatched as soon as possible,
                    though the additional safety measures in our factories and warehouses put
                    in place due to the COVID-19 pandemic may result in some delays,
                    and deliveries may be disrupted locally depending on regional conditions and policies.</li>
                </ul>
            </article>
            <form id="myForm" method="post" action='orderRequest'>
                @if (Session::get('success'))
                    <h1>SUCCESS</h1>
                @endif
                @if (Session::get('fail'))
                    <h1>FAIL</h1>
                @endif
                @if (Session::get('out'))
                    <h1>{{Session::get('out','')}}</h1>
                @endif
                @csrf
                <h5 id='order-form' class="margin-3">Build Your Army Now!</h5>

                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Full Name">
                <span style="color:red">@error('name'){{$message}}@enderror</span>

                <label for ="city">City/Province/State:</label>
                <input type="text" name="city" value="" id="city" placeholder="San Francisco">
                <span style="color:red">@error('city'){{$message}}@enderror</span>

                <label for ="country">Country:</label>
                <input type="text" name="country" value="" id="country" placeholder="US">
                <span style="color:red">@error('country'){{$message}}@enderror</span>

                <label for ="zipcode">Zipcode:</label>
                <input type="text" name="zipcode" value="" id="zipcode" placeholder="90105">
                <span style="color:red">@error('zipcode'){{$message}}@enderror</span>

                <label for="email">E-mail</label>
                <input id="email" type="text" name="email" placeholder="E-mail">
                <span style="color:red">@error('email'){{$message}}@enderror</span>

                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="tel" placeholder="911">
                <span style="color:red">@error('phone'){{$message}}@enderror</span>

                <label for="product">Product</label>
                <input id="product" name="product" type="text" placeholder="...">
                <span style="color:red">@error('product'){{$message}}@enderror</span>

                <label for="price">Price</label>
                <input id="price" name="price" type="text" readonly='readonly'>

                <input type="hidden" id="productid" name="productid" type="number" placeholder="911">

                <button type="submit" name="submitt" >Order Now!</button>
            </form>
        </section>




    </main>





    <footer>
        <a href="https://warhammer40k.fandom.com/wiki/Warhammer_40k_Wiki"><h3>Warhammer 40K Wiki</h3></a>
        <a href="https://www.facebook.com/vatlieubachkhoa"><h3>Join our Fanpage on Facebook!!!</h3></a>
    </footer>
    <style>
#loading
{
	text-align:center;
	background: url('loader.gif') no-repeat center;
	height: 150px;
}
</style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>');</script>
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
    <script type="text/javascript" src="js/main1.js" charset="utf-8" defer></script>
    <script>
           $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$(document).ready(function(){

 filter_data();

function filter_data()
{
    $('.filter_data').html('<div id="loading" style="" ></div>');


    var product_type = get_filter('product_type');

    $.ajax({
        url:"productFil",
        type:"GET",
        data:{'product_type':product_type},

        success:function(data){
            console.log(data);
            $("#uyen").html(data);
            $("#uyen").trigger('create');
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.common_selector').click(function(){
    filter_data();
});


});
</script>

    <!-- bootstrap -->

</body>
</html>
