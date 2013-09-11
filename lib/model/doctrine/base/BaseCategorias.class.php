<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Categorias', 'doctrine');

/**
 * BaseCategorias
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idcategoria
 * @property string $nombrecategoria
 * @property Doctrine_Collection $Subcategoria
 * 
 * @method integer             getIdcategoria()     Returns the current record's "idcategoria" value
 * @method string              getNombrecategoria() Returns the current record's "nombrecategoria" value
 * @method Doctrine_Collection getSubcategoria()    Returns the current record's "Subcategoria" collection
 * @method Categorias          setIdcategoria()     Sets the current record's "idcategoria" value
 * @method Categorias          setNombrecategoria() Sets the current record's "nombrecategoria" value
 * @method Categorias          setSubcategoria()    Sets the current record's "Subcategoria" collection
 * 
 * @package    mant-guia-maestra
 * @subpackage model
 * @author     Rodrigo Campos H. rodrigo <at> webdevel <dot> cl
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCategorias extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('categorias');
        $this->hasColumn('idcategoria', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('nombrecategoria', 'string', 100, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Subcategoria', array(
             'local' => 'idcategoria',
             'foreign' => 'idcategoria'));
    }
}