<?php
$str='php';
//echo $str;
$users=[
    [
        'name'=>'Boris',
        'age'=>null,
        'weight'=>45,
    ],
    [ 'name'=>'Ann',
        'age'=>50,
        'weight'=>85,],
    [ 'name'=>'Anton',
        'age'=>100,
        'weight'=>null,],
];
//task1;

//$php1=25;
//$php2=true;
//$php3=3.2;
//$php4='str';
//$php5=['24','32','46'];
//echo $php1;
//echo gettype($php1).'<br>';
//echo $php2;
//echo gettype($php2);
//echo $php3;
// echo gettype($php3);
//echo $php4;
//echo gettype($php4);
//echo $users;
//echo gettype($users);

//task2

//$a=5;
//$b=7;
//$c=$a+$b;
//echo $c;

//task3

//$a='Hello ';
//$b='world';
//$a.=$b;
//echo $a;

//task4

//$a=25;
//$b=30;
//echo $res=($a<$b)? $a:$b;


?>
<!doctype html>
<html>
<body>
<table border="5">
    <?php
    foreach ($users as $user):?>
    <tr>
<!--        $this->name=$request->get('name')?:'';-->
        <td><?= $user['name']?:"no name"?></td>
        <td><?= $user['age']?:"no age"?></td>
        <td><?= $user['weight']?:"no weight"?></td>

    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
