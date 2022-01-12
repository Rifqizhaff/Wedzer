@extends('layouts.app')

@section('content')
<div class="home-section">
    <img
        class="bg"
        src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
        alt=""
    >
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12">
                <h1>
                    Hello!
                </h1>
                <p>
                    Selamat datang di Wedding Organizer terpecaya anda!
                </p>
                <a class="btn btn-primary" href="{{ route('login') }}" role="button">Yuk, Join!</a>
            </div>
        </div>
        
    </div>
</div>
@endsection