
<header id="main-header" class="container-fluid">
        <div class="mobile-nav ">
            <img src="img/logo.png" alt="rick and morty logo">
            <button id="butt" onclick="myFuncti()">Toggle Menu</button>
            <div class="dio" id="hehe" >
                <ul>

                    <li><a href="home">Home</a></li>
                    <li><a href="intro">About us</a></li>
                    <li><a href="product">Product</a></li>
                    <li><a href="price">Price list</a></li>
                    <li><a href="contact">Contact us</a></li>
                    <li><a href="index">Sign up/ Login</a></li>
                </ul>
            </div>
        </div>
        <nav>
            <ul>
                <li class="brand"><img src="img/logo.png" alt="rick and morty logo"></li>
                <li class="{{Request::is('home')?'active':''}}"><a href="home">Home</a></li>
                <li class="{{Request::is('intro')?'active':''}}"><a href="intro">About us</a></li>
                <li class="{{Request::is('product')?'active':''}}"><a href="product">Product</a></li>
                <li class="{{Request::is('price')?'active':''}}"><a href="price">Price list</a></li>
                <li class="{{Request::is('contact')?'active':''}}"><a href="contact">Contact us</a></li>
                <li class="{{Request::is('index')?'active':''}}"><a href="index">Sign up/ Login</a></li>
            </ul>
        </nav>

    </header>
