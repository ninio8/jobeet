<?php

/**
 * sfGuardUserGroupTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserGroupTable extends PluginsfGuardUserGroupTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardUserGroupTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardUserGroup');
    }
}