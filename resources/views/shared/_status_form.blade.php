<form action="{{ route('statuses.store') }}" method="post">
    @include('shared._errors')
    {{ csrf_field() }}
    
    <textarea class="form-control" name="content" placeholder="聊点什么" cols="30" rows="10">
        {{ old('content') }}
    </textarea>
    <div class="text-right">
        <button type="submit" class="btn btn-primary mt-3">发布</button>
    </div>
</form>