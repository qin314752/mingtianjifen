<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       // session('name','ceshi',20);
       var_dump(session());
    }
}