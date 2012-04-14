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
        
        $last = count($this->links);
        $i = 0;
		$htmlOptions = array();
		foreach($this->links as $label=>$url)
		{
			if(is_string($label) || is_array($url)){
			    if(is_array($url)){
			        if(isset($url["label"])){
        			    $label =  $url["label"];
                        unset($url["label"]);
			        }
			        if(isset($url["unavailable"])){
			            if(isset($htmlOptions["class"])){
                             $htmlOptions["class"] .= " unavailable";
                        }else{
                            $htmlOptions["class"] = "unavailable";
                        }
                        unset($url["unavailable"]);
			        }
                    
    			    $url = isset($url["url"]) ?: $url;
			    }
				$links[]=CHtml::tag("li", $htmlOptions, CHtml::link($this->encodeLabel ? CHtml::encode($label) : $label, $url));
			}
			else
				$links[]=CHtml::tag("li", $htmlOptions, '<span>'.($this->encodeLabel ? CHtml::encode($url) : $url).'</span>');
            $i++;
		    $htmlOptions = array();
            if($i == $last-1){
                $htmlOptions["class"] = "current";    
            }
		}
		echo implode("\n",$links);
		echo CHtml::closeTag("ul");
	}
}