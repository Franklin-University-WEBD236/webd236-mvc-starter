<div class="card" style="">
  <div class="card-header">
    <span>{{$post['title']}}</span><span class="text-muted float-right">{{time2str($post['datestamp'])}}</span>
  </div>
  <div class="card-body">
    {{$post['content']}}
  </div>
  <div class="card-footer">
    Filed under {{$post['tags']}}
  </div>
</div>
