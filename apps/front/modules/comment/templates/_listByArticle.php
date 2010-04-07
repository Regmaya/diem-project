<?php use_helper('Date');
/*
 * Action for Comment : List by post
 * Vars : $commentPager
 */

echo £o('div.comment.list_by_article');

 echo $commentPager->renderNavigationTop();

  echo £o('ul.elements');

  foreach ($commentPager as $comment)
  {
    echo £o('li.element');
    
      echo £('p.author',
        £('strong.mr10', $comment->name ? escape($comment->name) : escape('<anonymous>')).
        £('span.quiet', format_datetime($comment->createdAt, 'f'))
      );
      
      echo £('p', nl2br(escape($comment->text)));
      
    echo £c('li');
  }

  echo £c('ul');

 echo $commentPager->renderNavigationBottom();

echo £c('div');