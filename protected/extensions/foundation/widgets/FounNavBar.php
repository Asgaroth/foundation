<?php
/**
 * FounNavBar class file.
 * @author Alex Urbano <asgaroth.belem@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package foundation.widgets
 */

Yii::import('foundation.widgets.FounWidget');

/**
 * Foundation navigation bar widget.
 */
class FounNavBar extends FounWidget
{
	/**
	 * @var array navigation items.
	 * @since 0.9.8
	 */
	public $items = array();

	/**
	 * Runs the widget.
	 */
	public function run()
	{
		if (isset($this->htmlOptions['class']))
			$this->htmlOptions['class'] .= ' nav-bar';
		else
			$this->htmlOptions['class'] = 'nav-bar';

		echo CHtml::openTag('ul', $this->htmlOptions);

		foreach ($this->items as $item)
		{
			if (is_string($item)){
				echo "<li>".$item."</li>";
			}else{
			    $this->renderItem($item);
			}
		}

        echo '</ul>';
	}
    
    /**
     * Renders a single item in the menu.
     * @param array $item the item configuration
     * @return string the rendered item
     */
    protected function renderItem($item)
    {
        if(isset($item["flyout"])){
            if(isset($item["flyout"][2]) && $item["flyout"][2]){
                echo '<li class="has-flyout hide-on-tablets">'."\n";
            }else{
                echo '<li class="has-flyout">'."\n";
            }
        }else{
            echo "<li>\n";
        }
        if (!isset($item['linkOptions']))
            $item['linkOptions'] = array("class" => "main");
        else {
            if (isset($item['linkOptions']['class'])){
                $item['linkOptions']['class'] .= " main";
            }else{
                $item['linkOptions']['class'] = "main";
            }
            
        }

        if (!isset($item['header']) && !isset($item['url']))
            $item['url'] = '#';

        if (isset($item['url']))
            echo CHtml::link($item['label'], $item['url'], $item['linkOptions']);
        else
            echo $item['label'];

        if(isset($item["flyout"])){
            echo '<a href="#" class="flyout-toggle"><span></span></a>'."\n";
            if(is_string($item["flyout"])){
                echo '<div class="flyout">'."\n";
                echo $item["flyout"]."\n";
                echo '</div>'."\n";
            }else{
                $flyout_options = array("class" => "flyout ".$item["flyout"][0]);
                echo CHtml::tag('div', $flyout_options, $item["flyout"][1]);
            }
        }
        
        echo "</li>";
    }
}
