<?php
class App_Model_Table_ViewHistory extends App_Model_TableCore
{
	protected $_name = 't_view_history';
	protected $_primary = 'id';

	public function insert(array $data)
	{
		$result = parent::insert($data);
		return $result;
	}

}
