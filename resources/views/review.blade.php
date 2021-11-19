@extends('layout')

@section('title')
    Review
@endsection

@section('main_content')

    
    <div class="container">
        <h1>Send your review</h1>
        
        <form method="POST" action="/review/check">
            @csrf
            <input type="email" name="email" id="email" placeholder="Your email" class="form-control"><br>
            <input type="text" name="subject" id="subject" placeholder="Your subject" class="form-control"><br>
            <textarea name="message" id="message" placeholder="Your message" class="form-control"></textarea><br>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <button type="submit" class="btn btn-success">Send review</button>

            <hr>

            <h1>All reviews</h1>

            @foreach ($reviews as $review)

            <div class="alert alert-warning">
                <h4>{{ $review->subject }}</h4>
                <b>{{ $review->email }}</b>
                <p>{{ $review->message }}</p>
            </div>
                
            @endforeach
        </form>

        
    </div>

@endsection