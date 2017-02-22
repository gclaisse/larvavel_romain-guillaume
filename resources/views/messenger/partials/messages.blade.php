<div class="panel panel-default">
    <div class="panel-heading">
        <div class="media">
            <a class="pull-left" href="#">
                <img src="//www.gravatar.com/avatar/{{ md5($message->user->email) }} ?s=64"
                     alt="{{ $message->user->name }}" class="img-circle">
            </a>
            <div class="media-body">
                <h4 class="media-heading"><strong>{{ $message->user->name }}</strong></h4>
                <p>{{ $message->body }}</p>
                <div class="text-muted">
                    <small>Posté {{ $message->created_at->diffForHumans() }}</small>
                </div>
            </div>
        </div>
    </div>
</div>