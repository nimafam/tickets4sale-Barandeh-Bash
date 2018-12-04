@extends('layout')
@section('title', 'Projects')


@section('content')

    <section class="section">
        <h1 class="title">Projects</h1>
        <div class="columns is-multiline">
            @if($projects->count())
            @foreach($projects as $project)
                <div class="column is-one-third">
                    <div class="card">
                        <header class="card-header">
                            <h3 class="card-header-title">
                                <a href="/projects/{{ $project->id }}" > {{ $project->title }}</a>
                            </h3>
                        </header>
                        <div class="card-content">
                            <div class="content">
                                {{ $project->description }}
                            </div>
                        </div>

                        <footer class="card-footer">
                            <a href="/projects/{{ $project->id }}/edit" class="card-footer-item">Edit</a>
                            <a href="/projects/{{ $project->id }}/destroy" class="card-footer-item">Delete</a>
                        </footer>

                    </div>
                </div>

            @endforeach
            @endif
        </div>
    </section>
@endsection
