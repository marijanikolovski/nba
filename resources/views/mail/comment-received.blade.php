<p>Hello, {{ $team->name }}</p>

<p>You have new comment on your team <a href="#">{{ $team->comments->last()->content }}</a></p>

