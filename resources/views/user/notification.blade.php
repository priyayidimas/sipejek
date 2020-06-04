@if ($auth->notifications->count() > 0)
    @foreach ($auth->notifications as $notification)    
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
        <div class="toast-header">
            <svg class="rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                focusable="false" role="img">
                <rect fill="#007aff" width="100%" height="100%" />
            </svg>
            <strong class="mr-auto">{{$notification->data['header']}}</strong>
            <small class="text-muted">{{Carbon::parse($notification->created_at)->format('d-m-Y')}}</small>
        </div>
        <div class="toast-body">
            {{$notification->data['body']}}
            <p><a href="{{$notification->data['link']}}">Go to link</a></p>
        </div>
    </div>
    @endforeach
@else
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
    <div class="toast-body">
        There is currently no notification
    </div>
</div>
@endif
<script>
$(document).ready(function () {
    $(".toast").toast('show');
});
</script>