<?php

class User extends VanillaModel {
	var $hasOne = array('User' => 'User');
	var $hasManyAndBelongsToMany = array('Role' => 'Role');
}