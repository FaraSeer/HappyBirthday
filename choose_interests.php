<html>
	<head>
	    <title>Интересы</title>
	</head>
	<body>
		<form method="post" action="save_interests.php">
			<table>
				<thead>
	        	    <tr>
	        	        <th scope="col">Интерес</th>
	        	    </tr>
	        	</thead>
		        <tbody id="dynamic">
	    	        <tr>
	        	        <td>
		                    <label>
		                        <input type="text" name="text">
		                    </label>
		                </td>
		                <td>
	    	                <button type="button" class="add">+</button>
	    	                <button type="button" class="del">-</button>
	        	        </td>
	            	</tr>
		        </tbody>
	    	</table>
			<input name="sub" type="submit" value="Сохранить">
		</form>

		<script src="dynamicTable.js"></script>
		<script>
			new DynamicTable( document.getElementById("dynamic") );
		</script>
	</body>
</html>

