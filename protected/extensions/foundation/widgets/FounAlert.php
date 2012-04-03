<?php
/**
 * FounAlert class file.
 * @author Alex Urbano <asgaroth.belem@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package foundation.widgets
 */

Yii::import('foundation.widgets.FounWidget');

/**
 * Foundation alert widget.
 */
class FounAlert extends FounWidget{
	
	/**
	 * @var array the keys for which to get flash messages.
	 */
	public $keys = array('info', 'success', 'warning', 'error');
	
	/**
	 * @var string the template to use for displaying flash messages.
	 */
	public $template = '<div class="alert-box {key}">{message}<a class="close" href="">&times;</a></div>';
	
	/**
	 * Initializes the widget.
	 */
	public function init()
	{
		parent::init();
		if (!isset($this->htmlOptions['id'])){
			$this->htmlOptions['id'] = $this->getId();
		}
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		if (is_string($this->keys))
			$this->keys = array($this->keys);

		echo CHtml::openTag('div', $this->htmlOptions);

		foreach ($this->keys as $key)
		{
			if (Yii::app()->user->hasFlash($key)){
				echo strtr($this->template, array(
					'{key}'=>$key,
					'{message}'=>Yii::app()->user->getFlash($key),
				));
			}
		}

		echo '</div>';
	}
}
