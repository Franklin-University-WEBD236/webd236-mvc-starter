<div class="card">
  <div class="card-header d-flex align-items-center">
    <span class="h3">{{$post['title']}}</span><span class="text-muted float-right">{{time2str($post['datestamp'])}}</span>
  </div>
  <div class="card-body">
    {{$post['content']}}
  </div>
</div>