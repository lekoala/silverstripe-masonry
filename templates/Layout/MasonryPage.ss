<div class="container">
	<article>
		<h2>$Title</h2>
		<% if Content %>
		<div class="content">$Content</div>
		<% end_if %>
		<div id="masonry-container">
			<% loop Blocks %>
			$Me
			<% end_loop %>
		</div>
		<div style='clear:both;'></div>
	</article>
</div>