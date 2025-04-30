<!DOCTYPE html>
<html lang="fr">

<head>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($ville) ? 'Éditer une Ville' : 'Ajouter une Ville' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 25%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .table-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 70%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 0.9em;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #fff;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
        .filter-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        #searchInput {
            width: 300px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .pagination-controls {
            display: flex;
            gap: 10px;
        }

        .items-per-page {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        #itemsPerPage {
            padding: 5px;
            border-radius: 4px;
        }
    </style>
</head>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h2><?= isset($ville) ? 'Éditer une Ville' : 'Créer une Ville' ?></h2>
            <form id="villeForm" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" id="villeId" value="<?= isset($ville) ? $ville['id'] : '' ?>">
                
                <div class="form-group">
                    <label for="nom_ville">Nom de la Ville:</label>
                    <input type="text" name="nom_ville" id="nom_ville" value="<?= isset($ville) ? $ville['nom_ville'] : '' ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="province_id">Province:</label>
                    <select name="province_id" id="province_id" required>
                        <option value="">Veuillez sélectionner une province</option>
                        <?php foreach ($provinces as $province): ?>
                            <option value="<?= $province['id'] ?>" <?= (isset($ville) && $ville['province_id'] == $province['id']) ? 'selected' : '' ?>>
                                <?= $province['nom_province'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="population">Langue:</label>
                    <input type="text" name="langue" id="langue" value="<?= isset($ville) ? $ville['langue'] : '' ?>" required>
                </div>
                 <div class="form-group">
                    <label for="population">Superficie:</label>
                    <input type="number" name="superficie" id="superficie" value="<?= isset($ville) ? $ville['superficie'] : '' ?>" required>
                </div>
                 <div class="form-group">
                    <label for="population">Population:</label>
                    <input type="number" name="population" id="population" value="<?= isset($ville) ? $ville['population'] : '' ?>" required>
                </div>

                <div class="form-group">
                    <label for="image">Image de la Ville:</label>
                    <input type="file" name="image" id="image" accept="image/*">
                    <?php if (isset($ville) && !empty($ville['image'])): ?>
                        <div>
                            <img src="<?= base_url($ville['image']) ?>" alt="Image de la ville" style="max-width: 100px; margin-top: 10px;">
                        </div>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn"><?= isset($ville) ? 'Mettre à jour' : 'Enregistrer' ?></button>
                <?php if (isset($ville)): ?>
                    <button type="button" class="btn" onclick="cancelEdit()">Annuler</button>
                <?php endif; ?>
            </form>
        </div>

        <div class="table-container">
            <div class="filter-container">
                <h2>Liste des Villes</h2>
                <input type="text" id="searchInput" placeholder="Rechercher  une ville,Province...">
            </div>
                    <table>
                        <thead>
                            <tr>
                                
                                <th>Nom de la Ville</th>
                                <th>Province</th>
                                <th>langue</th>
                                <th>Population</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <?php foreach ($villes as $ville): ?>
                            <tr id="ville-<?= $ville['id'] ?>">
                            
                                <td><?= $ville['nom_ville'] ?></td>
                                <td><?= $ville['nom_province'] ?? $ville['province_id'] ?></td>

                                <td><?= $ville['langue'] ?></td>
                                <td><?= number_format($ville['population'], 0, ',', ' ') ?></td>
                                <td>
                                    <button class="btn btn-warning btn-sm" onclick="editVille(<?= $ville['id'] ?>)">Éditer</button>
                                    <button class="btn btn-danger btn-sm" onclick="deleteVille(<?= $ville['id'] ?>)">Supprimer</button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <div class="pagination-container">
                <div class="pagination-controls">
                    <button class="btn" onclick="previousPage()">Précédent</button>
                    <span id="currentPage">Page 1</span>
                    <button class="btn" onclick="nextPage()">Suivant</button>
                </div>
                <div class="items-per-page">
                    <span>Afficher par:</span>
                    <select id="itemsPerPage" onchange="changeItemsPerPage(this.value)">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="25">25</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#villeForm').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                var villeId = $('#villeId').val();
                  if(villeId) {
        formData.append('_method', 'POST');
    }

                $.ajax({
                      url: villeId ? '/villes/update/' + villeId : '/villes/store',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.success) {
                        setTimeout(() => {
                            Swal.fire({
                                title: 'Succès!',
                                text: response.message,
                                icon: 'success'
                            }).then(() => {
                                location.reload(); // Recharger la page pour voir les changements
                            });
                        }, 1000);
                            
                            
                        } else {
                            let errorMsg = response.message;
                            if (response.errors) {
                                errorMsg = Object.values(response.errors).join('<br>');
                            }
                            Swal.fire('Erreur!', errorMsg, 'error');
                        }
                    },
                    error: function(xhr) {
                        let errorMsg = 'Erreur lors de l\'enregistrement';
                        try {
                            const response = JSON.parse(xhr.responseText);
                            if (response.message) {
                                errorMsg = response.message;
                            }
                        } catch (e) {
                            console.error(e);
                        }
                        Swal.fire('Erreur!', errorMsg, 'error');
                    }
                });
            });
        });

      function editVille(id) {
    $.get('/villes/' + id, function(response) {
        if (response.success && response.data) {
            const ville = response.data;
            // Vérifiez que province_id est bien récupéré
            console.log('Données reçues:', ville); 
            
            $('#villeId').val(ville.id);
            $('#nom_ville').val(ville.nom_ville);
            $('#population').val(ville.population);
            $('#province_id').val(ville.province_id);
            $('#langue').val(ville.langue);
            $('#superficie').val(ville.superficie);

            $('button[type="submit"]').text('Mettre à jour');
            
            if (!$('#cancelBtn').length) {
                $('button[type="submit"]').after(
                    '<button type="button" class="btn" id="cancelBtn" onclick="cancelEdit()">Annuler</button>'
                );
            }
        } else {
            Swal.fire('Erreur!', response.message || 'Données invalides', 'error');
        }
    }).fail(function(xhr) {
        console.error('Erreur AJAX:', xhr.responseText);
        Swal.fire('Erreur!', 'Impossible de charger les données de la ville', 'error');
    });
}

        function cancelEdit() {
            $('#villeForm')[0].reset();
            $('#villeId').val('');
            $('button[type="submit"]').text('Enregistrer');
            $('#cancelBtn').remove();
        }

        function deleteVille(id) {
            Swal.fire({
                title: 'Êtes-vous sûr?',
                text: 'Cette action est irréversible!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Oui, supprimer!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/villes/delete/' + id,
                        type: 'POST', // Certains serveurs n'acceptent pas DELETE
                        data: {_method: 'DELETE'},
                        success: function(response) {
                            if (response.success) {
                                Swal.fire('Supprimé!', response.message, 'success')
                                    .then(() => location.reload());
                            } else {
                                Swal.fire('Erreur!', response.message, 'error');
                            }
                        },
                        error: function(xhr) {
                            let errorMsg = 'Erreur lors de la suppression';
                            try {
                                const response = JSON.parse(xhr.responseText);
                                if (response.message) {
                                    errorMsg = response.message;
                                }
                            } catch (e) {
                                console.error(e);
                            }
                            Swal.fire('Erreur!', errorMsg, 'error');
                        }
                    });
                }
            });
        }



        let currentPage = 1;
        let itemsPerPage = 10;
        let filteredData = [];

        function filterTable() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#tableBody tr');
            filteredData = [];

            rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const rowText = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(' ');
                const isVisible = rowText.includes(searchTerm);
                row.style.display = isVisible ? '' : 'none';
                
                if (isVisible) filteredData.push(row);
            });

            currentPage = 1;
            updateTable();
        }

        function updateTable() {
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const paginatedData = filteredData.slice(start, end);

            filteredData.forEach(row => row.style.display = 'none');
            paginatedData.forEach(row => row.style.display = '');
            
            document.getElementById('currentPage').textContent = `Page ${currentPage}`;
            
            document.querySelector('button[onclick="previousPage()"]').disabled = currentPage === 1;
            document.querySelector('button[onclick="nextPage()"]').disabled = end >= filteredData.length;
        }

        function changeItemsPerPage(value) {
            itemsPerPage = parseInt(value);
            currentPage = 1;
            updateTable();
        }

        function previousPage() {
            if (currentPage > 1) {
                currentPage--;
                updateTable();
            }
        }

        function nextPage() {
            if ((currentPage * itemsPerPage) < filteredData.length) {
                currentPage++;
                updateTable();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            filteredData = Array.from(document.querySelectorAll('#tableBody tr'));
            document.getElementById('searchInput').addEventListener('input', filterTable);
            updateTable();
        });

    </script>
</body>
</html>