<?php

require_once dirname(__FILE__).'/require_diem.php';
dm::start();

class ProjectConfiguration extends dmProjectConfiguration
{

  public function setup()
  {
    parent::setup();
    
    $this->enablePlugins(array(
      'dmWidgetGalleryPlugin',
      'dmWidgetTwitterPlugin',
      'dmWidgetFeedReaderPlugin',
      'dmContactPlugin',
      'dmGithubPlugin',
      'dmTagPlugin',
      'dmSqlBackupPlugin',
      'dmBotPlugin'
    ));

    $this->setWebDir(realpath(dirname(__FILE__).'/..').'/public_html');
  }
  
  public function setupPlugins()
  {
  }
}