// מהתרגול שעשינו עם קרן
function showData(data) {
	document.querySelector("h1").innerHTML = `${data.category}`;
	const ulFrag = document.createDocumentFragment();	
	for (const key in data.category){
		const li = document.createElement('li');
		sHtml = `<a href='bookweek.php?bookId=${data.category[key].id}'>${data.category[key].name}</a>`;
		li.innerHTML = sHtml;
		ulFrag.appendChild(li);
	} 	
	document.getElementById("dropdown-menu").appendChild(ulFrag);
}
	
	fetch("data/category.json")
		.then(response => response.json())
		.then(data => showData(data));
	