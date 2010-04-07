<?php
/*
 * Action for Version : List menu
 * Vars : $versionPager
 */

echo £o('div.version.list_menu');

 echo $versionPager->renderNavigationTop();

  echo £o('ul.elements');

  foreach ($versionPager as $version)
  {
    echo £o('li.element');
    
      echo _link($version);

      echo £o('ul');
        
        foreach($version->Docs as $doc)
          echo _tag('li', _link($doc));

        echo _tag('li', _link($version->Whatsnew));
        echo _tag('li', _link($version->Changelog));
        echo _tag('li', _link('main/download')->anchor($version->anchor));

      echo £c('ul');
      
    echo £c('li');
  }

  echo £c('ul');

 echo $versionPager->renderNavigationBottom();

echo £c('div');