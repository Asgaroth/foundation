<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu = array();
    
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
    
    public function init(){
        $this->menu = array(
           array('label' => 'Getting Started', 'url' => array("site/index")),
           array('label' => 'Grid', 'url' => array("site/grid")),
           array('label' => 'Buttons', 'url' => array("site/buttons")),
           array('label' => 'Forms', 'url' => array("site/forms")),
           array('label' => 'Layout', 'url' => array("site/layout")),
           array('label' => 'UI', 'url' => array("site/ui")),
           array('label' => 'Orbit', 'url' => array("site/orbit")),
           array('label' => 'Reveal', 'url' => array("site/reveal")),
           array('label' => 'Gems', 'url' => array("site/gems")),
           array('label' => 'QA', 'url' => array("site/qa")),
        );
    }
}