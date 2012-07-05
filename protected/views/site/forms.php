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

                  <form>
                    <div class="row">
                      <div class="two mobile-one columns">
                        <label class="right">Address Name:</label>
                      </div>
                      <div class="ten mobile-three columns">
                        <input type="text" placeholder="e.g. Home" class="eight" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="two mobile-one columns">
                        <label class="right">City:</label>
                      </div>
                      <div class="ten mobile-three columns">
                        <input type="text" class="eight" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="two mobile-one columns">
                        <label class="right">ZIP:</label>
                      </div>
                      <div class="ten mobile-three columns">
                        <input type="text" class="three" />
                      </div>
                    </div>
                  </form>

                <?php 
                /**
                 * @var FounActiveForm
                 */
                $form=$this->beginWidget('foundation.widgets.FounActiveForm'); ?>
                <?php echo $form->textFieldRow($model, "field3", array("class" => "medium")); ?>    
                <?php echo $form->textFieldRow($model, "field4", array("class" => "large")); ?>    
                <?php echo $form->textFieldRow($model, "field5", array("class" => "expand")); ?>    
                <?php echo $form->textFieldRow($model, "field6", array("class" => "oversize")); ?>    
                <h5>Inline Labels</h5>
                <p>Inline labels are accomplished using the HTML5 Placeholder attribute, with a built-in JS fallback.</p>
                <?php echo $form->textFieldRow($model, "field7", array("placeholder" => "Inline label", 'labelHtmlOptions' => array("label" => false))); ?>
                <script type="text/javascript" src="http://snipt.net/embed/11edadb787658f3d97729643a09cb881"></script>    
                <h5>Error States</h5>
                <p>Error states can be applied in two ways:</p>
                <ul class="disc">
                    <li>Using a wrapper for div.form-field.error, which will apply styles to text inputs, labels, and a small.error message (optional). This is ideal for programmatically generated forms.</li>
                    <li>You can also apply the .red class to labels, inputs, and also append a small.error.</li>
                </ul>
                <?php echo $form->textFieldRow($model, "field8", array("class" => "medium")); ?>    
                <p>Error states in Yii Foundation use the wrapper method, you dont have to do anything to get the styles, the extension takes care of it for you</p>
                <hr />
                <?php echo $form->textAreaRow($model, "field9"); ?>    
                <?php echo $form->textAreaRow($model, "field10", array("placeholder" => "This is a text area")); ?>    
                <?php echo $form->checkboxRow($model, "field11"); ?>    
                <?php echo $form->radioButtonRow($model, "field12"); ?>
                <?php echo $form->dropDownListRow($model, "field13", array("1" => "This is a dropdown", "2" => "This is another option", "3" => "Look, a third option")); ?>
                <script type="text/javascript" src="http://snipt.net/embed/fa4afa99fa0285ef33133a8d7b11de08"></script>
                <div class="row">
                        <div class="seven columns">
                            <fieldset>
                                <h5>Fieldset Header H2</h5>
                                <p>This is a paragraph within a fieldset.</p>
                                <?php echo $form->textFieldRow($model, "field14"); ?>    
                            </fieldset>
                        </div>
                </div>
                <script type="text/javascript" src="http://snipt.net/embed/64855dca10e703b8a2d9a7819e3c8d4d"></script>
                
                <?php $this->endWidget(); ?>

                <hr />

                <h4>Nice Forms</h4>
                
                 <?php 
                /**
                 * @var FounActiveForm
                 */
                $form=$this->beginWidget('foundation.widgets.FounActiveForm', array(
                    'id'=>'form-nice',
                    'type'=>'nice',
                )); ?>
                <p>Changing the form style to a slightly fancier version is dead simple - set the FounActiveForm type attribute to 'nice'.</p>
                <script type="text/javascript" src="http://snipt.net/embed/70ebd5e16758191069f88d237c311733"></script>
                <?php echo $form->textFieldRow($model, "field15"); ?>    
                <?php echo $form->textFieldRow($model, "field16", array("placeholder" => "Inline label", 'labelHtmlOptions' => array("label" => false))); ?>
                <?php echo $form->textFieldRow($model, "field17", array("class" => "small")); ?>    
                <?php echo $form->textFieldRow($model, "field18", array("class" => "medium")); ?>    
                <?php echo $form->textFieldRow($model, "field19", array("class" => "large")); ?>    
                <?php echo $form->textFieldRow($model, "field20", array("class" => "expand")); ?>    
                <?php echo $form->textFieldRow($model, "field21", array("class" => "oversize")); ?>    
                <?php echo $form->textAreaRow($model, "field22"); ?>    
                <?php echo $form->textAreaRow($model, "field23", array("placeholder" => "This is a text area")); ?>    
                <?php echo $form->checkboxRow($model, "field24"); ?>    
                <?php echo $form->radioButtonRow($model, "field25"); ?>
                <?php echo $form->dropDownListRow($model, "field26", array("1" => "This is a dropdown", "2" => "This is another option", "3" => "Look, a third option")); ?>
                <div class="row">
                        <div class="seven columns">
                            <fieldset>
                                <h5>Fieldset Header H2</h5>
                                <p>This is a paragraph within a fieldset.</p>
                                <?php echo $form->textFieldRow($model, "field1"); ?>    
                            </fieldset>
                        </div>
                </div>
                
                <?php $this->endWidget(); ?>
                <hr />

                <h3>Custom Forms</h3>   
                
                 
                <?php 
                /**
                 * @var FounActiveForm
                 */
                $form=$this->beginWidget('foundation.widgets.FounActiveForm', array(
                    'id'=>'form-custom',
                    'type'=>'custom',
                )); ?>
                    <p>Creating easy to style custom form elements is so crazy easy, it's practically a crime. Just set the FounActiveForm type attribute to 'custom', if you want, forms.jquery.js will do everything for you.</p>
                    <script type="text/javascript" src="http://snipt.net/embed/abb88a265dbea6c461aaf98d5fd9b7db"></script>
                    <p>The Foundation forms js will look for any checkbox, radio button, or select element and replace it with custom markup that is already styled with forms.css.</p>
                    
                    <p>Foundation custom forms will even correctly respect and apply default states for radio, checkbox and select elements. You can use the 'checked' or 'selected' properties just like normal, and the js will apply that as soon as the page loads.</p>
                    
                    <h5>Radio Buttons</h5>
                    <p>
                        <script type="text/javascript" src="http://snipt.net/embed/296cd30848b462ab5a099d25481711a6"></script>
                        <script type="text/javascript" src="http://snipt.net/embed/8fcb1d67179ebc3e79b873419be04bf2"></script>
                    </p>
                    
                    <h5>Checkboxes</h5>
                    <p>
                        <script type="text/javascript" src="http://snipt.net/embed/f586a30b00e8b764b3e85be227c709b8"></script>
                        <script type="text/javascript" src="http://snipt.net/embed/01d86277dee91bab34dd1baed52d2c18"></script>
                    </p>
    
                    <div class="row">
                        <div class="four columns">
                            <?php echo $form->radioButtonListRow($model, "field28", array(
                                "1" => "Radio Button 1",
                                "2" => "Radio Button 2",
                                "3" => "Radio Button 3",
                            ), array('labelHtmlOptions' => array("label" => false))); ?>
                        </div>
                        <div class="four columns">
                            <?php echo $form->radioButtonListRow($model, "field29", array(
                                "1" => "Radio Button 1",
                                "2" => "Radio Button 2",
                                "3" => "Radio Button 3",
                             ), array('labelHtmlOptions' => array("label" => false))); ?>
                        </div>
                        <div class="four columns">
                            <?php echo $form->checkBoxListRow($model, "field30", array(
                                "1" => "Label for Checkbox",
                                "2" => "Label for Checkbox",
                                "3" => "Label for Checkbox",
                             ), array('labelHtmlOptions' => array("label" => false))); ?>
                        </div>
                    </div>
    
                    <h5>Dropdown / Select Elements</h5>
                    <p>
                        <script type="text/javascript" src="http://snipt.net/embed/cb01f69f04e0254a0d643dc45b1b4097"></script>
                        <script type="text/javascript" src="http://snipt.net/embed/bb153a86cba41617b41d91268828bb42"></script>
                    </p>
                    
                    <?php echo $form->dropDownListRow($model, "field31", array(
                        "1" => "This is a dropdown", 
                        "2" => "This is another option", 
                        "3" => "Look, a third option"
                    )); ?>
                    <?php echo $form->dropDownListRow($model, "field32", array("1" => "This is a dropdown", "2" => "This is another option", "3" => "Look, a third option")); ?>
               <?php $this->endWidget(); ?>
                
                <h5>Adding Custom Forms with JavaScript</h5>

                <p>If you are creating these custom forms using JavaScript (via AJAX, JavaScript templates or whatever), you will also need to create the custom markup that Foundation typically creates for you.</p>

                <p>Foundation detects any custom forms when the document has loaded and adds the custom markup required to make the forms pretty. However if you are adding these forms after the document has loaded, Foundation does not know to append this markup.</p>

                <p>All the custom forms events are bound using jQuery.fn.on(), so you don't need to worry about event handlers not being bound to new elements.</p>
                