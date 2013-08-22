{##
 # comments comments comments comments comments comments comments comments comments
 # comments comments comments comments comments comments comments comments comments
 #}
<div class="sidebar">
	<h2>Categories</h2>
	<ul>
	{% for cat in categories %}
		<li><a href="#">{{ cat }}</a></li>
	{% endfor %}
	</ul>
</div>