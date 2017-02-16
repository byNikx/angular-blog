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
              <h3 class="md-headline label-type-1">Yesterday</h3>
            <div class="post-wrapper type-1" ng-repeat="img in [
                'https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Blue-Sea-Water-940x400.jpg',
                'https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/Tea-and-Flowers-940x400.jpg',
                'https://awcdn1.ahmad.works/writing/wp-content/uploads/2015/05/People-Top-View-940x400.jpg']">
              <nx-paper>
                <section class="toolbar" layout-padding layout>
                  <span flex></span>
                  <md-button class="md-icon-button" ng-repeat="icon in ['more_vert']">
                    <md-icon>{[{icon}]}</md-icon>
                  </md-button>
                </section>
                <img ng-src="{[{img}]}" style="max-width:100%;"/>
                <div class="" layout="row" layout-padding>
                  <img src="https://assets.materialup.com/uploads/0dc82787-3b7e-4f9f-8199-9706f4daaf6c/avatar.png" class="md-avatar" style="width:50px; height:50px; border-radius:50px;"/>
                  <div>
                    <h3 class="md-title" style="margin:0;">
                      <a href="#" class="post-title">Restaurant Employer Read Clients Orders On His iPad</a>
                    </h3>
                    <span class="md-subead">by Erik Padamans in User Interfaces</span>
                  </div>

                </div>
              </nx-paper>
            </div>
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
