
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact us</title>

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
            @if(Session::get('success'))
               <h1>SUCCESS!!</h1>
            @endif

            @if(Session::get('fail'))
              <h1>FAIL!!</h1>
            @endif
            <form id="myForm" method="post" action="add">
                @csrf
                <h5 id='contact-form' class="margin-3">Contact Us</h5>
                <label for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Full Name">
                <span style='color:red;'>@error('name'){{$message}}@enderror</span>

                <label for="email">E-mail</label>
                <input id="email" type="text" name="email" placeholder="E-mail">
                <span style='color:red;'>@error('email'){{$message}}@enderror</span>

                <label for="subject">Your Issue</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px" type="text"></textarea>
                <span style="color:red;">@error('subject'){{$message}}@enderror</span>

                <button type="submit" name="submit">Submit!</button>
            </form>
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
