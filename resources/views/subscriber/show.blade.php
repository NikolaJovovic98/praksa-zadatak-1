@extends('layout')


@section('title')

    Prijava

@endsection

@section('content')
    <form action="/prijava" method="POST">
        @csrf

        <div class="container">

            <label for="ime"><b>Ime</b></label>

            <input

                type="text"
                placeholder=""
                name="first_name"

                required>

            <label for="prezime"><b>Prezime</b></label>

            <input

                type="text"
                placeholder=""
                name="last_name"

                required>

            <label for="email"><b>Email</b></label>

            <input

                type="email"
                placeholder=""
                name="email"

                required>

            <button type="submit">Prijavi se</button>
        </div>



    </form>

@endsection
