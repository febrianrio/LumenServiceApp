<?php

namespace App\Http\Controllers;

class UsersController extends Controller {

    public function __construct(){
        return "Lumen Controller";
    }

    public function index(){
        return "Anda mendapatkan response ini dari <b>Controller</b>";
    }
}