<?php

/**
 * BaseJobeetAffiliate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $url
 * @property string $email
 * @property string $token
 * @property boolean $is_active
 * @property Doctrine_Collection $JobeetCategories
 * @property Doctrine_Collection $JobeetCategoryAffiliate
 * 
 * @method string              getUrl()                     Returns the current record's "url" value
 * @method string              getEmail()                   Returns the current record's "email" value
 * @method string              getToken()                   Returns the current record's "token" value
 * @method boolean             getIsActive()                Returns the current record's "is_active" value
 * @method Doctrine_Collection getJobeetCategories()        Returns the current record's "JobeetCategories" collection
 * @method Doctrine_Collection getJobeetCategoryAffiliate() Returns the current record's "JobeetCategoryAffiliate" collection
 * @method JobeetAffiliate     setUrl()                     Sets the current record's "url" value
 * @method JobeetAffiliate     setEmail()                   Sets the current record's "email" value
 * @method JobeetAffiliate     setToken()                   Sets the current record's "token" value
 * @method JobeetAffiliate     setIsActive()                Sets the current record's "is_active" value
 * @method JobeetAffiliate     setJobeetCategories()        Sets the current record's "JobeetCategories" collection
 * @method JobeetAffiliate     setJobeetCategoryAffiliate() Sets the current record's "JobeetCategoryAffiliate" collection
 * 
 * @package    s_a
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetAffiliate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_affiliate');
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('JobeetCategory as JobeetCategories', array(
             'refClass' => 'JobeetCategoryAffiliate',
             'local' => 'affiliate_id',
             'foreign' => 'category_id'));

        $this->hasMany('JobeetCategoryAffiliate', array(
             'local' => 'id',
             'foreign' => 'affiliate_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}