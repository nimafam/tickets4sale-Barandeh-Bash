@extends('staff-layout')
@section('title', 'Tickets4Sale')

@section('content')

    <section class="section">
        <div class="container">
            <form method="get" action="/" style="float: right; margin-bottom: 25px; margin-top: -10px">
                @CSRF

                <div class="field has-addons">

                    <div class="control">
                        <input class="input" type="date" name="show-date" value="{{ old('show-date') }}">
                    </div>
                    <div class="control">
                        <button type="submit" class="button is-info">
                            Show Date
                        </button>
                    </div>
                </div>

            </form>

            <aside class="aside">
                {{ HTML::image('images/main-header.jpg', 'Main header tickets4sale') }}
            </aside>
            <div class="tabs is-medium">
                <ul>
                    @foreach( $shows as $genre => $show)
                        <li class="tab" id="{{ strtolower($genre) }}-nav"
                            onclick="openTab(event, '{{ strtolower($genre) }}')"><a>{{ strtolower($genre) }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </section>

    <div class="container section">

        @foreach($shows as $genre => $show)

            <div id="{{ strtolower($genre) }}" class="content-tab" style="display: none">
                <h3 class="title">{{ $genre }}</h3>
                <p>
                    Overview Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been
                    the industry's standard dummy text ever since the 1500s.
                </p>
                <hr/>

                <table class="table is-striped is-hoverable is-fullwidth">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Tickets Left</th>
                        <th>Tickets available</th>
                        <th>Status</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Title</th>
                        <th>Tickets Left</th>
                        <th>Tickets available</th>
                        <th>Status</th>
                        <th>Price</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($show['shows'] as $item)
                    <tr>
                        <td>{{ $item['title'] }}</td>
                        <td>{{ $item['tickets_left'] }}</td>
                        <td>{{ $item['tickets_available'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td>{{ $item['price'] }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>

    <script src="{{ URL::asset('js/main-js.js') }}"></script>
@endsection

