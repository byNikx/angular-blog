<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <base href="/">
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
      display: inline-block;
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

     .nx-card-actions {
        padding: .5em;
    }



.gridListdemoDynamicTiles md-icon {
  width: 50%;
  height: 30%; }

.gridListdemoDynamicTiles md-icon svg {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%; }

.gridListdemoDynamicTiles .s64 {
  font-size: 64px; }

.gridListdemoDynamicTiles .s32 {
  font-size: 48px; }

.gridListdemoDynamicTiles md-icon.fa {
  display: block;
  padding-left: 0; }

.gridListdemoDynamicTiles md-icon.s32 span {
  padding-left: 8px; }

.gridListdemoDynamicTiles md-grid-list {
  margin: 8px; }

.gridListdemoDynamicTiles .gray {
  background: #f5f5f5; }

.gridListdemoDynamicTiles .green {
  background: #b9f6ca; }

.gridListdemoDynamicTiles .yellow {
  background: #ffff8d; }

.gridListdemoDynamicTiles .blue {
  background: #84ffff; }

.gridListdemoDynamicTiles .darkBlue {
  background: #80d8ff; }

.gridListdemoDynamicTiles .deepBlue {
  background: #448aff; }

.gridListdemoDynamicTiles .purple {
  background: #b388ff; }

.gridListdemoDynamicTiles .lightPurple {
  background: #8c9eff; }

.gridListdemoDynamicTiles .red {
  background: #ff8a80; }

.gridListdemoDynamicTiles .pink {
  background: #ff80ab; }

.gridListdemoDynamicTiles md-grid-tile {
  transition: all 300ms ease-out 50ms; }

.gridListdemoDynamicTiles md-grid-tile md-icon {
  padding-bottom: 32px; }

.gridListdemoDynamicTiles md-grid-tile md-grid-tile-footer {
  background: rgba(0, 0, 0, 0.68);
  height: 36px; }

.gridListdemoDynamicTiles md-grid-tile-footer figcaption {
  width: 100%; }

.gridListdemoDynamicTiles md-grid-tile-footer figcaption h3 {
  margin: 0;
  font-weight: 700;
  width: 100%;
  text-align: center; }






    </style>

    <title>Angular Laravel - App</title>
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
          <md-button class="md-icon-button" ui-sref="home">
            <md-icon>menu</md-icon>
          </md-button>
          <h2>Tech</h2>
          <div flex layout-margin hide-xs>
            <md-autocomplete md-no-cache="true" md-selected-item="selectedItem" md-items="item in items" placeholder="looking for someting?" md-search-text="searchText" md-item-text="item.display">
              <span>{[{ item.display }]}</span>
            </md-autocomplete>
          </div>
          <span hide-gt-xs flex></span>
          <md-button ui-sref="newPost">New Post</md-button>
          <div hide-xs layout layout-align="center center">
            <md-button class="md-icon-button">
              <md-icon>notifications</md-icon>
            </md-button>
            <div class="nav-avatar" md-colors="{'background-color':'accent'}" style="width:30px; height:30px; border-radius:30px; font-size:15px;" layout="row" layout-align="center center">N</div>
          </div>
      </div>
    </nx-container>
    </md-toolbar>
    <section flex ui-view style="overflow:auto"></section>
    <!-- Angular Material requires Angular.js Libraries -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
    <script src="//unpkg.com/angular-ui-router@0.3.1/release/angular-ui-router.js"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.3/angular-sanitize.js"></script>
    <!-- Angular Material Library -->
    <script src="//ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.6/marked.min.js"></script>
    <script src="/js/simplemde-angular.js"></script>
    <script src="/js/marked-angular.js"></script>
    <link rel="stylesheet" href="/css/post-preview.css"/>


    <!-- Your application bootstrap  -->
    <script type="text/javascript">
      /**
      * You must include the dependency on 'ngMaterial'
      */



      var app = angular.module('NXBlog', ['ngMaterial', 'ui.router', 'simplemde', 'ngSanitize', 'hc.marked']);

      app.directives = {};

      app.directives.PostImpl = [function(){
        var linkImpl = function(scope, element, attrs) {
             scope.getPostUrl = function() {
                  return '/template/post/'+attrs.size+'/'+attrs.category;
             }
         };

        return {
          restrict : 'AE',
          link : linkImpl,
           template : '<div ng-include="getPostUrl()"></div>'
        };
      }];

      app.directives.nxCardActions = [function(){
        let linkImpl = function(scope, element, attr){
          element.addClass('nx-card-actions');
        }
        return {
          restrict : 'AEC',
          link : linkImpl
        }
      }];


      app.directive('nxPost', app.directives.PostImpl);
      app.directive('nxCardActions', app.directives.nxCardActions);

      app.controller('gridListDemoCtrl', function($scope) {

        this.tiles = buildGridModel({
                icon : "avatar:svg-",
                title: "Svg-",
                background: ""
              });

        function buildGridModel(tileTmpl){
          var it, results = [ ];

          for (var j=0; j<11; j++) {

            it = angular.extend({},tileTmpl);
            it.icon  = it.icon + (j+1);
            it.title = it.title + (j+1);
            it.span  = { row : 1, col : 1 };

            switch(j+1) {
              case 1:
                it.background = "red";
                it.span.row = it.span.col = 2;
                break;

              case 2: it.background = "green";         break;
              case 3: it.background = "darkBlue";      break;
              case 4:
                it.background = "blue";
                it.span.col = 2;
                break;

              case 5:
                it.background = "yellow";
                it.span.row = it.span.col = 2;
                break;

              case 6: it.background = "pink";          break;
              case 7: it.background = "darkBlue";      break;
              case 8: it.background = "purple";        break;
              case 9: it.background = "deepBlue";      break;
              case 10: it.background = "lightPurple";  break;
              case 11: it.background = "yellow";       break;
            }

            results.push(it);
          }
          return results;
        }
      });

      app.config(['$interpolateProvider', '$mdThemingProvider', '$locationProvider', '$stateProvider', '$urlRouterProvider', 'markedProvider', function($interpolateProvider, $mdThemingProvider, $locationProvider, $stateProvider, $urlRouterProvider, markedProvider){

        markedProvider.setOptions({gfm: true});

        var postViewState = {
          name: 'postView',
          url: '/post/view',
          templateUrl: '/post/view'
        }

        var homeState = {
          name: 'home',
          url: '/home',
          templateUrl: '/home'
        }

        var newPostState = {
          name: 'newPost',
          url: '/post/new',
          templateUrl: '/post/new'
        }

        var notFoundState = {
          name: 'notFound',
          url: '/not-found',
          template: 'Page not found!'
        }

        $stateProvider.state(postViewState);
        $stateProvider.state(homeState);
        $stateProvider.state(newPostState);
        $stateProvider.state(notFoundState);
        $urlRouterProvider.otherwise('/notFound');

//        $locationProvider.html5Mode(true).hashPrefix('!')

        $mdThemingProvider.theme('default')
        .primaryPalette('indigo')
        .accentPalette('pink');
        $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
      }]);





      app.directives.nxContainer = ['$mdMedia', function($mdMedia){

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


      app.directives.nxPaper = [function(){
        let linkImpl = function(scope, element, attr){
          element.addClass('nx-paper md-whiteframe-1dp');
        }
        return {
          restrict : 'AEC',
          link : linkImpl
        }
      }];

      app.directives.nxCommentBox = ['$mdMedia',function($mdMedia){
        let linkImpl = function(scope, element, attr){
            scope.$mdMedia = $mdMedia;
//          element.addClass('nx-paper md-whiteframe-1dp');
        }
        return {
          restrict : 'AE',
          scope:{
            comments:'@'
          },
          link: linkImpl,
          templateUrl : '/template/comment-box'
        }
      }];



      app.directive('nxContainer', app.directives.nxContainer);
      app.directive('nxPaper', app.directives.nxPaper);
      app.directive('nxCommentBox', app.directives.nxCommentBox);
    </script>
  </body>
</html>
