<?php
/* extra sidebar stuff appended at the bottom */
function sidebar()
{
	global $PR, $projct, $isBuildServer;

	if ($isBuildServer)
	{
	?>
	<div class="sideitem">
		<h6>Actions</h6>
		<ul>
			<li><a href="/<?php print $PR; ?>/build/">Build</a>,
				<a href="/<?php print $PR; ?>/build/clean.php">Clean</a>,
				<a href="/<?php print $PR; ?>/build/promo.php">Promote</a></li>
			<li><a href="/<?php print $PR; ?>/downloads/?project=<?php print $projct ? $projct : "pdt"; ?>&amp;showAll=0&amp;showMax=5&amp;sortBy=date">See Recent Builds</a></li>
		</ul>
	</div>

	<div class="sideitem">
		<h6>Info</h6>
		<ul>
			<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?product=PDT&amp;bug_status=ASSIGNED">Assigned Bugs</a></li>
			<li><a href="https://bugs.eclipse.org/bugs/buglist.cgi?product=PDT&amp;bug_status=RESOLVED">Resolved Bugs</a></li>
			<li><a href="http://www.eclipse.org/pdt/searchcvs.php?q=file%3A+org.eclipse.pdt+branch%3A+HEAD+days%3A+7">Development This Week</a></li>
			<li><a href="http://www.eclipse.org/pdt/searchcvs.php?q=file%3A+org.eclipse.pdt+branch%3A+R+days%3A+7">Maintenance This Week</a></li>
		</ul>
	</div>
	<?php
	}
}
?>