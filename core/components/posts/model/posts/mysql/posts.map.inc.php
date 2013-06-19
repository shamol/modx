<?php
$xpdo_meta_map['Posts']= array (
  'package' => 'posts',
  'version' => '1.1',
  'table' => 'posts',
  'extends' => 'xPDOSimpleObject',
  'fields' => 
  array (
    'author' => NULL,
    'title' => '',
    'contetn' => NULL,
    'postDate' => NULL,
  ),
  'fieldMeta' => 
  array (
    'author' => 
    array (
      'dbtype' => 'int',
      'precision' => '11',
      'phptype' => 'integer',
      'null' => false,
    ),
    'title' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '200',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'contetn' => 
    array (
      'dbtype' => 'text',
      'phptype' => 'string',
      'null' => false,
    ),
    'postDate' => 
    array (
      'dbtype' => 'date',
      'phptype' => 'date',
      'null' => false,
    ),
  ),
);
