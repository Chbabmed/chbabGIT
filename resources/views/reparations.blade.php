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
    <link rel="stylesheet" href="css/Allstyle.css">
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
            <span id="title">Les réparations</span>

            <div class="d-flex grid gap-3 ">
                <a href="#" class="notification" onmouseover="menuToggle()";">
                    <i class="fa-regular fa-bell" ></i>
                    <span class="num">1</span>
                </a>

                <!-- *************** drop menu *************** -->
                
                <div class="menu rounded-bottom-1"  onmouseleave="dropToggle();">

                    <div class="menuheader">
                        <h2>notifications</h2>
                    </div>

                    <div class="container  p-2 " style="width: 15rem;">
                        <div class="row align-items-start">
                            <div class="col">
                                <a href="#" class="list-group-item list-group-item-action active">
                                    <div class="d-flex text-center w-100 ">
                                      <h6 class="mb-1">List group item heading</h6>
    
                                    </div>
                                    <div class="time text-end ">
                                        <small class="text-muted" style="font-size: 0.8rem ;">3 days ago</small>
                                    </div>
                                    <hr class="mt-1">
                                  </a>
                            </div>
                        </div>
                        <div class="row align-items-start">
                            <div class="col">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex text-center w-100 ">
                                      <h6 class="mb-1">List group item heading</h6>
    
                                    </div>
                                    <div class="time text-end ">
                                        <small class="text-muted" style="font-size: 0.8rem ;">3 days ago</small>
                                    </div>
                                    <hr class="mt-1">
                                  </a>
                            </div>
                        </div>
                    </div>


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

        <!-- ========================ReparationContent======================== -->

        <div class="reparation">

            <div class="container text-center mt-5">
                <div class="row">
                    <div class="col">
                        
                    </div>
                    <div class="col">
                    </div>
                    <div class="col">
                        <div class="col text-end " style="margin-right: 3rem;">
                            <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#AjouterRep" id="ajout">Ajouter</button>
                            <button type="button" class="btn btn-primary" id="export"><a href="#" >Exporter</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ====================tableau==================== -->

            <div class="container overflow-hidden text-center mt-4">
                <div class="row gx-5">
                    <div class="col">
                        <div class="p-3">

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Immatriculation</th>
                                    <th scope="col">Date de reparation</th>
                                    <th scope="col">Affectation</th>
                                    <th scope="col">Designation</th>
                                    <th scope="col">Quanité</th>
                                    <th scope="col">Prix unitaire(DH)</th>
                                    <th scope="col">Total HT(DH)</th>
                                    <th scope="col">Total TTC(DH)</th>
                                    <th scope="col">Opérations</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider ">
                                    <tr  >

                                        <td id="ID" class="">1</td>
                                        <td >23A2345</td>
                                        <td >10/02/2023</td>
                                        <td >BRAHIM</td>
                                        <td >reparation de chassé</td>
                                        <td >10</td>
                                        <td >15</td>
                                        <td >10</td>
                                        <td >150</td>
                                        <td class="text-center">
                                            <a href="#Editrep" data-bs-toggle="modal" data-bs-target="#EditRep">

                                                <i class="fa-solid fa-pen-to-square me-4"  style="color: #384454; font-size: 1.2rem; cursor: pointer;" title="afficher & modifier"></i>
                                            </a>
                                            <a href="#"><i class="fa-solid fa-trash-can" style="color: #384454; cursor: pointer;" title="Suppression"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


            <!-- ====================Ajouter Modal==================== -->

            <div class="modal fade" id="AjouterRep" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-lg mt-5" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="user-select: none;">Ajouter une Réparation</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="" id="ajout_rep">
                                
                                <div class="row g-2 mb-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid" name="Immatriculation_vidange" required>
                                            <label for="floatingInputGrid">Immatriculation</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="floatingInputGrid" name="date_vidange" required>
                                            <label for="floatingInputGrid">Date de reparation</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid" name="Affectation" required>
                                            <label for="floatingInputGrid">Affectation</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row g-3 mb-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid" name="Kilometrage" required>
                                            <label for="floatingInputGrid">designation</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="type_huile" required>
                                            <label for="floatingInputGrid">Quantité</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="quantite_huile" required>
                                            <label for="floatingInputGrid">Prix unitaire(DH)</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row g-3 mb-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="litre_prix" required>
                                            <label for="floatingInputGrid">Total HT(DH)</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="prixTC" required>
                                            <label for="floatingInputGrid">Prix TC(DH)</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="prixTTC" required>
                                            <label for="floatingInputGrid">Prix TTC(DH)</label>
                                        </div>
                                    </div>

                                </div>
                                

                                <div class="modal-footer mt-4">
                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" id="closeBtn">Fermer</button>
                                    <button type="submit" class="btn btn-primary" id="saveBtn">Enregistrer</button>
                                </div>

                            </form>
                            


                        </div>
                    </div>
                </div>
            </div>

            <!-- ====================Edit Modal==================== -->

            <div class="modal fade" id="EditRep" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-lg mt-5" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" style="user-select: none;">Afficher & Modifier une Réparation</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <form action="" id="ajout_vidange">
                                
                                <div class="row g-2 mb-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid" name="Immatriculation_vidange" required>
                                            <label for="floatingInputGrid">Immatriculation</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="floatingInputGrid" name="date_vidange" required>
                                            <label for="floatingInputGrid">Date de reparation</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid" name="Affectation" required>
                                            <label for="floatingInputGrid">Affectation</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row g-3 mb-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid" name="Kilometrage" required>
                                            <label for="floatingInputGrid">designation</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="type_huile" required>
                                            <label for="floatingInputGrid">Quantité</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="quantite_huile" required>
                                            <label for="floatingInputGrid">Prix unitaire(DH)</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row g-3 mb-3">

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="litre_prix" required>
                                            <label for="floatingInputGrid">Total HT(DH)</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="prixTC" required>
                                            <label for="floatingInputGrid">Prix TC(DH)</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingInputGrid" name="prixTTC" required>
                                            <label for="floatingInputGrid">Prix TTC(DH)</label>
                                        </div>
                                    </div>

                                </div>
                                

                                <div class="modal-footer mt-4">
                                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal" id="closeBtn">Fermer</button>
                                    <button type="submit" class="btn btn-primary" id="saveBtn">Enregistrer</button>
                                </div>

                            </form>
                            


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
