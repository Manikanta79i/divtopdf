<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Address and Button</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.debug.js"></script>
<script>
$(document).ready(function() {
    // Create a new jsPDF instance with A4 dimensions
    var doc = new jsPDF({
        orientation: 'portrait',  // or 'landscape'
        unit: 'mm',
        format: 'a4',
    });

    $('#cmd').click(function () {
        doc.fromHTML($('#content').html(), 15, 15, {
            'width': 200,
        }, function () {
            doc.save('sample-file.pdf');
        });
    });
});
</script>

</head>
<body>

    <div class="container" id="content" style="    width: 55%;    margin: 0 auto;    padding: 20px;
">
        <div class="address" style="margin-top:10px ;">
           <h2>ACCOUNT STATEMENT</h2>
           Generated Electronically as on <?php echo "Hero";  ?>
 <img src="assets/logo.png" height="100" width="100" style="float: right;margin-top: -68px;">
        </div>
<hr>
<div class="">
        <div class="address">
            <p>
                <h5>RAMAVARAM AATHRESH</h5>
                H No 2-10-1396, Karimnagar, Karimnagar, Jyothinagar, Karimnagar, Karimnagar, Karim Nagar<br>
                Karim Nagar<br>
                Karimnagar - 5
            </p>
        </div>
        <div class="email-container">
            <a href="mailto:aathresh@example.com">aathresh@example.com</a>
        </div>
    </div><br>
     <div class="header" style=" background-color: red;
            color: white;
          
            padding: 10px;">
        <div style="display: inline-block; width: 50%;">Relationship Summary</div>
        <div style="display: inline-block; width: 50%;float: right;">Relationship Number : CC5776117205</div>
    </div>
 <table style="border-collapse: collapse;
            width: 100%;">

        <thead>
            <tr>
                <th>Total Outstanding</th>
                <th style="background-color: #1b8ceb29;">Total Principal Outstanding</th>
                <th>Total EMI(s) Overdue</th>

      <th style="background-color: #1b8ceb29;border: 1px solid #ddd;
            padding: 10px;
            text-align: left;">Total Charges Overdue</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td border: 1px solid #ddd;
            padding: 10px;
            text-align: left;>₹ 18,288 *</td>
                <td border: 1px solid #ddd;
            padding: 10px;
            text-align: left;>₹ 18,288 *</td>
                <td border: 1px solid #ddd;
            padding: 10px;
            text-align: left;>₹ 18,288 *</td>
                <td border: 1px solid #ddd;
            padding: 10px;
            text-align: left;>₹ 0 *</td>
            </tr>
           
        </tbody>
    </table>

    </div>


<div id="editor"></div>
<button id="cmd">Generate PDF</button>


</body>
</html>