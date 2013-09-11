<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Version', 'doctrine');

/**
 * BaseVersion
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idversion
 * @property float $descversion
 * @property Doctrine_Collection $Detalleversion
 * 
 * @method integer             getIdversion()      Returns the current record's "idversion" value
 * @method float               getDescversion()    Returns the current record's "descversion" value
 * @method Doctrine_Collection getDetalleversion() Returns the current record's "Detalleversion" collection
 * @method Version             setIdversion()      Sets the current record's "idversion" value
 * @method Version             setDescversion()    Sets the current record's "descversion" value
 * @method Version             setDetalleversion() Sets the current record's "Detalleversion" collection
 * 
 * @package    mant-guia-maestra
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVersion extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('version');
        $this->hasColumn('idversion', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('descversion', 'float', 8, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Detalleversion', array(
             'local' => 'idversion',
             'foreign' => 'idversion'));
    }
}