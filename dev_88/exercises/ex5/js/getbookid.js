// מהתרגול שעשינו עם קרן
function showData(data) {
	document.querySelector("h1").innerHTML = `${data.bookList}`;
	const ulFrag = document.createDocumentFragment();	
	for (const key in data.bookList){
		const li = document.createElement('li');
		sHtml = `<a href='bookweek.php?bookId=${data.bookList[key].id}'>${data.bookList[key].name}</a>`;
		li.innerHTML = sHtml;
		ulFrag.appendChild(li);
	} 	
	document.getElementById("dataServices").appendChild(ulFrag);
}
	
	fetch("data/category.json")
		.then(response => response.json())
		.then(data => showData(data));
	