form.onsubmit = async (e) => {
	e.preventDefault();

	let response = await fetch('/article/formdata/post/user', {
		method: 'POST',
		body: new FormData(form)
	});

	let result = await response.json();

	console.log(result.message);
};