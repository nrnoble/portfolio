<?php
if(!isset($_SESSION))
{
	session_start();
}
else
{
//	$sessionID = $
}

if (empty($_POST['logout']))
	$_POST['logout'] = "";

	if ($_POST['logout']== "istrue")
	{
		$_SESSION['access'] = false;
		$_POST['logout'] = null;
		header('Location: index.php');
	}
	else
	{
		//header('Location: index.php');
	}







if ($_SESSION['access'] == true)
{
	//echo "<script>alert('login true')</script>";
}
else
{

	$test = "login false";

	echo "<script>alert('$test')</script>";
	header('Location: index.php');
}

?><?php include "kfb_head.php" ?>

<body class="no-trans   ">

<?php include "kfb_menubar.php" ?>







<div class="page-wrapper">

	<!-- main-container start -->
	<!-- ================ -->
	<section class="main-container kfb_background">

		<div class="container">


				<!-- main start -->

				<div class="main col-md-9">

					<div id = "volunteers" class = "pageblock">
						<h2>Contact List</h2>

						<form id = "logout" method = "post" action = "kfb_administrative.php" >
							<input type="hidden" name="logout" id="hiddenField" value="istrue" />
							<input type = "submit" id = "logout1" value="Logout">
						</form>


					</div>

					<!-- List Volunteers  -->
					<div id = "div5" name ="div5" class="pageblock" style=" margin-top: 10px;" >



						<?php
						$sqlfile = file_get_contents("kfb_volunteer_list.sql");
						?>

						<div id ="querybox" name="querybox" class="kfb_querybox">


							<form name="query" method="post" action="">
								<?php
								if (isset($_POST))
								{

									if ($_POST['submitquery'] == "Search")
									{
										$sqlfile = $_POST["textdata"];
									}

								}
								?>

								<!--    File Name: <input type="text" name="filename" value=""><br/>-->
								<textarea  name="textdata" class = "kfb_queryeditbox"><?php echo "$sqlfile"; ?> </textarea><br/><br>
								<input type="submit" name="submitquery" value="Search" class="kfb_button">
							</form>
							<p class = 'todo'>TODO: Replace sql query box with a single line query that searches all fields</p>

						</div>


						<!--<pre>-->
						<?php //#echo "$sqlfile"; ?>
						<!--</pre>-->


					</div>

					<!-- List Volunteers  -->
					<div id = "div6" name ="div6" class="pageblock" style=" margin-top: 10px;"; >
						<?php
						$query = $sqlfile;

						//$result = $conn->query($query)->fetch_assoc();;
						$result = $conn->query($query);
						//TODO: write a function that create debug block
						?>
						<div style = "display: none" class ="page">
							<?php # echo "var_dump($result->num_rows)"; ?>
						</div>

						<!--put scripts in jsfunctions.php-->
						<script>

							function ShowDetails1(elem)
							{
								var value = $(elem).attr("value");
								var id = $(elem).attr("id");
								//alert(Id);
								value++;
								var rowId = "#row" + value;
								//alert(id + " " +rowId);
								//alert(id + " " +rowId);
								$(rowId).toggle();


							}


							function foo (e)
							{
								e.preventDefault();
								var elem = $(this).next('.td1')
								elem.toggle('slow');

								//alert(id);
							}

							function ShowDetails (e)
							{
								var row = $(e).next("tr");
								$(row).toggle()
								e.preventDefault();

							}

							function hello_world()
							{
								alert("hello world");
							}

						</script>


						<p class = 'todo'>TODO: Add functionality to be able sort by column when clicking on column header</p>
						<table>

							<?php

							# echo "var dump::  var_dump($result->fetch_field()[0]->name);";
							$fieldnames = [];
							if ($result->field_count > 0)
							{
								echo "<tr style = \" width: 250px;  border: 0px solid black; text-decoration: underline; text-align: left\">";
//
//                                for ($idx = 0; $idx < 4; $idx =$idx+1)
//                                {
//                                    $fieldnames[] = $field[$idx];
//                                    echo "<th class =\"fkb_datatable\" style = \" width: 250px;  border: 0px solid black; text-decoration: underline; \">". $field[$idx]->name . "</th>";
//                                }


								$count =0;
								while($field = $result->fetch_field() )
								{
									$count++;
									$fieldnames[] = $field->name;
									if ($count < 6 )
									{
										echo "<th class =\"fkb_datatable\" style = \" width: 250px;  border: 0px solid black; text-decoration: underline; text-align: left\">" . $field->name . "</th>";
									}

								}
								echo "</tr>";
							}


							//echo (var_dump($result));
							//$row = $result->fetch_assoc();
							//echo var_dump($row);
							// echo $row["AVG (film.length)"];
							//$rowcount =0;
							if ($result->num_rows > 0)
							{
								// output data of each row

								while($row = $result->fetch_assoc())
								{
									$rowcount = $rowcount + 1;

									echo "<tr id =\"row$rowcount\" value =\"$rowcount\" class =\"fkb_datatable\" onclick='ShowDetails(this)' ><td class =\"fkb_datatable\"  style = \"text-align: left ;!important;\">". $row["$fieldnames[0]"]
										. "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[1]"]
										. "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[2]"]
										. "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[3]"]
										. "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[4]"]
										. "</td></tr>\n\r";
//                                    class ='kdb_datatable kdb_DataTableDetailedInfo'
									$rowcount = $rowcount +1;
									echo "<tr id =\"row$rowcount\" value =\"$rowcount\" style='display:none'><td colspan='5'>
                                       <div id='1' class ='kdb_DataTableDetailedInfo'>
                                       <ul>
                                       <li> <b>Volunteer:</b> " . $row["$fieldnames[1]"] . " " . $row["$fieldnames[0]"]. "</li>"
										. "<li> <b>$fieldnames[2]:</b> " . $row["$fieldnames[2]"] ."</li>"
										. "<li> <b>$fieldnames[3]:</b> " . $row["$fieldnames[3]"] ."</li>"
										. "<li> <b>$fieldnames[4]:</b> " . $row["$fieldnames[4]"] ."</li>"
										. "<li> <b>$fieldnames[5]:</b> " . $row["$fieldnames[5]"] ."</li>"
										. "<li> <b>$fieldnames[6]:</b> " . $row["$fieldnames[6]"] ."</li>"
										. "<li> <b>$fieldnames[7]:</b> " . $row["$fieldnames[7]"] ."</li>"
										. "<li> <b>$fieldnames[8]:</b> " . $row["$fieldnames[8]"] ."</li>"
										. "<li> <b>$fieldnames[9]:</b> " . $row["$fieldnames[9]"] ."</li>"
										."</ul></div></td>";
									echo "</td></tr>\n\r";
//                                    echo "<h2>test</h2>";

								}
							}
							else
							{
								//print_r($result);
								echo "0 results";
							}

							?>
						</table>
					</div> <!-- div5 -->


					<div id = 'kfb_themes' class = "pageblock" style="display: none">
						Themes
						<select id ="themeId" name ="kfb_themes" onmousedown="this.value='';" onchange="ChangeThemes(this.value);">
							<!--<select name="size" id="size">-->
							<option value="custom-1">Default</option>
							<option value="custom-2">Spring</option>
							<option value="custom-3">Summer</option>
							<option value="custom-4">Christmas</option>
							<option value="custom-5">Solid Colors</option>
						</select>


						<script type="text/javascript">
							function ChangeThemes(value)
							{
								debug=false;
								//var h = document.getElementsByTagName('head').item(0);
								//var s = document.createElement("link");
								//s.type = "text/css";
								//s.appendChild(document.createTextNode("href=\"test.css\ rel=\"stylesheet\""));
								//h.appendChild(s);
								var cssfile = "";
								var cssId = "";
								DebugAlert("ChangeThemes:: value=" + value, debug);

								if (value == "custom-1")
								{
									cssfile = 'kfb_style.css';
									cssId = value;
								}

								if (value == "custom-2")
								{
									DebugAlert("ChangeThemes:: Changing them to 'neal.css'", debug);
									cssfile = 'kfb_style_2.css';
									cssId = value;
								}

								if (value == "custom-3")
								{
									cssfile = 'kfb_style_3.css';
									cssId = value;
								}

								if (value == "custom-4")
								{
									cssfile = 'kfb_style_4.css';
									cssId = value;
								}
								if (value == "custom-5")
								{
									cssfile = 'neal.css';
									cssId = value;
								}

								DebugAlert("ChangeThemes:: cssfile=" + cssfile, debug);

								//var cssId = 'myCss';  // you could encode the css path itself to generate id..
								//if (!document.getElementById(cssId))
								if (value!="")
								{

									// $(document).ready(function(){
									//$("#msgid").html("This is Hello World by JQuery " + value );
									//});
									// $('link[id=myCss2]').remove();
									//$('link[id=myCss1]').remove();
									$("link[href='kfb_style.css']").remove();
									//$("link['kfb_style.css']");
									//$('link[rel=stylesheet][href="test.css"]').remove();
									//$('link[rel=stylesheet][href="test2.css"]').remove();
									//$("link[href='test.css']").prop('disabled', true);
									//$("link[href='test2.css']").prop('disabled', true);
									//var head  = document.getElementsByTagName('head')[0];
									//var link  = document.createElement('link');
									//link.id   = cssId;
									//link.rel  = 'stylesheet';
									//link.type = 'text/css';
									//link.href = cssfile;
									//link.media = 'all';
									//head.appendChild(link);
									//cssId ="";
									//cssfile = 'kfb_style.css';
									DebugAlert("ChangeThemes:: SetTheme('" + cssfile + "');",debug );
									SetTheme(cssfile);
								}
							}
						</script>
					</div>




				</div>


			</div>

		</div>

	</section>
	<!-- main-container end -->



</div>
<!-- page-wrapper end -->
</div>
<!-- sidebar start -->


<?php #include "kfb_footer.html" ?>
</body>
<html>