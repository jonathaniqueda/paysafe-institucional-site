@extends('layout.template')
@section('content')

    <div class="container">
        <div class="content">
            <form id="ajax-contact" method="post" action="/">

                <div class="field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="field">
                    <button class="btn" type="submit">Send</button>
                </div>
            </form>
        </div>
    </div>

@endsection
