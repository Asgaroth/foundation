<?php
/**
 * FounBaseMenu class file.
 * @author Alex Urbano <asgaroth.belem@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package foundation.widgets
 */
Yii::import( 'foundation.widgets.FounWidget' );

abstract class FounBaseMenu extends FounWidget {
    public $containerTag = 'dl';
    /**
     * @var array the menu items.
     */
    public $items = array( );

    /**
     * @var boolean whether to encode item labels.
     */
    public $encodeLabel = true;

    /**
     * Runs the widget.
     */
    public function run( ) {
        echo CHtml::openTag( $this->containerTag, $this->htmlOptions );
        $this->renderItems( $this->items );
        echo CHtml::closeTag( $this->containerTag );
    }

    /**
     * Renders a single item in the menu.
     * @param array $item the item configuration
     * @return string the rendered item
     */
    protected function renderItem( $item ) {
        if( !isset( $item['linkOptions'] ) )
            $item['linkOptions'] = array( );

        if( !isset( $item['header'] ) && !isset( $item['url'] ) )
            $item['url'] = '#';

        if( isset( $item['url'] ) )
            return CHtml::link( $item['label'], $item['url'], $item['linkOptions'] );
        else
            return $item['label'];
    }

    /**
     * Checks whether a menu item is active.
     * @param array $item the menu item to be checked
     * @param string $route the route of the current request
     * @return boolean the result
     */
    protected function isItemActive( $item, $route ) {
        if( isset( $item['url'] ) && is_array( $item['url'] ) && !strcasecmp( trim( $item['url'][0], '/' ), $route ) ) {
            if( count( $item['url'] ) > 1 )
                foreach( array_splice($item['url'], 1) as $name => $value )
                    if( !isset( $_GET[$name] ) || $_GET[$name] != $value )
                        return false;

            return true;
        }

        return false;
    }

    /**
     * Renders the items in this menu.
     * @abstract
     * @param array $items the menu items
     */
    abstract public function renderItems( $items );
}
