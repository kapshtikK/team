<?php
    return array(
        'Guest' => array(
            'type' => CAuthItem::TYPE_ROLE,
            'description' => 'Guest',
            'bizRule' => null,
            'data' => null
        ),

        'User' => array(
            'type' => CAuthItem::TYPE_ROLE,
            'description' => 'User',
            'children' => array('guest'),
            'bizRule' => null,
            'data' => null
        ),

        'Party' => array(
            'type' => CAuthItem::TYPE_ROLE,
            'description' => 'Party',
            'children' => array('User'),
            'bizRule' => null,
            'data' => null
        ),

        'Manager' => array(
            'type' => CAuthItem::TYPE_ROLE,
            'description' => 'Manager',
            'children' => array('Party'),
            'bizRule' => null,
            'data' => null
        ),

        'Administrator' => array(
            'type' => CAuthItem::TYPE_ROLE,
            'description' => 'Administrator',
            'children' => array('Manager'),
            'bizRule' => null,
            'data' => null
        )
    );
?>