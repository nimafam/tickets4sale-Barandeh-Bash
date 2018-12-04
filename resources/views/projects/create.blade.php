@extends('layout')
@section('title', 'Create a New Project')


@section('content')

    <section class="section">
        <h1 class="title">Create a New Project</h1>

        <form method="post" action="/projects">

            @CSRF

            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input class="input" name="title" type="text" placeholder="Project's Title" value="{{ old('title') }}">
                </div>
            </div>

            <div class="field">
                <label class="label">Description</label>
                <div class="control">
                    <textarea class="textarea" name="description" placeholder="e.g. alexsmith@gmail.com">{{ old('description') }}</textarea>
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
