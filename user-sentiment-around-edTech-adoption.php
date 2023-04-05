<?php 
/*
Template Name: Access to Techonology
*/
get_header();
the_post();
$background =  get_the_post_thumbnail_url();
if($background!=""){
  $background = $background;
}else{
  $background = get_template_directory_uri()."/assets/img/tech.jpg";
}
?>

  <!-- ======= Hero Section ======= -->
  <section id="hero-inner-banner">
    <div class="hero-container">
      <div class="hero-s" >
        <div class="hero-inner" role="listbox">
          <!-- Hero -->
          <div class="carousel-item active" style="background-image: url(<?php echo $background;?>);">
          </div>

        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <div class="container">

      <div class="row no-gutters">
        <div class="col-xl-12 ps-0 ps-lg-8 ">
          <div class="content heading-strip">
            <h1 class="text-center inner-heading">
            User Sentiment around EdTech Adoption
            </h1>
           
          </div><!-- End .content-->
        </div>
      </div>

    </div>
    <!-- =======  Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-xl-12 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <p class="text-left">
              This section explores user sentiment of caregivers towards adoption of technology for learning, along with certain home ecosystem elements such as beliefs and behaviors around children’s education at large, and at the household level.
              </p>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End  Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts graph">
      <div class="container">

        <div class="row no-gutters mt-40">
          <div class="col-lg-6 col-md-6">
            <div class="count-box text-left d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/house1.png" alt="icon" width="50" height="50">
              <h5 >Caregivers who Found 
In-School Education Sufficient</h5>
             
            </div>
            <p class="mt-3">Overall, 33% households believed that in-school education was not sufficient for performing well in studies. Odisha reported the highest proportion (65%).</p>
          </div>

          <div class="col-lg-6 col-md-12 d-md-flex justify-content-end">
			   <div class="tabs">
      <ul class="tab-list">
         <li class="active">
            <a class="tab-control" href="#tab-1">
            State
            </a>
         </li>
         <li>
            <a class="tab-control" href="#tab-2">
            Settlement
            </a>
         </li>
      </ul>
      <div class="tab-panel active" id="tab-1">
          <?php echo get_field('graph1');?>
                     <p class="grhp-p">Proportion of households that believed in-school education was 
sufficient, across states	</p>
      </div>
      <div class="tab-panel" id="tab-2">
         <?php echo get_field('graph2');?>
                      <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
     
   </div>

          </div>
        </div>

        <div class="row no-gutters  mt-40">
          <div class="col-lg-6 col-md-6">
            <div class="count-box text-left d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/app.png" alt="icon" width="50" height="50">
              <h5 >Who Provided At-Home 
Learning Support</h5>
             
            </div>
            <p class="mt-3">70% of children in the surveyed households received some learning support from household members. A higher proportion of children in urban households (77%) received learning support compared to children in rural households (69%) </p>
          </div>

          <div class="col-lg-6 col-md-12 d-md-flex justify-content-end">
			    <div class="tabs">
      <ul class="tab-list">
         <li class="active">
            <a class="tab-control" href="#tab-3">
            Settlement
            </a>
         </li>
         <li>
            <a class="tab-control" href="#tab-4">
            Grade
            </a>
         </li>
		  <li>
            <a class="tab-control" href="#tab-5">
            Gender
            </a>
         </li>
      </ul>
      <div class="tab-panel active" id="tab-3">
          <?php echo get_field('graph3');?>
                     <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
      <div class="tab-panel" id="tab-4">
       <?php echo get_field('graph4');?>
                      <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
					<div class="tab-panel" id="tab-5">
       <?php echo get_field('graph5');?>
                      <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
					
     
   </div>

          </div>
        </div>

        <div class="row no-gutters  mt-40">
          <div class="col-lg-6 col-md-6">
            <div class="count-box text-left d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/internet.png" alt="icon" width="50" height="50">
              <h5 ><?php echo get_field('section_title_3');?></h5>
             
            </div>
            <p class="mt-3"><?php echo get_field('section_text_3');?></p>
          </div>

          <div class="col-lg-6 col-md-12 d-md-flex justify-content-end">
			  <div class="tabs">
      <ul class="tab-list">
         <li class="active">
            <a class="tab-control" href="#tab-7">
             Settlement
            </a>
         </li>
         <li>
            <a class="tab-control" href="#tab-8">
           Intermittent Access
            </a>
		  </li>
      </ul>
      <div class="tab-panel active" id="tab-7">
          <?php echo get_field('graph7');?>
                     <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
      <div class="tab-panel" id="tab-8">
   <?php echo get_field('graph8');?>
                     <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
	
     
   </div>
          </div>
        </div>

        <div class="row no-gutters  mt-40">
          <div class="col-lg-6 col-md-6">
            <div class="count-box text-left d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/app1.png" alt="icon" width="50" height="50">
              <h5 ><?php echo get_field('section_title_4');?></h5>
             
            </div>
            <p class="mt-3"><?php echo get_field('section_text_4');?></p>
          </div>

          <div class="col-lg-6 col-md-12 d-md-flex justify-content-end">
			    <div class="tabs">
      <ul class="tab-list">
         <li class="active">
            <a class="tab-control" href="#tab-9">
             Settlement
            </a>
         </li>
         <li>
            <a class="tab-control" href="#tab-10">
          Grade
            </a>
		  </li>
		   <li>
            <a class="tab-control" href="#tab-12">
          Gender
            </a>
		  </li>
      </ul>
      <div class="tab-panel active" id="tab-9">
          <?php echo get_field('graph9');?>
                     <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
      <div class="tab-panel" id="tab-10">
   <?php echo get_field('graph10');?>
                     <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
	<div class="tab-panel" id="tab-11">
  <?php echo get_field('graph11');?>
                      <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
     
   </div>
      
          </div>
        </div>

        <div class="row no-gutters  mt-40">
          <div class="col-lg-6 col-md-6">
            <div class="count-box text-left d-flex align-items-center">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/save-time.png" alt="icon" width="50" height="50">
              <h5 ><?php echo get_field('section_title_4');?></h5>
             
            </div>
            <p class="mt-3"><?php echo get_field('section_text_4');?></p>
          </div>

          <div class="col-lg-6 col-md-12 d-md-flex justify-content-end">
			  <div class="tabs">
      <ul class="tab-list">
         <li class="active">
            <a class="tab-control" href="#tab-12">
             Settlement
            </a>
         </li>
         <li>
            <a class="tab-control" href="#tab-13">
          Avg Availability
            </a>
		  </li>
		   <li>
            <a class="tab-control" href="#tab-14">
          Gender
            </a>
		  </li>
      </ul>
      <div class="tab-panel active" id="tab-12">
          <?php echo get_field('graph12');?>
                     <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
      <div class="tab-panel" id="tab-13">
   <?php echo get_field('graph13');?>
                     <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
	<div class="tab-panel" id="tab-14">
  <?php echo get_field('graph14');?>
                      <p class="grhp-p">Accessibility of electricity within urban and rural households</p>
      </div>
     
   </div>
            
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->
   <!-- ======= Counts Section ======= -->
   <section id="theme" class="counts graph">
    <div class="container">
      <div class="section-title">
        <h2 class="title-2 text-left"><?php echo get_field('section_title_footer_area');?>
        </h2>
      </div>
      <div class="row no-gutters mt-3">
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box text-center">
            
            <h2 class="d-flex justify-content-center"><span data-purecounter-start="0" data-purecounter-end="<?php echo get_field('value_1');?>" data-purecounter-duration="1" class="purecounter"></span>%</h2>
           <p><?php echo get_field('value_1_text');?></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box text-center">
            <h2 class="d-flex justify-content-center"><span data-purecounter-start="0" data-purecounter-end="<?php echo get_field('value_2');?>" data-purecounter-duration="1" class="purecounter"></span>%</h2>
           <p><?php echo get_field('value_2_text');?></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box text-center">
            <h2 class="d-flex justify-content-center"><span data-purecounter-start="0" data-purecounter-end="<?php echo get_field('value_3');?>" data-purecounter-duration="1" class="purecounter"></span>%</h2>
            <p><?php echo get_field('value_3_text');?></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box text-center">
            <h2 class="d-flex justify-content-center"><span data-purecounter-start="0" data-purecounter-end="<?php echo get_field('value_4');?>" data-purecounter-duration="1" class="purecounter"></span>%</h2>
            <p><?php echo get_field('value_4_text');?> </p>
          </div>
        </div>  
      </div>

    </div>
  </section><!-- End Counts Section -->
 <!-- ======= Insights  Section ======= -->
<div class="container">
  <div class="row">
    <div class="section-title">
      <h2 class="title-2 text-left">Explore Other Themes
      </h2>
    </div>
   <div class="explore text-center">
    <a href="" class="ex-cta">Access to Technology</a>
    <a href="" class="ex-cta1">User Sentiment around EdTech Adoption</a>
    <a href="" class="ex-cta" style="padding: 10px 40px;">EdTech Usage</a>
   </div>
  </div>
</div>

  </main><!-- End #main -->

 <?php get_footer();?>