<?php

use \Cajogos\Biscuit\Controller as Controller;
use \Cajogos\Biscuit\Template as Template;

class IndexController extends Controller
{
	public static function display()
	{
		$tpl = Template::create('pages/index.tpl');
		$tpl->assign('page_title', 'Welcome');
		$tpl->assign('page_id', 'index');
		$tpl->assign('social_title', 'Carlos Ferreira - All Things Developer from London');
		$tpl->assign('social_desc', 'Name is Carlos and I like making things. Check out my website to know what I can do.');
		$tpl->assign('age', Utils::getage('20-05-1994'));
		$tpl->display();
	}

	public static function displayRubiksCube()
	{
		$tpl = Template::create('pages/rubiks-cube.tpl');
		$tpl->assign('page_title', 'How to solve 3x3 Rubik\'s Cube');
		$tpl->assign('page_id', 'rubiks-cube');
		$tpl->assign('social_title', 'How to solve the 3x3 Rubik\'s Cube with Carlos Ferreira');
		$tpl->assign('social_desc', 'Learn how to solve the Rubik\'s Cube with the most simplified guide.');
		$tpl->display();
	}
}