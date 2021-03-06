<md-card ng-href="#/post/287897" class="post-wrapper">
  <md-card-header>
    <md-card-avatar>
      <a ng-href="#!/img1">
        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/vladzima/128.jpg"/>
      </a>
    </md-card-avatar>
    <md-card-header-text>
      <span>
        <a ng-href="#/nikx-fabrizio/" class="post-owner">
          <span class="md-title">James Trench</span>
        </a>
      </span>
      <span class="md-subhead">2 days ago</span>
    </md-card-header-text>
  </md-card-header>
  <img ng-src="https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Resturant-Employer-940x400.jpg" class="md-card-image" alt="Washed Out">
  <md-card-title>
   <md-card-title-text>
     <div>
       <a ng-href="#!/google" class="post-title">
         <h2 class="md-headline no-margin">In-card mixed actions</h2>
       </a>
     </div>
   </md-card-title-text>
 </md-card-title>
  <md-card-content>
    <p>
      The titles of Washed Out's breakthrough song and the first single from Paracosm share the
      two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
    </p>
    <ul class="tag-list">
      <li ng-repeat="tag in ['angularjs', 'javascript', 'HTML5']">
        <a ng-href="#!/tags/{[{tag}]}" md-ink-ripple class="md-secondary">{[{tag}]}</a>
      </li>
    </ul>
  </md-card-content>
  <md-card-actions layout="row" layout-align="start center" layout-padding style="display:none">
    <div style="padding:0; display:none">
      <md-button class="md-raised md-primary">Continue Reading</md-button>
    </div>
  </md-card-actions>
  <md-card-icon-actions layout layout-padding>
    <span flex></span>
    <div>
      <md-icon>question_answer</md-icon>
      <span>1.3k</span>
    </div>
    <div>
      <md-icon>favorite</md-icon>
      <span>2.4k</span>
    </div>
  </md-card-icon-actions>
</md-card>
