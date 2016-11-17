<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Testimonials</title>

    <?php include 'components/headLinks.php'; ?>

</head>

<body id="testimonialPage">
    <?php include "components/header.php"; ?>
        <div class="container">
            <div class="carousel slide" id="myCarousel" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <!--                        first item-->
                    <div class="item active">
                        <div style="background: url(img/jpg/manright.jpg) no-repeat center center; background-size: cover; color: white;">
                            <div class="carousel-caption">
                                <div>
                                    <div class="blockquote">
                                        <p class="m-b-0">"In three months Ken took my super unfit and very demotivated 16 year old son and turned him into a fitness enthusiast. Day one and he couldn't do two pushups, or run anywhere further than 50 yards. We had a goal, that seemed unattainable to be honest, and Ken made it possible. Our son passed his officer selection tests for the Air Force and we couldn't be happier! Sit ups like a machine, press ups in a hurry and a level 9 bleep test. I would recommend Ken to anyone he is a really nice guy who gets results!"</p>
                                        <footer class="blockquote-footer pull-right">
                                            <cite>Matthew McEvoy    </cite>
                                        </footer>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--                        next item-->
                    <div class="item">
                        <div style="background-color: blue; color: white;">
                            <div class="carousel-caption" style="margin: auto;">
                                <h3><em>“In three months Ken took my super unfit and very demotivated 16 year old son and turned him into a fitness enthusiast. Day one and he couldn't do two pushups, or run anywhere further than 50 yards. We had a goal, that seemed unattainable to be honest, and Ken made it possible. Our son passed his officer selection tests for the Air Force and we couldn't be happier! Sit ups like a machine, press ups in a hurry and a level 9 bleep test. I would recommend Ken to anyone he is a really nice guy who gets results!”</em></h3>
                                <p style="text-align: right;">Matthew McEvoy</p>
                            </div>
                        </div>
                    </div>

                    <!--                        next item-->
                    <div class="item">
                        <div style="background-color: green; color: white;">
                            <div class="carousel-caption" style="margin: auto;">
                                <h3><em>“In three months Ken took my super unfit and very demotivated 16 year old son and turned him into a fitness enthusiast. Day one and he couldn't do two pushups, or run anywhere further than 50 yards. We had a goal, that seemed unattainable to be honest, and Ken made it possible. Our son passed his officer selection tests for the Air Force and we couldn't be happier! Sit ups like a machine, press ups in a hurry and a level 9 bleep test. I would recommend Ken to anyone he is a really nice guy who gets results!”</em></h3>
                                <p style="text-align: right;">Matthew McEvoy</p>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span><span class="sr-only">Previous</span></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Previous</span></a>
                <a></a>
            </div>
        </div>

        <?php include 'components/footer.php' ?>

        <?php include 'modules/navigationClassControl.php'; ?>


            <!--            Carousel-->
            <script>
                $(function () {
                    ('.carousel').carousel({
                        interval: 1000;
                    });
                });
            </script>

</body>

</html>