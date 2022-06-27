<?php
include "Model/database.php";
$posts = $db->query("SELECT * from Specialty");
?>

<?php include "header.php"; ?>
<?php include "navbar.php"; ?>
<section id="Home" class="slider ">
</section>
<section id="demos">
    <div class="row">
        <div class="large-12 columns">
            <div class="owl-carousel owl-carouselSlider owl-theme">
                <div class="item">
                    <img src="img/dr1.png" alt="" class="position-absolute">
                    <div class="itemText position-absolute w-100 mt-5">
                        <h2 class="w-100 text-right font-weight-bold fadeing fadeingOne hasFadeSlider fadeRight">
                            دوره فوق العاده <span class="text-gold">
                            هوش اقتصادی
                        </span>
                        </h2>
                        <h3 class="w-100 text-right mb-5 fadeing fadeingSub fadeingSubOne hasFadeSlowSlider fadeRight">
                            این بار در مشهد
                        </h3>
                        <div class="w-100 d-flex justify-content-center">
                            <button class=" btn btn-success fadeing fadeingSubOne hasFadeSlider fadeUp">
                                ثبت نام
                            </button>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <img src="img/dr1.png" alt="" class="position-absolute">
                    <div class="itemText position-absolute w-100">
                        <h2 class="w-100 text-right font-weight-bold fadeing hasFadeSlider fadeRight">
                            دوره فوق العاده هوش اقتصادی
                        </h2>
                        <h3 class="w-100 text-right mb-5 fadeing fadeingSub hasFadeSlowSlider fadeRight">
                            این بار در مشهد
                        </h3>
                        <button class="d-inline-block w-auto btn btn-success fadeing  hasFadeSlider fadeUp">
                            ثبت نام
                        </button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<div class="container">
    <section id="Courses" class="mt-5">
        <div class="row">
            <div class="large-12 columns">
                <div class="owl-carousel owl-carouselProduct owl-theme">
                    <?php foreach ($posts as $post): ?>
                        <div class="item">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title"> <?php echo $post["Specialty"]; ?></h4>

                                    <div class="w-100 d-flex justify-content-center">
                                        <a href="rezerve.php?post-id=<?php echo $post["id"];?>" class="btn btnBuy">رزرو نوبت</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

</div>
<!--<footer id="Demo" class="secFooter">-->
<!--    <div class="row footer">-->
<!--        <div class="col-sm-12 col-md-6 col-lg-4">-->
<!--            <h6 class="headerFooter">-->
<!--                لورم ایپسوم-->
<!--            </h6>-->
<!--            <p class="text-white">-->
<!--                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و-->
<!--                متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و-->
<!--                کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.-->
<!--            </p>-->
<!--            <div class="right-border">-->
<!--                <p class="text-white">مشترک شدن در <span class="text-gold">خبرنامه</span></p>-->
<!--            </div>-->
<!--            <div class="d-flex justify-content-around">-->
<!--                <input type="text" class="form-control inputFooter">-->
<!--                <button class="btn btn-warning Subscrip" > اشتراک</button>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-sm-12 col-md-6 col-lg-4">-->
<!--            <h4 class="headerFooter"> صفحات</h4>-->

<!--            <a class="text-white footerLink" href="#">-->
<!--                خانه-->
<!--            </a>-->

<!--            <a class="text-white footerLink" href="#">-->
<!--                بلاگ-->
<!--            </a>-->

<!--            <a class="text-white footerLink" href="#">-->
<!--                تماس با ما-->
<!--            </a>-->

<!--        </div>-->
<!--        <div class="col-sm-12 col-md-6 col-lg-4">-->
<!--            <h4 class="headerFooter"> ادرس</h4>-->
<!--            <p class="text-white">-->
<!--                آدرس دفتر مرکزی(مشهد):میدان جانباز،طبقه1،واحد3-->
<!--            </p>-->
<!--            <p>-->
<!--                <a class="text-white" href="tel:+985162233893">-->
<!--                    شماره تماس : 6223 - 3893 (051)-->
<!--                </a>-->
<!--            </p>-->
<!--        </div>-->

<!--    </div>-->
<!--</footer>-->

<!-- Scripts  -->
<script src="View/js/bootstrap.min.js"></script>
</body>
</html>