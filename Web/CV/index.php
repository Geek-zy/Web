
<?php include("Jq_head.php"); ?>

<ul data-role="listview" data-inset="true">

	<div data-role="header">
		<h1>个 人 简 历</h1>
	</div>

	<div data-role="main" class="ui-content" style="position:relative;">

		<div style="padding-left:10px;">
		<!--基本信息-->
		<img src="image/HZW.jpg" style="width:110px; height:110px; position:absolute; right:25px; top:35px; border-radius:50%;"/>
		<?php include("Pit/Yi.zhang_IT.php"); ?>
		</div>

		<div data-role="collapsible">
			<h1>求职目标</h1>
			<?php include("Pit/Job_target.php"); ?>
		</div>

		<div data-role="collapsible">
			<h1>工作经历</h1>
			<?php include("Pit/Work_experience.php"); ?>
		</div>

		<div data-role="collapsible">
			<h1>项目经验</h1>
			<?php include("Pit/Project_experience.php"); ?>
		</div>

		<div data-role="collapsible">
			<h1>专业技能</h1>
			<?php include("Pit/Skill_major.php"); ?>
		</div>

		<div data-role="collapsible">
			<h1>个人能力</h1>
			<?php include("Pit/Personal_ability.php"); ?>
		</div>

		<div data-role="collapsible">
			<h1>自我评价</h1>
			<?php include("Pit/Self_evaluation.php"); ?>
		</div>

		<div data-role="collapsible">
			<h1>奖励及荣誉</h1>
			<?php include("Pit/Awards_and_honors.php"); ?>
		</div>

	</div>

	<div data-role="footer">
		<h6></h6>
	</div> 

</ul>
</body>
</html>

