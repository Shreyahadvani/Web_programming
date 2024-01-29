<?php
$students_master=array(array("rollno"=>31,"name"=>"dharmi","department"=>"CSIT","program"=>"BCA","division"=>"B1","Enrollmentno"=>220801112,"color"=>"Black","food"=>"chinese","country"=>"germany","friend"=>"shreya"),array("rollno"=>37,"name"=>"shreya","department"=>"CSIT","program"=>"BCA","division"=>"B1","Enrollmentno"=>220801131,"color"=>"Black","food"=>"south indian","country"=>"dubai","friend"=>"dharmi"),array("rollno"=>35,"name"=>"aarchi","department"=>"CSIT","program"=>"BCA","division"=>"B1","Enrollmentno"=>220801125,"color"=>"Black","food"=>"chinese","country"=>"america","friend"=>"fena"),array("rollno"=>42,"name"=>"yatri","department"=>"CSIT","program"=>"BCA","division"=>"B1","Enrollmentno"=>220801158,"color"=>"Black","food"=>"chinese","country"=>"newyork","friend"=>"mansi"),array("rollno"=>17,"name"=>"purvisha","department"=>"CSIT","program"=>"BCA","division"=>"B1","Enrollmentno"=>220801115,"color"=>"Black","food"=>"indian","country"=>"india","friend"=>"vishva"),array("rollno"=>55,"name"=>"viranchi","department"=>"CSIT","program"=>"BCA","division"=>"B1","Enrollmentno"=>220801167,"color"=>"Black","food"=>"punjabi","country"=>"france","friend"=>"vanshi"),array("rollno"=>45,"name"=>"mansi","department"=>"CSIT","program"=>"BCA","division"=>"B1","Enrollmentno"=>220801003,"color"=>"Black","food"=>"chinese","country"=>"russia","friend"=>"hemal"),array("rollno"=>30,"name"=>"prinsi","department"=>"CSIT","program"=>"BCA","division"=>"B1","Enrollmentno"=>220801130,"color"=>"Black","food"=>"chinese","country"=>"canada","friend"=>"yashvi"));
?>
<table border=3>
  <thead>
    <th>index</th>
    <th>rollno</th>
    <th>name</th>
    <th>department</th>
	<th>program</th>
	<th>division</th>
	<th>Enrollmentno</th>
	<th>color</th>
	<th>food</th>
	<th>country</th>
	<th>friend</th>
  </thead>
  <?php 
  foreach($students_master as $key => $val) 
  { 
  ?>
  <tr>
    <td><?php echo $key; ?></td>
    <td><?php echo $val['rollno']; ?></td>
    <td><?php echo $val['name']; ?></td>
	<td><?php echo $val['department']; ?></td>
	<td><?php echo $val['program']; ?></td>
	<td><?php echo $val['division']; ?></td>
	<td><?php echo $val['Enrollmentno']; ?></td>
	<td><?php echo $val['color']; ?></td>
	<td><?php echo $val['food']; ?></td>
	<td><?php echo $val['country']; ?></td>
	<td><?php echo $val['friend']; ?></td>
  </tr>
  <?php 
  } 
  ?>
</table>
