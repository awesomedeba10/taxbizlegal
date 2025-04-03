@extends('frontend._layouts.master')

@section('title', slugToTitle($slug))

@section('content')
<main class="flex-grow-1">
    @includeIf('frontend.services.' . $slug)
</main>
@endsection