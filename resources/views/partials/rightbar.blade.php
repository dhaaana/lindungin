<div class="card p-4">
    <p class="m-0 fw-bold">
        Must Read Forum
    </p>
    <hr>
    <ul class="m-0 list-unstyled">
        @foreach ($mustreadforum->take(3) as $forum)
            <li class="mb-3 h7 text-primary" style="font-size: 14px;">
                <i class="fa fa-asterisk"></i>
                <a class="link-unstyled underline-link" href="{{ '/forum/' . $forum->slug }}">{{ $forum->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
