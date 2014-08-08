<?php

/**
 *  form create form testimony
 */
function aventure_user_traveler_create_form() {
	global $user;
	module_load_include('inc', 'node', 'node.pages');
	$node = (object) array('uid' => $user->uid, 'name' => (isset($user->name) ? $user->name : ''), 'type' => 'testimony', 'language' => LANGUAGE_NONE);
	$form = drupal_get_form('testimony_node_form', $node);
	return $form;
}

/**
 *  form create form testimony
 */
function aventure_user_traveler_edit_form($nid) {
	if (aventure_user_traveler_validate_testimony($nid)) {
		module_load_include('inc', 'node', 'node.pages');
		$node = node_load($nid);
		$form = drupal_get_form('testimony_node_form', $node);
		return $form;
	} else {
		drupal_set_message(t('Impossible to edit this node'), 'warning');
		drupal_goto('user');
	}
}