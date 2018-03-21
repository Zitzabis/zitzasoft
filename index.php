<!DOCTYPE html>
<html>
    <?php
        include_once("components/head.php");
        include_once("components/scripts.php");
    ?>
    <body>
        <?php include_once("components/navBarIcon.php"); ?>
        <main>
            <div class="pageContent centerContent"> 
                <?php include_once("components/nav.php"); ?>
                <div>
                    <div style="position:relative">
                        <div class="text-center centerContent" style="position:absolute">
                            <img src="img/text.svg" onclick="logo()" class="circleSpin" style="width: 100%">
                        </div>
                        <div class="logo text-center">
                            <a href="#">
                                <img src="img/stephen.jpg" class="img-thumbnail rounded-circle logoImage" onclick="logo()" width="220">
                            </a>
                        </div>
                    </div>
                    <div class="logoCaption">
                        <h1 class="text-center">
                            <div>
                                Stephen Floyd
                            </div>
                        </h1>
                        <h3 class="text-center">
                            <div>
                                Web and Software Developer
                            </div>
                        </h3>
                    </div>
                </div>
            </div>
            <?php include_once("components/granim.php"); ?>
        </main>
        <?php include_once("components/sidebar.php"); ?>
    </body>

    <?php include_once("components/granim.php"); ?>
</html>