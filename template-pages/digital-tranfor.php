<?php
/* Template Name: Chuyển đổi số */
?>
<?php get_header(); ?>
<?php 
  // Banner
  $title_main_block_one = get_field('title_main_block_one');
  $image_block_one = get_field('image_block_one');
  //Khái niệm chuyển đổi số
  $title_main_block_two = get_field('title_main_block_two');
  $image_background_block_two = get_field('image_background_block_two');
  $image_content_block_two = get_field('image_content_block_two');
  $content_block_two = get_field('content_block_two');
  //Đối tượng hướng đến và lợi ích
  $title_main_block_three = get_field('title_main_block_three');
  $content_block_three = get_field('content_block_three');
  $title_sub_block_three = get_field('title_sub_block_three');
  //Quy trình thực hiện
  $title_main_block_four = get_field('title_main_block_four');
  $image_background_block_four = get_field('image_background_block_four');
  //5 trụ Cột
  $title_main_block_five = get_field('title_main_block_five');
  //Bảng giá
  $title_main_block_six = get_field('title_main_block_six');
  $content_sub_block_six = get_field('content_sub_block_six');
  //Đối tác 
  $title_main_block_seven = get_field('title_main_block_seven');
  $title_sub_block_seven = get_field('title_sub_block_seven');
  //Liên hệ
  $title_website = get_field('title_website');
  $address = get_field('address');
  $phone_number = get_field('phone_number');
  $email = get_field('email');
  $map_contact = get_field('map_contact');
  //form
  if (isset($_POST['ispost'])) {

    $new_post = array(
        'post_title' => $_POST['contact_email_phone'],
        'post_content' => $_POST['contact_mess'],
        'post_status' => 'pending',
        'post_name' => sanitize_title($_POST['contact_email_phone']),
        'post_type' => 'list_contact',
    );

    $pid = wp_insert_post($new_post);
}
?>
    <!-- ==============Banner=============== -->
    <section id="banner" class="flex align-center relative">
      <div class="text-banner">
        <h1 class="title-banner t-center"> <?php echo $title_main_block_one ?> </h1>
        <?php if (have_rows('des_block_one')) : ?>
        <ul class="text-list remove-dot bold">
        <?php while (have_rows('des_block_one')) : the_row(); 
          $content_block_one = get_sub_field('content_block_one');
        ?>
          <li>
            <span class="ls-icon ls-check"></span>
            <?php echo $content_block_one ?>
          </li>
        <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="banner-image">
        <img class="banner-img" src="<?php echo $image_block_one['url']?>" alt="<?php echo $image_block_one['alt'] ?>" />
      </div>
      <div class="custom-shape-divider-top-1599473026">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
      </div>
    </section>
    <!-- End Banner -->
    <!-- ======================================================= -->
    <!-- ================Khái niệm chuyển đổi số================ -->
    <section id="digital-tranfor">
      <h2 class="title-heading t-center"> <?php echo $title_main_block_two ?> </h2>
      <div class="line-heading flex justify-center align-center">
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
      </div>
      <div class="gap-el"></div>
      <div class="content-digital-tranfor relative" style="background-image: url('<?php echo $image_background_block_two['url']; ?>')">
        <div class="digital-tranfor-img flex justify-center">
          <img src="<?php echo $image_content_block_two['url'] ?>" alt="<?php echo $image_content_block_two['alt'] ?>" />
        </div>
        <div
          class="digital-tranfor-text container p-md flex justify-center t-center c-white"
        >
          Chuyển đổi số (Digital Transformation) là khái niệm ra đời trong thời
          đại internet bùng nổ, đang trở nên phổ biến trong thời gian gần đây,
          mô tả việc ứng dụng công nghệ (digitalize) vào tất cả các khía cạnh
          của doanh nghiệp. Nếu đạt hiệu quả, hoạt động này sẽ thay đổi toàn
          diện (transformation) cách thức mà một doanh nghiệp hoạt động, tăng
          hiệu quả hợp tác, tối ưu hóa hiệu suất làm việc và mang lại giá trị
          cho khách hàng.
        </div>
      </div>
      <div class="gap-block"></div>
    </section>
    <!-- =============Kết thúc khái niệm chuyển đổi số=============== -->
    <!-- ========================================================== -->
    <!-- =============Đối tượng hướng đến và lợi ích================== -->
    <section id="object-benefit">
      <h2 class="title-heading t-center"> <?php echo $title_main_block_three ?> </h2>
      <div class="line-heading flex justify-center align-center">
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
      </div>
      <div class="gap-el"></div>
      <div class="object-benefit-content container">
        <p class="object-benefit-text t-center">
        <?php echo $content_block_three ?>
        </p>
        <div class="object-target">
          <h3 class="t-center text-color">
          <?php echo $title_sub_block_three ?>
          </h3>
          <?php if (have_rows('des_block_three')) : ?>
          <ul class="object-target-list remove-dot c-white relative">
          <?php while (have_rows('des_block_three')) : the_row();
                        $target_block_three = get_sub_field('target_block_three');
                    ?>
            <li class="object-target-item absolute flex align-center justify-center t-center bold"> <?php echo $target_block_three ?> </li>
          <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
      <div class="gap-block"></div>
    </section>
    <!-- Kết Thúc đối tượng hướng đến và lợi ích -->
    <!-- ======================================================== -->
    <!-- ===============QUI TRÌNH THỰC HIỆN================== -->
    <section id="process">
      <h2 class="title-heading t-center"> <?php echo $title_main_block_four ?> </h2>
      <div class="line-heading flex justify-center align-center">
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
      </div>
      <div class="gap-el"></div>
      <div class="container wrapper-process-steps relative" style="background-image: url('<?php echo $image_background_block_four['url']; ?>')">
      <?php if (have_rows('des_block_four')) : ?>
        <ul class="process-steps-list remove-dot flex">
        <?php while (have_rows('des_block_four')) : the_row();
            $avatar_block_four = get_sub_field('avatar_block_four');
            $title_sub_block_four = get_sub_field('title_sub_block_four');
            $content_block_four = get_sub_field('content_block_four');
        ?>
          <li class="process-steps-item">
            <div class="avatar-step box-shadow flex justify-center align-center relative">
              <img src="<?php echo $avatar_block_four['url'] ?>" alt="<?php echo $avatar_block_four['alt'] ?>">
            </div>
            <div class="gap-el"></div>
            <h2 class="title-step t-center"> <?php echo $title_sub_block_four ?> </h2>
            <div class="gap-el"></div>
            <div class="content-step box-shadow t-center p-sm bg-white bold"><?php echo $content_block_four ?></div>
          </li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
      </div>
      <div class="gap-block"></div>
    </section>
    <!-- End Qui trình thực hiện -->
    <!-- ===================================================== -->
    <!-- ==========5 Trụ Cột Chuyển Đổi Số=========== -->
    <section id="five-main">
      <h2 class="title-heading t-center"> <?php echo $title_main_block_five ?> </h2>
      <div class="line-heading flex justify-center align-center">
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
      </div>
      <div class="gap-el"></div>
      <div class="wrapper-five-main container t-center">
        <h2 class="top-five-main t-center"> <?php echo $title_main_block_five ?></h2>
        <div class="gap-block"></div>
        <div class="bottom-right-main">
          <?php if (have_rows('des_block_five')) : ?>
          <ul class="five-main-list remove-dot flex justify-center c-white">
          <?php while (have_rows('des_block_five')) : the_row();
              $content_block_five = get_sub_field('content_block_five');
          ?>
            <li class="five-main-item mr-md bold relative">
              <?php echo $content_block_five ?>
            </li>
          <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
      <div class="gap-block"></div>
    </section>
    <!-- End 5 Trụ Cột Chuyển Đổi Số -->
    <!-- =================Bảng Giá=================== -->
    <!-- <input type="checkbox" id="more"> -->
    <section id="price-table">
      <h2 class="title-heading t-center"> <?php echo $title_main_block_six ?> </h2>
      <p class="t-center"> <?php echo $content_sub_block_six ?> </p>
      <div class="line-heading flex justify-center align-center">
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
      </div>
      <div class="gap-block"></div>
      <ul class="price-table-list container grid grid-3">
      <?php if (have_rows('des_block_six')) : ?>
        <?php while (have_rows('des_block_six')) : the_row();
            $avatar_block_six = get_sub_field('avatar_block_six');
            $title_main_in_item = get_sub_field('title_main_in_item');
            $title_sub_in_item = get_sub_field('title_sub_in_item');
            $price_in_item = get_sub_field('price_in_item');
            $button_in_item = get_sub_field('button_in_item');
        ?>
        <li class="price-table-item flex flex-col align-center box-shadow relative p-md">
          <a href="">
            <img class="price-table-avatar img absolute" src="<?php echo $avatar_block_six['url'] ?>" alt="<?php echo $avatar_block_six['alt'] ?>">
          </a>
          <div class="price-table-info js-more">
            <h5 class="title-main t-center"> <?php echo $title_main_in_item ?> </h5>
            <p class="info-sub t-center"><?php echo $title_sub_in_item ?></p>
            <?php if (have_rows('des_in_item')) : ?>
            <ul class="price-table-content-list remove-dot mb-md">
            <?php while (have_rows('des_in_item')) : the_row(); 
                $content_in_item = get_sub_field('content_in_item');
            ?>
              <li class="price-table-content-item relative"><?php echo $content_in_item ?></li>
            <?php endwhile; ?>
            </ul>
            <?php endif; ?>
            <div class="t-center">
            <p class="price-basic bold"> <?php echo $price_in_item ?> </p>
            <?php if (have_rows('des_price_in_item')) : ?>
            <?php while (have_rows('des_price_in_item')) : the_row(); 
                $content_des_price = get_sub_field('content_des_price');
            ?>
              <p><?php echo $content_des_price ?> </p>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
          <!-- <div class="gap-el"></div> -->
          <label class="js-btn-more" for="more">
            <span> <?php echo $button_in_item?></span>
            <span class="ls-icon ls-arrow_right"></span>
          </label>
        </li>
       <?php endwhile; ?>
      <?php endif; ?> 
      </ul>
      <div class="gap-block"></div>
    </section>
    <!-- End Bảng Giá -->
    <!-- ====================================================== -->
    <!-- =================Đối tác Logsik===================== -->
    <section id="customer" class="relative">
      <h2 class="title-heading t-center"> <?php echo $title_main_block_seven ?> </h2>
      <p class="t-center"> <?php echo $title_sub_block_seven ?> </p>
      <div class="line-heading flex justify-center align-center">
        <span class="circle"></span>
        <span class="circle"></span>
        <span class="circle"></span>
      </div>
      <div class="gap-el"></div>
      <?php if (have_rows('des_block_seven')) : ?>
      <ul class="customer-list container grid grid-5">
      <?php while (have_rows('des_block_seven')) : the_row();
          $avatar_customer_block_seven = get_sub_field('avatar_customer_block_seven');
      ?>
        <li class="customer-item flex align-center justify-center">
          <img class="customer-img img" src="<?php echo $avatar_customer_block_seven['url'] ?>" alt="<?php echo $avatar_customer_block_seven['alt'] ?>">
        </li>
      <?php endwhile; ?>
      </ul>
      <?php endif; ?>
      <div class="gap-el"></div>
      <div class="custom-shape-divider-top-1599473026">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
        </svg>
      </div>
      <div class="gap-block"></div>
    </section>
    <!-- End đối tác -->
    <!-- ============================================ -->
    <!-- ================Liên Hệ======================= -->
    <section id="contact">
      <div class="gap-block"></div>
      <div class="wrapper-contact container grid grid-2">
        <div class="contact-info">
          <h2 class="title-heading t-center"> <?php echo $title_website ?> </h2>
          <div class="line-heading flex justify-center align-center">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
          </div>
          <div class="gap-el"></div>
          <ul class="contact-list remove-dot">
            <li class="contact-item">
              <span class="ls-icon ls-location_on mr-sm"></span>
              <span><?php echo $address ?></span>
            </li>
            <li class="contact-item">
              <span class="ls-icon ls-call mr-sm"></span>
              <span><?php echo $phone_number ?></span>
            </li>
            <li class="contact-item">
              <span class="ls-icon ls-email mr-sm"></span>
              <span><?php echo $email ?></span>
            </li>
          </ul>
          <div class="gap-el"></div>
          <p>
            <?php echo $map_contact ?>
          </p>
        </div>
        <div class="suport">
          <h2 class="title-heading t-center">tư vấn</h2>
          <div class="line-heading flex justify-center align-center">
            <span class="circle"></span>
            <span class="circle"></span>
            <span class="circle"></span>
          </div>
          <div class="gap-el"></div>
          <form action="" class="flex flex-col" name="form" method="post" enctype="multipart/form-data">
            <input type="hidden" name="ispost" value="1" />
            <input type="text" class="box-shadow input js-check-valid" name="contact_name" placeholder="Họ và tên">
            <input class="input box-shadow js-check-valid" name="contact_email_phone" placeholder="Email hoặc số điện thoại - Bắt buộc">
            <textarea class="box-shadow input js-check-valid" name="contact_mess" cols="30" rows="10" placeholder="Nội dung cần tư vấn"></textarea>
            <input type="hidden" name="add_new_post" value="post" />
            <?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
            <button class="btn btn-light p-md t-center" type="submit" id="send" name="submitpost">
              Gửi đi
              <span class="ls-icon ls-paper-plane"></span>
            </button>
            <i id="mess" style="opacity:0;" class="c-main"></i>
          </form>

        </div>
      </div>
      <div class="gap-block"></div>
    </section>
    <?php wp_footer(); ?>
