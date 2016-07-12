<?php
use Ruckusing\Migration\Base as Ruckusing_Migration_Base;

class UpdateDirectusUsersTokenColumn extends Ruckusing_Migration_Base
{
    public function up()
    {
        $this->change_column('directus_users', 'token', 'string', array(
            'limit' => 255,
            'null' => false
        ));
    }//up()

    public function down()
    {
        $this->change_column('directus_users', 'token', 'string', array(
            'limit' => 255,
            'default' => ''
        ));
    }//down()
}
