@extends('layout.app')
@section('content')
<div class="container">
    <iframe src="https://calendar.google.com/calendar/embed?src=4oebtnj7e35f2s8omtf9v1jhso%40group.calendar.google.com&ctz=Africa%2FCasablanca" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</div>
    <div class="card">
        <div class="card-body">
            <div class="card-title">

                <form action="Booking" method="post">
                @csrf
                <label for="name">Rendez Vous pour:</label>
                <br>
                <textarea name="name" id="" cols="60" rows="3"></textarea>
                <br>
                <label for="meeting_time">Choissisez un fuseau horaire:</label>
                <br>
                <input type="date" name="meeting_date" id="">
                <input type="time" name="meeting_time" id="">

                <br>
                <br>
                <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>
@endsection