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
			array('field12, field13, field18, field19', 'required', 'message' => 'Invalid entry'),
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
			'field3'=>'Address Name:',
			'field4'=>'City:',
			'field5'=>'ZIP:',
			'field6'=>'This is a label.',
			'field7'=>'Address',
			'field8'=>'',
			'field9'=>'Input with a prefix character',
			'field10'=>'Input with a postfix label',
			'field11'=>'Input with a postfix action (button)',
			'field12'=>'Field with Error',
			'field13'=>'Another Error',
			//Large form
			'field14'=>'Name',
			'field15'=>'Occupation',
			'field16'=>'Twitter',
			'field17'=>'URL',
			'field18'=>'Field with Error',
			'field19'=>'Another Error',
            'field20'=>'Address',
            'field21'=>'',
            'field22'=>'',
            'field23'=>'',

            //Custom
            'field24'=>'Label for Checkbox',
            'field25'=>'Label for Radio',
            'field26'=>'Dropdown Label',
            'field27'=>'Dropdown Label',
            'field28'=>'Dropdown Label',
            //Custom
            'field29'=>'',
            'field30'=>'',
            'field31'=>'Dropdown Label',
            'field32'=>'Dropdown Label',
            
		);
	}

}
