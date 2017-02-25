<style>
  .comment-list{
    padding-top: 0;
  }
  .reply-toolbar{
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .reply-toolbar li{
    display: inline-block;
  }
  .reply-toolbar li.tool-wrap button{
    background-color: transparent;
    border: 0;
    padding: 0;
    font-size: 13px;
    color: rgba(0, 0, 0, 0.57);
  }

</style>

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
      <span class="md-subhead">{[{post.commenting?'Commenting...':'Public comment'}]}</span>
    </md-card-header-text>
    <md-button class="md-icon-button md-secondary" style="margin-right:0;" ng-if="post.commenting" ng-click="post.commenting=false">
      <md-icon>close</md-icon>
    </md-button>
    <md-progress-circular md-mode="indeterminate" md-diameter="30" ng-if="post.comment.posting"></md-progress-circular>
    <md-button style="margin:0;" ng-if="!post.commenting" ng-class="{'md-icon-button':!$mdMedia('gt-sm')}" ng-click="post.commenting=true">
      <md-icon hide-gt-sm>add</md-icon>
      <span hide show-gt-sm>New Comment<span></md-button>
  </md-card-header>
  <md-card-content ng-show="post.commenting" style="padding-bottom:0">
    <md-input-container class="md-icon-float md-block" flex>
      <!-- Use floating label instead of placeholder -->
      <label>Comment</label>
      <md-icon class="name">insert_comment</md-icon>
      <textarea ng-model="user.biography" md-maxlength="150" rows="1" md-select-on-focus placeholder="write here..."></textarea>
    </md-input-container>
  </md-card-content>
  <nx-card-actions layout layout-align="end center" ng-if="post.commenting" style="padding-top:0;">
    <md-button class="md-raised md-accent" ng-click="post.comment.posting=true">
       Comment
    </md-button>
  </nx-card-actions>
  <md-list class="comment-list" flex>
    <md-subheader class="md-no-sticky">29 comments</md-subheader>
    <md-list-item class="md-3-line md-long-text" ng-repeat="item in [1,2,3,4,5,6]">
        <img ng-src="https://material.angularjs.org/latest/img/list/60.jpeg?0" class="md-avatar" alt="" />
        <div class="md-list-item-text">
          <a ng-href="#/nikx-fabrizio/" class="post-owner" style="margin:0;">
            <h3>John Trench</h3>
          </a>
          <p>{[{!!($index%2)?"The titles of Washed Out's breakthrough song and the first single from Paracosm share the two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well. and the first single from Paracosm share the two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well and the first single from Paracosm share the two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well":"The titles of Washed Out's breakthrough song."}]}</p>
          <p>
            <ul class="reply-toolbar">
              <li class="tool-wrap">
                <button>Reply</button>
              </li>
            </ul>
          </p>
        </div>
      </md-list-item>
  </md-list>
</md-card>
