<?php
class Fruits extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function index() {
        $data = [
            'title' => 'Home page',
            'randomtext' => 'Met fruit kom je er altijd uit'
        ];

        $this->view('fruits/index', $data);
    }
}
