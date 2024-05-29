function submitForm() {
	var form = document.getElementById("form");
	var formData = new FormData();
	for (var count = 0; count < form.length; count++) {
		if (form[count].name == "") {
			continue;
		}
		if (form[count].name == "image") {
			formData.append("image", form[count].files[0]);
		}
		formData.append(form[count].name, form[count].value);
	}
	var check = true;
	//check if any field is empty or has class list contains is-invalid
	for (var i = 0; i < document.forms["my-form"].length; i++) {
		if (document.forms["my-form"][i].name == "") {
			continue;
		}
		if ((document.forms["my-form"][i].value == "") || document.forms["my-form"][i].classList.contains("is-invalid")) {
			check = false;
			break;
		}
	}
	if (check == false) {
		// add class is-invalid is empty
		for (var i = 0; i < document.forms["my-form"].length; i++) {
			if (document.forms["my-form"][i].value == "") {
				document.forms["my-form"][i].classList.add("is-invalid");
			}
		}
		document.getElementById("alert").classList.remove("d-none");
		document.getElementById("alert").innerHTML ='Please fill all fields';
		setTimeout(function () {
			document.getElementById("alert").classList.add("d-none");
		}, 5000);
		return;
	}
	document.getElementById("submitBtn").disabled = true;
	fetch("/adduser", {method: "POST",body: formData,}) 
	.then((response) => response.json())
	.then((data) => {
		document.getElementById("submitBtn").disabled = false;
		if (data.message =="User created successfully") {
			document.getElementById("alert").classList.remove("d-none");
				document.getElementById("alert").classList.remove("alert-danger");
				document.getElementById("alert").classList.add("alert-success");
				document.getElementById("alert").innerHTML = 'User created successfully';
				form.reset();
				for (var i = 0; i < document.forms["my-form"].length; i++) {
					document.forms["my-form"][i].classList.remove("is-valid");
				}
				setTimeout(function () {
					document.getElementById("alert").classList.add("d-none");
					document.getElementById("alert").classList.remove("alert-success");
					document.getElementById("alert").classList.add("alert-danger");
				}, 5000);
		}
		else if (data.message == "Username already exists") {
			document.getElementById("alert").classList.remove("d-none");
				document.getElementById("alert").classList.remove("alert-danger");
				document.getElementById("alert").classList.add("alert-warning");
				document.getElementById("alert").innerHTML = "Username already exists";
				setTimeout(function () {
					document.getElementById("alert").classList.add("d-none");
					document.getElementById("alert").classList.remove("alert-warning");
					document.getElementById("alert").classList.add("alert-danger");
				}, 5000);
		}
		else if (data.message == "Invalid file format") {
			document.getElementById("alert").classList.remove("d-none");
			document.getElementById("alert").innerHTML = "Invalid file format";
			setTimeout(function () {
				document.getElementById("alert").classList.add("d-none");
			}, 5000);
		}
		else if (data.message == "User creation failed"){
			document.getElementById("alert").classList.remove("d-none");
			document.getElementById("alert").innerHTML = "User creation failed";
			setTimeout(function () {
				document.getElementById("alert").classList.add("d-none");
			}, 5000);
		}
	})
	.catch((error) => {
		console.error("Error:", error.message);
		document.getElementById("submitBtn").disabled = false;
	});
}
