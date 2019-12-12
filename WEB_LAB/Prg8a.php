<!DOCTYPE HTML>
<html>
<body>
    <form method="post">
        <table>
            <caption><h2>SIMPLE CALCY</h2></caption>
            <tr><td>NO1</td>
                <td><input type="text" name="num1"/></td>
            </tr>
            <tr><td>NO2</td>
                <td><input type="text" name="num2"/></td>
            </tr>
            <tr><td><input type="submit" name="submit" value="calculate"></td></tr>      
    </form>
    <?php
        if (isset($_POST['submit'])) {
            $num1= $_POST['num1'];
            $num2= $_POST['num2'];

            if (is_numeric($num1) and is_numeric($num2)) {
                echo "<tr><td> Add:</td>
                          <td><p>".($num1+$num2)."</p></td>";               
                echo "<tr><td> SUB:</td>
                          <td><p>".($num1-$num2)."</p></td>";               
                echo "<tr><td> MUL:</td>
                          <td><p>".($num1*$num2)."</p></td>";
                echo "<tr><td> DIV:</td>
                          <td><p>".($num1/$num2)."</p></td>";               
                echo "</table>";
            }
            
            else{
                echo "<script> alert('ENTER VALID NOS....')</script>";
            }
        }
    ?>
</body>
</html>