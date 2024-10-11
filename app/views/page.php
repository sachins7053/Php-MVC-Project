<?php include 'header.php'; ?>

<div class="banner">
<div class="wrap-1">
<div class="section d-flex">
    <div class="imfo col-6 col-p-12">
        
<h2><?php echo htmlspecialchars($title); ?></h2>

<!-- <ul>
<li>No Hidden Charges</li>
<li>Lowest Price Guarantee</li>
<li>Quick and Hassle-Free Process</li>
<li>Free Expert Assestance For Lifetime</li>
</ul> -->
<?php echo $short_desc ?>
<div class="ratting ">
    <div class="col-6">
    <ol>
        <li>Google Assestance Services  </li>
    </ol> </div>
    <div class="col-6">
    <span>4.9 <div class="star"><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i><i class="fa-solid fa-star" aria-hidden="true"></i></div></span>
    </div>
</div>
    </div>
    <div class="form-wrap-1">
    <div class="form-pvt col-6 col-p-12">
<h2>Get Exper Consultation</h2>
        <form action="<?php echo  BASE_URL . 'enquiry';?>" method="post">
        <input type="text" placeholder="Name" name="name" required="">
        <input type="email" name="email" placeholder="Email" class="mt-3" required="">
        <input type="tel" name="phone" placeholder="Number" class="mt-3" required="">  
        <input class="hide-content" type="text" value="<?php echo $title;?>" name="page_name">
        <button id="btn-pvt" class="mt-4">Request A CallBack</button>
        </form>

    </div>
    </div>
</div>
</div>
</div>


   
    <div class="laws-sk">

        <?php echo $content; ?><!-- Display page content -->
    </div>
   
    <?php include 'footer.php'; ?>
