<?php
class Pages extends CI_Controller
{
    public function __construct()
    {
        // parent::__construct();
        // $this->load->model('UserModel', 'userModel');
        // $this->load->model('TutorialModel', 'tutorialModel');
        // $this->load->model('TicketModel', 'ticketModel');
        // $this->load->model('SiteMsgModel', 'siteMsgModel');
    }
    private function getPageToTitle(){
        return array(
            'account-settings'=>'帳戶設定',
            'search-tutorial'=>'尋找教學課程',
            'register-account'=>'註冊',
            'raise-fund-for-tutorial'=>'募資中課程',
            'start-new-tutorial'=>'我要開新課程',
            'login'=>'登入/註冊',
            'authorize-pending-tutorials'=>'核准新課程',
            'customer-service'=>'客戶服務',
            'answer-ticket'=>'回覆客訴',
            'on-site-msg'=>'站內訊息'
        );
    }
}