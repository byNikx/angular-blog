<nx-container layout="row" layout-margin>
  <section flex>
      <form name="postForm">
        <md-card>
          <div ckeditor ng-model="text"></div>
        </md-card>
      </form>
      <style>
        .test-preview img{
          max-width: 100%;
        }
        .test-preview h1{
          font-size: 13px
        }
      </style>
      <section ng-bind-html="text" class="test-preview"></section>
  </section>
  <section style="width:340px;" hide show-gt-sm>
    <h3 class="md-headline label-type-1" layout-margin>Recent Activity</h3>
    <md-card>
      <div style="height:100px;">
      </div>
    </md-card>
  </section>
</nx-container>
