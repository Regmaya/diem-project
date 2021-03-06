<?php
// Snippet : List menu
// Vars : $snippetPager

echo _open('div.snippet.list_menu');

 echo $snippetPager->renderNavigationTop();

  echo _open('ul.elements');

  foreach ($snippetPager as $snippet)
  {
    echo _open('li.element');

      echo _link($snippet)->text(escape($snippet->name));

    echo _close('li');
  }

  echo _close('ul');

 echo $snippetPager->renderNavigationBottom();

echo _close('div');