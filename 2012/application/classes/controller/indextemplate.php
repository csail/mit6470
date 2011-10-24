<?php defined('SYSPATH') or die('No direct script access.');

class Controller_IndexTemplate extends Controller_Template 
{

	public $template = 'index_template';

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
		$this->template->title   = 'MIT 6.470 - IAP Web Programming Competition';
		$this->template->content = '';

		$this->template->meta_keywords = 'default';
		$this->template->meta_description = 'meta desc';
		$this->template->meta_copywrite = 'MIT 6.470';
		$this->template->header = View::factory('basic/header');
		$this->template->footer = View::factory('basic/footer');
	}

	$this->template->styles = array();
	$this->template->styles['assets/css/reset.min.css'] = 'screen';
	$this->template->styles['assets/css/menu.min.css'] = 'screen';
	$this->template->styles['assets/css/default.css'] = 'screen';
	$this->template->styles['assets/css/fancybox.css'] = 'screen';
	$this->template->styles['assets/css/tooltip.min.css'] = 'screen';
	$this->template->styles['assets/css/default.css'] = 'screen';

	$this->template->scripts = array();
	$this->template->scripts[] = 'assets/js/jquery-1.4.min.js';
	$this->template->scripts[] = 'assets/js/jquery-ui-1.7.2.min.js';
	$this->template->scripts[] = 'assets/js/jquery.easing.1.3.min.js';
	$this->template->scripts[] = 'assets/js/hoverIntent.min.js'; 
	$this->template->scripts[] = 'assets/js/jquery.bgiframe.min.js';
	$this->template->scripts[] = 'assets/js/superfish.min.js';
	$this->template->scripts[] = 'assets/js/supersubs.min.js';
	$this->template->scripts[] = 'assets/js/jquery.cluetip.min.js';
	$this->template->scripts[] = 'assets/js/jquery.overlabel.min.js';
	$this->template->scripts[] = 'assets/js/jquery.scrollTo-min.js';
	$this->template->scripts[] = 'assets/js/jquery.localscroll-min.js';
	$this->template->scripts[] = 'assets/js/jquery.fancybox-1.2.6.pack.js';
	$this->template->scripts[] = 'assets/js/jquery.cycle.all.min.js';
	$this->template->scripts[] = 'assets/js/cufon-yui.js';
	$this->template->scripts[] = 'assets/js/LiberationSans.font.js';
	$this->template->scripts[] = 'assets/js/onLoad.min.js';

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