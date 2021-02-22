
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login/Sign up</title>

    <!-- main css -->
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
</head>
<body>
    @include('includes.header1')
    <main>

        <!-- slideshow -->
        <!-- webshop -->

        <section class="container contact-form">
            @if(Session::get('errorLogin'))
            <h1>{{Session::get('errorLogin')}}</h1>
            @endif
            <form id="myForm" method="post" action="login">
                @csrf
                <label for="" class="text-uppercase text-sm">Your Email</label>
				<input type="text" placeholder="Username" name="username" class="form-control mb" required>
                <span style='color:red;'>@error('username'){{$message}} @enderror</span>

				<label for="" class="text-uppercase text-sm">Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control mb" required>
                <span style='color:red;'>@error('password'){{$message}} @enderror</span>

				<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
            </form>
            <p>Don't Have an Account? <a href="register" >Signup</a></p> <br>
            <p><a href="admin/index">Login as Admin </a></p>
        </section>
    </main>
    <footer>
        <a href="https://warhammer40k.fandom.com/wiki/Warhammer_40k_Wiki"><h3>Warhammer 40K Wiki</h3></a>
        <a href="https://www.facebook.com/vatlieubachkhoa"><h3>Join our Fanpage on Facebook!!!</h3></a>
    </footer>
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
    <!-- bootstrap -->


</body>
</html>
