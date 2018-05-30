<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		if($_SESSION['user'] == 'admin')
			$this->view->generate('main_view.php', 'headeradmin_view.php', 'template_view.php');
		else if($_SESSION['user'] == 'moderator')
			$this->view->generate('main_view.php', 'headermoderator_view.php', 'template_view.php');
		else 
			$this->view->generate('main_view.php', 'headeruser_view.php', 'template_view.php');
	}
}