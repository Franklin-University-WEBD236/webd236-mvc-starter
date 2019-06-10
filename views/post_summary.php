<div class="row mt-4">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="#"><span class="h4">{{$post['title']}}</span></a><span class="text-muted float-right">{{time2str($post['datestamp'])}}</span>
      </div>
      <div class="card-body">
        {{$post['content']}}
      </div>
      <div class="card-footer">
        Filed under: {{$post['tags']}}
      </div>
    </div>
  </div>
</div>
