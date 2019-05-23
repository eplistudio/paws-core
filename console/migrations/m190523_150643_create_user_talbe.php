<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m190523_150643_create_user_talbe
 */
class m190523_150643_create_user_talbe extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(11)->comment('ID'),
            'avatar_url' => $this->string(255)->notNull()->defaultValue('')->comment('头像'),
            'nickname' => $this->string(32)->notNull()->defaultValue('')->comment('昵称'),
            'mobile' => $this->integer(11)->notNull()->defaultValue(0)->comment('手机号'),
            'password_hash' => $this->char(64)->notNull()->defaultValue('')->comment('昵称'),
            'status' => $this->tinyInteger(1)->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer(11)->defaultValue(0)->comment('创建时间'),
            'updated_at' => $this->integer(11)->defaultValue(0)->comment('更新时间'),
        ]);

        $this->addCommentOnTable('user', '用户表');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190523_150643_create_user_talbe cannot be reverted.\n";

//        return false;
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190523_150643_create_user_talbe cannot be reverted.\n";

        return false;
    }
    */
}
