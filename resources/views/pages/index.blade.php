@extends('layout.app')
 @section('content')
    <h1 class="h1 text-center fw-bold pt-4 pb-4">Welcome to Writting Blog</h1>
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-10" style="text-align: justify;">
         <p>
            Here, you can express your ideas or your life stories about anything you like. As you can see, this is a very basic post manager web app with a few functionalities like CRUD. There is no persistence module added to this project due to the free hosting limits, so I'm so sorry if you write a post and the next day it disappears. I use a sqlite file in a temporary folder instead of a dedicated database service, so this directory content always wipes out when no one is using this app. Of course I wrote some default posts inside a seed module, and it will reload the sqlite file once the temp folder is cleared.
          </p>
          <p>
            In order to manage posts, I encourage you to register with an email. Or if you prefer, you can log in with this test account:
            <br>
            <b>Email address:</b> user1@test.com  or user2@test.com 
            <br>
            <b>Password:</b>
             12345678
          </p>
          <p>
            You can access the <a href="{{url("posts/")}}">post section here</a>. Please take some minutes to write something interesting.
          </p>
          <p>Miguel Mendieta</p>
          <p>App: {{config('app.name','LSAPP')}}</p>
      </div>
    </div>
    

 @endsection  
   
