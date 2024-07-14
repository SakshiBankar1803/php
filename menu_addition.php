<!DOCTYPE html>
<html>
<body>
    
        <h3><b>Arithmetic Operation</h1>
        <form method="post" action="#">
           enter no first:=
            <input type="number" name="t1"><br>
            enter no second:=
            <input type="number" name="t2"><br>
            <select name="operation" required>
                <option value="">Select operation</option>
                <option value="addition">Addition</option>
                <option value="subtraction">Subtraction</option>
                <option value="multiplication">Multiplication</option>
                <option value="division">Division</option>
            </select><br>
            <button type="submit" name="submit">Calculate</button><br>
        </form>
        
        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['t1'];
            $num2 = $_POST['t2'];
            $operation = $_POST['operation'];
            
            switch ($operation) {
                case 'addition':
                    $result = $num1 + $num2;
                    break;
                case 'subtraction':
                    $result = $num1 - $num2;
                    break;
                case 'multiplication':
                    $result = $num1 * $num2;
                    break;
                case 'division':
                    if ($num2 == 0) {
                        $result = "Error: Division by zero.";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    $result = "Error: Invalid operation selected.";
            }
            
            printf("<b>the result is=%d",$result);
        }
        ?>
  
</body>
</html>