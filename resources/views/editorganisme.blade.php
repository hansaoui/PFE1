<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />

    <title>Add-Organisme</title>
</head>
<body > 

   
        <!-- /#sidebar-wrapper -->

    
            <!-- Page Content -->
            <div class="container-fluid"><a class="btn btn-link link-primary mb-3" role="button" href="{{ url('/') }}"><i class="fas fa-arrow-left"></i>&nbsp;Back</a>
                <div class="d-sm-flex justify-content-between align-items-center mb-4">
                </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user me-2"></i>John Doe
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">backfile</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="#">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>   
    




        <form action="{{ route('organisme.update' , $organismes->id) }}"   method="post" style="margin:10px;">
            @csrf
            @method('PUT')   
            <div class="card shadow mb-3 bg-dark text-light">
                <div class="card-header py-3">
                    <p class="text-secondary m-0 fw-bold">Fill in the required fields *</p>
                </div>
                
                <div class="card-body ">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                         

                            <div class="mb-3"><label class="form-label"><b>Nom Organisme </b></label><input class="form-control" type="text"  name="Nom" required=""   value="{{ $organismes->Nom }}" ></div>
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="mb-3"><label class="form-label" for="service_price"><b>Numero de Telephone</b><br></label><input class="form-control" type="text"  placeholder="$0000" name="Numero_de_telephone"   value="{{ $organismes->Numero_de_telephone }}" required=""></div>
                        </div>
                    </div>
                    <div class="mb-3"><label class="form-label" ><b>Adresse </b><br></label><textarea class="form-control"  rows="4" name="Adresse" placeholder="Entrez l'Adresse" required=""  value="{{ $organismes->Adresse }}"></textarea></div>
                    <div class="mb-3"><label class="form-label" ><b>Nom de Contact </b></label><input class="form-control" type="text"  placeholder="Entrez le nom de contact" name="Le_nom_de_contact" required=""  value="{{ $organismes->Le_nom_de_contact }}"></div>
                    <div class="mb-3"><label class="form-label"  ><b>Email de Contact </b></label><input class="form-control" type="text"  placeholder="Entrez l'email de contact" name="Email_de_contact" required=""  value="{{ $organismes->Email_de_contact }}"></div>
                    <div class="mb-3"><label class="form-label"  ><b>Adresse Web</b></label><input class="form-control" type="text"  placeholder="Entrez l'adresse web" name="Adresse_web" required=""  value="{{ $organismes->Adresse_web }}"></div>

               
            <div class="text-end mb-3"><button class="btn btn-primary btn-lg" type="submit">Save&nbsp;service</button><a class="btn btn-danger btn-lg" role="button" href="{{ url('/') }}">Cancel</a></div>
        </form>


      
             


                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
                <script src="assets/js/Ludens---Create-Edit-Form-Ludens---1-Index-Table-with-Search--Sort-Filters-v20-1.js"></script>
                <script src="assets/js/Ludens---Create-Edit-Form-Ludens---1-Index-Table-with-Search--Sort-Filters-v20.js"></script>
                <script src="assets/js/Ludens---Create-Edit-Form-Ludens---Sleek-Image-Input-with-Preview.js"></script>
                <script src="assets/js/Ludens---Create-Edit-Form-theme.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            var el = document.getElementById("wrapper");
            var toggleButton = document.getElementById("menu-toggle");
    
            toggleButton.onclick = function () {
                el.classList.toggle("toggled");
            };
        </script>

    </body>
</html>