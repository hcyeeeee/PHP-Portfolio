<style>
.card-img-top {
    /* flex-shrink: 0; */
    max-width: 100%;
    max-height: 100%;
}

#pic:hover {
    background: white;
    z-index: 10;
}

#picc {
    z-index: -10;
}

/* Footer */



/* try */
.image {
    position: relative;
    margin: 10px;
    padding: auto;
    width: 300px;
    height: 300px;
}

.mask {
    position: absolute;
    background: white;
    width: 300px;
    height: 300px;
    left: 0;
    top: 0;
    opacity: 0;
    color: black;
    font-size: 20px;
    text-align: center;
}

.mask:hover {
    transition: 1.5s;
    opacity: 1;
}

.carousel-item {
    height: 650px;
}

.my-5 {
    box-sizing: border-box;
}

* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

.header {
    text-align: center;
    padding: 32px;
}

.row {
    display: -ms-flexbox;
    /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap;
    /* IE10 */
    flex-wrap: wrap;
    padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
    -ms-flex: 25%;
    /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
    width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
}




</style>
<br><br><br><br>


<?php
$rows=$Type->all();
foreach($rows as $row){
       
    

                    ?>
<div class="container" id="project">
    

                    <!-- 2 -->

                    <br> <br>
                    <div class="row">
                        <div class="col col-6 " style="font-weight:bold">
                            <!-- <h3> Web Design</h3> -->
                            <h3><?=$row['name']?></h3>
                        </div>

                        <div class="col col-6 " style=" text-align:right">
                        <?=$row['intro']?><br>
                        </div>

                        <br> <br>
                        <br> <br>
                    </div>

                    <?php
$AAA=$Work->all();
foreach($AAA as $aaa){
       
    

                    ?>
                    <div class="container">
                        <div id="portfo" class="py">
                            <div class="row ">
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                    <div class="image">
                                        <img src="./img/<?=$aaa['img']?>" style="width: 300px;">
                                        <div class="mask">
                                            <div class="my-5"><?=$aaa['name']?><br>
                                            <?=$aaa['content']?>

                                            <a href="<?=$aaa['link']?>" target="_blank"><i
                                                    class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                   
                   
        <div>
            <br>
            <br>
            <hr>
            <br>
            <br>
        </div>
<!--  -->


<?php
}
    

                    ?>   
<?php
}
    

                    ?>                  

</body>

                            </html>


                            <script>
                            // Get the modal
                            var modal = document.getElementById("myModal");

                            // Get the image and insert it inside the modal - use its "alt" text as a caption
                            var img = document.getElementById("myImg");
                            var modalImg = document.getElementById("img01");

                            var captionText = document.getElementById("caption");
                            img.onclick = function() {
                                modal.style.display = "block";
                                modalImg.src = this.src;
                                captionText.innerHTML = this.alt;
                            }

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                                modal.style.display = "none";
                            }


                            $(window).load(function() {
                                // The slider being synced must be initialized first
                                $('#carousel').flexslider({
                                    animation: "slide",
                                    controlNav: false,
                                    animationLoop: false,
                                    slideshow: false,
                                    itemWidth: 210,
                                    itemMargin: 5,
                                    asNavFor: '#slider'
                                });

                                $('#slider').flexslider({
                                    animation: "slide",
                                    controlNav: false,
                                    animationLoop: false,
                                    slideshow: false,
                                    sync: "#carousel"
                                });
                            });
                            </script>