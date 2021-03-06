<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropForeignKey('doc_page_translation', 'doc_page_translation_created_by_dm_user_id');
        $this->dropForeignKey('doc_page_translation', 'doc_page_translation_updated_by_dm_user_id');
    }

    public function down()
    {
        $this->createForeignKey('doc_page_translation', 'doc_page_translation_created_by_dm_user_id', array(
             'name' => 'doc_page_translation_created_by_dm_user_id',
             'local' => 'created_by',
             'foreign' => 'id',
             'foreignTable' => 'dm_user',
             ));
        $this->createForeignKey('doc_page_translation', 'doc_page_translation_updated_by_dm_user_id', array(
             'name' => 'doc_page_translation_updated_by_dm_user_id',
             'local' => 'updated_by',
             'foreign' => 'id',
             'foreignTable' => 'dm_user',
             ));
    }
}