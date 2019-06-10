%% views/header.html %%

<div class="row">
  <div class="col-lg-10 offset-1">
    <h2>Recent posts</h2>
[[ foreach ($posts as $post) : ]]
  %% views/post_summary.php %%
[[ endforeach; ]]
  </div>
</div>

<div class="row">
  <div class="col-lg-10 offset-1">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>


          
%% views/footer.html %% 