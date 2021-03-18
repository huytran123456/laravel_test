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
            <input  type="text" id='Id' class="form-control mb-4" placeholder="ID" >
            <input  type="text" id='first_name' class="form-control mb-4" placeholder="FIRST NAME" >
            <input  type="text" id='last_name' class="form-control mb-4" placeholder="LAST NAME" >
            <input  type="password" id='password' class="form-control mb-4" placeholder="PASSWORD" >
            <input  type="text" id='email' class="form-control mb-4" placeholder="EMAIL" >
            <input  type="text" id='phone' class="form-control mb-4" placeholder="PHONE" >
            <button class="btn btn-dark-green btn-block my-4" style='background-color:green'  id='create' onclick="Create()" type='click' >Create</button>
            <button class="btn btn-dark-green btn-block my-4" style='background-color:green' id='update' onclick='Update()' type='click'>Update</button>

        </form>
        <p class="h4 mb-4 text-center"><strong>SEARCH ID</strong></p>
        <input  type="text" id='filter' class="form-control mb-4" placeholder=" SEARCH ID" >
        <button class="btn btn-dark-green btn-block my-4" style='background-color:green' onclick="Search()" >Search</button>
        <button class="btn btn-dark-green btn-block my-4" style='background-color:green' onclick="All()" >Get All</button>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody id='tee'>


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
        var id=document.getElementById('Id').value
        async function Create(){
     event.preventDefault()
          // e.preventDefault()
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
                            //wait(10000)
                         //   auth.login(response.data.token.access_token,response.data.user);
                      //      this.$router.push('/index');
                        } else {
                            console.log(response)
                        }
                    })
            return false

        }
        async function Update(){
     event.preventDefault()
     res= await axios.post('/api/users/'+id,{
     first_name:document.getElementById('first_name').value,
     last_name:document.getElementById('last_name').value,
     email:document.getElementById('email').value,
     phone:document.getElementById('phone').value,
    // id:document.getElementById('Id').value,
  //   _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
   }).then(response => {
                        if (response.status==200) {
                            //return response

                            console.log(response)
                           // wait(10000)
                         //   auth.login(response.data.token.access_token,response.data.user);
                      //      this.$router.push('/index');
                        } else {
                            console.log(response)
                        }
                    })

        }
        async function Search(){
            var fil=document.getElementById('filter').value
            console.log(fil)
          //  wait(5000)
          res= await  axios.get('/api/users/'+fil)
          .then(response=>{
            if (response.status==200) {
                            //return response

                            console.log(response)
                            myObj = response.data.data;
                      txt = "<tr>"
                    for (x in myObj) {
                        txt +=  "<th scope='row'>"+  myObj[x].id + "</th>";
                 txt += "<td>" + myObj[x].first_name + "</td>";
                 txt += "<td>" + myObj[x].last_name + "</td>";
                 txt += "<td>" + myObj[x].email + "</td>";
                 txt+="</tr>"
                      }
                txt += "</table>"
                document.getElementById("tee").innerHTML = txt;
                            //wait(10000)
                         //   auth.login(response.data.token.access_token,response.data.user);
                      //      this.$router.push('/index');
                        } else {
                            console.log(response)
                        }
          })
         // console.log(res)
         // wait(6000)
        }
      async  function All(){
       //     var fil=document.getElementById('filter').value
           // console.log(fil)
          //  wait(5000)
          res= await  axios.get('/api/users')
          .then(response=>{
            if (response.status==200) {
                            //return response

                            console.log(response)
                    myObj = response.data.data;
                      txt = "<tr>"
                    for (x in myObj) {
                        txt +=  "<th scope='row'>"+  myObj[x].id + "</th>";
                 txt += "<td>" + myObj[x].first_name + "</td>";
                 txt += "<td>" + myObj[x].last_name + "</td>";
                 txt += "<td>" + myObj[x].email + "</td>";
                 txt+="</tr>"
                      }
                txt += "</table>"
                document.getElementById("tee").innerHTML = txt;
                           // var rett=JSON.parse(response.data)
                         //  console.log(rett)
                          //  wait(10000)
                         //   auth.login(response.data.token.access_token,response.data.user);
                      //      this.$router.push('/index');
                        } else {
                            console.log(response)
                        }
          })
         // console.log(res)
         // wait(6000)
            return
        }
    </script>
    </body>
</html>
