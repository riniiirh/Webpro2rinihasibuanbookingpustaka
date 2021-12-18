<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contoh1 extends CI_Controller 
    {
        public function index()
         {
            echo "<h1> Perkenalkan </h1>";
            echo "Nama Saya Rini Hasibuan
            Saya tinggal di Medan
            Hobby yang saya sukai adalah Jalan-jalan dan bernyanyi";
    }
}