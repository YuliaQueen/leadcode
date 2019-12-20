<?php

namespace frontend\widgets;

use yii\base\Widget;

class SiteYears extends Widget
{
    public $startYear;

   public function run()
   {
       $yearStr = $this->startYear;
       if ((string)$this->startYear !== date('Y')) {
           $yearStr.= '-' . date('Y');
       }
       return $yearStr;
   }

}