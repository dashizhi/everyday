<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <title>Document</title>  
</head>  
<body>  
<center>  
    <table>  
        <tr>  
            <td>id</td>  
            <td>标题</td>  
            <td>内容</td>  
            <td>操作</td> 
        </tr>  
        <?php foreach($res as $k => $val){?>  
        <tr>  
  			<td><?php echo $val['id']; ?></td>
            <td><?php echo $val['biaoti']; ?></td>  
            <td><?php echo $val['content']; ?></td>  
  
            <td>  
                <a href="deletes?id=<?php echo $val['id'] ?>">删除</a>  
                <a href="updates?id=<?php echo $val['id'] ?>">修改</a>  
  
            </td>  
        </tr>    
        <?php } ?> 
        </table>
        </center>
        </body>
        </html>
        