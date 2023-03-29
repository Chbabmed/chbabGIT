<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@1,900,700,500,301,701,300,501,401,901,400,2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://kit.fontawesome.com/3ad2a3ad85.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- ======= ReactJs ======= -->
    <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script> 
    <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>
    <title>dashboard</title>
</head>
<body>
    
    <!-- ===================sidebar====================== -->
    <nav class="sidebar">
        <center>

            <h1 id="logo">G</h1>
          
        </center>
        

        <ul>
            <li>
                <a href="/Dashboard">
                    <span class="icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/users_management">
                    <span class="icon">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    <span class="title">Utilisateurs</span>
                </a>
            </li>
            <li>
                <a href="/GestionDesVehicule">
                    <span class="icon">
                        <i class="fa-solid fa-car"></i>
                    </span>
                    <span class="title">Véhicules</span>
                </a>
            </li>
            <li>
                <a href="/vidange">
                    <span class="icon">
                        <i class="fa-solid fa-oil-can"></i>
                    </span>
                    <span class="title">Vidange</span>
                </a>
            </li>
            <li>
                <a href="/reparations">
                    <span class="icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </span>
                    <span class="title">Les réparations</span>
                </a>
            </li>
            <li>
                <a href="/missions">
                    <span class="icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </span>
                    <span class="title">Les missions</span>
                </a>
            </li>
            <li>
                <a href="/affectations">
                    <span class="icon">
                        <i class="fa-solid fa-user-tag"></i>
                    </span>
                    <span class="title">Les affectations</span>
                </a>
            </li>
            
        </ul>
    </nav>
    
    <section id="content">

        <!-- ===================topbar================= -->
        <nav>
            <i class="fa-solid fa-bars"></i>
            <span id="title">Utilisateurs</span>

            <div class="d-flex grid gap-3 ">
                <a href="#" class="notification" onmouseover="menuToggle()";">
                    <i class="fa-regular fa-bell" ></i>
                    <span class="num">1</span>
                </a>

                <!-- *************** drop menu *************** -->
                
                <div class="menu "  onmouseleave="dropToggle();">
                    
                    <ul id="list " >
                        <li><a href="#">Action of admin 1</a></li>
                        <li><a href="#">Action of admin 1</a></li>
                        <li><a href="#">Action of admin 1</a></li>
                        <li><a href="#">Action of admin 1</a></li>
                        <li><a href="#">Action of admin 1</a></li>
                    </ul>

                </div>

                <a href="#" class="">
                    <i class="fa-regular fa-circle-user p-2 g-col-6" id="profil" onmouseover="ProfilToggle()";></i>
                </a>
    
                <!-- *************** drop menu *************** -->
                
                <div class="ProfileMenu"  onmouseleave="dropProfileToggle();">
                    
                    <ul id="list " >
                        <li><a href="#">profil</a></li>
                        <li><a href="#">confidentialité</a></li>
                        <li><a href="#">security</a></li>
                    </ul>

                </div>

                <a href="#">
                    <i class="fa-solid fa-arrow-right-from-bracket p-2 g-col-6 " id="logout"></i>
                </a>
            </div>
        </nav>


        <!-- =========================== Button admin && Users listes  ====================================== -->

        <div class="container align-self-center" id="all_Btn">
            <div class="row g-3">

                <div class="col " >
                    <div class="p-3">
                        <div class="col">
                            
                            <div class="btn-group btn-group-custom shadow-sm p-3 mb-5 bg-body-tertiary rounded" role="group" aria-label="Button group with rounded corners">
                                <button type="button" class="btn btn-primary " onclick="UserList(); active(); " >Utilisateurs</button>
                                <button type="button" class="btn btn-primary" onclick="AdminList(); active(); ">Admins</button>
                            </div>

                        </div>
                    </div>
                </div>

                
                <div class="col text-end me-5 "  >
                    <p class="text-muted mt-2 " style="font-size: .8rem ;">Nombre des Utilisateurs : <span style="font-weight: 500;">500</span></p>
                </div>

            </div>
        </div>

        <!-- =========================== ajout && export User  ====================================== -->
        <div class="container"  id="UserList"  style="display: none;">

            <div class="container text-center">
                <div class="row align-items-center">
                  <div class="col">
                    
                  </div>
                  <div class="col">
                        <div class="container-fluid">
                          <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success " id="searchBtn" type="submit">Search</button>
                          </form>
                        </div>
                  </div>
                  <div class="col">
                    <div class="container mt-2 mb-3">
                        <div class="row">
                            <div class="col text-end " style="margin-right: 3rem;">
                                <button type="button" class="btn btn-primary "  data-bs-toggle="modal" data-bs-target="#UsersModal" id="ajout">Ajouter</button>
                                <button type="button" class="btn btn-primary" id="export">Exporter</button>
                            </div>
                        </div>
                    </div>
                      
                  </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade mt-5" id="UsersModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header ">
                            <h1 class="modal-title fs-5 " id="exampleModalLabel">Ajouter un utilisateur</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body container-fluid">
                            
                            <form>

                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                  <label for="inputPassword3" class="col-sm-2 col-form-label">Prenom</label>
                                  <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3">
                                </div>

                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">CNE</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Poste</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary" >Enregister</button>
                                </div>

                            </form>

                        </div>


                    </div>
                </div>
            </div>


            <!-- ===================== tableau ======================= -->
            <div class="container overflow-hidden text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom d'utilisateur</th>
                                    <th scope="col">Numéro de téléphone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">CNE</th>
                                    <th scope="col">Opération</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider ">
                                    <tr class="" >
                                        <td id="ID" class="">1</td>
                                        <td >Med</td>
                                        <td >Med</td>
                                        <td >Med</td>
                                        <td >JE322332</td>
                                        <td class="text-center">
                                                <a href="#"><i class="fa-solid fa-user-pen me-4" style="color: #384454;" title="modification"></i></a>
                                                <a href="#"><i class="fa-solid fa-user-xmark" style="color: #384454;" title="suppression"></i></a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>




        </div>


        <!-- =========================== ajout && export Admin ====================================== -->
        <div class="container"  id="AdminList"  >
            
            <div class="container text-center">
                <div class="row align-items-center">
                  <div class="col">
                    
                  </div>
                  <div class="col">
                        <div class="container-fluid">
                          <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success " id="searchBtn" type="submit">Search</button>
                          </form>
                        </div>
                  </div>
                  <div class="col">
                    <div class="container mt-2 mb-3">
                        <div class="row">
                            <div class="col text-end " style="margin-right: 3rem;">
                                <button type="button" class="btn btn-primary "  data-bs-toggle="modal" data-bs-target="#AdminModal" id="ajout">Ajouter</button>
                                <button type="button" class="btn btn-primary" id="export">Exporter</button>
                            </div>
                        </div>
                    </div>
                      
                  </div>
                </div>
            </div>

            
            <!-- Modal -->
            <div class="modal fade mt-3" id="AdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                            <div class="modal-header ">
                                <h1 class="modal-title fs-5 " id="exampleModalLabel">Ajouter un Administrateur</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body container-fluid">
                                
                                <form>

                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Prenom</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="inputPassword3">
                                    </div>

                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">CNE</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Poste</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputPassword3">
                                        </div>
                                    </div>


                                    <fieldset class="row mb-3">

                                        <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Super Admin
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Sous-Admin
                                                </label>
                                            </div>

                                        </div>
                                    </fieldset>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-primary">Enregister</button>
                                    </div>


                                </form>

                            </div>





                    </div>
                </div>
            </div>


            <!-- ===================== tableau ======================= -->
            <div class="container overflow-hidden text-center">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom de l'admin</th>
                                    <th scope="col">Numéro de téléphone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">CNE</th>
                                    <th scope="col">Opération</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider ">
                                    <tr  >

                                        <td id="ID" class="">1</td>
                                        <td >Med</td>
                                        <td >Med</td>
                                        <td >Med</td>
                                        <td >JE322332</td>
                                        <td class="text-center">
                                            <a href="#"><i class="fa-solid fa-user-pen me-4" style="color: #384454;" title="modification"></i></a>
                                            <a href="#"><i class="fa-solid fa-user-xmark" style="color: #384454;" title="suppression"></i></a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>




        </div>



        
          

    </section>
<script src="js/script.js"></script>
<script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
