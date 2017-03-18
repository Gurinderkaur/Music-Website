<html>
<head>
    <link rel="stylesheet" href="css/pikaday.css">
    <link rel="stylesheet" href="css/site.css">
<title>DatePicker</title></head>
<body>
<form name="abc">
<input type="text" id="datepicker">
  <script src="moment.min.js"></script>
 <script src="pikaday.js"></script>

    <script>

    var picker = new Pikaday(
    {
        field: document.getElementById('datepicker'),
		format: 'YYYY-MM-DD',
        firstDay: 1,
        minDate: new Date(1970,1,1),
        maxDate: new Date(2010, 12, 31),
        yearRange:[1970,2010],
		
    });

    </script>
</form></body>
</html>