<?php
require_once 'Mage/Catalog/controllers/ProductController.php';
class VJTemplates_FeaturedHorzCarousel_IndexController extends Mage_Catalog_ProductController
{
 
     public function indexAction()
     {
          $this->loadLayout();
          $this->renderLayout();
     }
 

}