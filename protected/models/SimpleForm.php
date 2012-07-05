<?php

class SimpleForm extends CFormModel
{
	public $field1;
	public $field1_1;
	public $field1_2;
	public $field1_3;
	public $field2;
	public $field3;
	public $field4;
	public $field5;
	public $field6;
	public $field7;
	public $field8;
	public $field9;
	public $field10;
	public $field11;
	public $field12;
	public $field13;
	public $field14;
    //Nice
	public $field15;
	public $field16;
	public $field17;
	public $field18;
	public $field19;
	public $field20;
	public $field21;
	public $field22;
	public $field23;
	public $field24;
	public $field25;
	public $field26;
    //Custom
	public $field27;
	public $field28;
	public $field29;
	public $field30;
	public $field31;
	public $field32;


	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('field8, field18', 'required', 'message' => 'Whoa, cowboy. Try that again.'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
		     //Normal
			'field1'=>'This is a label.',
			'field1_1'=>'Address',
			'field1_2'=>'File Input',
			'field1_3'=>'Captcha Input',
			'field2'=>'Small Input',
			'field3'=>'Medium Input',
			'field4'=>'Large Input',
			'field5'=>'Expanded (Full Width) Input',
			'field6'=>'Oversize Input',
			'field7'=>'',
			'field8'=>'Medium Input (with wrapper)',
			'field9'=>'Textarea',
			'field10'=>'Inline Label Textarea',
			'field11'=>'Label for Checkbox',
			'field12'=>'Label for Radio',
			'field13'=>'Dropdown Label',
			'field14'=>'Standar Input',
			//Nice
			'field15'=>'Standard Input',
			'field16'=>'',
			'field17'=>'Small Input',
			'field18'=>'Medium Input (with wrapper)',
			'field19'=>'Large Input',
            'field20'=>'Expanded (Full Width) Input',
            'field21'=>'Oversize Input',
            'field22'=>'Textarea',
            'field23'=>'Inline Label Textarea',
            'field24'=>'Label for Checkbox',
            'field25'=>'Label for Radio',
            'field26'=>'Dropdown Label',
            'field27'=>'Standar Input',
            //Custom
            'field28'=>'',
            'field29'=>'',
            'field30'=>'',
            'field31'=>'Dropdown Label',
            'field32'=>'Dropdown Label',
            
		);
	}

}
