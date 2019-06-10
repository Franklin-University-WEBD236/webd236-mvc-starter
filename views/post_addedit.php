%% views/header.html %%

<div class="row">
  <div class="col-lg-12">

    <form action="@@post/{{$operation}}@@" method="post">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" min="1" id="title" name="title" class="form-control" placeholder="Enter title" value="{{$post['title']}}" />
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" placeholder="Enter content" rows="12">{{$post['content']}}</textarea>
      </div>
      <div class="form-group">
        <label for="tags">Tags</label>
        <input type="text" min="1" id="tags" name="tags" class="form-control" placeholder="Enter tags" value="{{$post['tags']}}" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-secondary" onclick="return get('@@index@@')">Cancel</button>
      </div>
      <input type="hidden" id="datestamp" name="datestamp" value="{{$post['datestamp']}}" />
    </form>
  </div>
</div>

%% views/footer.html %%
