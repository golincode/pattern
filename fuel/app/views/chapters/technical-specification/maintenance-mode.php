
<p>
	When the application needs updating, there will be a brief disruption of service. This does not count as downtime, as it is a part of the deployment process. The process is thus:
	<ol>
		<li>the application enters maintenance mode</li>
		<li>the application backs up database (optional)</li>
		<li>the application pulls changes</li>
		<li>the application runs migrations, and other processing scripts (sass, grunt, etc.)</li>
		<li>the application exits maintenance mode</li>
	</ol>
	During maintenance mode, the site will display a friendly message that states that the application will be working again shortly.
</p>
