<p>
	Discuss how the site will structure its URLs.
</p>

<p>
	Examples:
	<ol>
		<li>
			If the has multiple languages / territories / domains:
				<ul>
					<li>How and / or where will the current language?</li>
					<li>How will the home page behave - will it redirect to a default language, or show a language selector?</li>
				</ul>
		</li>
	</ol>
</p>

<p>Bear in mind that each segment of a URL should correspond to a singular thing - do not use the same one to mean two different things</p>

<p>In the following, the second url segment is used to refer to both a page OR a post</p>
<ul>
	<li><pre>/en/page-one</pre></li>
	<li><pre>/en/post-about-cats</pre></li>
</ul>

<p>The following is a better way to structure it</p>
<ul>
	<li><pre>/en/pages/page-one</pre></li>
	<li><pre>/en/posts/post-about-cats</pre></li>
</ul>

<p>The former is possible, but unreliable, and can result in unpredictable behaviour. The latter will not run into these errors</p>
