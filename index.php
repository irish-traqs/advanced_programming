<!DOCTYPE html>
	<div class="container">
        <form action="index.php" style="margin-left: 100px; margin-top: 130px;">
        	<h1>Irish Traqueña</h1>
        </form>
    </div>
       
        <form action="index.php" method="post" style="margin-left: 400px; margin-top: -150px;">
            <h2>Calculator</h2>
                <label for="num1">Input first number:</label></br></br>
                <input type="number" name="num1" required></br></br>              
                <label for="num2">Input second number:</label></br></br>
                <input type="number" name="num2" required></br></br>

                <input type="submit" name="add" value="+">
                <input type="submit" name="sub" value="-">
                <input type="submit" name="mul" value="*">
                <input type="submit" name="div" value="/"></br></br>

        <?php
            if (isset($_POST['add']))
            {
              $num1 = $_POST["num1"];
              $num2 = $_POST["num2"];
              $add = $num1 + $num2;
              echo "Answer: ".$add;
            }
            if (isset($_POST['min']))
            {
              $num1 = $_POST["num1"];
              $num2 = $_POST["num2"];
              $min = $num1 - $num2;
              echo "Answer: ".$min;
            }
            if (isset($_POST['mul']))
            {
              $num1 = $_POST["num1"];
              $num2 = $_POST["num2"];
              $mul = $num1 * $num2;
              echo "Answer: ".$mul;
            }
            if (isset($_POST['div']))
            {
              $num1 = $_POST["num1"];
              $num2 = $_POST["num2"];
              $div = $num1 / $num2;
              echo "Answer: ".$div;
            }
        ?>
        </form>

        <form action="index.php" method="post" style="margin-left: 700px; margin-top: -260px">
            <h2>Finding GCD</h2>
                <label for="number1">Input first number:</label></br></br>
                <input type="number" name="number1" required></br></br>              
                <label for="number2">Input second number:</label></br></br>
                <input type="number" name="number2" required></br></br>
                <input type="submit" name="gcd" value="Submit"></br></br>


            <?php
                if(isset($_POST['gcd']))
                {
                    $number1 = $_POST['number1'];
                    $number2 = $_POST['number2'];
                    $gcd = $_POST['gcd'];

                if($number1 > $number2)
                {
                    $temp = $number1;
                    $number1 = $number2;
                    $number2 = $temp;
                }
                for($i = 1; $i < ($number1 + 1); $i++ )
                {
                    if ($number1%$i == 0 and $number2%$i == 0)
                    $gcd = $i;
                }

                echo "GCD: " .$gcd;
            }
            ?>
         </form>

    </html>