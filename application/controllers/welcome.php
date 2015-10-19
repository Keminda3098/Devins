<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {

        $this->load->helper('form');
        if ($this->input->post('ids') == "formss") {
            $ID = $this->input->post('email');
            $this->getDatabaseToAddOrder($ID);
        } else if ($this->input->get('page') == "promotionalproducts") {


            $this->load->model('urldbfinder');
            $ID = "Promotional Products";
            $data['query'] = $this->urldbfinder->getpromotionalproducts($ID);
            $this->load->view('common/header');
            $this->load->view('pages/SearchResult', $data
            );
            $this->load->view('common/footer');
        }

//---------------------piumi------------------------------------------------------//
        else if ($this->input->post('ids') == "oder_display") {
            $input = $this->input->post('idss');
            $input1 = $this->input->post('price');
            $input2 = $this->input->post('txtQty');
            $avail = $this->input->post('Availability');
            $total = $input1 * $input2;
            $this->getDatabaseValues($input, $input2, $total, $avail);
        } else if ($this->input->post('Display') == "order_display") {
            $input = $this->input->post('name');
            $input1 = $this->input->post('cat');
            $input2 = $this->input->post('sub');
            $input3 = $this->input->post('price');
            $input4 = $this->input->post('car');
            $input5 = $this->input->post('total');
            $date = $this->input->post('orderdDate');
            $PID = $this->input->post('pID');
            $Avail = $this->input->post('avail');
            $CusID = $this->input->post('User');
            $this->insert_to_db($input, $input1, $input2, $input3, $input4, $input5, $date, $PID, $Avail, $CusID);
        } else if ($this->input->post('Display') == "Reject_Order") {
            //echo "<script type='text/javascript'>window.alert('Order rejected successfully !');</script>";
            $this->getDatabaseToView();
        } else if ($this->input->get('page') == "additinalLogIn") {
            $this->getLogged();
        } else if ($this->input->get('page') == "ViewforOrder") {

            //$this -> getNonAcceptedOrders();

            $input = $this->input->get('ID');
            $this->getDatabaseToAddOrder($input);

            if ($this->input->post('submit_Add') == 'product') {
                $this->addFeedback();
            }
        } else if ($this->input->post('submit_Add') == 'product') {
            $this->addFeedback();
        } else if ($this->input->get('page') == "viewPromotional") {

            $this->viewPromotionalProducts();
        } else if ($this->input->get('page') == "viewAdvertising") {

            $this->viewAdvertisingProducts();
        } else if ($this->input->get('page') == "viewHotelProducts") {

            $this->viewHotelProducts();
        } else if ($this->input->get('page') == "viewFashion") {

            $this->viewFashionProducts();
        } else if ($this->input->post('Accept') == "order") {

            $ID = $this->input->post('ID');
            $User = $this->input->post('user');
            $this->sendMailToAccept($User, $ID);
        } else if ($this->input->post('Reject') == "order") {

            $ID = $this->input->post('ID');
            $User = $this->input->post('user');
            $reason = $this->input->post('r');

            if ($reason == null) {
                //echo "<script type='text/javascript'>window.alert('null');</script>";
            } else {
                //echo "<script type='text/javascript'>window.alert(' not null');</script>";
                $this->sendMailToReject($User, $ID, $reason);
            }
            //echo "<script type='text/javascript'>window.alert(' not null');</script>";
            //$this->sendMailToReject($User,$ID);
        } else if ($this->input->post('Order') == "Orders") {

            $this->getNonAcceptedOrders();
        } else if ($this->input->post('order') == "Accept") {

            $this->getAcceptedOrders();
        } else if ($this->input->post('order') == "NonAccept") {

            $this->getNonAcceptedOrders();
        } else if ($this->input->post('change') == "Reject") {

            $this->getRejectedOrders();
        } else if ($this->input->post('change') == "cancellationRequests") {

            $this->getCancellationRequests();
        } else if ($this->input->post('OnlineS') == "OnlineStore") {

            $this->getDatabaseToView();
        } else if ($this->input->post('Complete') == "Complete") {
            $ID = $this->input->post('ID');
            $User = $this->input->post('user');
            $this->sendMailToComplete($User, $ID);
        } else if ($this->input->get('page') == "ViewMyHistory") {
            $this->getDataToViewHistory();
        } else if ($this->input->post('orderCancellation') == "cancelRequest") {

            $this->updateCancelRequestStatus($this->input->post('orderID'));
        } else if ($this->input->post('Accept') == "cancellation") {

            $rowId = $this->input->post('ID');
            $cusID = $this->input->post('user');

            $this->sendMailToAcceptCancellation($cusID, $rowId);
        } else if ($this->input->post('Reject') == "cancellation") {

            $rowId = $this->input->post('ID');
            $cusID = $this->input->post('user');

            $this->sendMailToRejectCancellation($cusID, $rowId);
        } else if ($this->input->get('page') == "ViewMyCart") {
            $this->getDataToViewMyCart();
        } else if ($this->input->get('page') == "ViewMyWishList") {
            $this->getDataToViewMyWishList();
        } else if ($this->input->post('wish') == "Mylist") {
            $productId = $this->input->post('p_ID');
            $this->insertToWishList($productId);
            //redirect('http://localhost/public_html/index.php?page=online');
        } else if ($this->input->post('wish') == "remove") {
            $WLID = $this->input->post('WLID');
            $this->removeFromWishList($WLID);
            //redirect('http://localhost/public_html/index.php?page=online');
        } else if ($this->input->post('multiple') == "Mylist") {
            $productList = $this->input->post('numberOfItems');
            $this->insertMultipleToWishList($productList);
        } else if ($this->input->get('page') == "myOrderPay") {
            session_start();
            if (isset($_SESSION['myOrderPay'])) {
                $this->load->model('get_db');
                $id = $_SESSION['myOrderPay'];
                $this->get_db->updatePaid($id, 'Paid');
                unset($_SESSION['myOrderPay']);
                redirect('http://localhost/Devins/index.php?page=ViewMyCart');
            } else if (isset($_SESSION['PayAll'])) {
                $this->load->model('get_db');
                $this->get_db->updateAllPaid($this->session->userdata('username'));
                unset($_SESSION['PayAll']);
                redirect('http://localhost/Devins/index.php?page=ViewMyCart');
            } else {
                //redirect('http://localhost/Devins/index.php?page='.$this->session->userdata('myOrderPay'));
            }
        } else if ($this->input->post('pay') == "payPal") {
            $upload = $this->input->post('upload');
            $return = $this->input->post('return');
            $cmd = $this->input->post('cmd');
            $business = $this->input->post('business');
            $item_name_1 = $this->input->post('item_name_1');
            $item_number_1 = $this->input->post('item_number_1');
            $amount = $this->input->post('amount_1'); //amount in LKR
            $quantity_1 = $this->input->post('quantity_1');

            $amount_1 = $this->converCurrency($amount); //converting LKR to USD

            session_start();
            unset($_SESSION['myOrderPay']);
            $_SESSION['myOrderPay'] = $this->input->post('orderID');
            $Data = array('upload' => $upload,
                'return' => $return,
                'cmd' => $cmd,
                'business' => $business,
                'item_name_1' => $item_name_1,
                'item_number_1' => $item_number_1,
                'amount_1' => $amount_1,
                'quantity_1' => $quantity_1);


            $query_string = http_build_query($Data);
            $posturl = $this->config->item('posturl');

            header('Location: ' . $posturl . '?' . $query_string);
        } else if ($this->input->post('pay') == "ForAll") {
            session_start();
            $user = $this->session->userdata('username');
            $this->payForAll($user);
        }

///////////////////////////////////////////////////////////////////////////////////////////
        else {
            if ($this->input->get('page') == "online") {
                $this->getDatabaseToView();
            }
            if ($this->input->get('page') == "logout") {

                $this->load->model('UserLogModel');
                $loggedouttime = date('Y-m-d H:i:s');
                $this->session->set_userdata('lgouttime', $loggedouttime);
                $dataas = $this->session->all_userdata();

                $this->session->sess_destroy();
                $this->getAllDatabaseToView();
            }

            if ($this->input->get('page') == "updesign") {
                $this->getDatabaseToView();
            } else if ($this->input->get('page') == "promotion") {

                $this->addProduct1();
            } else if ($this->input->get('page') == "signin") {
                $this->load->view('common/header');
                $this->load->view('pages/signinform');
                $this->load->view('common/footer');
            } else if ($this->input->get('page') == "signup") {
                $this->load->view('common/header');
                $this->load->view('pages/signupform');
                $this->load->view('common/footer');
            } else if ($this->input->get('page') == "productinfo") {
                $this->getproductdb();
            } else if ($this->input->get('page') == "addproductinfo") {
                $this->load->view('common/header');
                $this->load->view('products/home');
                $this->load->view('common/footer');
            } else if ($this->input->get('page') == "clientinfo") {
                $this->getclientdb();
            } else if ($this->input->get('page') == "orderinfo") {
                //$this -> getorderdb();
                $this->getNonAcceptedOrders();
            } else if ($this->input->get('page') == "sliderinfo") {
                $this->getsliderdb();
            } else if ($this->input->get('page') == "chat") {
                //$this->load->view('common/header');

                $this->load->model('users_model');

                //Load the session library
                $this->load->library('session');

                //Get all users
                $this->outputData['listOfUsers'] = $this->users_model->getUsers();

                $this->load->view('chat/userList', $this->outputData);
                // $this->load->view('common/footer');
            } else if ($this->input->post('deleteproduct')) {
                $pid = $this->input->post('hidden');
                $this->deleteproduct($pid);
            } else if ($this->input->post('deleteclient')) {
                $cid = $this->input->post('hidden');
                $this->deleteclient($cid);
            } else if ($this->input->post('deleteorder')) {
                $id = $this->input->post('hidden');
                $this->deleteorder($id);
            } else if ($this->input->post('updateproduct')) {
                $pid = $this->input->post('hidden');
                $this->openupdateproduct($pid);
            } else if ($this->input->post('updateslider')) {
                $sid = $this->input->post('hidden');
                $this->opensliderimage($sid);
            } else if ($this->input->post('updateproductinfo')) {
                $pid = $this->input->post('productid');
                $input1 = $this->input->post('name');
                $input2 = $this->input->post('category');
                $input3 = $this->input->post('subcategory');
                $input4 = $this->input->post('description');
                $input5 = $this->input->post('price');
                $input6 = $this->input->post('quantity');
                $input7 = $this->input->post('url');
                $this->updateproduct($pid, $input1, $input2, $input3, $input4, $input5, $input6, $input7);
            } else if ($this->input->post('updatesliderinfo')) {
                $sid = $this->input->post('sliderid');
                $input1 = $this->input->post('titlep1');
                $input2 = $this->input->post('titlep2');
                $input3 = $this->input->post('description');
                $input4 = $this->input->post('url');
                $this->updateslider($sid, $input1, $input2, $input3, $input4);
            } else if ($this->input->post('addproductinfo')) {
                $input1 = $this->input->post('name');
                $input2 = $this->input->post('category');
                $input3 = $this->input->post('subcategory');
                $input4 = $this->input->post('description');
                $input5 = $this->input->post('price');
                $input6 = $this->input->post('quantity');
                $input7 = $this->input->post('url');
                $this->addproduct($input1, $input2, $input3, $input4, $input5, $input6, $input7);
            } else if ($this->input->post('rating-input-1')) {
                $pid = $this->input->post('hidden');
                $rating = 1;
                $this->updateproductrating($pid, $rating);
            } else if ($this->input->post('rating-input-2')) {
                $pid = $this->input->post('hidden');
                $rating = 2;
                $this->updateproductrating($pid, $rating);
            } else if ($this->input->post('rating-input-3')) {
                $pid = $this->input->post('hidden');
                $rating = 3;
                $this->updateproductrating($pid, $rating);
            } else if ($this->input->post('rating-input-4')) {
                $pid = $this->input->post('hidden');
                $rating = 4;
                $this->updateproductrating($pid, $rating);
            } else if ($this->input->post('rating-input-5')) {
                $pid = $this->input->post('hidden');
                $rating = 5;
                $this->updateproductrating($pid, $rating);
            } else {

                $this->getAllDatabaseToView();
            }
        }
    }

//----------------------------other
    public function getAllDatabaseToView() {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->getAllDBToView();
        $data['query1'] = $this->get_db->getSliderToView();
        $this->load->view('common/header');
        $this->load->view('pages/Home', $data);
        $this->load->view('common/footer');
    }

    public function getproductdb() {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->getAllproduct();
        $this->load->view('common/header');
        $this->load->view('dbproductinformation', $data);
        $this->load->view('common/footer');
    }

    public function getclientdb() {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->getAllAdmin();
        $data['query1'] = $this->get_db->getAllStaff();
        $data['query2'] = $this->get_db->getAllUser();
        $this->load->view('common/header');
        $this->load->view('dbclientinformation', $data);
        $this->load->view('common/footer');
    }

    public function getorderdb() {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->getAllorder();
        $this->load->view('common/header');
        $this->load->view('dborderinformation', $data);
        $this->load->view('common/footer');
    }

    public function getsliderdb() {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->getSliderToView();
        $this->load->view('common/header');
        $this->load->view('dbsliderimages', $data);
        $this->load->view('common/footer');
    }

    public function deleteproduct($pid) {
        $this->load->model('get_db');
        $this->get_db->DeletePromotionalProduct($pid);
        $data['query'] = $this->get_db->getAllproduct();
        $this->load->view('common/header');
        $this->load->view('dbproductinformation', $data);
        $this->load->view('common/footer');
    }

    public function deleteclient($cid) {
        $this->load->model('get_db');
        $this->get_db->DeleteClient($cid);
        $data['query'] = $this->get_db->getAllAdmin();
        $data['query1'] = $this->get_db->getAllStaff();
        $data['query2'] = $this->get_db->getAllUser();
        $this->load->view('common/header');
        $this->load->view('dbclientinformation', $data);
        $this->load->view('common/footer');
    }

    public function deleteorder($id) {
        $this->load->model('get_db');
        $this->get_db->DeleteOrder($id);
        $data['query'] = $this->get_db->getAllorder();
        $this->load->view('common/header');
        $this->load->view('dborderinformation', $data);
        $this->load->view('common/footer');
    }

    public function openupdateproduct($pid) {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->SelectPromotionalProduct($pid);
        $this->load->view('common/header');
        $this->load->view('form_update', $data);
        $this->load->view('common/footer');
    }

    public function opensliderimage($sid) {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->SelectSliderImage($sid);
        $this->load->view('common/header');
        $this->load->view('updatesliderimages', $data);
        $this->load->view('common/footer');
    }

    public function updateproduct($pid, $input1, $input2, $input3, $input4, $input5, $input6, $input7) {
        $this->load->model('get_db');
        $this->get_db->UpdateProduct($pid, $input1, $input2, $input3, $input4, $input5, $input6, $input7);
        $data['query'] = $this->get_db->getAllproduct();
        $this->load->view('common/header');
        $this->load->view('dbproductinformation', $data);
        $this->load->view('common/footer');
    }

    public function updateproductrating($pid, $rating) {
        $this->load->model('get_db');
        $this->get_db->UpdateProductRating($pid, $rating);
    }

    public function updateslider($sid, $input1, $input2, $input3, $input4) {
        $this->load->model('get_db');
        $this->get_db->UpdateSlider($sid, $input1, $input2, $input3, $input4);
        $data['query'] = $this->get_db->getSliderToView();
        $this->load->view('common/header');
        $this->load->view('dbsliderimages', $data);
        $this->load->view('common/footer');
    }

    public function addproduct($input1, $input2, $input3, $input4, $input5, $input6, $input7) {
        $this->load->model('get_db');
        $this->get_db->AddProduct($input1, $input2, $input3, $input4, $input5, $input6, $input7);
        $data['query'] = $this->get_db->getAllproduct();
        $this->load->view('common/header');
        $this->load->view('dbproductinformation', $data);
        $this->load->view('common/footer');
    }

//--------------------------------Piumi
//getting the promotional product details to view the order Details before the order confirmation by the customer
    public function getDatabaseValues($ID, $Qty, $total, $avail) {

        $this->load->model('get_db');
        $data['query'] = $this->get_db->getAll($ID);
        $data['qty'] = $Qty;
        $data['total'] = $total;
        $data['Availability'] = $avail;
        $this->load->view('common/header');
        $this->load->view('Orders/orderDisplay', $data);
        $this->load->view('common/footer');
    }

// getting database view the product detail when before ordering
    public function getDatabaseToAddOrder($ID) {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->getAll($ID);
        $this->load->view('common/header');
        $this->load->view('Orders/addOrder', $data);
        $this->load->view('common/footer');
    }

//getting all promotional product details to view in online store
    public function getDatabaseToView() {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->getAllView();
        $this->load->view('common/header');
        $this->load->view('products/viewProducts', $data);
        $this->load->view('common/footer');
    }

//
    public function getProductsToLogged() {
        $this->load->model('get_db');
        $data['query'] = $this->get_db->getAllView();
        $this->load->view('common/header');
        $this->load->view('products/viewProducts', $data);
        $this->load->view('common/footer');
    }

//To insert the order details to the database	
    function insert_to_db($input, $input1, $input2, $input3, $input4, $input5, $date, $PID, $Avail, $CusID) {

        $this->load->library('session');

        $this->load->model('get_db');
        $this->get_db->InsertAll($input, $input1, $input2, $input3, $input4, $input5, $date, $CusID);
        $new = $Avail - $input4;
        $this->get_db->updateQuantity($PID, $new);

        $this->getDatabaseToView();
    }

//to view the Non accepted orders to the admin	
    public function getNonAcceptedOrders() {

        $this->load->model('get_db');
        $data['nonA'] = $this->get_db->getOrders("NonAccepted");
        $this->load->view('common/header');
        $this->load->view('Orders/viewNonAcceptedOrders', $data);
        $this->load->view('common/footer');
    }

//to view the accepted orders to the admin		
    public function getAcceptedOrders() {

        $this->load->model('get_db');
        $data['Accepted'] = $this->get_db->getOrders("Accepted");
        $this->load->view('common/header');
        $this->load->view('Orders/viewAcceptedOrders', $data);
        $this->load->view('common/footer');
    }

//to view the rejected orders to the admin		
    public function getRejectedOrders() {

        $this->load->model('get_db');

        $data['Rejected'] = $this->get_db->getOrders("Rejected");
        $this->load->view('common/header');
        $this->load->view('Orders/viewRejectedOrders', $data);
        $this->load->view('common/footer');
    }

//to view the cancellation requests to the admin		
    public function getCancellationRequests() {

        $this->load->model('get_db');

        $data['cancallation'] = $this->get_db->getOrders("CancelRequest");
        $this->load->view('common/header');
        $this->load->view('Orders/viewCancellationRequest', $data);
        $this->load->view('common/footer');
    }

//TO update the status of the order when a customer request for a cancellation
    public function updateCancelRequestStatus($ID) {

        $this->load->model('get_db');
        $this->get_db->updateStatus($ID, 'CancelRequest');
        $this->load->helper('url');
        redirect('http://localhost/Devins/index.php?page=ViewMyHistory');
    }

//to send a mail to the customer when a order is completed
    public function sendMailToComplete($User, $ID) {

        $this->load->model('get_db');
        $email = $this->get_db->getEmail($User);
        $this->get_db->updateStatus($ID, 'Completed');

        foreach ($this->get_db->getEmailConfig() as $row) {

            $config = Array(
                'protocol' => $row->protocol,
                'smtp_host' => $row->host,
                'smtp_user' => $row->user,
                'smtp_pass' => $row->pass,
                'smtp_port' => $row->port,
                'smtp_timeout' => $row->timeout,
                'mailtype' => $row->mailtype,
                'charset' => $row->charset
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($row->from, 'Devins Lanka');
            $this->email->to($email);
            $this->email->subject('Order Completed');
            $this->email->message('We are plesure to inform that your order has completed Successfully.');
        }
        $this->email->send();


        $this->getAcceptedOrders();
    }

//to send a mail to the customer when a order is Accepted
    function sendMailToAccept($User, $ID) {

        $this->load->model('get_db');
        $email = $this->get_db->getEmail($User);
        $this->get_db->updateStatus($ID, 'Accepted');

        //$email=(string)$temp;
        foreach ($this->get_db->getEmailConfig() as $row) {

            $config = Array(
                'protocol' => $row->protocol,
                'smtp_host' => $row->host,
                'smtp_user' => $row->user,
                'smtp_pass' => $row->pass,
                'smtp_port' => $row->port,
                'smtp_timeout' => $row->timeout,
                'mailtype' => $row->mailtype,
                'charset' => $row->charset
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($row->from, 'Devins Lanka');
            $this->email->to($email);
            $this->email->subject('Order Accepted');
            $this->email->message('We are plesure to inform that your order has Accepted.');
        }
        $this->email->send();


        $this->getNonAcceptedOrders();
    }

    //to send a mail to the customer when a order is Rejected
    function sendMailToReject($User, $ID, $reason) {

        $this->load->model('get_db');
        $email = $this->get_db->getEmail($User);
        $this->get_db->updateStatus($ID, $reason);

        foreach ($this->get_db->getEmailConfig() as $row) {

            $config = Array(
                'protocol' => $row->protocol,
                'smtp_host' => $row->host,
                'smtp_user' => $row->user,
                'smtp_pass' => $row->pass,
                'smtp_port' => $row->port,
                'smtp_timeout' => $row->timeout,
                'mailtype' => $row->mailtype,
                'charset' => $row->charset
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($row->from, 'Devins Lanka');
            $this->email->to($email);
            $this->email->subject('Order Rejected');
            $message = "We are sorry to inform you that the order has  been Rejected due to " . $reason;
            $this->email->message($message);
        }
        $this->email->send();


        $this->getNonAcceptedOrders();
    }

    //To view the order history to the customer	
    public function getDataToViewHistory() {

        $this->load->model('get_db');
        $data['orders'] = $this->get_db->getToViewMyHistory($this->session->userdata('username'));
        $this->load->view('common/header');
        $this->load->view('Orders/viewMyOrderHistory', $data);
        $this->load->view('common/footer');
    }

    //to send a mail to the customer when a cancellation request accepted
    function sendMailToAcceptCancellation($User, $rowID) {

        $this->load->model('get_db');
        $email = $this->get_db->getEmail($User);
        $this->get_db->acceptCancellation($rowID);
        //$configuration=$this->get_db->getEmailConfig();
        //$email=(string)$temp;
        foreach ($this->get_db->getEmailConfig() as $row) {

            $config = Array(
                'protocol' => $row->protocol,
                'smtp_host' => $row->host,
                'smtp_user' => $row->user,
                'smtp_pass' => $row->pass,
                'smtp_port' => $row->port,
                'smtp_timeout' => $row->timeout,
                'mailtype' => $row->mailtype,
                'charset' => $row->charset
            );


            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($row->from, 'Devins Lanka');
            $this->email->to($email);
            $this->email->subject('Order Cancellation Accepted');
            $this->email->message('We are plesure to inform that your order cancellation has Accepted.');
        }
        $this->email->send();


        $this->getCancellationRequests();
    }

//to send a mail to the customer when a cancellation request rejected
    function sendMailToRejectCancellation($User, $ID) {

        $this->load->model('get_db');
        $email = $this->get_db->getEmail($User);
        $this->get_db->updateStatus($ID, 'Accepted');

        foreach ($this->get_db->getEmailConfig() as $row) {

            $config = Array(
                'protocol' => $row->protocol,
                'smtp_host' => $row->host,
                'smtp_user' => $row->user,
                'smtp_pass' => $row->pass,
                'smtp_port' => $row->port,
                'smtp_timeout' => $row->timeout,
                'mailtype' => $row->mailtype,
                'charset' => $row->charset
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from($row->from, 'Devins Lanka');
            $this->email->to($email);
            $this->email->subject('Order Cancellation Rejected');
            $this->email->message('We are sorry to inform you that the order cancellation request was rejected. Order is now in processing.');
        }
        $this->email->send();


        $this->getCancellationRequests();
    }

    //to view the cart to the customer
    public function getDataToViewMyCart() {

        $this->load->model('get_db');
        $data['cartItems'] = $this->get_db->getToViewMyCart($this->session->userdata('username'));
        $this->load->view('common/header');
        $this->load->view('Orders/ViewMyCart', $data);
        $this->load->view('common/footer');
    }

// to view the wishlist to the customer	
    public function getDataToViewMyWishList() {

        $this->load->model('get_db');
        $data['wishList'] = $this->get_db->getToViewMyWishList($this->session->userdata('username'));
        $this->load->view('common/header');
        $this->load->view('Orders/viewMyWishList', $data);
        $this->load->view('common/footer');
    }

//to add an item to a wishlist of a particular customer	
    function insertToWishList($productID) {

        $this->load->model('get_db');
        $this->get_db->InsertToWishList($productID, $this->session->userdata('username'));

        $this->load->helper('url');
        redirect('http://localhost/Devins/index.php?page=online');
    }

//to remove an item from the wishlist of a particular customer		
    function removeFromWishList($WLID) {

        $this->load->model('get_db');
        $this->get_db->deleteFromMyList($WLID);

        $this->load->helper('url');
        redirect('http://localhost/Devins/index.php?page=ViewMyWishList');
    }

    function insertMultipleToWishList($productList) {

        $products = explode(" ", $productList);
        $arraySize = sizeof($products);
        $this->load->model('get_db');

        for ($i = 1; $i < $arraySize; $i++) {
            $this->get_db->InsertToWishList($products[$i], $this->session->userdata('username'));
        }
        $this->load->helper('url');
        redirect('http://localhost/Devins/index.php?page=online');
    }

    function converCurrency($amount) {
        $from = 'LKR';
        $to = 'USD';

        $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to";

        $req = curl_init();

        $timeout = 0;
        curl_setopt($req, CURLOPT_URL, $url);
        curl_setopt($req, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($req, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)");
        curl_setopt($req, CURLOPT_CONNECTTIMEOUT, $timeout);
        $rawdata = curl_exec($req);


        $data = explode('bld>', $rawdata);
        $data = explode($to, $data[1]);
        $amount_1 = round($data[0], 2);
        return $amount_1;
    }

    function payForAll($user) {
        $this->load->model('get_db');
        $orders = $this->get_db->getMyAllOrdersToPay($user);

        unset($_SESSION['PayAll']);
        $_SESSION['PayAll'] = 'yes';

        $Data = array('upload' => "1", 'return' => $this->config->item('returnurl'), 'cmd' => "_cart", 'business' => $this->config->item('business'));
        $i = 1;

        foreach ($orders as $row) {

            $Data['item_name_' . $i] = $row->Name;
            $Data['item_number_' . $i] = $i;
            $Data['amount_' . $i] = $this->converCurrency($row->UPrice);
            $Data['quantity_' . $i] = $row->Qty;

            $i++;
        }
        $query_string = http_build_query($Data);
        $posturl = $this->config->item('posturl');

        header('Location: ' . $posturl . '?' . $query_string);
    }

    ///////...............................Chathu
    function addFeedback() {
        $pId = $this->input->post('pid');
        $Id = $this->input->post('pid');
        $data = array(
            //	'p_Id'  =>$this->input->post('id'),
            //'feedback'  =>$this->input->post('newfeedback')
            //'feedback' =>"Done"
            'feedback' => $this->input->post('newfeedback'),
            'p_Id' => $this->input->post('pid'),
            'user' => $this->input->post('user')
        );
        $this->load->model('feedbackmodel');
        if ($this->feedbackmodel->addFeedback($data)) {
            $this->getDatabaseToAddOrder($Id);
            $this->getDatabaseToAddOrder($pId);
            //redirect('http://localhost/devinsnew/index.php?page=ViewforOrder&ID='+$Id);
            return true;
        } else {
            return false;
        }
    }

    public function deleteProductComment() {
        $loadId = $this->input->post('pid');
        $id = $this->uri->segment(3);

        $this->db->delete('feedback', array('f_Id' => $id));
        redirect('http://localhost/devinsnew/index.php?page=ViewforOrder&ID=' + '$loadId=');
        //	$this->load->model('get_db');
        // $data['query']=$this->get_db->getAll(13);
        // $this->load->view('Orders/AddOrder',$data);
        //   echo "$loadId";
        //	redirect('Orders/AddOrder',$data);
        $this->getDatabaseToAddOrder(13);

        //	$this->load->view('products/EditProductComment');
    }

    public function editComment() {
        $this->load->view('common/header');
        $this->load->view('products/EditProductComment');
        $this->load->view('common/footer');
    }

    function update_comment() {
        $Id = $this->input->post('pid');
        $pId = $this->input->post('pid');
        $id = $this->uri->segment(3);


        $data = array(
            'p_Id' => $this->input->post('pid'),
            'feedback' => $this->input->post('name')
        );
        $this->db->where('f_Id', $id);
        $this->db->update('feedback', $data);
        $this->getDatabaseToAddOrder($pId);
        $this->getDatabaseToAddOrder($Id);
        //redirect('main');
    }

    public function viewPromotionalProducts() {

        $this->load->view('common/header');
        $this->load->view('products/viewPromotional');
        $this->load->view('common/footer');
    }

    public function viewAdvertisingProducts() {

        $this->load->view('common/header');
        $this->load->view('products/ViewAdvertising');
        $this->load->view('common/footer');
    }

    public function viewHotelProducts() {

        $this->load->view('common/header');
        $this->load->view('products/viewHotelProducts');
        $this->load->view('common/footer');
    }

    public function viewFashionProducts() {

        $this->load->view('common/header');
        $this->load->view('products/viewFashion');
        $this->load->view('common/footer');
    }

}
