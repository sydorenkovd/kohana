<div ng-app="myApp" ng-controller="myCtrl" ng-init="test()">
    <div >
        <p>Статьи</p>
        <p>Here we go too</p>
    </div>
    {{ firstName + " " + lastName }}
    <br>
        <div ng-repeat="dat in data">
            {{dat.title}} - {{dat.content}}, <br>
        </div>
        <button ng-if="!is_more" ng-click="showmore()">Click to show more</button>
    {{ans}}
<!--    <div ng-if="page == '1'" ng-repeat="d in data">-->
<!--        {{d.title}} :: {{d.content}}-->
<!--    </div>-->

</div>

