<?php
/**
 * FounBreadcrumbs class file.
 * @author Alex Urbano <asgaroth.belem@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package foundation.widgets
 */
Yii::import('zii.widgets.CBreadcrumbs');

/**
 * Foundation breadcrumb widget.
 */
class FounBreadcrumbs extends CBreadcrumbs
{

	/**
	 * Renders the content of the widget.
	 */
	public function run()
	{
		if(empty($this->links))
			return;
		
		echo CHtml::openTag("ul", $this->htmlOptions)."\n";
		$links=array();
		if($this->homeLink===null){
			$links[]=CHtml::tag("li", array(), CHtml::link(Yii::t('zii','Home'),Yii::app()->homeUrl));
		}
		else if($this->homeLink!==false)
			$links[]=$this->homeLink;
		foreach($this->links as $label=>$url)
		{
			if(is_string($label) || is_array($url))
				$links[]=CHtml::tag("li", array(), CHtml::link($this->encodeLabel ? CHtml::encode($label) : $label, $url));
			else
				$links[]=CHtml::tag("li", array(), '<span>'.($this->encodeLabel ? CHtml::encode($url) : $url).'</span>');
		}
		echo implode("\n",$links);
		echo CHtml::closeTag("ul");
	}
}