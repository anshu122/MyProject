// Now if user adds a note ,store it in localstorage.
displayNotes();
document.getElementById('addBtn').addEventListener('click', fun1);
function fun1() {
    let addTxt = document.getElementById('addTxt');
    let addTitle = document.getElementById("addTitle");
    let notes = localStorage.getItem('notes');
    if (notes == null) {
        notesObj = [];
    }
    else {
        notesObj = JSON.parse(notes);
    }
    let myObj = {
        title: addTitle.value,
        text: addTxt.value
      }
    notesObj.push(myObj);
    localStorage.setItem('notes', JSON.stringify(notesObj));
    addTxt.value = "";
    addTitle.value='';
    displayNotes();
}

function displayNotes() {
    let notes = localStorage.getItem('notes');
    if (notes == null) {
        notesObj = [];
    }
    else {
        notesObj = JSON.parse(notes);
    }
    let html = '';
    notesObj.forEach(function (element, index) {
        html = html + ` <div class="notecard my-2 mx-2 card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Note ${index+1}: ${element.title}</h5>
            <p class="card-text">${element.text}</p>
            <button id="${index}" onclick="deleteNoteFun(this.id)" class="btn btn-primary">Delete Note</button>
        </div>
    </div>`;
    });

    let notesCard=document.getElementById('notes');
    if(notesObj.length!=0)
    {
        notesCard.innerHTML=html;
    }
    else{
        notesCard.innerHTML=`You have not added any note till now.Use 'Add a note' section above to add note.`;

    }
}

function deleteNoteFun(index)
{
    let notes = localStorage.getItem('notes');
    if (notes == null) {
        notesObj = [];
    }
    else {
        notesObj = JSON.parse(notes);
    }
    notesObj.splice(index,1);
    localStorage.setItem("notes",JSON.stringify(notesObj));
    displayNotes();
}

//for search function
let search=document.getElementById('searchTxt');
search.addEventListener('input',searchFun);
function searchFun()
{
    let inputval=search.value.toLowerCase();
    let noteCards=document.getElementsByClassName('notecard');
    Array.from(noteCards).forEach(function(element)
    {
        let cardTxt=element.getElementsByTagName('p')[0].innerText;
        if(cardTxt.includes(inputval))
        {
            element.style.display='block';
        }
        else{
            element.style.display='none';
        }
    });
}
