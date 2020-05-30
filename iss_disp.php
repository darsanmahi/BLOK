<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial scale=1,shrink-to-fit=no">
<style>
        @import url("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        body{
            background-image: url(green-leaf-plant-in-white-flower-pot-1022923.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            color: black;
            text-align:center;
            margin-top: 300px;
            font-size:20px;
            font-weight: 10px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;            
        }
    </style>
    <form action='iss_disp2.php' method='post'>
    <div class='one'>
          <label for="lab">Select the lab:</label>
                <select name="lab">
                    <option value="grd">GRD Lab</option>
                    <option value="spl">Software Programming Lab-1</option>
                </select>
    </div>
    <input type='submit' name='btn' value="Proceed">
    </form>
</html>