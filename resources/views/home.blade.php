@extends('layouts.app')

@section('content')
<h1>Main Page</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, inventore. Quidem rem placeat vel, aut praesentium aperiam totam. Ad aspernatur similique beatae labore culpa, doloremque et deserunt illo eos vero.</p>
@endsection

@section('title')
Home
@endsection

<!-- only seen in home -->
@section('aside')
    @parent
    <p>Additional text</p>
@endsection