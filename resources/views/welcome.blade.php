<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    body {
    background-color: #e8e8e8;
    }

    *[ng-cloak] {
    display: none;
    }

    [gutter-default-top] {
    margin-top: 2em;
    }

    .nx-paper {
    background-color: #fff;
    display: block;
    }

    .nx-container {
    display: block;
    max-width: 1100px;
    }
    .nx-container.xs {
    margin-top: 0;
    margin-right: 0;
    margin-bottom: 0;
    margin-left: 0;
    }
    .nx-container.gt-xs {
    margin-top: 0;
    margin-right: 5%;
    margin-bottom: 0;
    margin-left: 5%;
    }
    .nx-container.gt-sm {
    margin-top: 0;
    margin-right: 7.5%;
    margin-bottom: 0;
    margin-left: 7.5%;
    }
    .nx-container.gt-md {
    margin-top: 0;
    margin-right: 10%;
    margin-bottom: 0;
    margin-left: 10%;
    }
    .nx-container.gt-lg {
    margin-top: 0;
    margin-right: 15%;
    margin-bottom: 0;
    margin-left: 15%;
    }
    .post-wrapper{
      margin-bottom: 2em;
    }
    .post-wrapper .post-title, .post-owner{
      text-decoration: none;
      color: rgba(0, 0, 0, 0.87);
    }

    .no-margin{
      margin: 0;
    }
    .label-type-1{
      margin-bottom: 10px;
    }
    </style>

    <style>
     .tag-list{
       margin:0;
       padding:0;
       list-style:none;
     }
     .tag-list li{
       display: inline-block;
       margin: 0 5px;
     }
     .tag-list li a{
       background: rgb(224,224,224);
       color: rgb(66,66,66);
       padding: 3px 10px;
       font-size: 14px;
       font-weight: 400;
       border-radius: 3px;
       position: relative;
       text-decoration: none;
     }
     .tag-list li:first-child{
       margin-left: 0;
     }
     .tag-list li:last-child{
       margin-right: 0;
     }
    </style>

    <title>Angular Laravel - App</title>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body ng-app="NXBlog" ng-cloak layout="column">
    <md-toolbar md-whiteframe>
      <section layout md-colors="{'background-color':'primary-hue-2'}" style="font-size:14px; font-weight:400;display:none">
        <nx-container layout-padding>
          &nbsp
        </nx-container>
      </section>
      <nx-container>
      <div class="md-toolbar-tools">
          <md-button class="md-icon-button">
            <md-icon>menu</md-icon>
          </md-button>
          <h2>Tech</h2>
          <div flex layout-margin hide-xs>
            <md-autocomplete md-no-cache="true" md-selected-item="selectedItem" md-items="item in items" placeholder="looking for someting?" md-search-text="searchText" md-item-text="item.display">
              <span>{[{ item.display }]}</span>
            </md-autocomplete>
          </div>
          <div hide-xs layout layout-align="center center">
            <md-button class="md-icon-button">
              <md-icon>notifications</md-icon>
            </md-button>
            <div class="nav-avatar" md-colors="{'background-color':'accent'}" style="width:30px; height:30px; border-radius:30px; font-size:15px;" layout="row" layout-align="center center">N</div>
          </div>
      </div>
    </nx-container>
    </md-toolbar>
    <section flex style="overflow:auto">

      <nx-container layout="row" layout-margin>
        <section flex>
            <h3 class="md-headline label-type-1" layout-margin>Yesterday</h3>
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
              <iframe height="349" src="http://www.youtube.com/embed/9CcpAMjpA48?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
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


        </section>
        <section style="width:340px;" hide-xs>
          <h3 class="md-headline label-type-1" layout-margin>Recent Activity</h3>
          <md-card>
            <div style="height:100px;"></div>
          </md-card>
        </section>
      </nx-container>

    </section>
    <!-- Angular Material requires Angular.js Libraries -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

    <!-- Angular Material Library -->
    <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

    <!-- Your application bootstrap  -->
    <script type="text/javascript">
      /**
      * You must include the dependency on 'ngMaterial'
      */
      var app = angular.module('NXBlog', ['ngMaterial']);

      app.config(['$interpolateProvider', function($interpolateProvider){
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
      }]);




      app.impl = app.impl || {};
      app.impl.nxContainer = ['$mdMedia', function($mdMedia){

        let linkImpl = function(scope, element, attr){
          scope.$mdMedia = $mdMedia;
          if(!element.hasClass('nx-container'))
            element.addClass('nx-container');

          let breakpoint = {
                gtLarge : 'gt-lg',
                gtMedium : 'gt-md',
                gtSmall : 'gt-sm',
                gtXtraSmall : 'gt-xs',
                xtraSmall : 'xs'
          };

          let containerDecorator = function(newValue, oldValue){
            element.removeClass(
              Object.values(breakpoint).join(' ')
            );
            if($mdMedia(breakpoint.gtLarge)){
               element.addClass(breakpoint.gtLarge);
            }else if($mdMedia(breakpoint.gtMedium)){
               element.addClass(breakpoint.gtMedium);
            }else if($mdMedia(breakpoint.gtSmall)){
               element.addClass(breakpoint.gtSmall);
            }else if($mdMedia(breakpoint.gtXtraSmall)){
               element.addClass(breakpoint.gtXtraSmall);
            }else{
              element.addClass(breakpoint.xtraSmall);
            }
          };
          scope.$watchCollection(function(){
            return [
              $mdMedia('gt-xs'),
              $mdMedia('gt-sm'),
              $mdMedia('gt-md'),
              $mdMedia('gt-lg')
            ];
          }, containerDecorator);
        }
        return {
          restrict : 'EAC',
          link : linkImpl
        };
      }];


      app.impl.nxPaper = [function(){
        let linkImpl = function(scope, element, attr){
          element.addClass('nx-paper md-whiteframe-1dp');
        }
        return {
          restrict : 'AEC',
          link : linkImpl
        }
      }];



      app.directive('nxContainer', app.impl.nxContainer);
      app.directive('nxPaper', app.impl.nxPaper);
    </script>
  </body>
</html>
