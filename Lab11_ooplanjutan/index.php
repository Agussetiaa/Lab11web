<?php
require_once("class/database.php");
require_once("class/form.php");
require_once("template/header.php");

$mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : '';

switch ($mod) {
  case "mobil":
    require("module/mobil.php");
    break;
  case "data":
    require("data.php");
    break;
  case "about":
    require("about.php");
    break;
  case "contact":
    require("contact.php");
    break;
  case "form_input":
    require("form_input.php");
    break;
  case "data":
    require("data.php");
    break;
  case "update":
    require("update.php");
    break;
  default:
    require("module/mobil.php");
}

require_once("template/footer.php");
