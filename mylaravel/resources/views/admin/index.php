    <!DOCTYPE html>  
    <html lang="en">  
    <head>  
        <meta charset="UTF-8">  
        <title>Document</title>  
    </head>  
    <body>  
    <center>
        <form action="tianadd" method="post" >  
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
            <table>  
                <tr>  
                    <td>姓名：</td>  
                    <td><input type="text" name="name"></td>  
                </tr>  
                <tr>  
                    <td>密码：</td>  
                    <td><input type="password" name="pwd"></td>  
                </tr>  
                <tr>  
                    <td><input type="submit" value="提交"></td>  
                    <td></td>  
                </tr>  
            </table>  
        </form> 
        </center> 
    </body>  
    </html>  