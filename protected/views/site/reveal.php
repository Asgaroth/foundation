<h3>Reveal &mdash; Simple, Flexible Modal Dialogs</h3>
                <h4 class="subheader">Modal dialogs, or pop-up windows, are handy for prototyping and production. Foundation includes Reveal our jQuery modal plugin, to make this easy for you.</h4>

                <p><a href="#" data-reveal-id="exampleModal" class="radius button">Example Modal&hellip;</a></p>

                <hr />

                <h4>Using Reveal</h4>
                <p>Reveal is easy to hook up. Include the JS and CSS in your <code>head</code> (both of which are included in foundation.css and foundation.js, if you use the downloaded code pack). You can either call it in the JS or include a "data-reveal-id" parameter. Here are the steps to get started:</p>

                  <h5>Markup</h5>
                    <p><strong>Remember:</strong> your modal should be at the end of the page, after any of your rows or columns.</p>
                    <script src="https://gist.github.com/2955944.js?file=f3-reveal-example.html"></script>

                    <h5>Calling Reveal</h5>
                <p>There are two ways to do call a Reveal modal. The first is to attach a handler to something (button most likely) then call Reveal:</p>
                    <script src="https://gist.github.com/2955951.js?file=f3-reveal.html"></script>

                    <p>The new hotness: just add a data-reveal-id to the object which you want to fire the modal when clicked...</p>
                    <script src="https://gist.github.com/2955957.js?file=f3-reveal-id.html"></script>

                    <p>This will launch the modal with the ID "myModal2" without attaching a handler or calling the plugin (since the plugin is always listening for this). You can also pass any of the parameters simply by putting a data-nameOfParameter="value" (i.e. data-animation="fade")</p>

                <hr />

                <h4>Options</h4>
                <script src="https://gist.github.com/2956001.js?file=f3-reveal-options.js"></script>

                <p>Options can be used on the "data-reveal-id" implementation too, just do it like this:</p>

                <script src="https://gist.github.com/2956006.js?file=f3-reveal-data-options.html"></script>


