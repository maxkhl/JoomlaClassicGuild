<?php
defined('_JEXEC') or die('Restricted access');

class ClassicGuildModelClassicGuild extends JModelItem
{
	protected $message;

	public function getMsg()
	{
		if (!isset($this->message))
		{
			$this->message = 'Hello World!';
		}

		return $this->message;
	}
}