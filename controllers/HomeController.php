<?php
class HomeController extends Controller {
 public function index() {
 $jasaModel = $this->model("Jasa");
 $data["jasa"] = $jasaModel->getJasa();
 $this->view("home", $data);
 }
}