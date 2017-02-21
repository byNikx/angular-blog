<md-card ng-href="#/post/287897" class="post-wrapper">
  <md-card-header>
    <md-card-avatar>
      <img src="https://avatars0.githubusercontent.com/u/16052650?v=3&s=460"/>
    </md-card-avatar>
    <md-card-header-text>
      <span>
        <a ng-href="#/nikx-fabrizio/" class="post-owner">
          <span class="md-title">Nikx Fabrizio</span>
        </a>
      </span>
      <span class="md-subhead">2 days ago</span>
    </md-card-header-text>
  </md-card-header>
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
