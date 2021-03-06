{% extends "twig.tpl" %}

{% block title %}
	{{ parent() }}
	- child
{% endblock %}

{% block content %}
	<h1>1 About the book</h1>
	<h2>1.1 Foreword</h2>

	<p>
	{% if name %}
		Hi <b>{{ name }}</b>, do you love <span class="red">C++</span>?
	{% else %}
		Hey dude!
	{% endif %}
	</p>

	<p>This book covers the C++ programming language, its interactions with software design and real life use of the language. It is presented as an introductory to advance course but can be used as reference book.</p>

	<p>If you are familiar with programming in other languages you may just skim the GETTING STARTED CHAPTER1. You should not skip the PROGRAMMING PARADIGMS SECTION2, because C++ does have some particulars that should be useful even if you already know another Object Oriented Programming language.</p>

	<p>The LANGUAGE COMPARISONS SECTION3 provides comparisons for some language(s) you may already know, which may be useful for veteran programmers.</p>
	<p>If this is your ﬁrst contact with programming then read the book from the beginning. Bear in mind that the Programming Paradigms section can be hard to digest if you lack some experience. Do not despair, the relevant points will be extended as other concepts are introduced. That section is provided so to give you a mental framework, not only to understand C++, but to let you easily adapt to (and from) other languages that may share concepts.   </p>

	<p><strong>ect...</strong></p>
{% endblock %}