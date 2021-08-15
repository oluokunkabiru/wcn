

@foreach ($comments as $comment)


<div class="container">
    <div class="card">
        <div class="media border p-3">
            <img src="{{ $comment->user->getMedia('avatar')->first()->getFullUrl()}}" alt="{{ $comment->user->name }}" class="mr-3 mt-3 rounded-circle" style="width:60px;">
            <div class="media-body">
                <span class="font-weight-bold">{{ ucwords($comment->user->name) }}</span>
              {!! $comment->comment !!}
            </div>
            <div class="media-footer">
                <small><i>{{ $comment->created_at }}</i></small>
                <br>
                @if (Auth::check() && Auth::user()->id === $comment->user_id)
                <a href="#confirm" data-toggle="modal" deleteurl="{{ route('comment.destroy', $comment->id) }}">
                    <span class="fa fa-trash text-danger display-5"></span>
                </a>
                @endif
            </div>
          </div>
        </div>
</div>
@endforeach
{{ $comments->links() }}
<div class="modal" id="confirm">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-uppercase">are sure you want delete comment</span></h4>
        <button type="button" class="btn btn-danger" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form id="delcategoryform" action="#" method="POST">

                    {{ csrf_field() }}
                    @method("DELETE")
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
                    <button  type="submit" class="btn btn-danger text-uppercase">delete</button>                </div>
</form>
        </div>
    </div>
     </div>
