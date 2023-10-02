
let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.add('active');
}

document.querySelector('#close-search').onclick = () =>{
    searchForm.classList.remove('active');
}


let one=document.getElementById('close-search');
one.addEventListener('click',function(){
    refreshPage();
});

function refreshPage() {
    location.reload();
}

// Call the function to refresh the page (you can trigger this function as needed)
