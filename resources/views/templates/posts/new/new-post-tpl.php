<nx-container layout="row" layout-margin>
<style type="text/css">
.cke_button__nomarginbutton_icon{
  display: none;
}
 .cke_button__nomarginbutton_label
 {
    padding-left: 0;
    display: inline !important;
 }
 </style>
  <section flex>
      <form name="postForm">
        <md-card>
          <md-card-title>
            <md-card-title-text>
              <span class="md-headline">New Post</span>
            </md-card-title-text>
          </md-card-title>
          <md-card-content>
            <md-input-container class="md-block" flex-gt-sm>
              <label>Post Title</label>
              <input ng-model="user.firstName">
            </md-input-container>
            <textarea simplemde ng-model="text"></textarea>
          </md-card-content>
          <md-divider></md-divider>
          <nx-card-actions layout layout-align="end center">
            <md-button class="md-raised md-accent">Post</md-button>
          </nx-card-actions>
        </md-card>
      </form>
      <md-card>
        <div marked="text" id="post-preview">
          # Markdown directive
          *It works!*
        </div>
      </md-card>
      <!-- <section ng-bind-html="text" class="test-preview"></section> -->
  </section>
  <section style="width:340px;" hide show-gt-sm>
    <h3 class="md-headline label-type-1" layout-margin>Recent Activity</h3>
    <md-card>
      <div style="height:100px;">
      </div>
    </md-card>
  </section>
</nx-container>
