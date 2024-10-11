<?php 
   $page_title = "All Enquiries";
   include_once('header.php'); ?>

<div class="card mt-4">
        <div class="card-body">
          <div class="product-table">
            <div class="table-responsive white-space-nowrap">
              <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>page Name</th>
                  
                    <th>Date</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($pageData as $page): ?>
                  <tr>
                  
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box">
                          <img src="assets/images/orders/01.png" width="70" class="rounded-3" alt="">
                        </div>
                        <div class="product-info">
                          <a href="javascript:;" class="product-title"><?php echo htmlspecialchars($page['name']);?></a>
                       
                        </div>
                      </div>
                    </td>
                   
                    <td><?php echo $page['email'];?></td>
                    <td><?php echo $page['number'];?></td>
                    <td><?php echo $page['enquiry'];?></td>
                    
                   
                    <td>
                    <?php echo htmlspecialchars($page['datetime']);?>
                    </td>
                   
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   
<?php include_once('footer.php');?>