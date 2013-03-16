<?php
include("../includes/lib/globals.php");
include("../includes/manage_sidebar.php");
include("../includes/lib/db_users.php");
include("job_action.php");
include("../includes/header.php");
include("../includes/ads.php");
include("../includes/left_submenu.php");
?>

<div
	class="center">
	<h1 class="newsHead">Job search &raquo;</h1>

	<!-- <h6 class="loginSignupLink"><input type="button" value="Login here" /> <input type="button" value="New user? signup for free!" /></h6> -->

	<table class="newsSection">
		<tr>
			<td class="large"><table class="searchResult jobSearch">
					<tr>
						<th>Search job by Country</th>
					</tr>
					<tr>
						<td>
							<a href="<?php echo $httpPathSite;?>job/joblist.php?country=uae">UAE</a>
							<a href="<?php echo $httpPathSite;?>job/joblist.php?country=bahrain">Bahrain</a>
							<a href="<?php echo $httpPathSite;?>job/joblist.php?country=kuwait">Kuwait</a>
							<a href="<?php echo $httpPathSite;?>job/joblist.php?country=qatar">Qatar</a>
							<a href="<?php echo $httpPathSite;?>job/joblist.php?country=oman">Oman</a>
							<a href="<?php echo $httpPathSite;?>job/joblist.php?country=saudiArabia">Saudi Arabia</a>
						</td>
					</tr>
				</table>
				<table class="searchResult jobSearch">
					<tr>
						<th>Search job by Company</th>
					</tr>
					<tr>
										<?php if($db->sql_numrows($companyList)==0){?>
					<td><a href="javascript:void(0);">No data found</a></td>
					<?php } else{?>
					<td>
						<?php while($company=$db->sql_fetchrow($companyList)){?>
							<a href="<?php echo $httpPathSite;?>job/joblist.php?company=<?php echo $company['company'];?>"><?php echo $company['company']; echo '('.getJobCount($company['company']).')' ?></a>
						<?php }?>
					</td>
					<?php }?>
	
					</tr>
				</table>
				<table class="searchResult jobSearch">
					<tr>
						<th>Search job by Industry</th>
					</tr>
					<tr>
						<td><a href="#">Ship Owners</a> <a href="#">Ship Lines / Agents</a>
							<a href="#">Freight Forwarding</a> <a href="#">Logistics &
								Distribuion</a> <a href="#">Air Cargo</a> <a href="#">Ship
								Owners</a> <a href="#">Ship Lines / Agents</a> <a href="#">Freight
								Forwarding</a> <a href="#">Logistics & Distribuion</a> <a
							href="#">Air Cargo</a> <a href="#">Ship Owners</a> <a href="#">Ship
								Lines / Agents</a> <a href="#">Freight Forwarding</a> <a
							href="#">Logistics & Distribuion</a> <a href="#">Air Cargo</a> <a
							href="#">Ship Owners</a> <a href="#">Ship Lines / Agents</a> <a
							href="#">Freight Forwarding</a> <a href="#">Logistics &
								Distribuion</a> <a href="#">Air Cargo</a>
						</td>
					</tr>
				</table>
				<table class="searchResult jobSearch">
					<tr>
						<th>Search job by Designation</th>
					</tr>
					<tr>
						<td><a href="#">Accounts Asst.</a> <a href="#">Accountant</a> <a
							href="#">Sr. Accountat</a> <a href="#">Finance Manager</a> <a
							href="#">Business Development Manager</a> <a href="#">Accounts
								Asst.</a> <a href="#">Accountant</a> <a href="#">Sr. Accountat</a>
							<a href="#">Finance Manager</a> <a href="#">Business Development
								Manager</a> <a href="#">Accounts Asst.</a> <a href="#">Accountant</a>
							<a href="#">Sr. Accountat</a> <a href="#">Finance Manager</a> <a
							href="#">Business Development Manager</a> <a href="#">Accounts
								Asst.</a> <a href="#">Accountant</a> <a href="#">Sr. Accountat</a>
							<a href="#">Finance Manager</a> <a href="#">Business Development
								Manager</a> <a href="#">Accounts Asst.</a> <a href="#">Accountant</a>
							<a href="#">Sr. Accountat</a> <a href="#">Finance Manager</a> <a
							href="#">Business Development Manager</a>
						</td>
					</tr>
				</table></td>

			<td class="small" style="padding-top: 20px;">
				<table class="searchResult">
					<tr>
						<th>Featured Jobs</th>
					</tr>
					<tr>
						<td>
							<table>
								<tr>
									<td>asd</td>
								</tr>
								<tr>
									<td>qwe</td>
									<td rowspan="2">rtyrty</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</div>
<?php 
include("../includes/job_right_submenu.php");
include("../includes/footer.php");
?>
