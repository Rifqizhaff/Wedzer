@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: 100px; padding: 100px;">
    <div class="row justify-content-center">
        <div class="col-4 col-lg-4">
            <div class="card" style="width: 500px; height: 500px; border-radius: 18px">
                <div class="container-fluid" style="margin-top: 40px">
                    <h1 style="justify-content: center; text-align: center; margin-bottom: 50px">Register</h1>
                    <form action="/registered" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 20px">Register</button>
                        <br>
                    </form>
                </div>
        
            </div>
            
        </div>
    </div>
</div>

@endsection