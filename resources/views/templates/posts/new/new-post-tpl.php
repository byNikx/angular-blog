<nx-container layout="row" layout-margin>
  <section flex>
      <form name="postForm">
        <md-card>
          <md-card-content>
            <md-input-container class="md-block" flex-gt-sm>
              <label>Post Title</label>
              <input ng-model="user.firstName">
            </md-input-container>
            <md-input-container class="md-block" flex-gt-sm>
              <label>Post Title</label>
              <input ng-model="user.firstName">
            </md-input-container>
          </md-card-content>
          <div ckeditor ng-model="text"></div>
        </md-card>
      </form>
      <section ng-bind="text" class="test-preview"></section>
  </section>
  <section style="width:340px;" hide show-gt-sm>
    <h3 class="md-headline label-type-1" layout-margin>Recent Activity</h3>
    <md-card>
      <div style="height:100px;">
      </div>
    </md-card>
  </section>
</nx-container>
