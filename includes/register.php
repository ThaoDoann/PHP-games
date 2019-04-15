	<form action="https://www.w3schools.com/action_page.php">
			<table>
			<tr>
				<td> <input type="text" name="FirstName"   placeholder="First Name (required)"  size="30" pattern=".{2,}" required ></td>
				<td><input type="text" name="LastName"   placeholder="Last Name (required)"  size="30" pattern=".{2,}" required ></td>
			</tr>

			<tr>
				<td>
					Gender
					<input type="radio" name="gender" value="male"> Male
					<input type="radio" name="gender" value="female"> Female		
				</td>

			</tr>

			<tr>
				<td> <input type="text" name="FirstName"   placeholder="First Name (required)"  size="30" pattern=".{2,}" required ></td>
				<td><input type="text" name="LastName"   placeholder="Last Name (required)"  size="30" pattern=".{2,}" required ></td>
			</tr>

			<tr>
				<td colspan="2"><input type="text" name="Address"   placeholder="Enter your address"  size="65.8" pattern=".{2,}" required ></td>
			</table>
		
			<fieldset > 
				 <legend>Choose a username and a password</legend>
				<table>
				<tr>
					<td colspan="2"> <input type="text" name="userName"   placeholder="Enter your user name"  size="62.5" pattern=".{2,}" required ></td>
				</tr>
				<tr>
					<td>Choose password</td>
					<td><input type="text" name="password"  size="40" pattern=".{2,}" required ></td>
				</tr>
				<tr>
					<td>Confirm password:</td>
					<td><input type="text" name="confirmPassword"  size="40" pattern=".{2,}" required ></td>
				</tr>
				
				</table>
				
				</form>
			</fieldset>
		<form>
		<input style="margin-left: 3%;" type="submit">