<div>
    @if (session('msg'))
<span class="text-danger">{{session('msg')}}</span>
    @endif
    @if (session('successmsg'))
    <div class="alert alert-success w-25" role="alert">
        {{session('successmsg')}}
      </div>
        @endif
    
</div>