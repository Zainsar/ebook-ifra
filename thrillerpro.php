<?php


 
  include('header.php');

  include('book_con.php');  


  ?>



 <!--================ Start Products fatch through database =================-->
 <section class="about_area section_gap">
      <div class="container">
        <?php
          $fetch="SELECT * from bookpro";
          $query=mysqli_query($book_con,$fetch);
          if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
        ?>

        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="<?php echo 'products_images/' . $row['pro_img'] ?>;" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Title:  <?php echo $row['pro_title'];?></h4>
                <h5>Author:  <?php echo $row['pro_author'];?></h5>
               <h5>Description:  <?php echo $row['pro_des'];?></h5>
               <h5>Price:  <?php echo $row['pro_price'];?></h5>
                

                <a name="add" class="primary-btn" href="#">
                  
                  Add to cart  <i class="fa-solid fa-cart-shopping"></i>
                </a>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      }
    }
      ?>
    </section>
    <!--================ End products fetch =================-->







<!-- start footer area -->
<?php
  include('footer.php');
  ?>
  <!--================ End footer Area  =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/owl-carousel-thumb.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/theme.js"></script>
  