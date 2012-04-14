<h3>UI Elements</h3>
<h4 class="subheader">Need tabs, tables, or other common UI elements?
<br />
Yeah, we got that.</h4>
<hr />
<h4>Alerts</h4>
<p>
	Alerts are a handy element you can drop into a form or inline on a page to communicate success, warnings, failure or just information. The syntax is extremely simple and like anything else in Foundation, easy to customize.
</p>
<?php $this->widget("foundation.widgets.FounAlert"); ?>
<p>
	<script type="text/javascript" src="http://snipt.net/embed/7d5c009e4eb8bbc78647caeca308e61b"></script>
</p>
<hr />
<h4>Labels</h4>
<p>
	Labels are useful inline styles that can be dropped into body copy to call out certain sections or to attach metadata. Examples might be noting when something was updated or that something is new. The syntax is simple, just a <code>
		span</code>
	element with a class of .label. The border styling mirrors that of the Foundation buttons.
</p>
<div class="row">
	<div class="three columns phone-two">
		<p>
			<span class="label">Regular Label</span>
			<br />
			<br />
			<span class="radius label">Radius Label</span>
			<br />
			<br />
			<span class="round label">Round Label</span>
		</p>
	</div>
	<div class="three columns phone-two">
		<p>
			<span class="blue radius label">Blue Label</span>
			<br />
			<br />
			<span class="red radius label">Red Label</span>
			<br />
			<br />
			<span class="black radius label">Black Label</span>
			<br />
			<br />
			<span class="green radius label">Green Label</span>
			<br />
			<br />
			<span class="white radius label">White Label</span>
		</p>
	</div>
</div>
<p>
	<span class="label">Added 01/19</span> This paragraph has an inline label to let you know that it was added on January 19, 2012 courtesy of Thomas Klemm. Thanks man!
</p>
<p>
	<script type="text/javascript" src="http://snipt.net/embed/eabd94fbda853d866057cbda5e8ab64a"></script>
</p>
<hr />
<h4>Tooltips</h4>
<p>
	Tooltips are a quick way to provide extended information on a term or action on a page. They work cross browser and cross platfrom and are easily added to a page by including the jquery.tooltip.js plugin. You can apply the <strong>has-tip</strong> class to any element, as long as you assign it a unique ID.
</p>
<p>
	By default the tooltip takes the width of the element that it is applied to, but you can override this behavior by applying a <strong>data-width</strong> attribute to the target element. The tooltip takes on the content of the targets <strong>title</strong> attribute.
</p>
<p>
	The tooltips can be positioned on the <span class="has-tip" data-width="210" title="I'm on bottom and the default position.">"tip-bottom"</span>, which is the default position, <span class="has-tip tip-top noradius" data-width="210" title="I'm on the top and I'm not rounded!">"tip-top" (hehe)</span>, <span class="has-tip tip-left" data-width="90" title="I'm on the left!">"tip-left"</span>, or <span class="has-tip tip-right" data-width="90" title="I'm on the right!">"tip-right"</span> of the target element.In a mobile environment the tooltips are full width and bottom aligned.
</p>
<hr />
<h4>Panels</h4>
<p>
	A panel is a simple, helpful css class that enables you to outline sections of your page easily. This allows you to view your page sections as you add content to them, or add emphasis to a section (for example the download box on the right).
</p>
<div class="panel">
	<h5>My panel is bigger than yours.</h5>
	<p>
		Seriously, just look at this sweet panel.
	</p>
</div>
<p>
	<script type="text/javascript" src="http://snipt.net/embed/66b5c85cee4ee8648ad51dfcf2c2ffd6"></script>
</p>
<hr/>
<h4>Tabs</h4>
<div class="row">
	<div class="six columns">
		<p>
			Tabs are very versatile both as organization and navigational constructs. To keep things easy for everyone we've created two main tab styles (simple and nice) as well as two variants of each - open and contained. With the base Foundation package, tabs of a particular format are actually already hooked up - no extra work required.
		</p>
	</div>
	<div class="six columns">
		<p>
			Tabs are made of <strong>two objects:</strong> a DL object containing the tabs themselves, and a UL object containing the tab content. If you simply want visual tabs (as seen in this documentation) without the on-page hookup, you only need the DL. If you want functional tabs, just be sure that each tab is linked to an ID, and that the corresponding tab has an ID of tabnameTab. Check out these examples.
		</p>
	</div>
</div>
<p>
	<em>Note: The third tab is using the <a href="<?php echo $this->createUrl("layout"); ?>">mobile visibility classes</a> to hide on small devices.</em>
</p>
<h5>Simple Tabs</h5>
<?php
    $this -> widget("foundation.widgets.FounTabs", array('items' => array(
            array('label' => 'Simple Tab 1', 'content' => "This is simple tab 1's content. Pretty neat, huh? "),
            array('label' => 'Simple Tab 2', 'content' => "This is simple tab 2's content. Now you see it! "),
            array('label' => 'Simple Tab 3', 'content' => "This is simple tab 3's content. It's only okay. "),
    )));
?>
<script type="text/javascript" src="http://snipt.net/embed/8584f6a5cc2ad250dbeaefdd5bcac8c1"></script>
<hr />
<h5>Contained Tabs</h5>
<p>
	Contained tabs have a simple added class of 'contained' on the tabs-content element. What that means is the tab content has a border around it tying it to the tabs, and the padding on that container (by default) is one column on each side. That means you can still use standard column sizes inside a tab element.
</p>
<?php
    $this -> widget("foundation.widgets.FounTabs", array('type' => 'contained', 'items' => array(
            array('label' => 'Simple Tab 1', 'content' => "This is simple tab 1's content. Pretty neat, huh? "),
            array('label' => 'Simple Tab 2', 'content' => "This is simple tab 2's content. Now you see it! "),
            array('label' => 'Simple Tab 3', 'content' => "This is simple tab 3's content. It's only okay. "),
    )));
?>
<script type="text/javascript" src="http://snipt.net/embed/75fa2eb509f92fdb16947679f2a3896e"></script>
<hr />
<h5>Nice Tabs</h5>
<p>
	Need something a little fancier? Nice tabs have some sweet default styling and can add a little polish to a prototype (or documentation). They can be both standard and contained, just like the simple tabs.
</p>
<?php
    $this -> widget("foundation.widgets.FounTabs", array('type' => 'nice contained', 'items' => array(
            array('label' => 'Nice Tab 1', 'content' => "This is simple tab 1's content. Pretty neat, huh? "),
            array('label' => 'Nice Tab 2', 'content' => "This is simple tab 2's content. Now you see it! "),
            array('label' => 'Nice Tab 3', 'content' => "This is simple tab 3's content. It's only okay. "),
    )));
?>
<script type="text/javascript" src="http://snipt.net/embed/a7377ec6c652b3b574cdf479824bc1c6"></script>
<hr />
<h5>Vertical Tabs</h5>
<p>
	You can also use tabs in a vertical configuration by adding a class of 'vertical' to the DL element. These are great for more scalable nav, and you can see how they work on this page on a tablet or desktop.
</p>
<?php
    $this -> widget("foundation.widgets.FounTabs", array('type' => 'nice vertical', 'items' => array(
            array('label' => 'Vertical Tab 1', 'linkOptions' => array("class"=>"active")),
            array('label' => 'Vertical Tab 2'),
            array('label' => 'Vertical Tab 3'),
    )));
?>
<script type="text/javascript" src="http://snipt.net/embed/0dc04fc8cdcbdd2ade5b815f363335da"></script>
<p>
    Tabs can also work as a normal <a href="http://www.yiiframework.com/doc/api/1.1/CMenu/">CMenu</a> widget, this page for example uses the following code for its left-side menu
</p>
<script type="text/javascript" src="http://snipt.net/embed/48eb7db877dc7316224117a7812157e7"></script>

<hr />
<h5>Mobile Tabs</h5>
<p>
	To demonstrate how mobile navigation can work, adding a class of 'mobile' to a tab group will switch them (at small resolutions) to full width nav bars.
</p>
<hr />
<h4>Nav Bar</h4>
<p>
	If you need a more traditional nav bar with dropdowns, you can use this sucka. The dropdowns are optional - omitting the flyout element and .has-flyout class means it will act as a standard link. The flyouts can hold arbitrary content, including grid objects, and have three sizes (.small, standard, and .large).
</p>
<p>
	<em>Note: In IE7 the dropdowns are obscured by the code snippet below. This is due to IE7s iframe z-index bug, and is not an issue with the dropdowns themselves. Try not to have dropdown elements over an iframe.</em>
</p>
<ul class="nav-bar">
	<li>
		<a href="#" class="main">Nav Item 1</a>
	</li>
	<li class="has-flyout">
		<a href="#" class="main">Nav Item 2</a>
		<a href="#" class="flyout-toggle"><span> </span></a>
		<div class="flyout small">
			<h5>Small Example (200px)</h5>
			<p>
				This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.
			</p>
		</div>
	</li>
	<li class="has-flyout">
		<a href="#" class="main">Nav Item 3</a>
		<a href="#" class="flyout-toggle"><span> </span></a>
		<div class="flyout">
			<div class="row">
				<div class="twelve columns">
					<h5>Medium Example (400px)</h5>
					<div class="row">
						<div class="six columns">
							<p>
								This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.
							</p>
						</div>
						<div class="six columns">
							<p>
								This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li class="has-flyout hide-on-tablets">
		<a href="#" class="main">Nav Item 4</a>
		<a href="#" class="flyout-toggle"><span> </span></a>
		<div class="flyout large right">
			<div class="row">
				<div class="twelve columns">
					<h5>Large Example (600px)</h5>
					<div class="row">
						<div class="four columns">
							<p>
								This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.
							</p>
							<p>
								This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.
							</p>
						</div>
						<div class="four columns">
							<p>
								This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.
							</p>
							<p>
								This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text. This is example text.
							</p>
						</div>
						<div class="four columns">
							<img src="http://placehold.it/200x250" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
</ul>
<script type="text/javascript" src="http://snipt.net/embed/7dd4b241f040a3437468b7e7176429a6"></script>
<p>
	You can also drop inputs into the nav in place of an anchor. Here you can see a search input.
</p>
<ul class="nav-bar">
	<li>
		<input type="search" />
	</li>
	<li class="has-flyout">
		<a href="" class="main">Nav Element</a>
		<a href="http://www.zurb.com" class="flyout-toggle"><span> </span></a>
		<div class="flyout">
			<ul>
				<li>
					<a href="">This is a link in a UL.</a>
				</li>
				<li>
					<a href="">This is a link in a UL.</a>
				</li>
				<li>
					<a href="">This is a link in a UL.</a>
				</li>
			</ul>
		</div>
	</li>
</ul>
<hr />
<h4>Sub Nav</h4>
<p>
	If you need to provide simple and effective on-page navigation, to either jump to content on the page or flip to another view then use this awesome little sub-nav.
</p>
<dl class="sub-nav">
	<dt>
		Filter:
	</dt>
	<dd class="active">
		<a href="#">All</a>
	</dd>
	<dd>
		<a href="#">Active</a>
	</dd>
	<dd>
		<a href="#">Pending</a>
	</dd>
	<dd>
		<a href="#">Suspended</a>
	</dd>
</dl>
<script type="text/javascript" src="http://snipt.net/embed/f05cca3ec55b4de8d2f5090e8e790fa9"></script>
<hr />
<h4>Pagination</h4>
<p>
	Breaking stuff up into pages? Yeah you are. Here's some pagination to get you started.
</p>
<?php
   $this->widget("foundation.widgets.FounPager", array("pages" => $pager, "displayFirstAndLast" => true));
?>
<script type="text/javascript" src="http://snipt.net/embed/fe37efa59a95b332e603ce08d0065bf7/"></script>
<hr />
<h4>Breadcrumbs</h4>
<p>
	Walking through a linear flow, or want to show where someone is in the hierarchy? Breadcrumbs are totally boss.
</p>
<p>
	Breadcrumbs are built with a UL just like pagination, and they can support span or anchor elements with 'current' and 'unavailable' classes.
</p>
<?php $this->widget("foundation.widgets.FounBreadcrumbs", array(
                        'links' => array(
                            'Features' => "#",
                            'Gene Splicing' => array("unavailable" => true),
                            'Home',
                        ),
                    )); ?>
<?php $this->widget("foundation.widgets.FounBreadcrumbs", array(
                        'links' => array(
                            'Features',
                            'Gene Splicing',
                            'Home',
                        ),
                    )); ?>
<script type="text/javascript" src="http://snipt.net/embed/767b7267f151a6e265160ea278d85633/"></script>
<hr />
<h4>Tables</h4>
<p>
	Okay, they're not the sexiest things ever, but tables get the job done (for tabular data).
</p>
<table>
	<thead>
		<tr>
			<th>Table Header</th>
			<th>Table Header</th>
			<th>Table Header</th>
			<th>Table Header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Content</td>
			<td>This is longer content</td>
			<td>Content</td>
			<td>Content</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>This is longer content</td>
			<td>Content</td>
			<td>Content</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>This is longer content</td>
			<td>Content</td>
			<td>Content</td>
		</tr>
		<tr>
			<td>Content</td>
			<td>This is longer content</td>
			<td>Content</td>
			<td>Content</td>
		</tr>
	</tbody>
</table>
<hr />
<h4>Video</h4>
<p>
	If you're embedding video from YouTube, Vimeo, or another site that uses iframe, embed or object elements you can wrap your video in <code>
		div.flex-video</code>
	to create an intrinsic ratio that will properly scale your video on any device.
</p>
<dl class="tabs contained">
	<dd>
		<a href="#video1" class="active">4:3</a>
	</dd>
	<dd>
		<a href="#video2">Widescreen</a>
	</dd>
	<dd>
		<a href="#video3">Vimeo</a>
	</dd>
</dl>
<ul class="tabs-content contained">
	<li class="active" id="video1Tab">
		<div class="flex-video">
			<iframe width="420" height="315" src="http://www.youtube.com/embed/9otNWTHOJi8" frameborder="0" allowfullscreen></iframe>
		</div>
		4:3 is the default size for the .flex-video element, and the assumption for .flex-video for chrome (controls) height is based on YouTube.
	</li>
	<li id="video2Tab">
		<div class="flex-video widescreen">
			<iframe width="560" height="315" src="http://www.youtube.com/embed/N966cATFWjI" frameborder="0" allowfullscreen></iframe>
		</div>
		By adding a class of .widescreen we change the ratio to 16:9, ideal for more recent video and most popular YouTube or Vimeo embeds.
	</li>
	<li id="video3Tab">
		<div class="flex-video widescreen vimeo">
			<iframe src="http://player.vimeo.com/video/21762736?title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
		Because Vimeo places their chrome on the player itself, adding a class of .vimeo creates a container that is sized for the video only - no extra padding for the controls.
	</li>
</ul>
<script type="text/javascript" src="http://snipt.net/embed/723bad35ef085d939ed09fff20fca68e"></script>
<hr />
<h4>Microformats</h4>
<p>
	Microformats are formats for data objects represented on the page using standard HTML. By applying specific classes to objects parsers like the operator plugin can detect relevant data and display it. This can be especially handy for contact info, events, locations and news articles. We've supplied some base styling for microformats, as well as the relevant markup.
</p>
<h5>hCard</h5>
<p>
	hCards are a microformat for contact information. We've represented the correct syntax here to ensure they are machine readable, as well as applied some minimal styling.
</p>
<ul class="vcard">
	<li class="fn">
		John T. Yeti
	</li>
	<li class="nickname">
		Yeti
	</li>
	<li class="org">
		Foundation, Inc.
	</li>
	<li class="tel">
		<a href="tel:408-867-5309">408-867-5309</a>
	</li>
	<li>
		<a class="url" href="http://foundation.zurb.com/">http://foundation.zurb.com/</a>
	</li>
</ul>
<p>
	<script type="text/javascript" src="http://snipt.net/embed/eb809555f900b7fa2651d6f31b35d941"></script>
</p>
<h5>hCalendar</h5>
<p>
	An hCalendar event is an iCalendar formatted entry for an event at a specific time and location. This can be interpreted by parsing tools to recognize events and add them to a calendar.
</p>
<p class="vevent">
	The <span class="summary">Foundation Launch Party</span>
	was on October 13 2011 from <abbr class="dtstart" title="2011-10-13T14:00:00+06:00">2</abbr>&ndash;<abbr class="dtend" title="2011-10-13T16:00:00+06:00">4</abbr>pm at <span class="location">ZURB HQ</span>
	(<a class="url" href="http://foundation.zurb.com">More Info</a>)
</p>
<p>
	<script type="text/javascript" src="http://snipt.net/embed/ef85ba34e235c9bc712baa62cc8bdf4c"></script>
</p>