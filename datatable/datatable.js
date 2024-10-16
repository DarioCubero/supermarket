// Parámetros de la tabla
const rowsPerPage = 6;
let currentPage = 1;
const tableBody = document.getElementById('tableBody');
const paginationControls = document.getElementById('paginationControls');
const rows = Array.from(tableBody.getElementsByTagName('tr'));

// Función para mostrar una página específica
function displayPage(page) {
    const start = (page - 1) * rowsPerPage;
    const end = start + rowsPerPage;

    rows.forEach((row, index) => {
        row.style.display = (index >= start && index < end) ? '' : 'none';
    });

    // Actualiza la paginación
    updatePagination(page);
}

// Función para actualizar los botones de paginación
function updatePagination(page) {
    paginationControls.innerHTML = '';
    const totalPages = Math.ceil(rows.length / rowsPerPage);

    for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement('button');
        btn.innerText = i;
        btn.classList.toggle('active', i === page);
        btn.addEventListener('click', () => {
            currentPage = i;
            displayPage(i);
            console.log(i);
            
        });
        paginationControls.appendChild(btn);
    }
}

// Función de filtrado
function filterTable() {
    const filterValue = document.getElementById('filterInput').value.toLowerCase();
    // if (!filterValue) {
    //     displayPage(1);
    // }

    rows.forEach(row => {
        const cells = row.getElementsByTagName('td');
        const name = cells[1].innerText.toLowerCase();
        row.style.display = name.includes(filterValue) ? '' : 'none';
    });

}

// Inicia mostrando la primera página
displayPage(currentPage);