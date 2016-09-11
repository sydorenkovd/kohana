<div ng-app="myApp" ng-controller="myCtrl" ng-init="test()" ng-cloak>
    <div >
        <p>Статьи</p>
        <p>Here we go too</p>
    </div>
    {{ firstName + " " + lastName }}
    <br>
    <div class="tabs-wrapper row">
        <div ng-repeat="dat in data">
            {{dat.title}} - {{dat.content}}, <br>
        </div>
        <button class="" ng-if="!is_more" ng-click="showmore()">
            <a class="waves-effect waves-light btn">
                <i class="material-icons left">cloud</i>Кликни</a>
        </button>
    </div>

    {{ans}}
    <div>
        <?php  for ($i = 1; $i < 100; $i++) {
            echo  "<h1>testdsgfdsvds sd fdsfds ds </h1>";
        } ?>

    </div>
<!--    <div class="card">-->
<!--        <div class="card-image waves-effect waves-block waves-light">-->
<!--            <img class="activator" src="/media/img/book.jpg">-->
<!--        </div>-->
<!--        <div class="card-content">-->
<!--            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>-->
<!--            <p><a href="#">This is a link</a></p>-->
<!--        </div>-->
<!--        <div class="card-reveal">-->
<!--            <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>-->
<!--            <p>Here is some more information about this product that is only revealed once clicked on.</p>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="parallax-container">-->
<!--        <div class="parallax"><img src="/media/img/parallax1.jpg"></div>-->
<!--    </div>-->
<!--    <div class="section white">-->
<!--        <div class="row container">-->
<!--            <h2 class="header">Parallax</h2>-->
<!--            <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="parallax-container">-->
<!--        <div class="parallax"><img src="/media/img/parallax2.jpg"></div>-->
<!--    </div>-->

</div>

