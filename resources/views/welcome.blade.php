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
      margin-bottom: 1.4em;
    }
    .post-wrapper .post-title{
      text-decoration: none;
      color: rgba(0, 0, 0, 0.84);
    }


    .label-type-1{
      margin-bottom: 10px;
    }
    </style>

    <title>Angular Laravel - App</title>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body ng-app="NXBlog" ng-cloak layout="column">
    <md-toolbar md-whiteframe>
      <nx-container>
      <div class="md-toolbar-tools">
          <md-button class="md-icon-button">
            <md-icon>menu</md-icon>
          </md-button>
          <h2>Nikx</h2>
      </div>
    </nx-container>
    </md-toolbar>
    <section flex style="overflow:auto">

      <nx-container layout="row" layout-margin>
        <section flex>
            <h3 class="md-headline label-type-1" layout-margin>Yesterday</h3>
            <md-card>
        <md-card-header>
          <md-card-avatar>
            <img src="https://material.angularjs.org/latest/img/logo.svg"/>
          </md-card-avatar>
          <md-card-header-text>
            <span class="md-title">Angular</span>
            <span class="md-subhead">Material</span>
          </md-card-header-text>
        </md-card-header>
        <img ng-src="https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Resturant-Employer-940x400.jpg" class="md-card-image" alt="Washed Out">
        <md-card-title>
         <md-card-title-text>
           <span class="md-headline">In-card mixed actions</span>
           <ul style="margin:0;padding:0; list-style:none;">
             <li ng-repeat="i in [1,2,3,4]" style="display:inline-block;">{[{i}]}</li>
           </ul>
         </md-card-title-text>
       </md-card-title>
        <md-card-content>
          <p>
            The titles of Washed Out's breakthrough song and the first single from Paracosm share the
            two most important words in Ernest Greene's musical language: feel it. It's a simple request, as well...
          </p>
        </md-card-content>
        <md-card-actions layout="row" layout-align="start center" layout-padding>
          <div style="padding:0;">
            <md-button class="md-raised md-primary">Continue Reading</md-button>
          </div>
          <md-card-icon-actions hide>
            <md-button class="md-icon-button" aria-label="toggle">
              <md-icon>arrow_drop_down</md-icon>
            </md-button>
          </md-card-icon-actions>
        </md-card-actions>
      </md-card>
        </section>
        <section style="width:300px;" hide-xs>
          <h3 class="md-headline label-type-1">Recent Activity</h3>
          <nx-paper>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
          </nx-paper>
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
