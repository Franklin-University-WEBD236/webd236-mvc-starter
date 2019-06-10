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
        <div class="btn-toolbar align-middle">
          <button type="submit" class="btn btn-primary mr-1 d-flex justify-content-center align-content-between" ><span class="material-icons">send</span>&nbsp;Submit</button>
          <a href="@@index@@"><button class="btn btn-secondary mr-1 d-flex justify-content-center align-content-between" ><span class="material-icons">cancel</span>&nbsp;Cancel</button></a>
        </div>
      </div>
      <input type="hidden" id="datestamp" name="datestamp" value="{{$post['datestamp']}}" />
    </form>
  </div>
</div>

%% views/footer.html %%
