

@foreach ($comments as $comment)


<div class="container">
    <div class="card">
        <div class="media border p-3">
            <img src="{{ $comment->user->getMedia('avatar')->first()->getUrl()}}" alt="{{ $comment->user->name }}" class="mr-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
                <span class="font-weight-bold">{{ ucwords($comment->user->name) }}</span>
              {!! $comment->comment !!}
            </div>
            <div class="media-footer">
                <small><i>{{ $comment->created_at }}</i></small>
                <br>

                <span class="fa fa-trash text-danger display-6">delete</span>
            </div>
          </div>
        </div>
</div>
@endforeach
{{ $comments->links() }}
