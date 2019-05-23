<?php

use yii\db\Migration;

/**
 * Handles the creation of table `admin`.
 */
class m190523_150745_create_admin_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('admin', [
            'id' => $this->primaryKey(11)->comment('ID'),
            'user_id' => $this->integer(11)->notNull()->defaultValue(0)->comment('用户ID'),
            'avatar_url' => $this->string(255)->notNull()->defaultValue('')->comment('头像'),
            'real_name' => $this->string(32)->notNull()->defaultValue('')->comment('真实姓名'),
            'username' => $this->string(32)->notNull()->defaultValue('')->comment('用户名'),
            'mobile' => $this->integer(11)->notNull()->defaultValue(0)->comment('手机号'),
            'email' => $this->string(64)->notNull()->defaultValue('')->comment('邮箱'),
            'password_hash' => $this->char(64)->notNull()->defaultValue('')->comment('昵称'),
            'status' => $this->tinyInteger(1)->notNull()->defaultValue(0)->comment('状态'),
            'created_at' => $this->integer(11)->defaultValue(0)->comment('创建时间'),
            'created_by' => $this->integer(11)->defaultValue(0)->comment('创建者'),
            'updated_at' => $this->integer(11)->defaultValue(0)->comment('更新时间'),
        ]);

        $this->addCommentOnTable('admin', '管理员表');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('admin');
    }
}
