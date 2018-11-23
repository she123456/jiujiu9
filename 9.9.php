<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>我的九九乘法表</title>
    <style>
        body{

            margin-left:10px;

            margin-top: 100px;
        }

    </style>
</head>
<body>
<table border="1" cellspacing="1px" cellpadding="0px" width="1200px"
       height="400px"background-color="pink" >
    <tr>
        <th bgcolor="#e9967a">彩印九九乘法表</th>
    </tr>
    <?php
/**
 * Created by PhpStorm.
 * User: 邱丹丹
 * Date: 2018/11/22
 * Time: 14:45
 */

        $hanzi= array("0","一","二","三","四",
            "五","六","七","八","九","十","十一",
            "十二","十三","十四","十五","十六","十七",
            "十八","十九","二十","二十一","二十二","二十三",
            "二十四","二十五","二十六","二十七","二十八","二十九",
            "三十","三十一","三十二","三十三","三十四","三十五","三十六",
            "三十七","三十八","三十九","四十","四十一","四十二","四十三",
            "四十四","四十五","四十六","四十七","四十八","四十九","五十",
            "五十一","五十二","五十三","五十四","五十五","五十六","五十七",
            "五十八","五十九","六十","六十一","六十二","六十三","六十四","六十五",
            "六十六","六十七","六十八","六十九","七十","七十一","七十二","七十三",
            "七十四","七十五","七十六","七十七","七十八","七十九","八十","八十一",

           );




for($i=1;$i<=9;$i++)
{
    echo"<tr>";
    for($j=1;$j<=$i;$j++)
    {
        $result=$j*$i;

   $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
  $color = '#'.$rand[rand(9,15)].$rand[rand(3,15)]
      .$rand[rand(11,15)].$rand[rand(7,15)].$rand[rand(9,15)].
      $rand[rand(2,15)];




        echo"<td bgcolor='$color'>".$hanzi[$i]."乘".$hanzi[$j]."等于".$hanzi[$result]."</td>";
    }
}


echo"</tr>";

?>
</table>
</body>
</html>
