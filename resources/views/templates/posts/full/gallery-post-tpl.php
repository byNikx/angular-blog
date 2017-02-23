<md-card ng-href="#/post/287897" class="post-wrapper">
  <md-card-header>
    <md-card-avatar>
      <a ng-href="#!/img1">
        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/ripplemdk/128.jpg"/>
      </a>
    </md-card-avatar>
    <md-card-header-text>
      <span>
        <a ng-href="#/nikx-fabrizio/" class="post-owner">
          <span class="md-title">Roger Doughlas</span>
        </a>
      </span>
      <span class="md-subhead">2 days ago</span>
    </md-card-header-text>
  </md-card-header>
  <md-divider></md-divider>
  <div ng-controller="gridListDemoCtrl as vm" flex ng-cloak style="background-color:#e8e8e8" class="gridListdemoDynamicTiles">
    <md-grid-list
          md-cols="1" md-cols-sm="2" md-cols-md="3" md-cols-gt-md="6"
          md-row-height-gt-md="1:1" md-row-height="4:3"
          md-gutter="8px" md-gutter-gt-sm="4px" >

      <md-grid-tile ng-repeat="tile in vm.tiles"
                    md-rowspan="{[{tile.span.row}]}"
                    md-colspan="{[{tile.span.col}]}"
                    md-colspan-sm="1"
                    md-colspan-xs="1"
                    ng-class="tile.background" >
        <md-icon md-svg-icon="{[{tile.icon}]}"></md-icon>
        <md-grid-tile-footer><h3>{[{tile.title}]}</h3></md-grid-tile-footer>
      </md-grid-tile>
    </md-grid-list>
  </div>
  <md-divider></md-divider>

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
