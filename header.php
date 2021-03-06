 
<?php?>
  <head>
    <meta charset="utf-8">
    <title>Seidenberg Website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!--Le HTML5 shim, for IE6-8 support of HTML5 elements 
    [if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    [endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

<div class="navbar navbar-default">
    <div class = "navbar-inner">    
      <div class="container">
     
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        
        <div class="nav-collapse collapse pull-left">
          <div>
          <ul class="nav pull-right">

            <form class="navbar-search pull-right">  
            <input type="text" class="search-query" placeholder="Search">  
          </form>


              <?php wp_list_pages(array('title_li' => '', 'exclude' => '6,11,2,9,4')); ?>
          
           </ul>
       </div>
          <div>
           <ul class="nav">

             <?php wp_list_pages(array('title_li' => '', 'exclude' => '43,48,46')); ?>

          </ul>
         </div>
         </div><!--/.nav-collapse --> 
         </div> 
       </div>
  </div>

