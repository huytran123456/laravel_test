<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="token" content="{{csrf_token()}}">
        <title>LAB 5</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    </head>
    <body>
        <div class=container-xl>
        <form class="border border-light p-5" >

            <p class="h4 mb-4 text-center"><strong>FORM</strong></p>

            <input  type="text" id='first_name' class="form-control mb-4" placeholder="FIRST NAME" >
            <input  type="text" id='last_name' class="form-control mb-4" placeholder="LAST NAME" >
            <input  type="password" id='password' class="form-control mb-4" placeholder="PASSWORD" >
            <input  type="text" id='email' class="form-control mb-4" placeholder="EMAIL" >
            <input  type="text" id='phone' class="form-control mb-4" placeholder="PHONE" >
            <button class="btn btn-dark-green btn-block my-4" style='background-color:green'  id='create' onclick="Create()" >Create</button>
            <button class="btn btn-dark-green btn-block my-4" style='background-color:green' id='update' >Update</button>

        </form>
        <p class="h4 mb-4 text-center"><strong>SEARCH ID</strong></p>
        <input  type="text" name='filter' class="form-control mb-4" placeholder=" SEARCH ID" >
        <button class="btn btn-dark-green btn-block my-4" style='background-color:green' onclick="Search()" >Search</button>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        </div>

    <script src="js/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script>

  // const axios=require('axios').default
  function wait(ms){
   var start = new Date().getTime();
   var end = start;
   while(end < start + ms) {
     end = new Date().getTime();
  }
}
  window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    //'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
    'Content-Type': 'application/json',
};
   var first_name=document.getElementById('first_name').value
        var last_name=document.getElementById('last_name').value
        var email=document.getElementById('email').value
        var phone=document.getElementById('phone').value
        var password=document.getElementById('password').value
        async function Create(){
           res= await axios.post('/api/users',{
    first_name:document.getElementById('first_name').value,
     last_name:document.getElementById('last_name').value,
     email:document.getElementById('email').value,
     phone:document.getElementById('phone').value,
     password:document.getElementById('password').value,
  //   _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
   }).then(response => {
                        if (response.status==200) {
                            //return response

                            console.log(response)
                          // wait(7000)
                         //   auth.login(response.data.token.access_token,response.data.user);
                      //      this.$router.push('/index');
                        } else {
                            console.log(response)
                        }
                    })

        }

    </script>
    </body>
</html>
