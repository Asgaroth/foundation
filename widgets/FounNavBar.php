<?php
/**
 * FounNavBar class file.
 * @author Alex Urbano <asgaroth.belem@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package foundation.widgets
 */

Yii::import( 'foundation.widgets.FounBaseMenu' );

/**
 * Foundation navigation bar widget.
 */
class FounNavBar extends FounBaseMenu {
    public $containerTag = 'ul';
    /**
     * @var array navigation items.
     * @since 0.9.8
     */
    public $items = array( );

    /**
     * Initializes the widget.
     */
    public function init( ) {
        $route = $this->controller->getRoute( );
        $this->items = $this->normalizeItems( $this->items, $route );
    }

    /**
     * Runs the widget.
     */
    public function run( ) {
        if( isset( $this->htmlOptions['class'] ) )
            $this->htmlOptions['class'] .= ' nav-bar';
        else
            $this->htmlOptions['class'] = 'nav-bar';

        parent::run( );
    }

    /**
     * Normalizes the items in this menu.
     * @param array $items the items to be normalized
     * @param string $route the route of the current request
     * @return array the normalized menu items
     */
    protected function normalizeItems( $items, $route ) {
        $id = $this->getId( );
        $j = 0;
        foreach( $items as $i => $item ) {
            if( isset( $item['visible'] ) && !$item['visible'] ) {
                unset( $items[$i] );
                continue;
            }

            if( !isset( $item['label'] ) )
                $item['label'] = '';

            if( isset( $item['encodeLabel'] ) && $item['encodeLabel'] )
                $items[$i]['label'] = CHtml::encode( $item['label'] );

            if( ($this->encodeLabel && !isset( $item['encodeLabel'] )) || (isset( $item['encodeLabel'] ) && $item['encodeLabel'] !== false) )
                $items[$i]['label'] = CHtml::encode( $item['label'] );

            if( !isset( $item['active'] ) ){
                $items[$i]['active'] = $this->isItemActive( $item, $route );
            }

            if( !isset( $item["url"] ) )
                $items[$i]['url'] = '#'.$item['id'];

        }

        return array_values( $items );
    }

    /**
     * Renders the items in this menu.
     * @param array $items the menu items
     */
    public function renderItems( $items ) {
        foreach( $items as $item ) {
            if( is_string( $item ) ) {
                echo "<li>".$item."</li>";
            } else {
                $this->renderItem( $item );
            }
        }
    }

    /**
     * Renders a single item in the menu.
     * @param array $item the item configuration
     * @return string the rendered item
     */
    protected function renderItem( $item ) {
        if( isset( $item["flyout"] ) ) {
            if( isset( $item["flyout"][2] ) && $item["flyout"][2] ) {
                echo '<li class="has-flyout hide-on-tablets">'."\n";
            } else {
                echo '<li class="has-flyout">'."\n";
            }
        } else {
            echo "<li>\n";
        }
        if( !isset( $item['linkOptions'] ) ){
            $active = $item["active"] ? " active":"";
            $item['linkOptions'] = array( "class" => "main{$active}" );
        }else {
            $active = $item["active"] ? " active":"";
            if( isset( $item['linkOptions']['class'] ) ) {
                $item['linkOptions']['class'] .= " main{$active}";
            } else {
                $item['linkOptions']['class'] = "main{$active}";
            }
        }

        if( !isset( $item['header'] ) && !isset( $item['url'] ) )
            $item['url'] = '#';

        if( isset( $item['url'] ) )
            echo CHtml::link( $item['label'], $item['url'], $item['linkOptions'] );
        else
            echo $item['label'];

        if( isset( $item["flyout"] ) ) {
            echo '<a href="#" class="flyout-toggle"><span></span></a>'."\n";
            if( is_string( $item["flyout"] ) ) {
                echo '<div class="flyout">'."\n";
                echo $item["flyout"]."\n";
                echo '</div>'."\n";
            } else {
                $flyout_options = array( "class" => "flyout ".$item["flyout"][0] );
                echo CHtml::tag( 'div', $flyout_options, $item["flyout"][1] );
            }
        }

        echo "</li>";
    }

}
