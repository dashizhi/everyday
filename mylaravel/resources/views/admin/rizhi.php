<!DOCTYPE html>
<html>
<head>
    <title>日程安排</title>
</head>
<body>
    <center>
        <form action="add" method="post">
        	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">  
            <caption><h2>日程安排</h2></caption>
            <table>
                <tr>
                    <td>选择时间：</td>
                    <td>
                        <input type="date" name="time">
                    </td>
                </tr>
                <tr>
                    <td>提醒内容：</td>
                    <td><textarea name="content"></textarea></td>
                </tr>
                <tr>
                    <td>是否提醒</td>
                    <td>
                        <input type="radio" name="type" value="1">提醒
                        <input type="radio" name="type" value="2">不提醒
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name='userid' value="<?php echo $userid;?>"></td>
                    <td><input type="submit" value="提交"></td>
                </tr>
            </table>
        </form>
    </center>
</body> 
<script type="text/javascript" src="{{URL::asset('js/jquery-1.4.2..js')}}"></script>
</html>