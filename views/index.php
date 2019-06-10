%% views/header.html %%

<div class="row">
  <div class="col-lg-8 offset-2">
    <div class="card">
      <div class="card-header">Add a new todo</div>
      <div class="card-body">
        <form action="@@todo/add@@" method="post">
          <div class="form-group">
            <input type="text" min="1" id="description" name="description" class="form-control" placeholder="Enter description" value=""/>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-10 offset-1">
    <h2>Recent posts</h2>
[[ foreach ($posts as $post) : ]]
  %% views/post_summary.php %%
[[ endforeach; ]]
  </div>
</div>

          
%% views/footer.html %% 