<h3>Forms</h3>
<h4 class="subheader">We set out in Foundation 3 to create an easy to handle, powerful, and versatile form layout system. A combination of form styles and the Foundation grid means you can do basically anything.</h4>

<h4>The Basics</h4>
<p>Form elements in Foundation 3 are styled based on their type attribute rather than <code>.input-text</code> classes, so the SCSS/CSS is much simpler.</p>
<p>Inputs in Foundation 3 have another major change &mdash; <strong>they are full width by default.</strong> That means that inputs will run as wide as the column that contains them. However, you have two options which make these forms extremely versatile:</p>
<ul class="disc">
  <li>You can size inputs using column sizes, like <code>.six</code>.</li>
  <li>You can create <code>row</code> elements inside your form and use columns for the form, including inputs, labels and more. Rows inside a form inherit some special padding to even up input spacing.</li>
</ul>

<hr />


<h4>Forms</h4>
<p>Forms in Yii Foundation are created using the FounActiveForm</p>
<script src="https://gist.github.com/3050940.js"> </script>

<h4>Row Layouts</h4>
<p>Here's an example of a form layout controlled with rows and columns.</p>

<?php 
/**
 * @var FounActiveForm
 */
$form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
<?php echo $form->textFieldRow($model, "field1", array("placeholder" => "Standard Input")); ?>    
<?php echo $form->textFieldRow($model, "field1_1", array("placeholder" => "Street")); ?>  
<div class="row">
  <div class="six columns">
      <?php echo $form->textField( $model, "field1_2", array("placeholder" => "City")); ?>
  </div>
  <div class="three columns">
      <?php echo $form->textField( $model, "field1_3", array("placeholder" => "State")); ?>
  </div>
  <div class="three columns">
      <?php echo $form->textField( $model, "field2", array("placeholder" => "ZIP")); ?>
  </div>
</div>
<?php $this->endWidget(); ?>
<script src="https://gist.github.com/3050987.js"> </script>

<p>Sometimes you want a form with labels to the left of your inputs. Piece of cake.
    You can add a class of <code>.right</code> to a label to have it align to the right,
    and if your label is next to an input (in another column) adding a class of <code>.inline</code>
    will have it vertically center against an input.
</p>

<?php $form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
<div class="row">
    <div class="two mobile-one columns">
        <?php echo $form->labelEx( $model, "field3", array("class" => 'right')); ?>
    </div>
    <div class="ten mobile-three columns">
        <?php echo $form->textField( $model, "field3", array("placeholder" => "e.g. Home", "class" => 'eight')); ?>
    </div>
</div>
<div class="row">
    <div class="two mobile-one columns">
        <?php echo $form->labelEx( $model, "field4", array("class" => 'right')); ?>
    </div>
    <div class="ten mobile-three columns">
        <?php echo $form->textField( $model, "field4", array("class" => 'eight')); ?>
    </div>
</div>
<div class="row">
    <div class="two mobile-one columns">
        <?php echo $form->labelEx( $model, "field5", array("class" => 'right')); ?>
    </div>
    <div class="ten mobile-three columns">
        <?php echo $form->textField( $model, "field4", array("class" => 'three')); ?>
    </div>
</div>
<?php $this->endWidget(); ?>

<script src="https://gist.github.com/3113919.js"> </script>

<hr />

<h4>Fieldsets</h4>
<p>Simple elements that can contain all or part of a form to create better division.</p>
<?php $form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
<fieldset>

    <legend>Fieldset Name</legend>   
    <?php echo $form->textFieldRow($model, "field6", array('placeholder' => 'Standard Input')); ?>    

    <?php echo $form->textFieldRow($model, "field7"); ?>    
    <?php echo $form->textField($model, "field8", array('class' => 'six')); ?>    

</fieldset>
<?php $this->endWidget(); ?>

<script src="https://gist.github.com/3113937.js"> </script>

<hr />


<h4>Labels and Actions with Collapsed Columns</h4>
<p>Foundation forms support actions tied to buttons, and prefix / postfix labels, through a versatile approach using special grid properties.
 Essentially you can use a 'collapsed' row to create label / action / input combinations. Here are a few examples.</p>

<?php $form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
<div class="row">
  <div class="four columns">
        <?php echo $form->textFieldRow($model, "field9", array('prefix' => '#')); ?>    
  </div>
</div>
<?php $this->endWidget(); ?>
<script src="https://gist.github.com/3118412.js"> </script>

          <p><strong>Note:</strong> for these prefix and postfix labels we're using the <a href="grid.php">mobile grid</a> to size our labels correctly on small devices.</p>

<?php $form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
<div class="row">
  <div class="five columns">
        <?php echo $form->textFieldRow($model, "field10", array('postfix' => '.com', 
        'postfixOptions' => array(
              'size' => 3,
        ))); ?>    
  </div>
</div>
<?php $this->endWidget(); ?>
<script src="https://gist.github.com/3118443.js"> </script>


<?php $form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
<div class="row">
  <div class="five columns">
        <?php echo $form->textFieldRow($model, "field11", array(
          'postfix' => '<a href="#" class="postfix button">Search</a>', 
          'postfixOptions' => array(
              'size' => 4,
              'type' => 'raw'
        ))); ?>    
  </div>
</div>
<?php $this->endWidget(); ?>

<script src="https://gist.github.com/3118721.js"> </script>

<hr />
          
<h4>Error States</h4>
<p>Foundation includes error states for labels, inputs and messaging that you can have your app generate programatically.
 You can attach a class of <code>.error</code> either to the individual elements (label, input, small) or to a container column or div.</p>
 
<?php $form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
<div class="row">
  <div class="five columns">
    <?php echo $form->textFieldRow($model, "field12"); ?>
  </div>
  <div class="five columns end">
    <?php echo $form->textFieldRow($model, "field13"); ?>
  </div>
</div>
<?php $this->endWidget(); ?>
<script src="https://gist.github.com/3118741.js"> </script>
<hr />

<?php $form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
<fieldset>
  <legend>Large Form Example</legend>
  <div class="row">
    <div class="five columns">
      <?php echo $form->textFieldRow($model, "field14"); ?>
      <?php echo $form->textFieldRow($model, "field15"); ?>
      <?php echo $form->textFieldRow($model, "field16", array('prefix' => '@', 'placeholder' => 'asgarothbelem')); ?>    
      <?php echo $form->textFieldRow($model, "field17", array(
        'postfix' => '.com', 
        'postfixOptions' => array('size' => 3), 
        'placeholder' => 'foundation.oakwebdev')); ?>    
    </div>
    <div class="five columns">
      <?php echo $form->textFieldRow($model, "field18"); ?>
      <?php echo $form->textFieldRow($model, "field19"); ?>
    </div>
  </div>
  <?php echo $form->textFieldRow($model, "field20", array('placeholder'=>"Street (e.g. 123 Awesome St.)")); ?>
  <div class="row">
    <div class="six columns">
      <?php echo $form->textField( $model, "field21", array("placeholder" => "City")); ?>
    </div>
    <div class="two columns">
      <?php echo $form->dropdownlist( $model, "field22", array("CA" => "CA")); ?>
    </div>
    <div class="four columns">
      <?php echo $form->textField( $model, "field23", array("placeholder" => "ZIP")); ?>
    </div>
  </div>
</fieldset>
<?php $this->endWidget(); ?>
<p><a href="https://gist.github.com/3118835" target="_blank">View the code for this form &rarr;</a></p>
<hr />

<h4>Custom Inputs</h4>
<?php $form=$this->beginWidget('foundation.widgets.FounActiveForm', array("type" => 'custom')); ?>
  <p>Creating easy to style custom form elements is so crazy easy, it's practically a crime. Just add a type of "custom" to a form and, if you want, jquery.customforms.js will do everything for you.</p>
  <p>The Foundation forms js will look for any checkbox, radio button, or select element and replace it with custom markup that is already styled with forms.css.</p>
  <script src="https://gist.github.com/3118850.js"> </script>

  <p>If you want to avoid a potential flash (waiting for js to load and replace your default elements) you can supply the custom markup as part of the page, and the js will instead simply map the custom elements to the inputs.</p>
  <p>Foundation custom forms will even correctly respect and apply default states for radio, checkbox and select elements. You can use the "checked" or "selected" properties just like normal, and the js will apply that as soon as the page loads.</p>

<h5>Radio Buttons and Checkboxes</h5>
<div class="row">
    <div class="four columns">
      <?php echo $form->radioButtonListRow( $model, "field24", array(
        "1" => ' Radio Button 1',
        "2" => ' Radio Button 2',
        "3" => ' Radio Button 3',
      )); ?>
    </div>
    <div class="four columns">
      <?php echo $form->radioButtonListRow( $model, "field25", array(
        "1" => ' Radio Button 1',
        "2" => ' Radio Button 2',
        "3" => ' Radio Button 3',
      )); ?>
    </div>
    <div class="four columns">
      <?php echo $form->checkBoxListRow( $model, "field26", array(
        "1" => ' Label for Checkbox',
        "2" => ' Label for Checkbox',
        "3" => ' Label for Checkbox',
      )); ?>
    </div>
</div>
<br /><br />
<script src="https://gist.github.com/3118889.js"> </script>
<br />
<h5>Dropdown / Select Elements</h5>

<?php echo $form->dropdownlistRow( $model, "field27", array(
  "1" => "This is a dropdown",
  "2" => "This is another option",
  "3" => "Look, a third option",
)); ?>

<?php echo $form->dropdownlistRow( $model, "field28", array(
  "1" => "This is a dropdown",
  "2" => "This is another option",
  "3" => "Look, a third option",
)); ?>

<?php $this->endWidget(); ?>

<script src="https://gist.github.com/3118907.js"> </script>

<h5>Adding Custom Forms with JavaScript</h5>

<p>If you are creating these custom forms using JavaScript (via AJAX, JavaScript templates or whatever), you will also need to create the custom markup that Foundation typically creates for you.</p>

<p>Foundation detects any custom forms when the document has loaded and adds the custom markup required to make the forms pretty. However, if you are adding these forms after the document has loaded, Foundation does not know to append this markup.</p>

<p>All the custom forms events are bound using jQuery.fn.on(), so you don't need to worry about event handlers not being bound to new elements.</p>
