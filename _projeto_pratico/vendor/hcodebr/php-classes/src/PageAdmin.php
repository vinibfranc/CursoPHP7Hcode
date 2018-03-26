<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 26/03/2018
 * Time: 09:36
 */
namespace Hcode;

class PageAdmin extends Page {
    public function __construct($opts = array(), $tpl_dir = "/views/admin/") {
        parent::__construct($opts, $tpl_dir);
    }
}