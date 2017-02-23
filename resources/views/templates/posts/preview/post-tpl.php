<nx-container layout="row" layout-margin>
  <section flex>
      <nx-post category="text" size="full"></nx-post>

      <md-card ng-init="post.commenting=false; post.comment.posting=false">
        <md-card-header>
          <md-card-avatar>
            <a ng-href="#!/img1">
              <img src="https://s3.amazonaws.com/uifaces/faces/twitter/vladzima/128.jpg"/>
            </a>
          </md-card-avatar>
          <md-card-header-text>
            <span>
              <a ng-href="#/nikx-fabrizio/" class="post-owner">
                <span class="md-title">John Trench</span>
              </a>
            </span>
            <span class="md-subhead">{[{post.commenting?'Commenting...':'You'}]}</span>
          </md-card-header-text>
          <span flex></span>
          <md-button class="md-icon-button" style="margin-right:0;" ng-if="post.commenting" ng-click="post.commenting=false">
            <md-icon>close</md-icon>
          </md-button>
          <md-progress-circular md-mode="indeterminate" md-diameter="30" ng-if="post.comment.posting"></md-progress-circular>
          <md-button style="margin:0;" ng-if="!post.commenting" ng-click="post.commenting=true">New Comment</md-button>
        </md-card-header>
        <md-card-content ng-show="post.commenting">
          <md-input-container class="md-icon-float md-block">
            <!-- Use floating label instead of placeholder -->
            <label>Comment</label>
            <md-icon class="name">insert_comment</md-icon>
            <textarea ng-model="user.biography" md-maxlength="150" rows="1" md-select-on-focus placeholder="write here..."></textarea>
          </md-input-container>
        </md-card-content>
        <nx-card-actions layout="row" layout-align="end center" ng-if="post.commenting">
          <md-button class="md-raised md-accent" ng-click="post.comment.posting=true">
             Submit
           </md-button>
        </nx-card-actions>
      </md-card>
  </section>
  <section style="width:340px;" hide show-gt-sm>
    <h3 class="md-headline label-type-1" layout-margin>Recent Activity</h3>
    <md-card>
      <div style="height:100px;">
      </div>
    </md-card>
  </section>
</nx-container>
