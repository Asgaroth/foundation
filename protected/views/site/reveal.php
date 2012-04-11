<h3>Reveal</h3>
                <h4 class="subheader">Reveal is our new modal plugin. We kept it light-weight, simple, and totally flexible (there's a 'your mom' joke in there somewhere). Go ahead, <a href="" data-reveal-id="testModal">see what a default Reveal modal looks like.</a></h4>
                <hr />
                
                <h4>Using Reveal</h4>
                <p>Reveal is a cinch to hook up - just include the JS and CSS. You can either call it in the JS or just include a new "data-reveal-id" parameter. If you need detailed steps check out the <a href="http://www.zurb.com/playground/reveal-modal-plugin">playground for Reveal</a>, but here are the steps to get it started:</p>
                <ol>
                    <li>The markup goes something like this:<br /><br />
                    <script src="http://snipt.net/embed/abdf882c25e08d9ba219fe33f17591fe"></script><br />
                    </li>
                    <li>
                        Activate Reveal...but there are two ways to do this glorious action. The first is to attach a handler to something (button most likely) then call Reveal: <br/><br />
                        <script src="http://snipt.net/embed/c723edab0ed473c55a27af5dce37abfe"></script><br />
                        <strong>OR</strong> the new hotness option is to just add a data-reveal-id to the object which you want to fire the modal when clicked...<br /><br />
                        <script src="http://snipt.net/embed/896416888c9bf045d01aca39f64df7b7"></script><br />
                        This will launch the modal with the ID "myModal2" without attaching a handler or calling the plugin (since the plugin is always listening for this). You can also pass any of the parameters simply by putting a data-nameOfParameter="value" (i.e. data-animation="fade")
                    </li>
                </ol>
                <hr />  
                <h4>Options</h4>
                <script src="http://snipt.net/embed/190995aac581e583e72e9c2bd6bc1794"></script><br />
                <p>Options can be used on the "data-reveal-id" implementation too, just do it like this:</p>
                <script src="http://snipt.net/embed/34db731ca7ab2b9eabe5ac5dd381ea28"></script>