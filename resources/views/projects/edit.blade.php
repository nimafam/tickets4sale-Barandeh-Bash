@extends('layout')
@section('title') {{ $project->title }} @endsection


@section('content')

    <section class="section">
        <h1 class="title">{{ $project->title }}</h1>

        <form method="post" action="/projects/{{ $project->id }}">

            @method('PATCH')
            @CSRF

            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" type="text" value="{{ $project->title }}">
                </div>
            </div>

            <div class="field">
                <label class="label">Description</label>
                <div class="control">
                    <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description">{{ $project->description }}</textarea>
                </div>
            </div>

            <div class="control">
                <button class="button is-success"> Create Project</button>
            </div>

            @if($errors->count())
            <hr/>
            <div class="notification is-danger">
                <ul>
                    @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </form>
    </section>

@endsection
