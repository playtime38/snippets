<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>aac.php ass array funcs</title>
  </head>
  <body>
  <?php echo "This is localhost/jan/aac.php";?><br/>
  <?php echo "This is an array function.A function line starts with
		a perempt colon :Max value, can be 2 words, no hyphen,space between, first word capitalised, second no.The perempt is not needed nor the capitalisation - it is just to draw attention to the line. Then echo max(#numbers)and comma.
			Here the pound sign is substituted for dollar to avoid error.It is called a sigil, not dollar, and|| used before variables.The left arrow ques mark is called a short tag.The colon: is called a perempt by me, and is to draw your attention to the line.The ; is called a ternary operator by me.Max and Min values are not totals of nos but are the highest and lowest numbers in the array. The count is the number of items in the array not a total count of the numbers if you get what I mean? He says go to php.net and manual/ref.array.php and look for pairs- key,values,push,pop,shift,unshift,unique,search,rand and altogether 82 types.<br/>-------------------------------";?><br/>
	
		
		<?php $numbers=array(8,23,15,42,16,4);?>
		Count<?php echo count($numbers);?><br/>
		Max value:<?php echo max($numbers);?><br/>
		Min value:<?php echo min($numbers);?><br/>
		<br/>
		<pre>
			Sort: <?php sort($numbers);print_r($numbers);?><br/>	
			Reverse sort: <?php rsort($numbers);print_r($numbers);?><br/>	
		</pre>
			<pre>
		 Implode: <?php echo $num_string=implode(".",$numbers);?><br/>	
		 Explode: <?php print_r(explode(".",$num_string))?><br/>	
				<br/>	
	 15 in array?:<?php echo in_array(15,$numbers);//returns T/F?><br/>
		19 in array?:<?php echo in_array(19,$numbers);//returns T/F?><br/>
		
		</body>
		</html>
