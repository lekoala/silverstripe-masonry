<div class="masonry-block">
	<% if Image && ImageTop %>
	<div class="masonry-image">
		$Image.SetWidth(480)
	</div>
	<% end_if %>
	<% if Title %>
	<div class="masonry-title">
		$Title
	</div>
	<% end_if %>
	<% if Content %>
	<div class="masonry-content">
		$Content
	</div>
	<% end_if %>
	<% if Image && ImageBottom %>
	<div class="masonry-image">
		$Image.SetWidth(480)
	</div>
	<% end_if %>
</div>