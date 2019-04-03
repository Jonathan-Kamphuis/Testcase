                                function Reload()
                                {
                                    //reloading page
                                    window.setTimeout(function(){
                                    // Move to a new location or you can do something else
                                    window.location.href = "/";
                                    }, 500);
                                };
                                function ReloadSet()
                                {
                                    //reloading page
                                    window.setTimeout(function(){
                                    // Move to a new location or you can do something else
                                    window.location.href = "/settings";
                                    }, 50);
                                };
                                function ReloadNewProject(URL)
                                {
                                    //reloading page
                                    window.setTimeout(function(){
                                    // Move to a new location or you can do something else
                                    window.location.href = URL;
                                    }, 500);
                                };

                                
const getCellValue = (tr, idx) => tr.children[idx].innerText || tr.children[idx].textContent;

const comparer = (idx, asc) => (a, b) => ((v1, v2) => 
    v1 !== '' && v2 !== '' && !isNaN(v1) && !isNaN(v2) ? v1 - v2 : v1.toString().localeCompare(v2)
    )(getCellValue(asc ? a : b, idx), getCellValue(asc ? b : a, idx));

// do the work...
document.querySelectorAll('th').forEach(th => th.addEventListener('click', (() => {
    const table = th.closest('table');
    Array.from(table.querySelectorAll('tr:nth-child(n+2)'))
        .sort(comparer(Array.from(th.parentNode.children).indexOf(th), this.asc = !this.asc))
        .forEach(tr => table.appendChild(tr) );
})));