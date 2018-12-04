@extends('tickets4sale-layout')
@section('title', 'Tickets4Sale')

@section('content')

    <section class="section">
        <div class="container">
            <table class="table is-striped is-hoverable is-fullwidth ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Remain Tickets</th>
                    <th>Available Tickets</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($shows as $keys =>  $show)
                    <tr>
                        <td>{{ $keys + 1  }}</td>
                        <td>{{ $show['title'] }}</td>
                        <td>{{ $show['genre']}}</td>
                        <td>{{ 5 }}</td>
                        <td>{{ 10 }}</td>
                        <td>sold out</td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
