<?php
/**
 * FounSubNav class file.
 * @author Alex Urbano <asgaroth.belem@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package foundation.widgets
 */

Yii::import('foundation.widgets.FounBaseMenu');

/**
 * Foundation subnavigation widget.
 */
class FounSubNav extends FounBaseMenu {

    /**
     * Subnavigation title
     */
    public $title;

    /**
     * @var array navigation items.
     * @since 0.9.8
     */
    public $items = array();

    /**
     * Initializes the widget.
     */
    public function init() {
        $route = $this -> controller -> getRoute();
        $this -> items = $this -> normalizeItems($this -> items, $route);

        if (isset($this -> htmlOptions['class'])) {
            $this -> htmlOptions['class'] .= ' sub-nav';
        } else {
            $this -> htmlOptions['class'] = 'sub-nav';
        }

    }

    /**
     * Renders the items in this menu.
     * @param array $items the menu items
     */
    public function renderItems($items) {
        if ($this -> title !== null) {
            echo "<dt>" . $this -> title . "</dt>\n";
        }
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

            if (!isset($item["url"]))
                $items[$i]['url'] = '#';

        }

        return array_values($items);
    }

}
