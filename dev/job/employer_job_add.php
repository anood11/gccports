<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/lib/db_users.php");
include("employer_job_add_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>
<div class="center">
	<h1 class="newsHead">Add a job here &raquo;</h1>
	<form action="employer_job_add.php" method="post" name="frmAddJob">
	<table class="searchDetails">
		<tr>
			<td colspan="2"><?php echo $displayMessage;?></td>
		</tr>
		<tr>
			<th>Company :*</th>
			<td><input type="text" name="company" value="<?php echo $company;?>"/></td> 
		</tr>
		<tr>
			<th>Email :*</th>
			<td><input type="text" name="email"value="<?php echo $email;?>"/></td>
		</tr>
		<tr>
			<th>Phone :</th>
			<td><input type="text" name="phone" value="<?php echo $phone;?>"/></td>
		</tr>
		<tr>
			<th>Job requirement :*</th>
			<td><input type="text" name="requirement" value="<?php echo $requirement;?>"/></td>
		</tr>
		<tr>
			<th>Experience needed :*</th>
			<td><select name="experienceId">
					<option value="-1">Select Experience</option>
					<?php while($experience=$db->sql_fetchrow($experienceYear)){?>
					<option value="<?php echo $experience['experienceId'];?>" <?php if($experienceId==$experience['experienceId']) echo 'selected';?>><?php echo $experience['experienceYear'];?></option>
					<?php }?>
				</select></td>
		</tr>
		<tr>
			<th>Industry :*</th>
			<td><select name="industryName">
					<option value="-1">Select Experience</option>
					<?php while($industry=$db->sql_fetchrow($industryList)){?>
						<option value=<?php echo $industry['name'];?>" <?php if($industryName==$industry['name']) echo 'selected';?>><?php echo $industry['name'];?></option>
						<?php } ?>
				</select></td>
		</tr>
		<tr>
			<th>Designation :*</th>
			<td><select name="designationName">
					<option value="-1">Select Experience</option>
					<?php while($designation=$db->sql_fetchrow($designationList)){?>
						<option value=<?php echo $designation['designation'];?>" <?php if($designationName==$designation['designation']) echo 'selected';?>><?php echo $designation['designation'];?></option>
						<?php } ?>
				</select></td>
		</tr>
		<tr>
			<th>Salary range :</th>
			<td><input type="text"  name="salary" value="<?php echo $salary;?>"/></td>
		</tr>
		<tr>
			<th>Country :</th>
			<td><select name="country">
					<option value="-1">Select Country</option>
					<option value="uae" <?php if($country=='uae') echo 'selected';?>>UAE</option>
					<option value="bahrain" <?php if($country=='bahrain') echo 'selected';?>>Bahrain</option>
					<option value="kuwait" <?php if($country=='kuwait') echo 'selected';?>>Kuwait</option>
					<option value="qatar" <?php if($country=='qatar') echo 'selected';?>>Qatar</option>
					<option value="oman" <?php if($country=='oman') echo 'selected';?>>Oman</option>
					<option value="saudiArabia"<?php if($country=='saudiArabia') echo 'selected';?>>Saudi Arabia</option>
				</select></td>
		</tr>
		<tr>
			<th>Company profile [in 50 words] :*</th>
			<td>
				<textarea rows="" cols=""name="companyProfile"><?php echo $companyProfile;?></textarea>
			</td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<td><input type="submit" value="Add Job" name="btnSubmit"/></td>
		</tr>
	</table>
	</form>
</div>
<?php 
include("../includes/right_submenu.php");
include("../includes/footer.php");
?>
