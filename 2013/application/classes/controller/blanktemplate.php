<?php defined('SYSPATH') or die('No direct script access.');

class Controller_BlankTemplate extends Controller_Template 
{

	public $template = 'blanktemplate';

	/**
	* The before() method is called before your controller action.
	* In our template controller we override this method so that we can
	* set up default values. These variables are then available to our
	* controllers if they need to be modified.
	*/
public function before()
{
	parent::before();

	if ($this->auto_render)
	{
		// Initialize empty values
		$this->template->title   = '';
		$this->template->content = '';

		$this->template->meta_keywords = 'default';
		$this->template->meta_description = 'meta desc';
		$this->template->meta_copywrite = '';
	}

	$this->template->styles = array();

	$this->template->scripts = array();

	$this->template->content = '';
}

/**
* The after() method is called after your controller action.
* In our template controller we override this method so that we can
* make any last minute modifications to the template before anything
* is rendered.
*/
public function after()
{
	if ($this->auto_render)
	{
		$styles = array();

		$scripts = array();

		$this->template->styles = array_merge( $this->template->styles, $styles );
		$this->template->scripts = array_merge( $this->template->scripts, $scripts );
	}
	parent::after();
}
}
?>