@extends('layouts.app')

@section('content')
    <h1>Contact</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)     
                <li>{{ $error }}</li>          
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Enter a Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter a Name" id="name" />
        </div>

        <div class="form-group">
            <label for="email">Enter E-Mail</label>
            <input type="text" class="form-control" name="email" placeholder="Enter E-Mail" id="email" />
        </div>

        <div class="form-group">
            <label for="subject">Enter Your Subject</label>
            <input type="text" class="form-control" name="subject" placeholder="Enter Your Subject" id="subject" />
        </div>

        <div class="form-group">
            <label for="message">Enter Your Subject</label>
            <textarea class="form-control" name="message" placeholder="Enter Your Message" id="message"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection

@section('title') Contact @endsection