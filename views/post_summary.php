<div class="card">
  <div class="card-header">
  <div class="row align-items-center">
    <span class="h1">{{$post['title']}}</span><span class="text-muted float-right">{{time2str($post['datestamp'])}}</span>
  </div>
  </div>
  <div class="card-body">
    {{$post['content']}}
  </div>
</div>