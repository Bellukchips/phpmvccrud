<?php

class About extends Controller{
     
    public function index($nama="Lukman",$pekerjaan="Programmer"){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['title'] = 'About Me';
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');

    }
    public function page(){
        $data['title']= 'About Page';
        $this->view('templates/header',$data);
        $this->view('about/page');
        $this->view('templates/footer');

    }
}