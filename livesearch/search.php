<?php
include('db.php');
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select product,amount from newprod1 where product like '%$q%' limit 4");
while($row=mysql_fetch_array($sql_res))
{
$product=$row['product'];
$amt=$row['amount'];
$b_prod='<strong>'.$q.'</strong>';
$b_amt='<strong>'.$amt.'</strong>';
$final_prod = str_ireplace($q, $b_prod, $product);
//$final_email = str_ireplace($q, $b_amt, $amt);
?>
<div class="show" align="left">
<span class="name"><?php echo $final_prod; ?></span>&nbsp;
<br/>
Rs. <span class="name"><?php echo $b_amt; ?></span>&nbsp;
</div>
<?php
}
}
?>
