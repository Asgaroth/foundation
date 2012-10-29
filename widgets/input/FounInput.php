<?php
/**
 * FounInput class file.
 * @author Alex Urbano <asgaroth.belem@gmail.com>
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package foundation.widgets.input
 */

/**
 * Foundation input widget.
 * Used for rendering inputs according to Foundation standards.
 */
class FounInput extends CInputWidget {
    // The different input types.
    const TYPE_TEXT = 'textfield';
    const TYPE_TEXTAREA = 'textarea';
    const TYPE_RADIOLIST = 'radioButtonList';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_RADIO = 'radiobutton';
    const TYPE_DROPDOWN = 'dropdownlist';
    const TYPE_CHECKBOXLIST = 'checkBoxList';
    const TYPE_PASSWORD = 'password';
    const TYPE_FILE = 'filefield';
    const TYPE_CAPTCHA = 'captcha';

    private $_columns = array(
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
    );
    /**
     * @var FounActiveForm the associated form widget.
     */
    public $form;

    /**
     * @var string the input type.
     * Following types are supported: checkbox, checkboxlist, dropdownlist,
     * filefield, password,
     * radiobutton, radiobuttonlist, textarea, textfield, and captcha.
     */
    public $type = self::TYPE_TEXT;
    /**
     * @var array the data for list inputs.
     */
    public $data = array( );

    public $labelHtmlOptions = array( );

    private $_addon = false;
    private $_size = 12;

    /**
     * Initializes the widget.
     * @throws CException if the widget could not be initialized.
     */
    public function init( ) {
        if( !isset( $this->form ) ) {
            throw new CException( __CLASS__.': Failed to initialize widget! Form is not set.' );
        }

        if( !isset( $this->model ) ) {
            throw new CException( __CLASS__.': Failed to initialize widget! Model is not set.' );
        }

        if( isset( $this->htmlOptions["labelHtmlOptions"] ) ) {
            $this->labelHtmlOptions = $this->htmlOptions["labelHtmlOptions"];
            unset( $this->htmlOptions["labelHtmlOptions"] );
        }

    }

    /**
     * Runs the widget.
     * @throws CException if the widget type is invalid.
     */
    public function run( ) {
        if( method_exists( $this, $this->type ) ) {
            $this->{$this->type}( );
        } else {
            throw new CException( __CLASS__.": Failed to run widget! Type '{$this->type}' is invalid." );
        }
    }

    /**
     * @param string $field the input field
     */
    protected function field( $field ) {
        if( $hasError = $this->model->hasErrors( $this->attribute ) ) {
            echo '<div class="error">';
        }
        echo $this->getLabel( $this->labelHtmlOptions );
        echo $field;
        echo $this->getError( ).$this->getHint( );
        if( $hasError ) {
            echo '</div>';
        }
    }

    /**
     * Renders a text field.
     * @return string the rendered content
     */
    protected function textfield( ) {

        $input = $prefix = $postfix = '';

        //The text input

        if( $this->hasAddOn() ){
            $input .= '<div class="row collapse">';
            $input .= $prefix = $this->getPrefix();
            $postfix = $this->getPostfix();
            $size = $this->_columns[$this->_size];
            if($prefix != "" && $postfix != ""){
                $input .= '<div class="'.$size.' columns mobile-two">';
            }else {
                $input .= '<div class="'.$size.' columns mobile-three">';
            }
            $input .= $this->form->textField( $this->model, $this->attribute, $this->htmlOptions );
            $input .= '</div>';
            $input .= $postfix;
        }else{
            $input = $this->form->textField( $this->model, $this->attribute, $this->htmlOptions );
        }


        if($this->hasAddOn()){
            $input .= '</div>';
        }

        $this->field( $input );
    }

    /**
     * Returns the prefix element for the input.
     * @return string the element
     */
    protected function getPrefix() {
        ob_start();
        if (isset($this->htmlOptions['prefix'])) {

            $this->_addon = true;

            if (isset($this->htmlOptions['prefixOptions'])) {
                $prefixOptions = $this->htmlOptions['prefixOptions'];
                unset($this->htmlOptions['prefixOptions']);
            } else {
                $prefixOptions = array('size' => 2, 'type' => 'text');
            }

            $htmlOptions = array('class' => 'prefix' );
            $size = $this->_columns[$prefixOptions['size']];
            $this->_size -= $prefixOptions['size'];

            echo '<div class="'.$size.' columns mobile-one">';
            if(isset($prefixOptions['type']) && $prefixOptions['type'] == 'raw'){
                echo $this->htmlOptions['prefix'];
            }else{
                echo CHtml::tag('span', $htmlOptions, $this->htmlOptions['prefix']);
            }
            unset($this->htmlOptions['prefix']);
            echo '</div>';
        }
        return ob_get_clean();
    }

    /**
     * Returns the postfix element for the input.
     * @return string the element
     */
    protected function getPostfix() {
        ob_start();
        if (isset($this->htmlOptions['postfix'])) {

            $this->_addon = true;

            if (isset($this->htmlOptions['postfixOptions'])) {
                $postfixOptions = $this->htmlOptions['postfixOptions'];
                unset($this->htmlOptions['postfixOptions']);
            } else {
                $postfixOptions = array('size' => 2, 'type' => 'text');
            }

            $htmlOptions = array('class' => 'postfix' );
            $size = $this->_columns[$postfixOptions['size']];
            $this->_size -= $postfixOptions['size'];

            echo '<div class="'.$size.' columns mobile-one">';
            if(isset($postfixOptions['type']) && $postfixOptions['type'] == 'raw'){
                echo $this->htmlOptions['postfix'];
            }else{
                echo CHtml::tag('span', $htmlOptions, $this->htmlOptions['postfix']);
            }
            unset($this->htmlOptions['postfix']);
            echo '</div>';
        }
        return ob_get_clean();
    }

    /**
     * Returns whether the input has an add-on (prefix and/or postfix).
     * @return boolean the result
     */
    protected function hasAddOn() {
            return $this->_addon || isset($this->htmlOptions['prefix']) || isset($this->htmlOptions['postfix']);
    }


    /**
     * Renders a password field.
     * @return string the rendered content
     */
    protected function password( ) {
        if( isset( $this->htmlOptions["class"] ) ) {
            $this->htmlOptions["class"] .= " input-text";
        } else {
            $this->htmlOptions["class"] = "input-text";
        }
        $this->field( $this->form->passwordField( $this->model, $this->attribute, $this->htmlOptions ) );
    }

    /**
     * Renders a textarea.
     * @return string the rendered content
     */
    protected function textarea( ) {
        $this->field( $this->form->textArea( $this->model, $this->attribute, $this->htmlOptions ) );
    }

    /**
     * Renders a list of radio buttons.
     * @return string the rendered content
     */
    protected function radioButtonList( ) {
        $this->field( $this->form->radioButtonList( $this->model, $this->attribute, $this->data, $this->htmlOptions ) );
    }

    /**
     * Renders a checkbox.
     * @return string the rendered content
     */
    protected function checkBox( ) {
        echo '<label for="'.CHtml::getIdByName( CHtml::resolveName( $this->model, $this->attribute ) ).'">';
        echo $this->form->checkBox( $this->model, $this->attribute, $this->htmlOptions ).PHP_EOL;
        echo $this->model->getAttributeLabel( $this->attribute );
        echo $this->getError( ).$this->getHint( );
        echo '</label>';
    }

    /**
     * Renders a radio button.
     * @return string the rendered content
     */
    protected function radioButton( ) {
        if( isset( $this->htmlOptions["labelOptions"] ) ) {
            $labelOptions = $this->htmlOptions["labelOptions"];
            unset( $this->htmlOptions["labelOptions"] );
        } else {
            $labelOptions = array( );
        }

        $label = null;
        if( isset( $labelOptions["label"] ) ) {
            $label = $labelOptions["label"];
            unset( $labelOptions["label"] );
        }
        if( !isset( $labelOptions["for"] ) ) {
            $labelOptions["for"] = CHtml::getIdByName( CHtml::resolveName( $this->model, $this->attribute ) );
        }
        echo CHtml::openTag( "label", $labelOptions );
        echo $this->form->radioButton( $this->model, $this->attribute, $this->htmlOptions ).PHP_EOL;
        if( $label !== null ) {
            if( $label !== false ) {
                echo $label;
            }
        } else {
            echo $this->model->getAttributeLabel( $this->attribute );
        }
        echo $this->getError( ).$this->getHint( );
        echo '</label>';
    }

    /**
     * Renders a drop down list (select).
     * @return string the rendered content
     */
    protected function dropdownlist( ) {
        echo $this->getLabel( $this->labelHtmlOptions );
        echo $this->form->dropDownList( $this->model, $this->attribute, $this->data, $this->htmlOptions );
        echo $this->getError( ).$this->getHint( );
    }

    /**
     * Renders a list of checkboxes.
     * @return string the rendered content
     */
    protected function checkBoxList( ) {
        echo $this->getLabel( $this->labelHtmlOptions );
        echo $this->form->checkBoxList( $this->model, $this->attribute, $this->data, $this->htmlOptions );
        echo $this->getError( ).$this->getHint( );
    }

    /**
     * Renders a file field.
     * @return string the rendered content
     */
    protected function fileField( ) {
        $this->field( $this->form->fileField( $this->model, $this->attribute, $this->htmlOptions ) );
    }

    /**
     * Renders a CAPTCHA.
     * @return string the rendered content
     */
    protected function captcha( ) {
        if( isset( $this->htmlOptions["class"] ) ) {
            $this->htmlOptions["class"] .= " input-text";
        } else {
            $this->htmlOptions["class"] = "input-text";
        }

        $output = '<div class="captcha">';
        $output .= '<div class="widget-captcha">'.$this->widget( 'CCaptcha', $this->data, true ).'</div>';
        $output .= $this->form->textField( $this->model, $this->attribute, $this->htmlOptions );
        $output .= '</div>';
        $this->field( $output );
    }

    /**
     * Returns the error text for the input.
     * @param array $htmlOptions additional HTML attributes
     * @return string the error text
     */
    protected function getError( $htmlOptions = array() ) {
        return $this->form->error( $this->model, $this->attribute, $htmlOptions );
    }

    /**
     * Returns the hint text for the input.
     * @return string the hint text
     */
    protected function getHint( ) {
        if( isset( $this->htmlOptions['hint'] ) ) {
            $hint = $this->htmlOptions['hint'];
            unset( $this->htmlOptions['hint'] );
            return '<p class="help-block">'.$hint.'</p>';
        } else
            return '';
    }

    /**
     * Returns the label for the input.
     * @param array $htmlOptions additional HTML attributes
     * @return string the label
     */
    protected function getLabel( $htmlOptions = array() ) {
        if( !in_array( $this->type, array(
                'checkbox',
                'radio',
                'radioButtonList',
                'checkBoxList'
            ) ) && $this->hasModel( ) )
            return $this->form->labelEx( $this->model, $this->attribute, $htmlOptions );
        else
            return '';
    }

}
