<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <title>Document</title>

</head>

<body>

    <h4 class="text-center">Devis</h4>
  
    <form class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <div class="mb-3">
            <label for="Date" class="form-label">Date:</label>
            <input type="text" class="form-control" name="Date" id="Date">
          </div>
          <div class="mb-3">
            <label for="Ref_devis" class="form-label">Ref.Devis:</label>
            <input type="text" class="form-control" name="Ref_devis" id="Ref_devis">
          </div>
          <div class="mb-3">
            <label for="type_fournisseur" class="form-label">Type Fournisseur:</label>
            <select class="form-select" name="type_fournisseur" id="type_fournisseur">
              <option value="">----</option>
              <option value="">Option 1</option>
              <option value="">Option 2</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="fournisseur" class="form-label">Fournisseur:</label>
            <select class="form-select" name="fournisseur" id="fournisseur">
              <option value="">Fournisseur 1</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mb-3">
            <label for="destinataire" class="form-label">Destinataire:</label>
            <select class="form-select" name="destinataire" id="destinataire">
              <option value="">Dupont</option>
            </select>
            <button class="btn btn-secondary ms-2">Nouveau</button>
          </div>
          <div class="mb-3">
            <button class="btn btn-primary me-2">Imprimer</button>
            <button class="btn btn-primary">Valider avant impression</button>
          </div>
        </div>
      </div>
    </form>
  
  
    <!-- Bootstrap 5 JavaScript (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  
  </body>
  