<?php 
   $page_title = "All Pages";
   include_once('header.php'); ?>

<div class="card mt-4">
        <div class="card-body">
          <div class="product-table">
            <div class="table-responsive white-space-nowrap">
              <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    
                    <th>Page Name</th>
                    <th>Short Desc</th>
                  
                    <th>Date</th>
                    <th>Action</th>
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
                          <a href="javascript:;" class="product-title"><?php echo htmlspecialchars($page['title']);?></a>
                       
                        </div>
                      </div>
                    </td>
                   
                    <td><?php echo $page['short_desc'];?></td>
                    
                   
                    <td>
                    <?php echo htmlspecialchars($page['created_at']);?>
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-filter dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu" style="">
                          <li><a class="dropdown-item" target="_blank" href="<?php echo BASE_URL. 'page/' . $page['slug']; ?>">View</a></li>
                          <li><a class="dropdown-item" href="<?php echo BASE_URL. 'admin/edit-page/' . $page['id']; ?>">Edit</a></li>

                          <li><a class="dropdown-item" href="<?php echo BASE_URL. 'admin/remove-page/' . $page['id']; ?>">Delete</a></li>
                        </ul>
                      </div>
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