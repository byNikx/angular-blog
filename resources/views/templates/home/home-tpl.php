<nx-container layout="row" layout-margin>
  <section flex>
      <h3 class="md-headline label-type-1" layout-margin>Yesterday</h3>
      <nx-post ng-repeat="category in ['text', 'text', 'text', 'gallery', 'video', 'image', 'text', 'video', 'text'] track by $index" category="{[{category}]}" size="large"></nx-post>
  </section>
  <section style="width:340px;" hide-xs>
    <h3 class="md-headline label-type-1" layout-margin>Recent Activity</h3>
    <md-card>
      <div style="height:100px;">
        
      </div>
    </md-card>
  </section>
</nx-container>
