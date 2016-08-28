<div ng-app="myApp" ng-controller="myCtrl" ng-init="test(<?= $id; ?>, '<?= $test; ?>')">
    <div >
        <p>Статьи</p>
        <p>Here we go too</p>
    </div>
    {{ firstName + " " + lastName }}
    <br>
    {{data.name}}<span  ng-if="data.name"> - was published </span>{{data.news.title}}
</div>
