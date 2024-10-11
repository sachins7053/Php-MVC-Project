<?php

namespace App\Controllers;
use App\Models\EnquiryModel;

class EnquiryController extends BaseController {

    private $enquiry;

    public function __construct() {
        $this->enquiry = new EnquiryModel(); // Initialize the model
    }

    public function AllEnquiry() {
        $pageData = $this->enquiry->getEnquiry();
        $this->render('Dashboard/enquiries', ['pageData' => $pageData]);

    }

     public function submitEnquiry(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $page = $_POST['page_name'];

       $query =  $this->enquiry->InsertEnquiry($name,$email,$phone,$page);
        if ($query) {
            header('Location: /skrishna/admin/all-pages');
           }
           
    } 
    }
}
