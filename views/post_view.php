%% views/header.html %%

<div class="row">
  <div class="col-lg-12">
    <p>Posted on: {{$post['datestamp']}}</p>
  </div>
</div>

[[ if ($post['tags']): ]]
<div class="row">
  <div class="col-lg-12">
    <p>Filed under: {{$post['tags']}}</p>
  </div>
</div>
[[ endif; ]]

<div class="row">
  <div class="col-lg-12">
    <h1>{{$post['title']}}</h1>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    {{{nl2br(htmlentities($post['content']))}}}
  </div>
</div>
    
<div class="row mt-4">
  <div class="col-lg-12">
      <div class="form-group">
        <a href="@@post/edit/{{$post['id']}}@@"><button class="btn btn-primary">Edit</button></a>
        <button class="btn btn-danger" onclick="post('@@post/delete/{{$post['id']}}@@')">Delete</button>
        <button class="btn btn-secondary" onclick="return get('@@index@@')">Back</button>
      </div>
  </div>
</div>
  
%% views/footer.html %%
