<?php 
   $page_title = $pageData['title'] ?? 'Add New Page';
   include_once('header.php');
?>


<div class="row">
    <form action="" method="post" class="row">
          <div class="col-12 col-lg-8">
              <div class="card">
                 <div class="card-body">
                   <div class="mb-4">
                      <h5 class="mb-3">Page Title</h5>
                      <input type="text" name="title" value="<?= $pageData['title'] ?? '' ?>" class="form-control" placeholder="write title here....">
                   </div>
                   <div class="mb-4">
                      <h5 class="mb-3">Page URL</h5>
                      <input type="text" name="slug" value="<?= $pageData['slug'] ?? '' ?>" class="form-control" placeholder="write title here....">
                   </div>
                   <div class="mb-4">
                     <h5 class="mb-3">Page Description</h5>
                     <textarea class="form-control" name="description" id="editor" value="" name="content" rows="10" cols="80"><?= $pageData['content'] ?? '' ?></textarea>
                    
                   </div>
                   
                  
                 </div>
              </div>
          </div> 
          <div class="col-12 col-lg-4">
             <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center gap-3">
                    
                    <button type="submit" value="" class="btn btn-outline-primary flex-fill"><i class="bi bi-send me-2"></i> 
                    Publish</button>
                   </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                   <h5 class="mb-3">Status</h5>
                      <div class="row g-3">
                          <div class="col-12">
                            <label for="AddCategory" class="form-label">Page Status</label>
                            <select name ="status" class="form-select" id="AddCategory">
                               <option <?= $pageData['status']==1 ? 'selected' : ''  ?> value="1">Publish</option>
                              <option <?= $pageData['status']==0 ? 'selected' :'' ?> value="0">Draft</option>
                              
                            </select>
                          </div>
                          
                          <div class="mb-4">
                    <h5 class="mb-3">Short Description</h5>
                    <textarea class="form-control" name="short_desc" id="editor" name="content" rows="5" cols="50"><?= $pageData['short_desc'] ?? '' ?></textarea>
                    
                    
                   </div> 
                         
                       
                        </div><!--end row-->
                     </div>
                </div>

              
                 </div>

              </div>                
        </form>      
    </div>
    <script>
        tinymce.init({
            selector: '#editor', // Replace with the textarea's ID
            menubar: true, // Optional: hide the menubar
            plugins: 'lists link image preview', // Optional: add plugins as needed
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        });
    </script>

<?php include_once('footer.php'); ?>