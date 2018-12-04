@extends('layout')
@section('title', '{{ $project->title }}')

@section('content')
    <section class="section">
        <h1 class="title">{{ $project->title }}</h1>

        <div class="content">
            <p class="is-justified">{{ $project->description }}</p>
        </div>

        <hr>
        <a href="/projects/{{ $project->id }}/edit" class="button is-warning">Edit Description</a>
    </section>
@endsection
