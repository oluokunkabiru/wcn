
<div class="container my-3">
    <div class="card p-3">
        <div class="card-header">
            <h4>Add comment</h4>
        </div>
     <div class="row">
         <div class="col-12 card-body">
             <form action="{{ route('comment.store') }}" method="post">
                 {{ csrf_field() }}
                 <input type="hidden" name="blogid" value="{{ $blog->id }}">
                    <div class="form-group">
                        <textarea id="commentbox" class="form-control {{ $errors->has('comment') ? ' is-invalid' : '' }}" rows="5" name="comment"></textarea>
                    @if ($errors->has('comment'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('comment') }}</strong>
                    </span>
                    @endif
                    </div>
                    <button type="submit" class="btn btn-lg btn-rounded btn-warning text-uppercase float-rght mr-3">add comment</button>
            </form>
         </div>

        </div>
    </div>
</div>

.
