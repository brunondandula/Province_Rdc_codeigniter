<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une Province</title>
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
            width: 40%;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
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
            width: 55%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
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
    </style>
</head>

<body>

    <div class="container">
        <div class="form-container">
            <h2>Créer une Province</h2>
            <form id="provinceForm" method="post" action="">
                <input type="hidden" name="id" id="provinceId"> <!-- Champ caché pour l'ID -->
                <div class="form-group">
                    <label for="nom_province">Nom de la Province:</label>
                    <input type="text" name="nom_province" id="nom_province" required>
                </div>
                <button type="submit" class="btn">Enregistrer</button>
            </form>
        </div>

        <div class="table-container">
            <h2>Liste des Provinces</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom de la Province</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <?php foreach ($provinces as $province): ?>
                    <tr id="province-<?= $province['id'] ?>">
                        <td><?= $province['id'] ?></td>
                        <td><?= $province['nom_province'] ?></td>
                        <td>
                            <button class="btn btn-warning btn-sm" onclick="editProvince(<?= $province['id'] ?>, '<?= $province['nom_province'] ?>')">
                                Éditer
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deleteProvince(<?= $province['id'] ?>)">
                                Supprimer
                            </button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function editProvince(id, nom) {
            document.getElementById('nom_province').value = nom; // Remplit l'input avec le nom de la province
            document.getElementById('provinceId').value = id; // Met à jour le champ caché avec l'ID
            document.getElementById('provinceForm').action = '/provinces/update/' + id; // Change l'action du formulaire pour la mise à jour
        }

        $(document).ready(function() {
            $('#provinceForm').submit(function(event) {
                event.preventDefault(); // Empêche l'envoi normal du formulaire
                let actionUrl = $(this).attr('action'); // Récupère l'URL d'action du formulaire
                let id = $('#provinceId').val(); // Récupère l'ID de la province

                // Si l'ID est vide, définissez l'URL d'action pour la création
                if (!id) {
                    actionUrl = '/provinces/store'; // URL pour créer une nouvelle province
                }

                $.ajax({
                    url: actionUrl, // URL d'action pour la mise à jour ou la création
                    type: 'POST',
                    data: $(this).serialize(), // Sérialise les données du formulaire
                    success: function(response) {
                        if (response.success) {
                            Swal.fire({
                                title: 'Succès!',
                                text: response.message,
                                icon: 'success',
                                timer: 2000,
                                showConfirmButton: false
                            }).then(() => {
                                // Rafraîchir la page après 1 seconde
                                setTimeout(() => {
                                    location.reload();
                                }, 1000);
                            });

                            if (id) {
                                // Mise à jour de la province existante
                                $(`#province-${id} td:nth-child(2)`).text($('#nom_province').val()); // Met à jour le nom dans le tableau
                            } else {
                                // Ajout d'une nouvelle province
                                $('#tableBody').append(`
                                    <tr id="province-${response.id}">
                                        <td>${response.id}</td>
                                        <td>${$('#nom_province').val()}</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm" onclick="editProvince(${response.id}, '${$('#nom_province').val()}')">Éditer</button>
                                            <button class="btn btn-danger btn-sm" onclick="deleteProvince(${response.id})">Supprimer</button>
                                        </td>
                                    </tr>
                                `);
                            }

                            $('#provinceForm')[0].reset(); // Réinitialise le formulaire
                        } else {
                            Swal.fire({
                                title: 'Erreur!',
                                text: response.message,
                                icon: 'error'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Erreur!',
                            text: 'Erreur lors de l\'enregistrement : ' + error,
                            icon: 'error'
                        });
                    }
                });
            });
        });

        function deleteProvince(id) {
            Swal.fire({
                title: 'Êtes-vous sûr?',
                text: 'Vous ne pourrez pas revenir en arrière!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Oui, supprimer!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/provinces/delete/' + id,
                        type: 'DELETE',
                        success: function(response) {
                            if (response.success) {
                                $('#province-' + id).remove(); // Supprime la ligne de la province
                                Swal.fire('Supprimé!', response.message, 'success');
                            } else {
                                Swal.fire('Erreur!', response.message, 'error');
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire('Erreur!', 'Erreur lors de la suppression : ' + error, 'error');
                        }
                    });
                }
            });
        }
    </script>

</body>

</html>