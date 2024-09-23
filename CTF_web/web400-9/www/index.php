
<!--
  Copyright 2018 Google LLC

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->
<html lang="en" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.css">
    <link rel="stylesheet" href="/static/style.css">
    <base href="/">
</head>
<body ng-app="calcApp" ng-cloak>
    <div class="header"><h1 class="md-display-3">calcxx</h1></div>
    <div class="container" layout="row" layout-align="center">
        <div></div>
        <div class="gcalc" layout="column" layout-align="center center" ng-controller="CalcCtrl as ctrl">
            <div style="visibility: hidden">
              <div class="md-dialog-container" id="captchaDialog">
                <md-dialog>
                   <md-dialog-content>
                    <div style="display: inline-block" vc-recaptcha key="'6LfEWFgUAAAAABlmE6KuyO4v0yeJ8OI2wp_TSNcv'" ></div>
                    <md-dialog-content>
                    <md-dialog-actions>
                        <md-button ng-click="ctrl.mdDialog.hide()" class="md-primary">Cancel</md-button>
                        <md-button ng-click="ctrl.cloud()" class="md-primary md-raised">Submit</md-button>
                    </md-dialog-actions>
                </md-dialog>
              </div>
            </div>


            <div class="w100" layout="row" layout-align="end">
                <div class="sp"></div>
                <div id="screen" flex="none">
                    <span id="result">{{ctrl.screen}}</span>
                </div>
                <div class="sp"></div>
            </div>
            <div layout="column">
                <div layout="row" layout-align="end">
                    <md-button class="btn ot" ng-click="ctrl.btnClick('(')">(</md-button>
                    <md-button class="btn ot" ng-click="ctrl.btnClick(')')">)</md-button>
                    <md-button class="btn ot" ng-click="ctrl.btnClick('%')">%</md-button>
                    <md-button class="btn ot" ng-click="ctrl.btnClick('ac')">AC</md-button>
                </div>
                <div layout="row" layout-align="end">
                    <md-button class="btn num" ng-click="ctrl.btnClick('pow')">x<sup>2</sup></md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('7')">7</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('8')">8</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('9')">9</md-button>
                    <md-button class="btn ot"  ng-click="ctrl.btnClick('/')">÷</md-button>
                </div>
                <div layout="row" layout-align="end">
                    <md-button class="btn num" ng-click="ctrl.btnClick('sqrt')">√</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('4')">4</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('5')">5</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('6')">6</md-button>
                    <md-button class="btn ot"  ng-click="ctrl.btnClick('*')">×</md-button>
                </div>
                <div layout="row" layout-align="end">
                    <md-button class="btn num" ng-click="ctrl.btnClick('π')">π</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('1')">1</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('2')">2</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('3')">3</md-button>
                    <md-button class="btn ot"  ng-click="ctrl.btnClick('-')">-</md-button>
                </div>
                <div layout="row">
                    <md-button class="btn num" ng-click="ctrl.btnClick('ans')">Ans</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('0')">0</md-button>
                    <md-button class="btn num" ng-click="ctrl.btnClick('.')">.</md-button>
                    <md-button class="btn eq"  ng-click="ctrl.btnClick('=')">=</md-button>
                    <md-button class="btn ot"  ng-click="ctrl.btnClick('+')">+</md-button>
                </div>
            </div>
            <div class="footer" layout="row" layout-align="space-between center">
                <div><p><a ng-click="ctrl.permalink()" href="#" class="pm" id="pm">Permalink</a></p></div>
                <div><p>Computer too slow? <b><a href="#" onclick="xmlhttp()" class="pm">Try it</a></b> on our i386 beowulf cluster.</p></div>
            </div>
        </div>
        <div></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-aria.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-messages.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.8/angular-material.min.js"></script>

    <script src="/static/js/angular-recaptcha.min.js" type="text/javascript"></script>
    <script src="/static/js/app.min.js" type="text/javascript"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118961476-1"></script>
    <script src="/static/js/analytics.js"></script>
    <script src="/static/js/request.js"></script>

</body>
</html>
