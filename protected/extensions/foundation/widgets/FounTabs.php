<?php
/**
 * FounTabs class file.
 * @author Alex Urbano <asgaroth.belem@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package foundation.widgets
 */
Yii::import('foundation.widgets.FounBaseMenu');

/**
 * Foundation menu widget.
 * Used for rendering of foundation menus with support dropdown sub-menus.
 * @since 0.9.8
 */
class FounTabs extends FounBaseMenu {

    /**
     * @var string the menu type.
     * Any combination of 'contained', 'nice', 'vertical'. Defaults to null meaning normal tabs.
     */
    public $type;

    private $_content = array();

    /**
     * Initializes the widget.
     */
    public function init() {
        $route = $this -> controller -> getRoute();
        $this -> items = $this -> normalizeItems($this -> items, $route);
        if (!empty($this -> _content)) {
            if ($this -> type !== null) {
                $htmlOptions = array("class" => "tabs-content {$this->type}");
            } else {
                $htmlOptions = array("class" => "tabs-content");
            }
            $this -> _content = CHtml::tag("ul", $htmlOptions, implode("\n", $this -> _content));
        } else {
            $this -> _content = false;
        }

        if ($this -> type !== null) {
            $cssClass = "tabs {$this -> type}";
        } else {
            $cssClass = 'tabs';
        }

        if (isset($this -> htmlOptions['class'])) {
            $this -> htmlOptions['class'] .= ' ' . $cssClass;
        } else {
            $this -> htmlOptions['class'] = $cssClass;
        }

    }

    public function run() {
        parent::run();
        if ($this -> _content !== false) {
            echo $this -> _content;
        }
    }

    /**
     * Renders the items in this menu.
     * @param array $items the menu items
     */
    public function renderItems($items) {
        foreach ($items as $item) {
            if (!isset($item['itemOptions'])) {
                $item['itemOptions'] = array();
            }

            $cssClass = "";
            if ($item['active'] || (isset($item['items']) && $this -> isChildActive($item['items']))) {
                $cssClass = 'active';
            }

            if (isset($item['itemOptions']['class'])) {
                $item['itemOptions']['class'] .= ' ' . $cssClass;
            } else {
                $item['itemOptions']['class'] = $cssClass;
            }

            echo CHtml::openTag('dd', $item['itemOptions']);
            echo $this -> renderItem($item);
            echo "</dd>\n";
        }
    }

    /**
     * Normalizes the items in this menu.
     * @param array $items the items to be normalized
     * @param string $route the route of the current request
     * @return array the normalized menu items
     */
    protected function normalizeItems($items, $route) {
        $id = $this -> getId();
        $j = 0;
        foreach ($items as $i => $item) {
            if (isset($item['visible']) && !$item['visible']) {
                unset($items[$i]);
                continue;
            }

            if (!isset($item['label']))
                $item['label'] = '';

            if (isset($item['encodeLabel']) && $item['encodeLabel'])
                $items[$i]['label'] = CHtml::encode($item['label']);

            if (($this -> encodeLabel && !isset($item['encodeLabel'])) || (isset($item['encodeLabel']) && $item['encodeLabel'] !== false))
                $items[$i]['label'] = CHtml::encode($item['label']);

            if (!isset($item['active']))
                $items[$i]['active'] = $this -> isItemActive($item, $route);

            if (isset($item['content'])) {
                $content = $item['content'];
                unset($items[$i]['content']);

                if (!isset($item['id'])){
                    $item['id'] = $id . '_tab_' . ++$j;
                }
                $items[$i]['url'] = '#' . $item['id'];
                
                if (!isset($item['tabOptions']))
                    $item['tabOptions'] = array();

                $tabOptions = $item['tabOptions'];
                unset($items[$i]['tabOptions']);

                $tabOptions['id'] = $item['id']."Tab";

                if ($i === 0) {
                    $tabOptions['class'] = ' active';
                    if (isset($item["linkOptions"])) {
                        if (isset($item["linkOptions"]["class"])) {
                            $items[$i]["linkOptions"]["class"] .= " active";
                        } else {
                            $items[$i]["linkOptions"]["class"] = " active";
                        }
                    }else{
                         $items[$i]["linkOptions"]["class"] = " active";
                    }
                }

                $this -> _content[] = CHtml::tag('li', $tabOptions, $content);
            }else{
                if (!isset($item['id'])){
                    $item['id'] = $id . '_tab_' . ++$j;
                }
                
                if(!isset($item["url"]))
                    $items[$i]['url'] = '#' . $item['id'];
            }

        }

        return array_values($items);
    }

}
