
<?php
include "connection.php";
?>


<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<title>Blogs</title>
<?php
    include "header.php";
?>

<style>
.scroll-to-top{
  bottom: 20px;
  right:20px;
  width:50px;
  height:50px!important;   
}
.main-footer:before {
    background: #00000085!important;
}
    .main-footer .widgets-section {
        position: relative;
        padding: 100px 0 20px;
         margin-top: 0px!important; 
    }
</style>
    
    <!--Page Title-->
     <?php
          $sqlqry= mysqli_query($con,"select * from  blog_banner_image where id=1 ");
          $tota=mysqli_fetch_assoc($sqlqry);
          {
        ?>
    <section class="page-title" style="background-image: url(cover_banner/<?php echo $tota['banner_image'];?>);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- <div class="title-box">
                    <h1>News & Article</h1>
                    <span class="title">The Interior speak for themselves</span>
                </div> -->
            </div>
        </div>
    </section>
    <?php 
        } 
    ?>
    <!--End Page Title-->

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="row">
                <!-- News Block -->

                <?php
                  $sql= mysqli_query($con,"select * from  blog ");
                  while($total=mysqli_fetch_assoc($sql))
                  {
               ?>

                <div class="news-block-two col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="blogimage/<?php echo $total['image'];?>" alt=""></figure>
                            <div class="overlay-box"><a href="blogdetails.php?crtid=<?php echo $total['id']; ?>"><i class="fa fa-link"></i></a></div>
                        </div>
                        <div class="caption-box">
                            <div class="inner">
                                <h3><a href="blogdetails.php?crtid=<?php echo $total['id']; ?>"><?php echo $total['name'];?></a></h3>
                                
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

                
            </div>

            <!--Post Share Options-->
            <!-- <div class="styled-pagination">
                <ul class="clearfix">
                    <li class="prev-post"><a href="javascript:void(0);"><span class="fa fa-long-arrow-left"></span> Prev</a></li>
                    <li><a href="javascript:void(0);">1</a></li>
                    <li class="active"><a href="javascript:void(0);">2</a></li>
                    <li><a href="javascript:void(0);">3</a></li>
                    <li class="next-post"><a href="javascript:void(0);"> Next <span class="fa fa-long-arrow-right"></span> </a></li>
                </ul>
            </div> -->
        </div>
    </section>
    <!--End Blog Section -->

    <?php
        include "footer.php";
    ?>