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
        <md-card-content ng-show="post.commenting" layout layout-align="center center">
          <md-input-container class="md-icon-float md-block" flex>
            <!-- Use floating label instead of placeholder -->
            <label>Comment</label>
            <md-icon class="name">insert_comment</md-icon>
            <textarea ng-model="user.biography" md-maxlength="150" rows="1" md-select-on-focus placeholder="write here..."></textarea>
          </md-input-container>
          <md-button class="md-fab md-mini" ng-click="post.comment.posting=true" style="margin-right:0;">
             <md-icon>send</md-icon>
           </md-button>
        </md-card-content>
        <md-list class="md-dense1" flex>
          <md-subheader class="md-no-sticky">3 line item (dense)</md-subheader>
          <md-list-item class="md-2-line" ng-repeat="item in [1,2,3,4,5,6]">
            <img ng-src="https://material.angularjs.org/latest/img/list/60.jpeg?0" class="md-avatar" alt="Nikx" />
            <div class="md-list-item-text" layout="column">
              <h3>Nikx</h3>
              <p>The titles of Washed Out's breakthrough song and the first single from Paracosm share the two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well.</p>
            </div>
          </md-list-item>
        </md-list>
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
