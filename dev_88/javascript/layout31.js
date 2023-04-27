function cards_black (numOfPix, letter) {
    const card = document.createElement("div");
    card.style.width = numOfPix + "px";
    card.style.height = numOfPix + "px";
    card.className = "card";
    const h2 = document.createElement("h2");
    h2.innerText = letter;
    card.append(h2);
    h2.style.display = "none";
    h2.className = "color";
    card.addEventListener("click", ()=> {
        if (h2.style.display == "block" && h2.style.color == "black") {
            h2.style.display = "none"; 
        }
        else {
            let header = document.getElementsByClassName("color");
            for (let i = 0; i < header.length; i++) {
                if (header[i].style.display == "block") {
                    if (header[i].textContent == letter) {
                        header[i].style.color = "green";
                        h2.style.color = "green";
                        h2.classList.remove("color");
                        header[i].classList.remove("color");
                    }
                    else {
                        header[i].style.display = "none";
                        h2.style.display = "none";
                    }
                }
                }
            h2.style.display = "block";
        }
    })
    let div = document.getElementById("cards_black");
    div.append(card);
}
let iterator = 0;
window.addEventListener("load", ()=>{
    let arrayOfLetters = ['A', 'A', 'N', 'N', 'B', 'B', 'D', 'D', 'E', 'E']
    let size = 80;
    let numOfLetter = 0;
    for (let i = 0; i < numOfLetter; i++) {
    cards_black(size, arrayOfLetters[i]) 
    size += 20;
}
    let square_black = document.getElementById ("desktop-square-black");
    square_black.addEventListener("click", ()=> {         
        for (let i = 0; i < 3 && iterator < 10; i++) {
            cards_black(size, arrayOfLetters[numOfLetter]) 
            size += 20;
            numOfLetter += 1;
            iterator += 1;
        }

    })
});
