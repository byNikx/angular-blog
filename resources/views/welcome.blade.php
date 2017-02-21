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

            <nx-post category="video"></nx-post>

            <nx-post category="image"></nx-post>

            <nx-post category="text"></nx-post>

            <nx-post category="video"></nx-post>

            <nx-post category="gallery"></nx-post>
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

      app.directives = {};

      app.directives.PostImpl = [function(){
        return {
          restrict : 'AE',
          scope :{
            category : '='
          },
          templateUrl : function(element, attr){
            return '/template/post/'+attr.category;
          }
        };
      }];

      app.directive('nxPost', app.directives.PostImpl);

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

      app.config(['$interpolateProvider', '$mdThemingProvider', function($interpolateProvider, $mdThemingProvider){
        $mdThemingProvider.theme('default')
        .primaryPalette('indigo')
        .accentPalette('pink');
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
