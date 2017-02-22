<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="media alert {{ $class }}">
            <h4 class="media-heading">
                <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
                ({{ $thread->userUnreadMessagesCount(Auth::id()) }} non-lu)</h4>
            <p>
                {{ $thread->latestMessage->body }}
            </p>
            <p>
                <small><strong>Créateur:</strong> {{ $thread->creator()->name }}</small>
            </p>
            <p>
                <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
            </p>
        </div>
    </div>
</div>