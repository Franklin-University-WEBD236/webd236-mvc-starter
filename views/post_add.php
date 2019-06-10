%% views/header.html %%

<div class="row">
  <div class="col-lg-12 offset-1">

    <form action="@@post/add@@" method="post">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" min="1" id="title" name="title" class="form-control" placeholder="Enter title" value="{{$post['title']}}" />
      </div>
      <div class="form-group">
        <label for="title">Content</label>
        <textarea >
        </textarea>
        <input type="text" min="1" id="description" name="description" class="form-control" placeholder="Enter title" value="{{$post['title']}}" />
      </div>
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" min="1" id="description" name="description" class="form-control" placeholder="Enter title" value="{{$post['title']}}" />
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button class="btn btn-secondary" onclick="return get('@@index@@')">Cancel</button>
      </div>
    </form>
  </div>
</div>

%% views/footer.html %%
